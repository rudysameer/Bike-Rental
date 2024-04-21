<?php 
    include "../includes/connect.php";
   session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Page</title>
    <link rel="stylesheet" href="../css/style.css">
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
                <li><a href="../product.php">Products</a></li>
                <li><a href="">Contact us</a></li>
                <li><a href="">About Us</a></li>
                <li>
                
                </li>
                
            </ul>
        </div>  
          <!-- calling cart function -->
           <!-- child -->
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
  
    
    

    <!-- third child -->
    <div class="row" style="margin-top:30px;">
        <div class="col-md-12">
            <!-- products -->
            <div class="row px-3">

                <?php 
                    if(!isset($_SESSION['username']))
                    {
                        include('user_login.php');
                    }
                    else{
                        include('payment.php');
                       
                    }
                
                
                ?>

                
            
            </div>
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