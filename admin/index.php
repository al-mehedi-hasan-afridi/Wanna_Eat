<?php include('partials/menu.php'); ?>

    <!-- Search section starts here -->
    <section class="Search taking_text_in_center">
        <div class="boxes"> 
        <marquee behavior="alternate"direction="right" scrollamount="7">
                    <h5> Eat More.... </h5>
                </marquee>
                <br/>
                <br/>
                <marquee behavior="alternate"direction="left" scrollamount="7">
                    <h5> Think Less </h5>
                </marquee>
        </div>
    </section>
    <!-- Search section ends here -->
    <br/><br/>
    <?php
            if(isset($_SESSION['login']))
            {
                echo $_SESSION['login'];
                unset($_SESSION['login']);
            }
            ?>
            <br/><br/>
    <!-- Food type section starts here -->
    <section class="foodtype">
        <div class="boxes">
            <h2 class="taking_text_in_center"> Foods Types </h2>
            
            <div class="foodtype_box box_float_inside_boarder">
                <img src="../Image/burger.jpg" alt="Burger" class="img_inside_border img_curve">

                <h3 class="float_the_text text_color">Burger</h3>
            </div>
           
            
            <div class="foodtype_box box_float_inside_boarder">
                <img src="../Image/pizza.jpg" alt="Pizza" class="img_inside_border img_curve">

                <h3 class="float_the_text text_color">Pizza</h3>
            </div>
            
           
            <div class="foodtype_box box_float_inside_boarder">
                <img src="../Image/pasta.jpg" alt="Pasta" class="img_inside_border img_curve">

                <h3 class="float_the_text text_color">Pasta</h3>
            </div>
            
            <div class="image_on_same_border"></div>
        </div>
    </section>
    <!-- Food type section ends here -->


    <div class ="different_foods text_at_center">
         <?php 
         $query2 = "SELECT * FROM food_table";
                        $result2 = mysqli_query($connection, $query2);
                        $count2 = mysqli_num_rows($result2);
            ?>
            <h1><?php echo $count2; ?></h1>
            <br/>
            Foods
        </div>
        <div class ="different_foods text_at_center">
         <?php 
            
         $query3 = "SELECT * FROM order_table";
        $result3 = mysqli_query($connection, $query3);
        $count3 = mysqli_num_rows($result3);
            ?>
            <h1><?php echo $count3; ?></h1>
            <br/>
            Total Orders
        </div>
        <div class ="different_foods text_at_center">
         <?php   
         $query4 = "SELECT SUM(total) AS Total FROM  order_table WHERE status = 'Delivered' ";
        $result4 = mysqli_query($connection, $query4);
        $num_of_rows4 = mysqli_fetch_assoc($result4);
        $total_revenue = $num_of_rows4['Total'];
            ?>
            <h1><?php echo $total_revenue; ?></h1>
            <br/>
            Revenue Total
        </div>
        <div class = "fix"></div>

    <!-- Social media section starts here -->
    <section class="social_media">
        <div class="boxes taking_text_in_center">
            <ul>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/facebook-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/linkedin.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/twitter.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/pinterest.png"/></a>
                </li>
            </ul>
        </div>
    </section>
    <!-- Social media section ends here -->
<?php include('partials/footer.php'); ?>
