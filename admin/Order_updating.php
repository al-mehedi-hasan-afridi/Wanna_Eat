<?php include('partials/menu.php'); ?>
<div class="navbar">
<div class = "boxes">
    <h1>Update Order</h1>
    <br><br>

    <?php

     if(isset($_GET['id']))
     {
         $id = $_GET['id'];
         $query = " SELECT * FROM order_table WHERE id = $id";
         $result = mysqli_query($connection,$query);
         $count = mysqli_num_rows($result);
         if($count==1)
         {
            $num_of_rows=mysqli_fetch_assoc($result);

            $food = $num_of_rows['food'];
            $price = $num_of_rows['price'];
            $qty = $num_of_rows['qty'];
            $status = $num_of_rows['status'];
            $customer_name = $num_of_rows['customer_name'];
            $customer_contact = $num_of_rows['customer_contact'];
            $customer_address= $num_of_rows['customer_address'];
         }
     }
     else
     {
         header('location:'.SITEURL.'admin/manage-order.php');
     }
    ?>
    <form action="" method="POST">
        <table class = "table_update_order">
            <tr>
                <td>Food Name</td>
                <td><b><?php echo $food; ?></b></td>
            </tr>
            <tr>
                <td>Price</td>
                <td><b><?php echo $price; ?></b></td>
            </tr>
            <tr>
                <td>Quantity</td>
                <td>
                    <input type="number" name="qty" value="<?php echo $qty; ?>">
                </td>
            </tr>
            <tr>
                <td>Status</td>
                <td>
                    <select name = "status">
                    <option <?php if($status=="Ordered"){echo "selected";} ?> value = "Ordered">Ordered</option>
                    <option <?php if($status=="On Delivery"){echo "selected";} ?> value = "On Delivery">On Delivery</option>
                    <option <?php if($status=="Delivered"){echo "selected";} ?> value = "Delivered">Delivered</option>
                    <option <?php if($status=="Canceled"){echo "selected";} ?> value = "Cancelled">Cancelled</option>

                    </select>
                </td>
            </tr>
            <tr>
                <td>Customer Name:</td>
                <td>
                 <input type= "text" name="customer_name" value = "<?php  echo $customer_name; ?>">
                </td>
            </tr>
            <tr>
                    <td>Customer Contact: </td>
                    <td>
                        <input type="text" name="customer_contact" value="<?php  echo $customer_contact; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Customer Address: </td>
                    <td>
                        <textarea name="customer_address" cols="30" rows="5"><?php  echo $customer_address; ?></textarea>
                    </td>
                </tr>
            <tr>
                <td colspan ="2">
                    <input type = "hidden" name = "id" value = "<?php echo $id; ?>">
                    <input type = "hidden" name = "price" value = "<?php echo $price; ?>">

                    <input type = "submit" name= "submit" value = "Update Order" class = "button-secondary">
                </td>
            </tr>

        </table>
    </form>
    <?php

if(isset($_POST['submit'])){

    $id = $_POST['id'];
    $price = $_POST['price'];
    $qty = $_POST['qty'];
    $total = $price * $qty;
    $status = $_POST['status'];
    $customer_name = $_POST['customer_name'];
    $customer_contact = $_POST['customer_contact'];
     $customer_address = $_POST['customer_address'];

                
    $query2 = "UPDATE order_table SET 
                    qty = $qty,
                    total = $total,
                    status = '$status',
                    customer_name = '$customer_name',
                    customer_contact = '$customer_contact',
                    customer_address = '$customer_address'
                    WHERE id=$id
                ";
                $result2=mysqli_query($connection,$query2);
                if($result2==true)
                {
                     $_SESSION['update'] = "<div class = 'success-message' >Order Updated Successfully.</div>";
                     header('location:'.SITEURL.'admin/manage-order.php');
                }
                else{
                  
                    $_SESSION['update'] = "<div class = 'error-message' >Order Updated Failed.</div>";
                     header('location:'.SITEURL.'admin/manage-order.php');
                }
}
    ?>

</div>
</div>
<?php include('partials/footer.php'); ?>
