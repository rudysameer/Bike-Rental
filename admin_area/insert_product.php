<?php 
include '../includes/connect.php';
if(isset($_POST['insert_products'])){
    $product_title = $_POST['product_title'];
    $product_description = $_POST['product_description'];
    $product_keywords = $_POST['product_keywords'];
    $product_features = $_POST['product_features'];
    $product_category = $_POST['product_category'];
    $product_brand = $_POST['product_brand'];
    $product_price = $_POST['price'];
    $product_status = 'true';

    //acessing images
    $product_image1 = $_FILES['product_image1']['name'];
    $product_image2 = $_FILES['product_image2']['name'];
    $product_image3 = $_FILES['product_image3']['name'];

    //accesing image tem name
    $temp_image1 = $_FILES['product_image1']['tmp_name'];
    $temp_image2 = $_FILES['product_image2']['tmp_name'];
    $temp_image3 = $_FILES['product_image3']['tmp_name'];

    // checing empty conditions
  
  
    
   
        move_uploaded_file($temp_image1,"./product_images/$product_image1");
        move_uploaded_file($temp_image2,"./product_images/$product_image2");
        move_uploaded_file($temp_image3,"./product_images/$product_image3");

        // insertquery
        $insert_products = "INSERT INTO `products`(product_title,product_description,product_features,product_keywords,category_id,brand_id,product_image1,product_image2,product_image3,price,date,status) VALUES ('$product_title','$product_description','$product_features','$product_keywords','$product_category','$product_brand','$product_image1','$product_image2','$product_image3','$product_price',NOW(),'$product_status')";

        $result_query = mysqli_query($con,$insert_products);

        if($result_query){
            echo "<script>alert('Succussfully Inserted')</script>";

        }
        else{
            
        }
        

    }





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERT PRODUCTS -ADMIN DASHBOARD</title>
        <!-- bootstrap css link -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- css file -->
    <link rel="stylesheet" href="../css/styleA.css">
     <!-- fontawesome link -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 
</head>
<body class="bg-light">
    <div class="container mt-4">
        <h3 class="text-center">Insert Products</h3>
        <!-- form -->
        <form action="" method="post" enctype="multipart/form-data">
            <!-- product title -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label">Product Title</label>
                <input type="text" name="product_title" id="product_title" class="form-control" placeholder="Enter Product Title" autocomplete="off" required>  
            </div>

            <!-- product description -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_description" class="form-label">Product Description</label>
                <input type="text" name="product_description" id="product_description" class="form-control" placeholder="Enter Product description" autocomplete="off"  required>  
            </div>

            <!-- Product keywords -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_keywords" class="form-label">Product Keywords</label>
                <input type="text" name="product_keywords" id="product_keywords" class="form-control" placeholder="Enter Product Keywords" autocomplete="off" required>  
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_features" class="form-label">Product Features</label>
                <textarea type="text" name="product_features" id="product_features" class="form-control" autocomplete="off" required> </textarea> 
            </div>

            <!-- categories -->
            <div class="form-outline mb-4 w-50 m-auto">
                    <select name="product_category" id="" class="form-select" required>
                        <option value="">Select a Category</option>
                        <?php 
                        $select_categories = "SELECT * FROM `categories`";
                        $select_query = mysqli_query($con,$select_categories);
                        
                        while($row = mysqli_fetch_assoc($select_query)){
                            $category_title = $row['category_name'];
                            $category_id = $row['category_id'];
                             echo "<option value='$category_id'>$category_title</option>";

                        }
                        
                        
                        ?>
                    </select>
            </div>

            <!-- Brands -->
            <div class="form-outline mb-4 w-50 m-auto">
                    <select name="product_brand" id="" class="form-select" required>
                        <option value="">Select a Brand</option>
                        <?php 
                        $select_brands = "SELECT * FROM `brands`";
                        $select_query = mysqli_query($con,$select_brands);

                        while($row = mysqli_fetch_assoc($select_query)){
                            $brand_title = $row['brand_name'];
                            $brand_id = $row['brands_id'];
                            echo "<option value='$brand_id'>$brand_title</option>";


                        }
                        
                        ?>
                    </select>
            </div>

            <!-- product image 1 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image1" class="form-label">Product image 1</label>
                <input type="file" name="product_image1" id="product_image1" class="form-control" placeholder="ENter the first picture" required>
            </div>
            
            <!-- product image 2 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image2" class="form-label">Product image 2</label>
                <input type="file" name="product_image2" id="product_image2" class="form-control" placeholder="ENter the second picture" required>
            </div>

            <!-- product image 3 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image3" class="form-label">Product image 3</label>
                <input type="file" name="product_image3" id="product_image3" class="form-control" placeholder="ENter the third picture" required>
            </div>

             <!-- price -->
             <div class="form-outline mb-4 w-50 m-auto">
                <label for="price" class="form-label">Price</label>
                <input type="text" name="price" id="price" class="form-control" placeholder="Enter the the price" required>
            </div>

            <!-- submit -->
            <div class="form-outline mb-4 w-50 m-auto">
            <input type="submit" name="insert_products" class="btn mb-3 px-3" value="Insert Products" style="background-color:darkgreen;">
            </div>



        </form>


    </div>

    
</body>
</html>