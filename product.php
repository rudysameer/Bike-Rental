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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="css/style.css">
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <script src="https://kit.fontawesome.com/3b245c0a0d.js"></script>
   
    <title>product</title>
</head>
<body>
<div class="navbar" style="background-color:black;">
            <img src="/PROJECT/image/img6.png" class="logo" height="7%" width= 7%>
            
            
            <ul>
                <li>
                
                </li>
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

    <div >
        <h1 class="hn">Our Bikes</h1>

   

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
      
    <footer>
        <div class="row">
            <div class="col">
                <img src="image/img10.png" class="logo1">
                <p class="paraf">we provide a better and comfortable services to our customer.Customer satisfication is our first priority</p>

            </div>
            <div class="col">
                <h3 class="hf">Office <div class="under"><span class="sp"></span></div></h3>
                <p class="pf">kumaripati,Lalitpur</p>
                <p class="pf">Bagmati, PIN:550550, Nepal</p>
                <p class="email-id">royalcar@gmail.com</p>
                <h4>+977-9840000012</h4>
            </div>

            <div class="col">
                <h3 class="hf">Links <div class="under"><span class="sp"></span></div></h3>
                <ul class="ulf">
                    <li class="lif"><a class="folik"href="/">Home</a></li>
                    <li class="lif"><a class="folik"href="#">Product</a></li>
                    <li class="lif"><a class="folik"href="#">About Us</a></li>
                    <li class="lif"><a class="folik"href="#">FAQs</a></li>
                </ul>
            </div>

            <div class="col">
                <h3 class="hf">Social Media <div class="under"><span class="sp"></span></div></h3>
                <div class="social-icons">
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-viber"></i>
                    <i class="fab fa-twitter"></i>
                  </div>
            </div>

            
        </div>
        <hr class="hrfe">
        <p class="copyright">Royal Rental 2024 . All Right Reserved </p>



    </footer>
    
    

    
</body>
</html>
