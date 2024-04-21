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
    <title>Document</title>
    <link rel="stylesheet" href="./css/about.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

   

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
    <header class="flex">
      
        <div class="container">
        
            
            <div class="header title">
                <h1 class="ah">
                    About
                </h1>

                <p class="ap">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic doloremque, consequatur laboriosam fuga autem, quisquam animi fugiat a laudantium quia exercitationem error odit corrupti veritatis nemo placeat libero maxime obcaecati.</p>

            </div>
        </div>
    </header>

    <section class="py-4" id="about">
        <div class="container">
            <div class="title-wrap">
                <spam class="sm-title">know about us</spam>
                <h2 class="lg-title">Story</h2>
            </div>
            <div class="about-row">
                <div class="about-left-my-2">
                    <img  class="ri-img" src="./image/trip-1.jpg" alt="about image">

                </div>
                <div class="about-row">
                    <div class="info">
                        <h2 class="ha">15 years of experience</h2>
                        <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae voluptate laborum fugiat possimus tenetur corporis reiciendis magni soluta sequi mollitia eum fuga, exercitationem quis? Modi temporibus qui numquam ab in?</p>
                    </div>


                </div>
            </div>

        </div>
    </section>

    <section class="team">
        <div class="wrapper-team">
            <div class="title-team">
                <h4 class="h4-team"> Our Team </h4>
            </div>
    
            <div class="card_container">
                <div class="card">
                    <div class="imbBx">
                        <img src="./image/team-1.png" alt="" class="img-team">
                    </div>
                    <div class="content-team">
                        <div class="contentBx">
                            <h3 class="h3-team">Ayudh Pantha <br> <span class="team-span">Web Analyst</span></h3>
                        </div>
                        <ul class="sci">
                            <li class="li-team" style="--i: 1"><a class="a-team" href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li class="li-team" style="--i: 2"><a class="a-team" href="#"><i class="fa-brands fa-facebook"></i></a></li>
                            <li class="li-team" style="--i: 3"><a class="a-team" href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="card">
                    <div class="imbBx">
                        <img src="./image/team-1.png" alt="" class="img-team">
                    </div>
                    <div class="content-team">
                        <div class="contentBx">
                            <h3 class="h3-team">Samir Maharjhan <br> <span class="team-span">Web Analyst</span></h3>
                        </div>
                        <ul class="sci">
                            <li class="li-team" style="--i: 1"><a class="a-team" href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li class="li-team" style="--i: 2"><a class="a-team" href="#"><i class="fa-brands fa-facebook"></i></a></li>
                            <li class="li-team" style="--i: 3"><a class="a-team" href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer section -->
    <section>
        <footer>
            <div class="row">
                <div class="col">
                    <img src="./image/img10.png" class="logo1">
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
                        <li class="lif"><a class="folik"href="#">Home</a></li>
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
    </section>


    
</body>
</html>
about html.txt
Displaying about html.txt.