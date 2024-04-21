<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Account</title>
</head>
<body>
    <h3 class="text-danger my-4">Delete Account</h3>
    <form action="" class="mt-5" method="post">
        <div class="form-outline mb-4">
            <input type="submit" class="form-control w-50 m-auto text-danger" name="delete" value="Delete an Account">
        </div>
        <div class="form-outline mb-4">
            <input type="submit" class="form-control w-50 m-auto text-success" name="nodelete" value="Don't Delete an Account">
        </div>

    </form>

    <?php 
        $username = $_SESSION['username'];
        if(isset($_POST['delete']))
        {
            $delete_query = "DELETE FROM `user_table` WHERE username = '$username'";
            $result_delete = mysqli_query($con,$delete_query);
            if($result_delete)
            {
                session_destroy();
                echo "<script>window,alert('Account deleted succussfully')</script>";
                echo "<script>window.open('../index1.php','_self')</script>";
            }
            

        }
        if(isset($_POST['nodelete'])){
            echo "<script>window.open('./profile.php','_self')</script>";

        }
    
    
    
    ?>
    
</body>
</html>