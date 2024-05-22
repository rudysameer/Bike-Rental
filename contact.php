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
    <title>contact</title>
    <link rel="stylesheet" href="./css/contact.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
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


    <section class="ccontact">
        <div class="ccontent">
            <h2 >Contact Us</h2>
            <p >Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantiumporro ea aliquam, necessitatibus provident !</p>
        </div>

        <div class="ccontainer">
            <div class="contactInfo">
                <div class="cbox">
                    <div class="cicon"><i class="fa-solid fa-location-dot"></i></div>
                    <div class="ctext">
                            <h3 class="ch3">Address</h3>
                            <p >Kumaripati, Lalitpur<br>Bagmati, Nepal</p>

                    </div>
                    
                </div>

                <div class="cbox">
                    <div class="cicon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                    <div class="ctext">
                            <h3 class="ch3">Phone</h3>
                            <p class="cp">980000001</p>

                    </div>
                    
                </div>

                <div class="cbox">
                    <div class="cicon"><i class="fa-regular fa-envelope"></i></div>
                     <div class="ctext">
                            <h3 class="ch3">Email</h3>
                            <p class="cp">panthaaayudh@gmail.com</p>

                    </div>
                    
                </div>
            </div>
            <div class="contactForm">
                <form onsubmit="sendEmail(); reset(); return false;">
                    <h2 class="ch2">Send Message</h2>
                    <div class="inputBox">
                        <input type="text" id="name" name="" required="required">
                        <span class="cspan">Full Name</span>
                    </div>

                    <div class="inputBox">
                        <input type="text" id="email" name="" required="required">
                        <span class="cspan">Email</span>
                    </div>

                    

                    <div class="inputBox">
                        <textarea id="message" required="required"></textarea>
                        <span class="cspan">Type Your Message....</span>
                    </div>

                    <div class="inputBox">
                        <input type="submit" value="Send">
                    </div>
                </form>
            </div>
        </div>

    </section>
    <script src=" https://smtpjs.com/v3/smtp.js"></script>
    <script>
        function sendEmail(){
            Email.send({
                Host : "smtp.gmail.com",
                Username : "panthaaayudh@gmail.com",
                Password : "pantha123",
                To : 'vc78bca03@vedascollege.edu.np',
                From : document.getElementById("email").value,
                Subject : "Royal Bike Rental",
                Body : "And this is the body"
            }).then(
            message => alert(message)
            );

        }

    </script>
</body>
</html>
contact.txt
Displaying contact.txt.