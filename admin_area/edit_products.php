<div class="container mt-5">
    <h1 class="text-center">Edit Bike</h1>
    <form action="" method="post" enctype="multipart/form-data">
    <?php 
        if(isset($_GET['edit_products'])){
          $edit_id = $_GET['edit_products'];  
          
        $select_bike = "SELECT * FROM `products` where product_id=$edit_id";
        $result_bike = mysqli_query($con,$select_bike);
        $row_bike = mysqli_fetch_assoc($result_bike);
         $bike_title = $row_bike['product_title'];
         $bike_description = $row_bike['product_description'];
         $bike_keywords = $row_bike['product_keywords'];
         $bike_features = $row_bike['product_features'];
         $bike_category = $row_bike['category_id'];
         $bike_brand = $row_bike['brand_id'];
         $bike_image1 = $row_bike['product_image1'];
         $bike_image2 = $row_bike['product_image2'];
         $bike_image3 = $row_bike['product_image3'];
         $bike_price = $row_bike['price'];
         $bike_status = $row_bike['status'];

         //fetchong category name
         $select_category = "SELECT * FROM `categories` WHERE category_id=$bike_category";
         $result_category = mysqli_query($con,$select_category);
         $row_category = mysqli_fetch_assoc($result_category);
         $category_name = $row_category['category_name'];
         

         //fetching brands name
         $select_brand = "SELECT * FROM `brands` WHERE brands_id=$bike_brand";
         $result_brand = mysqli_query($con,$select_brand);
         $row_brand = mysqli_fetch_assoc($result_brand);
         $brand_name = $row_brand['brand_name'];
        
         
        }
    
    ?>

        <div class="form-outline w-50 m-auto">
            <label class="form-label mt-3">Bike title</label>
            <input name="product_title" type="text" class="form-control" value="<?php echo $bike_title;?>" required>
        </div>
        <div class="form-outline w-50 m-auto">
            <label class="form-label mt-3">Bike Description</label>
            <input name="product_description" type="text" class="form-control" value="<?php echo $bike_description;?>" required>
        </div>
        <div class="form-outline w-50 m-auto">
            <label class="form-label mt-3">Bike Keywords</label>
            <input name="product_keyword" type="text" class="form-control" value="<?php echo $bike_keywords; ?>" required>
        </div>
        <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_features" class="form-label">Product Features</label>
                <textarea type="text" name="product_features" id="product_features" class="form-control" autocomplete="off" value=""  required> <?php echo $bike_features; ?></textarea> 
            </div>

        <div class="form-outline w-50 m-auto">
            <label class="form-label mt-3">Bike Category</label>
            <select name="product_category" class="form-select" required>
                <option value="<?php echo $bike_category;?>"><?php echo $category_name;?></option>
                <?php 
                $all_categories  = "SELECT * FROM `categories`";
                $categories_result = mysqli_query($con,$all_categories);
                while($row_categories = mysqli_fetch_assoc($categories_result)){

                    $categories_name = $row_categories['category_name'];
                    $categories_id = $row_categories['category_id'];
                    echo "<option value='$categories_id'>$categories_name</option>";
                }
                
                ?>
                <!-- <option value="">2</option>
                <option value="">3</option>
                <option value="">4</option>
                <option value="">5</option> -->
            </select>
        </div>
        <div class="form-outline w-50 m-auto">
            <label class="form-label mt-3">Bike Brand</label>
            <select name="product_brand" class="form-select" required>
                <option value="<?php echo $bike_brand;?>"><?php echo $brand_name;?></option>
                <?php 
                $all_brands  = "SELECT * FROM `brands`";
                $brands_result = mysqli_query($con,$all_brands);
                while($row_brands = mysqli_fetch_assoc($brands_result)){

                    $brands_name = $row_brands['brand_name'];
                    $brands_id = $row_brands['brands_id'];
                    echo "<option value='$brands_id'>$brands_name</option>";
                
                }
                
                ?>
                
            </select>
        </div>
        <div class="form-outline w-50 m-auto">
            <label class="form-label mt-4">Bike Image1</label>
            <div class="d-flex">
            <input type="file" class="form-control w-100 m-auto" name="product_image1" required>
            <img src="./product_images/<?php echo $bike_image1;?>" alt="" class="product_img">    
        </div>
        </div>
        <div class="form-outline w-50 m-auto" >
            <label class="form-label mt-4">Bike Image2</label>
            <div class="d-flex">
            <input type="file" class="form-control w-100 m-auto" name="product_image2"  required>
            <img src="./product_images/<?php echo $bike_image2;?>" alt="" class="product_img">    
        </div>
        </div>
        <div class="form-outline w-50 m-auto">
            <label class="form-label mt-4">Bike Image3</label>
            <div class="d-flex">
            <input type="file" class="form-control w-100 m-auto" name="product_image3" required>
            <img src="./product_images/<?php echo $bike_image3;?>" alt="" class="product_img">    
        </div>
        </div>
        <div class="form-outline w-50 m-auto">
            <label class="form-label mt-4">Bike Price</label>
            <input name="product_price" type="text" class="form-control" value="<?php echo $bike_price;?>" required>
        </div>
        <div class="form-outline w-50 m-auto">
            <label class="form-label mt-4">Bike Status</label>
            <input name="status" type="text" class="form-control" value="<?php echo $bike_status?>" required>
        </div>
        <div class="text-center">
            <input type="submit" name="edit_product" value="Update Bike" class="btn btn-success px-3 mt-4">
        </div>
        




    </form>
</div>
<?php
    if(isset($_POST['edit_product']))
    {
        $product_title = $_POST['product_title'];
        $product_description = $_POST['product_description'];
        $product_keyword = $_POST['product_keyword'];
        $product_features = $_POST['product_features'];
        $product_category = $_POST['product_category'];
        $product_brand = $_POST['product_brand'];
        $product_price = $_POST['product_price'];
        $status = $_POST['status'];

        $product_image1 = $_FILES['product_image1']['name'];
        $product_image2 = $_FILES['product_image2']['name'];
        $product_image3 = $_FILES['product_image3']['name'];

        $temp_image1 = $_FILES['product_image1']['tmp_name'];
        $temp_image2 = $_FILES['product_image2']['tmp_name'];
        $temp_image3 = $_FILES['product_image3']['tmp_name'];

        move_uploaded_file($temp_image1,"./product_images/$product_image1");
        move_uploaded_file($temp_image2,"./product_images/$product_image2");
        move_uploaded_file($temp_image3,"./product_images/$product_image3");

        $update_edit = "UPDATE `products` SET product_title='$product_title',product_description='$product_description',product_features='$product_features',product_keywords='$product_keyword',category_id=$product_category ,brand_id=$product_brand ,product_image1='$product_image1',product_image2='$product_image2',product_image3='$product_image3',price='$product_price',`date`=NOW(),`status`='$status' WHERE product_id=$edit_id";
        $result_edit = mysqli_query($con,$update_edit);
        if($result_edit)
        {
            echo "<script>window.alert('Bike updated Successfully')</script>";
            echo "<script>window.open('./index.php','_self')</script>";

        }

    }




?>