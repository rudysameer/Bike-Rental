<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="./contact2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<?php include 'navbar.php';?>


    <section class="ccontact">
        <div class="ccontent">
            <h2 class="ch2">Contact Us</h2>
            <p class="cp" style="font-size:20px;font-weight:bold;">Contact us through Phone Email and personally thorugh social media also</p>
        </div>
        <div class="ccontainer">
            <div class="contactInfo">
                <div class="cbox">
                    <div class="cicon"><i class="fa-solid fa-location-dot"></i></div>
                    <div class="ctext">
                        <h3 class="ch3">Address</h3>
                        <p class="cp">Kumaripati, Lalitpur<br>Bagmati, Nepal</p>
                    </div>
                </div>
                <div class="cbox">
                    <div class="cicon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                    <div class="ctext">
                        <h3 class="ch3">Phone</h3>
                        <p class="cp">980000001,899287391<br>01546734,01456734</p>
                    </div>
                </div>
                <div class="cbox">
                    <div class="cicon"><i class="fa-regular fa-envelope"></i></div>
                    <div class="ctext">
                        <h3 class="ch3">Email</h3>
                        <p class="cp">panthaaayudh@gmail.com</p>
                        <p class="cp">sameer23@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="contactForm">
                <form action="https://formspree.io/f/mqkrogjl" method="POST">
                    <h2 class="ch2">Send Message</h2>
                    <div class="inputBox">
                        <label for=""style="color:#00000;">Full Name</label>
                        <input type="text" id="name" name="Name" required="required">
                        <span class="cspan">Full Name</span>
                    </div>
                    <div class="inputBox">
                    <label for="">Email</label>
                        <input type="text" id="email" name="Email" required="required">
                        <span class="cspan">Email</span>
                    </div>
                    <div class="inputBox">
                    <label for="">Your Full Message</label>
                        <textarea id="message" required="required" name="message"></textarea>
                        <span class="cspan">Type Your Message...</span>
                    </div>
                    <div class="inputBox">
                       <input type="submit" value="send">
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- <script src="https://smtpjs.com/v3/smtp.js"></script> -->
    <!-- <script>
        function sendEmail(){
            Email.send({
                Host : "smtp.gmail.com",
                Username : "panthaaayudh@gmail.com",
                Password : "pantha123",
                To : 'rockstarsamir23@gmail.com',
                From : document.getElementById("email").value,
                Subject : "Royal Bike Rental",
                Body : "And this is the body"
            }).then(
            message => alert(message)
            );
        }
    </script> -->
    <?php include 'footer.php';?>
</body>
</html>
