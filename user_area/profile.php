<?php include '../includes/connect.php'?>
<?php include '../functions/common_functions.php';

@session_start();
?>
<?php 

$name = $_SESSION['username'];
// $user_id = $_GET['user_id'];
// echo $name." Welcome";
// echo "<br>";
// echo "The user id is ".$user_id;


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="../css/style.css">
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <script src="https://kit.fontawesome.com/3b245c0a0d.js"></script>
   
    <title>Profile-<?php echo $name;?></title>
    <style>
    .profile_image{
        width: 80%;
        height: 80%;
        border-radius: 12rem;
        background-color: aquamarine;
    }
    </style>
</head>
<body>
<div class="navbar" style="background-color:black;">
            <img src="/PROJECT/image/img6.png" class="logo" height="7%" width= 7%>
            
            
            <ul>
                <li>
                
                </li>
                <li><a href="/project/index1.php">Home</a></li>
                <li><a href="../product.php">Products</a></li>
                <li><a href="../contact.php">Contact us</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="/project/cart.php"><i class="fa-regular fa-heart"></i> Favorites<sup><?php ?></sup></a></li>
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

    <div >
        
        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <ul class="navbar-nav me-auto">
        <!-- <li class="nav-item">
            <a href="" class="nav-link">Welcome Guest</a>
        </li> -->
    <?php 
    
    if(!isset($_SESSION['username'])){
        
        echo " <li class='nav-item'>
        <a href='./user_login.php' class='nav-link'>Login</a>
    </li>
    ";
    }
    else{
        $username = $_SESSION['username'];
        echo"<li class='nav-item'>
        <a href='logout.php' class='nav-link'>Logout</a>
    </li>
    <li>$username</li>";
    }
    ?>

    </nav>

    <!-- fouth child -->
    <div class="row">
        <div class="col-md-2 ">
        <ul class="navbar-nav bg-secondary text-center" style="height:100vh;">
            <li class="nav-item bg-info">
                <a href="" class="nav-link text-light"><h4><?php echo $username;?>'s Profile</h4></a>
            </li>
    <!-- fetching user images -->
            <?php
            $user_image = "SELECT * FROM `user_table` WHERE username='$name'";
            $result_image = mysqli_query($con,$user_image);
            $row_image = mysqli_fetch_array($result_image);
            $user_image = $row_image['user_image'];

            echo " <li class='nav-item ' style='background-color:aquamarine;'>
            <img src='./user_images/$user_image' alt='' class='profile_image my-4'>
            </li>";
            
            
            ?>

          
            
            <li class="nav-item mt-3">
                <a href="profile.php" class="nav-link text-light"><h5>Pending Orders</h5></a>
            </li>
            <li class="nav-item ">
                <a href="profile.php?my_order" class="nav-link text-light"><h5>MY Orders</h5></a>
            </li>
            <li class="nav-item">
                <a href="profile.php?edit_account" class="nav-link text-light"><h5>Edit Account</h5></a>
            </li>
            <li class="nav-item">
                <a href="profile.php?delete_account" class="nav-link text-light"><h5>Delete Account</h5></a>
            </li>
            <li class="nav-item">
                <a href="logout.php" class="nav-link text-light"><h5>Log-out</h5></a>
            </li>
        </ul>
        </div>
        <div class="col-md-10 text-center">
            <?php pending_order();
            if(isset($_GET['edit_account']))
            {
                include 'edit_account.php';
            }
            if(isset($_GET['my_order']))
            {
                include 'user_order.php';
            }
            if(isset($_GET['delete_account']))
            {
                include 'delete_account.php';
            }
            
            ?>

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
