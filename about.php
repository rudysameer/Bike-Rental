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
                <li><a href="contact.php">Contact us</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="/project/cart.php"><i class="fa-regular fa-heart"></i> Favorites<sup><?php ?></sup></a></li>
                <!-- <li><a href="/project/cart.php">TOtal Price :<?php total_cart_price();?></a></li> -->
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
    <header class="flex">
        
      
        <div class="container">
        
            
            <div class="header title">
                <h1 class="ah">
                    About US 
                </h1>
               
                <p class="ap" style="color:lightpink; font-weight:bold;font-size:20px;">We are the premier bike rental service provider in Nepal. Our exceptional services cater to your biking needs with top-notch bikes and professional assistance. Join us for an unforgettable biking experience in Nepal.</p>

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
                        <h2 class="ha">Started from college</h2>
                        <p class="text"><strong>Samir and Ayudh,</strong> two ambitious college students with a shared passion for biking, embarked on a unique journey. Frustrated by the lack of affordable and convenient bike rental options near their campus, they decided to take matters into their own hands. With determination and creativity, they built a bike rental system from scratch, starting with a small fleet of quality bikes and user-friendly booking software. Their venture quickly gained popularity among students and locals alike, offering not just bikes but also a sense of freedom and exploration. Samir and Ayudh's entrepreneurial spirit and dedication turned their college dream into a thriving reality, shaping the way people experience biking in their community.</p>
                    </div>


                </div>
            </div>

        </div>
    </section>

    <section class="team">
        <div class="wrapper-team">
            <div class="title-team">
                <h4 class="h4-team"> Founders </h4>
            </div>
    
            <div class="card_container">
                <div class="card">
                    <div class="imbBx">
                        <img src="./user_area/user_images/ayudh.jpg" alt="" class="img-team">
                    </div>
                    <div class="content-team">
                        <div class="contentBx">
                            <h3 class="h3-team">Ayudh Pantha <br> <p style="font-size:10px;">Web Analyst</p></h3>
                        </div>
                        <ul class="sci">
                            <li class="li-team" style="--i: 1"><a class="a-team" href="https://www.instagram.com/ayudh655/"><i class="fa-brands fa-instagram"></i></a></li>
                            <li class="li-team" style="--i: 2"><a class="a-team" href="https://www.facebook.com/ayudh.pantha.9"><i class="fa-brands fa-facebook"></i></a></li>
                            <li class="li-team" style="--i: 3"><a class="a-team" href=""><i class="fa-brands fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="card">
                    <div class="imbBx">
                        <img src="./user_area/user_images/me.jpg" alt="" class="img-team">
                    </div>
                    <div class="content-team">
                        <div class="contentBx">
                            <h3 class="h3-team">Samir Maharjan <br> <p style="font-size:10px;">Web Analyst</p></h3>
                        </div>
                        <ul class="sci">
                            <li class="li-team" style="--i: 1"><a class="a-team" href="https://www.instagram.com/mhrz_sameer01/"><i class="fa-brands fa-instagram"></i></a></li>
                            <li class="li-team" style="--i: 2"><a class="a-team" href="https://www.facebook.com/samir.maharjan.7549/"><i class="fa-brands fa-facebook"></i></a></li>
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
        <?php include 'footer.php';?>
       </footer>
    </section>


    
</body>
</html>
about html.txt
Displaying about html.txt.