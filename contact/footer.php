<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    footer {
    background-color: #333;
    color: #fff;
    padding: 20px 0;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    align-items: flex-start; /* Align items to the top of the container */
    flex-wrap: wrap; /* Allow items to wrap onto a new line if needed */
}

.social-icons, .footer-links {
    list-style-type: none;
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center;
}

.social-icons li, .footer-links li {
    margin-right: 10px;
}

.social-icons li a, .footer-links li a {
    color: #fff;
    text-decoration: none;
    font-size: 20px;
}

.social-icons li a:hover, .footer-links li a:hover {
    color: #ffd700;
}

.address {
    margin-top: 10px; /* Add space above the address */
}

</style>
</head>
<body>
<footer>
    <div class="container">
        <ul class="social-icons">
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            <li><a href="#"><i class="fas fa-envelope"></i></a></li>
        </ul>
        <p class="address">123 Jawlakhel,Lalitpur, Nepal</p>
        <ul class="footer-links">
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms of Service</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
    </div>
</footer>


    
</body>
</html>