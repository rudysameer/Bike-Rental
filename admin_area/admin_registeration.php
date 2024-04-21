<?php include '../includes/connect.php'?>
<?php include '../functions/common_functions.php'?>


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
        <h2 class="text-center mb-4">Admin Registration</h2>
        <div class="row d-flex justify-content-center ">
            <div class="col-lg-6 col-xl-5">
                <img src="./product_images/ladyrider.jpg" alt="admin image" class="img-fluid">
            </div>
            <div class="col-lg-6 col-xl-4">
                <form action="" method="post">
                    <div class="form-outline mb-4">
                        <label class="form-label">Username</label>
                        <input type="text" name="username" placeholder="Enter Your username" class="form-control" required>
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" placeholder="Enter Your Email" class="form-control" required>
                    </div>
                    
                    <div class="form-outline mb-4">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" placeholder="Enter Your Password" class="form-control" required>
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label">Confirm Password</label>
                        <input type="password" name="c_password" placeholder="Confirm Password" class="form-control" required>
                    </div>
                    <div>
                        <input type="submit" class="bg-success py-2 px-3 text-light" value="Register" name="admin_register">
                        <p class="small fw-bold mt-2 pt-2">Already have an Account?<a href="admin_login.php" class="link-danger"> Login</a></p>
                    </div>


                </form>
            </div>

        </div>
    </div>

    <?php 
        if(isset($_POST['admin_register']))
        {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $c_password = $_POST['c_password'];
            $hash_password = password_hash($password,PASSWORD_DEFAULT);
            $admin_ip = getIPAddress();
             //select query
            $select_query="SELECT * FROM `admin_table` WHERE admin_name='$username' OR admin_email='$email'";
            $result=mysqli_query($con,$select_query);
            $rows_count=mysqli_num_rows($result);
            if($rows_count>0)
            {
                echo "<script>alert('username or email already exists')</script>";
            }
            else if($password != $c_password)
            {
                
                echo "<script>alert('password donot match')</script>";
            }

            else{
                //insert_query
                $insert_query = "INSERT INTO `admin_table`(admin_name,admin_email,admin_password,admin_ip) VALUES ('$username','$email','$hash_password','$admin_ip')";
                $sql_execute = mysqli_query($con,$insert_query);
                if($sql_execute)
                {
                    echo "<script>alert('Data inserted succussfully')</script>";
                    echo "<script>window.open('./admin_login.php','_self')</script>";
                    
                    
                }
                else{
                    die(mysqli_error($con));
                }
                
            }


        }    
        
        
    ?>


    
</body>
</html>
