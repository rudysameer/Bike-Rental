<?php 
    include "includes/connect.php";
    include "functions/common_functions.php";
    session_start();
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
    <div class="banner">
        <div class="navbar">
            <img src="/PROJECT/image/img6.png" class="logo" height="7%" width= 7%>
            
            
            <ul>
                
                <li><a href="/project/index1.php">Home</a></li>
                <li><a href="product.php">Products</a></li>
                <li><a href="">Contact us</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="/project/cart.php"><i class="fa-solid fa-cart-shopping"></i>CART<sup><?php cart_item();?></sup></a></li>
                <!-- <li><a href="/project/cart.php">TOtal Price :<?php total_cart_price();?></a></li> -->
                <?php 
                if(isset($_SESSION['username']))
                {
                    echo "<li><a href='./user_area/profile.php'>My Account</a></li>";
                }
                
                ?>
                
                <li>
                
                </li>
                
            </ul>
        </div>    
        <div class="content">
                <h1 >RIDE LIKE A RIDER</h1>
                <p>Sign up and get ready for a ride.<br> Select your ride on your own</p>
                <div>
                    <?php 
                     if(!isset($_SESSION['username'])){
                        echo "
                        <button type='button'><span></span><a href='./user_area/user_registeration.php' style='text-decoration:none;'' class='text-light'>Sign-Up</a></button>";
                    }
                    else{
                        echo"
                        welcome";
                    }
                    
                    
                    ?>


                    <?php 
                     if(!isset($_SESSION['username'])){
                        echo "
                        <button type='button'><span></span><a href='./user_area/user_login.php' style='text-decoration:none;'' class='text-light'>Log-IN</a></button>";
                    }
                    else{
                        echo"
                        <button type='button'><span></span><a href='./user_area/logout.php' style='text-decoration:none;'' class='text-light'>Log-out</a></button>";
                    }
                    
                    
                    ?>
                    <!-- <button type="button"><span></span><a href="./user_area/user_login.php" style="text-decoration:none;" class="text-light">Log-In</a></button> -->
                </div>
        </div>   
        
    </div>  

    <!-- calling cart function -->
    <?php 
        cart();
    
    ?>




    <!-- child -->
    <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <ul class="navbar-nav me-auto">
        <li class="nav-item">
            <a href="" class="nav-link">Welcome Guest</a>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link">Login</a>
        </li>
    </ul>



    </nav> -->

    


    <!-- second child -->
    
   
    <div class="bg-light">
        <h3 class="text-center">Hot Products</h3>
        <p class="text-center">All the latest and hottest bikes are here.</p>
        
    </div>
    <div class="search-bar" style="margin:30px;">
    <form  class="d-flex" role="search" action="search_product.php" method="get">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="width:25%;  border: 2px solid green;" name="search_data">
                    <!-- <button class="btn btn-outline-success" type="submit" style="color: black; width : 15%;">Search</button> -->
                    <input type="submit" value="Search" class="btn btn-outline-success" name="search_data_product">
                </form>
    </div>

    <!-- third child -->
    <div class="row">
        <div class="col-md-10">
            <!-- products -->
            <div class="row px-3">
                <!-- fetching products -->
                <?php 
                
                   getproducts();
                   get_unique_categories();
                   get_unique_brands();
                //    $ip = getIPAddress();  
                //    echo 'User Real IP Address - '.$ip; 
                
                
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
    <?php include 'footer.php'?>
  


    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>