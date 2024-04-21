<?php 
    // $user_name = $_SESSION['username'];
    $select_user = "SELECT * FROM `user_table` WHERE username='$name'";
    $result_query = mysqli_query($con,$select_user);
    $row_fetch = mysqli_fetch_assoc($result_query);
    $user_id = $row_fetch['user_id'];
    $username = $row_fetch['username'];
    $user_email = $row_fetch['user_email'];
    $user_password = $row_fetch['user_password'];
    
    $user_address = $row_fetch['user_address'];
    $user_mobile = $row_fetch['user_mobile'];

    if(isset($_POST['user_update']))
    {
        $update_id  = $user_id;
        $username = $_POST['user_username'];
        $user_email = $_POST['user_email'];
        
        $user_address = $_POST['user_address'];
        $user_mobile = $_POST['user_mobile'];
        $user_image = $_FILES['user_image']['name'];
        $user_image_temp = $_FILES['user_image']['tmp_name'];
        move_uploaded_file($user_image_temp,"./user_images/$user_image");

        //update_query
        $update_query = "UPDATE `user_table` SET username='$username',user_email='$user_email',user_address='$user_address',user_mobile='$user_mobile',user_image='$user_image' WHERE user_id=$update_id";
        $user_query_update =mysqli_query($con,$update_query);
        if($user_query_update)
        {
            echo "<script>alert('Data updated Sucussfully')</script>";
            echo "<script>alert('You need to login again')</script>";
            echo "<script>window.open('logout.php','_self')</script>";
            
            
        }




    }

    

     


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Account</title>
    <style>
        .edit_image{
            width: 100px;
            height: 100px;
            /* object-fit: contain; */

        }
    </style>
</head>
<body>
    <h3 class="text-center text-success my-3">Edit Acccount</h3>
    <form action="" method="post" enctype="multipart/form-data" class="text-center">
        <div class="form-outline mb-4 mt-5">
            <input type="text" value="<?php echo $name;?>" class="form-control w-50 m-auto" name="user_username">
        </div>
        <div class="form-outline mb-4">
            <input type="email" value="<?php echo $user_email;?>"  class="form-control w-50 m-auto" name="user_email">
        </div>
        <div class="form-outline mb-4 d-flex w-50 m-auto">
            <input type="file" class="form-control m-auto" name="user_image">
            <img src="./user_images/<?php echo $user_image;?>" alt="" class="edit_image">
        </div>
        <div class="form-outline mb-4 mt-5">
            <input type="text" value="<?php echo $user_address;?>"  class="form-control w-50 m-auto" name="user_address">
        </div>
        <div class="form-outline mb-4 mt-5">
            <input type="text" value="<?php echo $user_mobile;?>"  class="form-control w-50 m-auto" name="user_mobile">
        </div>
        <input type="submit" value="Update" class="bg-info py-2 px-3 border-0" name="user_update">
        
        

    </form>

    
</body>
</html>