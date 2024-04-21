
<?php include '../includes/connect.php'?>
<?php include '../functions/common_functions.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registeration</title>
      <!-- bootstrap css -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="container-fluid my-3">
        <h2 class='text-center' >New User Registeration</h2>
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-12 col-xl-6">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-outline mb-4">
                    <!-- username field -->
                    <label for="user_username" class="from-label">Username</label>
                    <input type="text" id="user_username" class="form-control" placeholder="Enter your UserName" autocomplete="off" required="required" name="user_username">
                    </div>

                    <!-- email field -->
                    <div class="form-outline mb-4">
                    <label for="user_email" class="from-label">Email</label>
                    <input type="email" id="user_email" class="form-control" placeholder="Enter your Email" autocomplete="off" required="required" name="user_email">
                    </div>
                    
                     <!-- image field -->
                     <div class="form-outline mb-4">
                    <label for="user_image" class="from-label">User Image</label>
                    <input type="file" id="user_image" class="form-control" required="required" name="user_image">
                    </div>

                    <!-- password field -->
                    <div class="form-outline mb-4">
                    <label for="user_password" class="from-label">Password</label>
                    <input type="password" id="user_password" class="form-control" placeholder="Enter your password" autocomplete="off" required="required" name="user_password">
                    </div>
                    <!-- confirm password field -->
                    <div class="form-outline mb-4">
                    <label for="user_confirmpassword" class="from-label">Confirm password</label>
                    <input type="password" id="user_confirmpassword" class="form-control" placeholder="confirm your password" autocomplete="off" required="required" name="user_confirmpassword">
                    </div>

                    <!-- address field -->
                    <div class="form-outline mb-4">
                    <label for="user_address" class="from-label">User Address</label>
                    <input type="text" id="user_address" class="form-control" required="required" name="user_address">
                    </div>

                    <!-- contact field -->
                    <div class="form-outline mb-4">
                    <label for="user_contact" class="from-label">User Contact</label>
                    <input type="text" id="user_contact" class="form-control" required="required" name="user_contact">
                    </div>

                    <div class="mt-2 pt-2">
                        <input type="submit" value="Register" class="bg-info py-2 px-3 border-0" name="user_register">
                        <p class="small fw-bold mt-2 pt-2 mb-0">Already have an account? <a href="user_login.php" class="text-danger">Login</a></p>
                    </div>


                </form>

            </div>
        </div>
    </div>
    
</body>
</html>

<!-- php code -->
<?php 
    if(isset($_POST['user_register']))
    {
        $user_username = $_POST['user_username'];
        $user_email = $_POST['user_email'];
        
        $user_password = $_POST['user_password'];
        $hash_password = password_hash($user_password,PASSWORD_DEFAULT);
        $user_confirmpassword = $_POST['user_confirmpassword'];
        $user_address = $_POST['user_address'];
        $user_contact = $_POST['user_contact'];
        $user_image = $_FILES['user_image']['name'];
        $user_image_tmp = $_FILES['user_image']['tmp_name'];
        $user_ip = getIPAddress();

        //select query
        $select_query="SELECT * FROM `user_table` WHERE username='$user_username' OR user_email='$user_email'";
        $result=mysqli_query($con,$select_query);
        $rows_count=mysqli_num_rows($result);
        if($rows_count>0)
        {
            echo "<script>alert('username or email already exists')</script>";
        }
        else if($user_password != $user_confirmpassword)
        {
            
            echo "<script>alert('password donot match')</script>";
        }

        else{

        //insert query
        move_uploaded_file($user_image_tmp,"./user_images/$user_image");
        $insert_query="INSERT INTO `user_table`(username,user_email,user_password,user_image,user_ip,user_address,user_mobile) VALUES ('$user_username','$user_email','$hash_password','$user_image','$user_ip','$user_address','$user_contact') ";
        $sql_execute = mysqli_query($con,$insert_query);
        if($sql_execute)
        {
            echo "<script>alert('Data inserted succussfully')</script>";
        }
        else{
            die(mysqli_error($con));
        }

    }

    //selecting cart_items
    $select_cart_items = "SELECT * FROM `cart_details` where ip_address='$user_ip'";
    $result_cart=mysqli_query($con,$select_cart_items);
    $rows_count=mysqli_num_rows($result_cart);
    if($rows_count>0){
        $_SESSION['username']=$user_username;
        echo "<script>alert('you have items in your cart')</script>";
        echo "<script>window.open('checkout.php','_self')</script>";
    }
    else{
        echo "<script>window.open('../index1.php','_self')</script>";
    }


    }

?>