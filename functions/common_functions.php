<?php 

// include './includes/connect.php';

//getting products
function getproducts()
{
    global $con;
    if(!isset($_GET['category_id'])){
        if(!isset($_GET['brand_id'])){
    
    $select_query = "SELECT * FROM `products` order by rand() limit 0,6";
    $result_query = mysqli_query($con,$select_query);

    while($row = mysqli_fetch_assoc($result_query))
    {
        $product_id = $row['product_id'];
        $product_title = $row['product_title'];
        $product_description = $row['product_description'];
        $product_category = $row['category_id'];
        $product_brand = $row['brand_id'];
        $product_image1 = $row['product_image1'];
        $product_image2 = $row['product_image2'];
        $product_image3 = $row['product_image3'];
        $product_price = $row['price'];
        
        echo "<div class='col-md-4 mb-3'>
        <div class='card'>
        <h5 class='card-title p-2' style='text-align:center; font-weight:bold; color:green;'>$product_title</h5>
        <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
        <div class='card-body'>
        
        <p class='card-text'>$product_description</p>
        <p class='card-text'style='font-weight:bold;'>Price:$product_price/week</p>
        <a href='index1.php?add_to_cart=$product_id' class='btn btn-info'>Add to Favorites</a>
        <a href='./product_detail.php?product_id=$product_id' class='btn btn-secondary'>View Details</a>
        
        </div>
        </div>
    </div>";

    } 
    }
    }
}



//getting unique categories
function get_unique_categories()
{
    global $con;
    if(isset($_GET['category_id'])){
    $category_id = $_GET['category_id'];
    $select_query = "SELECT * FROM `products` where category_id = $category_id";
    $result_query = mysqli_query($con,$select_query);
    $num_rows = mysqli_num_rows($result_query);
    if($num_rows == 0){
        echo "<h2 class='text-center text-danger'>Selected Categories not available</h2>";
    }

    while($row = mysqli_fetch_assoc($result_query))
    {
        $product_id = $row['product_id'];
        $product_title = $row['product_title'];
        $product_description = $row['product_description'];
        $product_category = $row['category_id'];
        $product_brand = $row['brand_id'];
        $product_image1 = $row['product_image1'];
        $product_image2 = $row['product_image2'];
        $product_image3 = $row['product_image3'];
        $product_price = $row['price'];
        
        echo "<div class='col-md-4 mb-3'>
        <div class='card'>
        <h5 class='card-title p-2' style='text-align:center; font-weight:bold; color:green;'>$product_title</h5>
        <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
        <div class='card-body'>
        
        <p class='card-text'>$product_description</p>
        <p class='card-text'style='font-weight:bold;'>Price:$product_price/week</p>
        <a href='index1.php?add_to_cart=$product_id' class='btn btn-info'>Add to Favorites</a>
        <a href='./product_detail.php?product_id=$product_id' class='btn btn-secondary'>View Details</a>
        
        </div>
        </div>
    </div>";
    }
    }
    }

//getting unique brands
function get_unique_brands()
{
    global $con;
    if(isset($_GET['brand_id'])){
    $brand_id = $_GET['brand_id'];
    $select_query = "SELECT * FROM `products` where brand_id = $brand_id";
    $result_query = mysqli_query($con,$select_query);
    $num_rows = mysqli_num_rows($result_query);
    if($num_rows == 0){
        echo "<h2 class='text-center text-danger'>Selected Brands not available available</h2>";
    }

    while($row = mysqli_fetch_assoc($result_query))
    {
        $product_id = $row['product_id'];
        $product_title = $row['product_title'];
        $product_description = $row['product_description'];
        $product_category = $row['category_id'];
        $product_brand = $row['brand_id'];
        $product_image1 = $row['product_image1'];
        $product_image2 = $row['product_image2'];
        $product_image3 = $row['product_image3'];
        $product_price = $row['price'];
        
        echo "<div class='col-md-4 mb-3'>
        <div class='card'>
        <h5 class='card-title p-2' style='text-align:center; font-weight:bold; color:green;'>$product_title</h5>
        <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
        <div class='card-body'>
        
        <p class='card-text'>$product_description</p>
        <p class='card-text'style='font-weight:bold;'>Price:$product_price/week</p>
        <a href='index1.php?add_to_cart=$product_id' class='btn btn-info'>Add to Favorites</a>
        <a href='./product_detail.php?product_id=$product_id' class='btn btn-secondary'>View Details</a>
        
        </div>
        </div>
    </div>";

    }
    }
    }

