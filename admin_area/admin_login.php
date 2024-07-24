<?php include '../includes/connect.php'?>
<?php include '../functions/common_functions.php';
error_reporting(0);

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
      <!-- bootstrap css link -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- css file -->
    <link rel="stylesheet" href="../css/styleA.css">
     <!-- fontawesome link -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <style>
        body{
            overflow: hidden;
        }
     </style>
</head>
<body>
    <div class="container-fluid m-3">
        <h2 class="text-center mb-4">Admin Login</h2>
        <div class="row d-flex justify-content-center ">
            <div class="col-lg-6 col-xl-5">
                <img src="./product_images/tarzan.jpg" alt="admin image" class="img-fluid">
            </div>
            <div class="col-lg-6 col-xl-4">
                <form action="" method="post">
                    <div class="form-outline mb-4">
                        <label class="form-label">Username</label>
                        <input type="text" name="username" placeholder="Enter Your username" class="form-control" required>
                    </div>
                    
                    
                    <div class="form-outline mb-4">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" placeholder="Enter Your Password" class="form-control" required>
                    </div>
                
                    <div>
                        <input type="submit" class="bg-success py-2 px-3 text-light" value="Login" name="admin_login">
                        <p class="small fw-bold mt-2 pt-2">Don't have an Account?<a href="admin_registeration.php" class="link-danger"> Register</a></p>
                    </div>


                </form>
            </div>

        </div>
    </div>
    <?php 
    if(isset($_POST['admin_login']))
    {
        $admin_username = $_POST['username'];
        $admin_password = $_POST['password'];

        $select_query = "SELECT * FROM `admin_table` WHERE admin_name = '$admin_username'";
        $result = mysqli_query($con,$select_query);
        $row_count=mysqli_num_rows($result);
        $row_data=mysqli_fetch_assoc($result);
        $user_ip=getIPAddress() ;
        $admin_id = $row_data['admin_id'];
        $_SESSION['admin_id']=$admin_id;

        if($row_count>0)
        {
            $_SESSION['admin_username'] = $admin_username;
            if(password_verify($admin_password,$row_data['admin_password']))
            {
                $_SESSION['admin_username'] = $admin_username;
                echo "<script>alert('Login successful')</script>";
                echo "<script>window.open('./index.php','_self')</script>";

            }
            else{
                echo "PAssword is incorect";
            }


        }
        else{
            echo "<script>alert('Inavalid creditanls')</script>";
        }




    }
    
    
    
    
    ?>
    
</body>
</html>