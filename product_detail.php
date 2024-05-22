<?php 
    include "includes/connect.php";
    include "functions/common_functions.php";
    @session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- fontawesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    

</head>
<body>
   

    <!-- second child -->
    <div class="navbar" style="background-color:black;">
            <img src="/PROJECT/image/img6.png" class="logo" height="7%" width= 7%>
            
            
            <ul>
                <li>
                
                </li>
                <li><a href="/project/index1.php">Home</a></li>
                <li><a href="product.php">Products</a></li>
                <li><a href="contact.php">Contact us</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="/project/cart.php"><i class="fa-regular fa-heart"></i> Favorites<sup><?php ?></sup></a></li>
                <!-- <li><a href="">TOtal Price :<?php total_cart_price();?></a></li> -->
                <?php 
                if(isset($_SESSION['username']))
                {
                    echo "<li><a href='./user_area/profile.php'><i class='fa-regular fa-user'></i> My Account</a></li>";
                }
                
                ?>
                <li>
                
                </li>
                
            </ul>
        </div>  
          <!-- calling cart function -->
    <?php 
        cart();
    
    ?>
    
    

    <!-- third child -->
    <div class="row" style="margin-top:30px;">
        <div class="col-md-10">
            <!-- products -->
            <div class="row px-3">

                <div class="col-md-4">
                    <!-- cards will be displayed here -->
       

                </div>
                
                <!-- fetching products -->
                <?php 
                   view_details();
                   get_unique_categories();
                   get_unique_brands();
                
                
                
                ?>
            </div>
        </div>
        

        <div class="col-md-2 bg-secondary p-0">
            <!-- sidenav -->
            <!-- brands to be dislayed -->
            <ul class="navbar-nav me-auto text-center">
                <li class="nav-item bg-info">
                    <a href="#" class="nav-link text-light"><h4>Brands</h4></a>
                </li>

                <!-- php start -->
                <?php  
                    
                    getbrands();
                ?>
            </ul>

            <!-- categories to be displayed -->
            <ul class="navbar-nav me-auto text-center">
                <li class="nav-item bg-info">
                    <a href="#" class="nav-link text-light"><h4>Categories</h4></a>
                </li>
    

                <!-- php start -->
                <?php 
                    getcategories();
                ?>  
            </ul>

        </div>
    </div>

    <!-- fourth child -->






    



    <!-- last child  -->
    <!-- <div class="bg-info p-3 text-center" style="background-color: brown; color: red;">
        <p>All Rights Reserved</p>
    </div> -->
  


    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>