// sidevan brands column
function getbrands(){
    global $con;
    $select_brands = "SELECT * FROM `brands`";
                    $result_brands = mysqli_query($con,$select_brands);
                    while($row_data = mysqli_fetch_assoc($result_brands)){
                        $brand_name= $row_data['brand_name'];
                        $brand_id = $row_data['brands_id'];
                        echo "<li class='nav-item '>
                        <a href='index1.php?brand_id=$brand_id' class='nav-link text-light'>$brand_name</a>
                    </li>";
                    }

}

// categories sidenavbar

function getcategories(){
    global $con;
    $select_categories = "SELECT * FROM `categories`";
    $result_category = mysqli_query($con,$select_categories);
    // $row_data = mysqli_fetch_assoc($result_category);
    // echo $row_data['category_name'];
    // echo $row_data['category_id'];
    while($row_data = mysqli_fetch_assoc($result_category)){
        $category_name = $row_data['category_name'];
        $category_id = $row_data['category_id'];

        echo "<li class='nav-item '>
        <a href='index1.php?category_id=$category_id' class='nav-link text-light'>$category_name</a>
    </li>";

    }
}

function search_product(){

    global $con;
    if(isset($_GET['search_data_product'])){
     
    $search_data_value = $_GET['search_data'];    
    $search_query = "SELECT * FROM `products` WHERE product_keywords like '%$search_data_value%'";
    $result_query = mysqli_query($con,$search_query);
    $num_rows = mysqli_num_rows($result_query);
    if($num_rows == 0)
    {
        echo "<h2 class='text-center text-danger'>Searched Bikes not didnot matched</h2>";
    }

    while($row = mysqli_fetch_assoc($result_query))
    {
        $product_id = $row['product_id'];
        $product_title = $row['product_title'];
        $product_description = $row['product_description'];
        $product_category = $row['category_id'];
        $product_brand = $row['brand_id'];
        $product_image1 = $row['product_image1'];
        $product_image2 = $row['product_image2'];
        $product_image3 = $row['product_image3'];
        $product_price = $row['price'];
        
      echo "<div class='col-md-4 mb-3'>
        <div class='card'>
        <h5 class='card-title p-2' style='text-align:center; font-weight:bold; color:green;'>$product_title</h5>
        <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
        <div class='card-body'>
        <p class='card-text'>$product_description</p>
        <p class='card-text'style='font-weight:bold;'>Price:$product_price/week</p>
        <a href='index1.php?add_to_cart=$product_id' class='btn btn-info'>Add to Cart</a>
        <a href='./product_detail.php?product_id=$product_id' class='btn btn-secondary'>View Details</a>
        
        </div>
        </div>
    </div>";

    }
    }
}  

//view details function
function view_details(){
    global $con;
    if(isset($_GET['product_id'])){
    if(!isset($_GET['category_id'])){
        if(!isset($_GET['brand_id'])){
    $product_id = $_GET['product_id'];
    $select_query = "SELECT * FROM `products` WHERE product_id=$product_id";
    $result_query = mysqli_query($con,$select_query);

    while($row = mysqli_fetch_assoc($result_query))
    {
        $product_id = $row['product_id'];
        $product_title = $row['product_title'];
        $product_description = $row['product_description'];
        $product_category = $row['category_id'];
        $product_brand = $row['brand_id'];
        $product_image1 = $row['product_image1'];
        $product_image2 = $row['product_image2'];
        $product_image3 = $row['product_image3'];
        $product_price = $row['price'];
        
        echo "
        <div class='row'>
        <div class='col-md-4 mb-3'>
        <div class='card'>
        <h5 class='card-title p-2' style='text-align:center; font-weight:bold; color:green;'>$product_title</h5>
        <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
        <div class='card-body'>
        <p class='card-text'>$product_description</p>
        <p class='card-text'style='font-weight:bold;'>Price:$product_price/week</p>
        <a href='index1.php?add_to_cart=$product_id' class='btn btn-info'>Add to Cart</a>
        <a href='index1.php' class='btn btn-secondary'>Go Home</a>
        
        </div>
        </div>
    </div>
    
    
    <div class='col-md-8'>
                    
                <div class='row' style='margin-top:30px;'>
                    <div class='col-md-6'>
                    <img src='./admin_area/product_images/$product_image2' class='card-img-top' alt='$product_title'>
                    </div>
                    <div class='col-md-6'>
                    <img src='./admin_area/product_images/$product_image3' class='card-img-top' alt='$product_title'>
                    </div>
                </div>

                </div>
                </div>";

    } 
    }
    }
    
}}

