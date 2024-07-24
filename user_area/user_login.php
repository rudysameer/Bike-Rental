
<?php include '../includes/connect.php'?>
<?php include '../functions/common_functions.php';
error_reporting(0);
@session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Log in</title>
      <!-- bootstrap css -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="container-fluid my-3">
        <h2 class='text-center' >User Login</h2>
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-12 col-xl-6">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-outline mb-4 mt-5">
                    <!-- username field -->
                    <label for="user_username" class="from-label">Username</label>
                    <input type="text" id="user_username" class="form-control" placeholder="Enter your UserName" autocomplete="off" required="required" name="user_username">
                    </div>

                    <!-- password field -->
                    <div class="form-outline mb-4">
                    <label for="user_password" class="from-label">Password</label>
                    <input type="password" id="user_password" class="form-control" placeholder="Enter your password" autocomplete="off" required="required" name="user_password">
                    </div>
                

                    <div class="mt-2 pt-2">
                        <input type="submit" value="Log-in" class="bg-info py-2 px-3 border-0" name="user_login">
                        <p class="small fw-bold mt-2 pt-2 mb-0">Dont have an account? <a href="user_registeration.php" class="text-danger">Register</a></p>
                    </div>




                    
                    




                </form>

            </div>
        </div>
    </div>
    
</body>
</html>
<?php 

if(isset($_POST['user_login']))
{
    $user_username = $_POST['user_username'];
    $user_password = $_POST['user_password'];
    
    $select_query = "SELECT * FROM `user_table` WHERE username='$user_username'";
    $result=mysqli_query($con,$select_query);
    $row_count=mysqli_num_rows($result);
    $row_data=mysqli_fetch_assoc($result);
    $user_ip=getIPAddress() ;
    $user_id = $row_data['user_id'];
    $_SESSION['user_id']=$userid;
    
    

    // cart item
    $select_query_cart = "SELECT * FROM `cart_details` WHERE ip_address='$user_ip'";
    $select_cart = mysqli_query($con,$select_query_cart);
    $row_count_cart=mysqli_num_rows($select_cart);

    if($row_count>0)
    {
        $_SESSION['username']=$user_username;
       
        if(password_verify($user_password,$row_data['user_password']))
        {
            // echo "<script>alert('login succussful')</script>";
            if($row_count==1 and $row_count_cart==0){
                $_SESSION['username']=$user_username;
                echo "<script>alert('login succussful')</script>";
                echo "<script>window.open('../index1.php?user_id=$user_id','_self')</script>";
            }
            else{
                $_SESSION['username']=$user_username;
                echo "<script>alert('login succussful')</script>";
                echo "<script>window.open('../index1.php?user_id=$user_id','_self')</script>";
            }

        }
        else{
            echo "<script>alert('invalid credittials')</script>";
        }

    }
    else{
        echo "<script>alert('Invalid emails')</script>";
    }

}



?>