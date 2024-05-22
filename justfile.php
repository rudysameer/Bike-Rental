<?php 
    include 'includes/connect.php';
    include 'functions/common_functions.php';
    session_start();
?>



<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Home Page</title>
    


    <!-- fontawesome link -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css' integrity='sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==' crossorigin='anonymous' referrerpolicy='no-referrer' />
    

</head>
<body>
<div class='d-flex align-items-start mb-2'>
    <img src='./user_area/user_images/sunflower.jpg' alt='Profile Picture' style='width: 40px; height: 40px; border-radius: 50%; margin-right: 10px; object-fit: cover;'>
    <div class='flex-grow-1'>
        <div class='d-flex justify-content-between align-items-center mb-1'>
            <div>
                <span style='font-size: 16px; font-weight: bold; margin-right: 10px;'>Sameer Maharjan</span>
                <span style='font-size: 14px; color: grey;'>2024-01-04</span>
            </div>
            <div class='d-flex align-items-center'>
                <span style='margin-right: 5px;'>2</span>
                <i class='fa fa-star text-secondary'></i>
                <i class='fa fa-star text-secondary'></i>
            </div>
        </div>
        <p>THis is a great Bike</p>
    </div>
</div>


</body>

</html>