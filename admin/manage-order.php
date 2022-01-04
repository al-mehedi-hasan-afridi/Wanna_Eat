<?php include('partials/menu.php'); ?>
<div class="navbar">
<div class="boxes">
<h1> Manage Order </h1>
<br/><br/><br/>
            
            <br/><br/><br/>
            <?php
                  if(isset($_SESSION['update']))
                  {
                    echo $_SESSION['update'];
                    unset($_SESSION['update']);
                  }
            ?>
            <br/><br/><br/>

            <table class="table_style">
                <tr>
                    <th> ID</th>
                    <th> Food </th>
                    <th> Price</th>
                    <th>Qty </th>
                    <th>Total</th>
                    <th>Order Date</th>
                    <th>Status</th>
                    <th>Customer Name</th>
                    <th> Customer Contact</th>
                    <th> Customer Address</th>
                    <th>Action</th>
                </tr>
                <?php
  $query = "SELECT * FROM order_table ORDER BY id DESC";

  $result = mysqli_query($connection, $query);
  
  $count = mysqli_num_rows($result);

  $serial_id = 1;
  if($count>0)
  {
      while($row=mysqli_fetch_assoc($result))
      {
          //Get all the order details
          $id = $row['id'];
          $food = $row['food'];
          $price = $row['price'];
          $qty = $row['qty'];
          $total = $row['total'];
          $order_date = $row['order_date'];
          $status = $row['status'];
          $customer_name = $row['customer_name'];
          $customer_contact = $row['customer_contact'];
          $customer_address = $row['customer_address'];
          ?>

           <tr>
                    <td><?php echo $serial_id++; ?> </td>
                    <td> <?php echo $food; ?> </td>
                    <td>  <?php echo $price; ?></td>
                    <td> <?php echo $qty; ?></td>
                    <td> <?php echo $total; ?></td>
                    <td> <?php echo $order_date; ?></td>

                    <td>
                         <?php 
                         if($status=="Ordered")
                         {
                             echo "<lebel>$status</lebel>";
                         } 
                         elseif($status == "On Delivery")
                         {
                            echo "<lebel style ='color: orange;'>$status</lebel>";

                         }
                         elseif($status == "Delivered")
                         {
                            echo "<lebel style ='color: blue;'>$status</lebel>";

                         }
                         elseif($status == "Cancelled")
                         {
                            echo "<lebel style ='color: red;'>$status</lebel>";

                         }
                         
                         ?>
                        </td>
                    <td> <?php echo $customer_name; ?></td>
                    <td> <?php echo $customer_contact; ?></td>
                    <td> <?php echo $customer_address; ?></td>
                    <td>
                    
                        <a href="<?php echo SITEURL; ?>admin/Order_updating.php?id=<?php echo $id; ?>" class="button-secondary">Update Order </a>
                    </td>
                </tr>

          <?php
      }
    }
      else
      {
 echo "<tr> <td colspan = '14' class= 'error-message'>No available Order At this moment.</td></tr>";
      }
          
                ?> 
            </table>
</div>
</div>
<?php include('partials/footer.php'); ?>