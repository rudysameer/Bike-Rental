<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .form-label{
            margin-top: 20px;
            font-size: 25px;
            color: darkred;
            font-weight: bold;
        }
        .btn{
           
        }
        .form-control{
            border: 2px solid darkred;
        }
    </style>
</head>
<body>

    <?php 
        if(isset($_GET['edit_category']))
        {
            $category_id = $_GET['edit_category'];
            $select_category = "SELECT * FROM  `categories` WHERE category_id=$category_id";
            $result_category = mysqli_query($con,$select_category);
            $row_category= mysqli_fetch_assoc($result_category);
            $product_category = $row_category['category_name'];
        }
    
    ?>


    <div class="container mt-4">
    <h2 class="text-center">Edit Category</h2>
    <form action="" method="post" class="text-center">
        <div class="form-outline mb-3">
        <label class="form-label">Category Title</label>
        <input type="text" name="category_title" class="form-control w-50 m-auto" value="<?php echo $product_category;?>" required>
        </div>
        <input type="submit" value="Update Category" class="btn bg-success" name="update_category">
    </form>
    </div>
    <?php 
    if(isset($_POST['update_category']))
    {
        $category_name = $_POST['category_title'];
        $update_category = "UPDATE `categories` SET category_name='$category_name' WHERE category_id=$category_id";
        $result_update = mysqli_query($con,$update_category);
        if($result_update)
        {
            echo "<script>window.alert('Category updated Successdully')</script>";
            echo "<script>window.open('./index.php?view_category','_self')</script>";
        }
    }
    
    
    ?>

</body>
</html>