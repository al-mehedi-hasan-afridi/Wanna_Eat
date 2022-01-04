<?php include('Front-parts/Menu.php'); ?>

<?php
if(isset($_GET['food_id']))
{

  $food_id= $_GET['food_id'];
  $query = " SELECT * FROM food_table WHERE id = $food_id";
 $result= mysqli_query($connection,$query);
 $count = mysqli_num_rows($result);
if($count==1)
{
    $num_of_rows = mysqli_fetch_assoc($result);
    $title = $num_of_rows['title'];
    $price = $num_of_rows['price'];
    $image_name = $num_of_rows['image_name'];
    
}
else{
    header('location:'.SITEURL);
}
}
else
{
    header('location:'.SITEURL);
}
?>
    <!-- Order section starts here -->
    <section class="Search taking_text_in_center">
        <div class="boxes"> 
            <h2 class="taking_text_in_center text_color">Fill the form to confirm your order</h2>
            <form action="" method = "POST" class="form_size">
                <fieldset>
                    <legend>Selected Food</legend>
                    <div class="img_food_menu"> 
                        <?php
if($image_name == "")
{
    echo "<div class='error-message'>Image not Available.</div>";
}
else
{
?>
 <img src="<?php echo SITEURL; ?>Image/Food/<?php echo $image_name; ?>" alt="pizza" class="rs_image crv_img">
 <?php
} 
 ?>
                       
</div>
<div class="description_of_foods">
    <h3><?php echo $title; ?></h3>
    <input type="hidden" name= "food" value = "<?php echo $title; ?>">
    <p class="price_of_foods"><?php echo $price; ?></p>
    <input type="hidden" name="price" value="<?php echo $price; ?>">
    <div class="heading_of_order">Quantity</div>
    <input type = "number" name= "qty" class="button" required>
</div>
  </fieldset>
                <fieldset>
                    <legend>Delivery Details</legend>
                    <div class="heading_of_order">Full Name</div>
                    <input type="text" name="full-name" placeholder="E.g.  Al Mehedi Hasan" class="box_size" required>

                    <div class="heading_of_order">Phone Number</div>
                    <input type="tel" name="contact" placeholder="E.g. 019xxxxxxxx" class="box_size" required>

                    <div class="heading_of_order">Address</div>
                    <textarea name="address" rows="4" placeholder="E.g. House No., Street, City, Country" class="box_size" required></textarea>

                    <input type="submit" name="submit" value="Confirm Order" class="button-primary"> 
                </fieldset>
            </form>

            <?php
if(isset($_POST['submit']))
{
   
    $food = $_POST['food'];
    $price = $_POST['price'];
    $qty = $_POST['qty'];

    $total = $price * $qty; 

    $order_date = date("Y-m-d h:i:sa");

    $status = "Ordered";  

    $customer_name = $_POST['full-name'];
    $customer_contact = $_POST['contact'];
    $customer_address = $_POST['address'];
    


$query2 = "INSERT INTO order_table SET 
food = '$food',
price = $price,
qty = $qty,
total = $total,
order_date = '$order_date',
status = '$status',
customer_name = '$customer_name',
customer_contact = '$customer_contact',
customer_address = '$customer_address'
";


$result2=mysqli_query($connection,$query2);
if($result2==true)
{
    $_SESSION['order'] = "<div class='success-message text_at_center'>Order placed Successfully.</div>";
    header('location:'.SITEURL.'Homepage.php');
}
else
{
    $_SESSION['order'] = "<div class='error-message text_at_center'>Failed to place Order.</div>";
    header('location:'.SITEURL.'Homepage.php');
}
}

            ?>
        </div>
    </section>
    <?php include('Front-parts/Bottomline.php'); ?>