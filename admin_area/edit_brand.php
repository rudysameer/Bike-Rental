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
        if(isset($_GET['edit_brand']))
        {
            $brand_id = $_GET['edit_brand'];
            $select_category = "SELECT * FROM  `brands` WHERE brands_id=$brand_id";
            $result_category = mysqli_query($con,$select_category);
            $row_category= mysqli_fetch_assoc($result_category);
            $product_category = $row_category['brand_name'];
        }
    
    ?>


    <div class="container mt-4">
    <h2 class="text-center">Edit Brand</h2>
    <form action="" method="post" class="text-center">
        <div class="form-outline mb-3">
        <label class="form-label">Brand Title</label>
        <input type="text" name="brand_title" class="form-control w-50 m-auto" value="<?php echo $product_category;?>" required>
        </div>
        <input type="submit" value="Update Brand" class="btn bg-success" name="update_brand">
    </form>
    </div>
    <?php 
    if(isset($_POST['update_brand']))
    {
        $category_name = $_POST['brand_title'];
        $update_brand = "UPDATE `brands` SET brand_name='$category_name' WHERE brands_id=$brand_id";
        $result_update = mysqli_query($con,$update_brand);
        if($result_update)
        {
            echo "<script>window.alert('Brand updated Successdully')</script>";
            echo "<script>window.open('./index.php?view_brands','_self')</script>";
        }
    }
    
    
    ?>

</body>
</html>