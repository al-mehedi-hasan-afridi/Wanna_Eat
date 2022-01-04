 <?php include('config/constants.php'); ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "icon" href = "Image/logo.jpg"/>
    <title>Wanna Eat</title>
    <link rel="stylesheet" href="css\CSS_FILE.css"/>
</head>
<body>
    <!-- Header/Navigation section starts here -->
    <section class="navbar">
        <div class="boxes">
            <div class="logo">
                   <a href="<?php echo SITEURL; ?>Homepage.php">
                    <img src="Image/logo.jpg" alt="Logo of Restaurant" class="img_inside_border">
                </a>
             </div>
             <div class="line_fixed_of_navigation text_on_the_right">
                <ul>
                    <li>
                        <a href="<?php echo SITEURL; ?>Homepage.php">Home</a>
                    </li>
                    
                    <li>
                        <a href="<?php echo SITEURL; ?>Food.php">Foods</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                   
                </ul>
             </div>
             <div class="image_on_same_border"></div>
             <div class="fix"></div>

        </div>
    </section>
    <!-- Header/Navigation section ends here -->
    <br/> <br/>