// getiing ip addresses
function getIPAddress() {  
    //whether ip is from the share internet  
     if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
     }  
//whether ip is from the remote address  
    else{  
             $ip = $_SERVER['REMOTE_ADDR'];  
     }  
     return $ip;  
}  
// $ip = getIPAddress();  
// echo 'User Real IP Address - '.$ip; 

// cart function
function cart(){
    if(isset($_GET['add_to_cart'])){
        global $con;
        $get_ip_address = getIPAddress();  
        $get_product_id = $_GET['add_to_cart'];
        $select_query = "SELECT * FROM `cart_details` WHERE ip_address='$get_ip_address' AND product_id = $get_product_id";
        $result_query = mysqli_query($con,$select_query);
        $num_rows = mysqli_num_rows($result_query);
        if($num_rows>0)
        {
            echo "<script>alert('Bike alredy present in cart')</script>";
            echo "<script>window.open('index1.php','_self')</script>";
        }
        else{
            $insert_query = "INSERT INTO `cart_details` (product_id, ip_address, quantity) VALUES ($get_product_id,'$get_ip_address',1)";
            $result_query = mysqli_query($con,$insert_query);
            echo "<script>alert('Bike sucussfully added to Cart')</script>";
            echo "<script>window.open('index1.php','_self')</script>";
        }
    }
    
}

//function to get cart item number
function cart_item(){
    if(isset($_GET['add_to_cart'])){
        global $con;
        $get_ip_address = getIPAddress();  
        $select_query = "SELECT * FROM `cart_details` WHERE ip_address='$get_ip_address'";
        $result_query = mysqli_query($con,$select_query);
        $count_cart_items = mysqli_num_rows($result_query);
    }
    else{
            global $con;
            $get_ip_address = getIPAddress();  
            $select_query = "SELECT * FROM `cart_details` WHERE ip_address='$get_ip_address'";
            $result_query = mysqli_query($con,$select_query);
            $count_cart_items = mysqli_num_rows($result_query);
        }

        echo $count_cart_items;
}
    
//function to count total cart price

function total_cart_price()
{
    global $con;
    $grand_total = 0;
    $get_ip_address = getIPAddress();
    $cart_query = "SELECT * FROM `cart_details` WHERE ip_address='$get_ip_address'";
    $result_cart = mysqli_query($con,$cart_query);
    while($row = mysqli_fetch_array($result_cart))
    {
        $product_id = $row['product_id'];
        $select_product  = "SELECT * FROM `products` WHERE product_id=$product_id";
        $result_product = mysqli_query($con,$select_product);
        
        while($row_product_price = mysqli_fetch_array($result_product))
        {
            
            // $product_price = array($row_product_price['price']);
            // $array_total = array_sum($product_price);
            // $grand_total = $array_total+$grand_total;

            // alternate way
            $product_price = $row_product_price['price'];
            $grand_total += $product_price;
            


        }
        
    }
    echo $grand_total;
    
     
}

function pending_order()
{
    global $con;
    $name = $_SESSION['username'];
    $get_details = "SELECT * FROM `user_table` WHERE username='$name'";
    $result_query = mysqli_query($con,$get_details);
    while($row_query = mysqli_fetch_array($result_query))
    {
        $user_id = $row_query['user_id'];
        if(!isset($_GET['my_order']))
        {
            if(!isset($_GET['edit_account'])){
                if(!isset($_GET['delete_account'])){
                    $pending_order = "SELECT * FROM `orders_pending` WHERE user_id=$user_id and order_status='pending'";
                    
                    $result_order_pending=mysqli_query($con,$pending_order);
                    $row_count = mysqli_num_rows($result_order_pending);
                    if($row_count>0)
                    {
                        // echo "<h3 class='text-center'>You have <strong>$row_count</strong> <span>$row_count</span> Pending  
                        // Order</h3>";
                        echo "<div class='text-center text-danger mt-5 mb-3'><h3>You have <strong>$row_count</strong>  Pending  
                         Order</h3></div>
                        <p class='text-center'><a href='profile.php?pending_order' class='text-dark'>Order Details</a>"; 
                                               
                    }
                    else{
                        echo "<h3 class='text-center my-2'>You have NO Pending
                        Order</h3>
                        <p class='text-center'><a href='../index1.php' class='text-dark'>Explore</a>"; 
                        

                    }


                }
            }

        }
    }

}



function footer()
{
    
}




?>