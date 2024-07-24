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
        <a href='./user_area/checkout.php?product_id=$product_id' class='btn btn-info'>Rent</a>
        
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
        <a href='./user_area/checkout.php?product_id=$product_id' class='btn btn-info'>Rent</a>
        
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
        <a href='./user_area/checkout.php?product_id=$product_id' class='btn btn-info'>Rent</a>
        
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
                        <a href='product.php?brand_id=$brand_id' class='nav-link text-light'>$brand_name</a>
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
        <a href='product.php?category_id=$category_id' class='nav-link text-light'>$category_name</a>
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
        
        <a href='index1.php?add_to_cart=$product_id' class='btn btn-info'>Add to Favorites</a>
        <a href='./product_detail.php?product_id=$product_id' class='btn btn-secondary'>View Details</a>
        <a href='./user_area/checkout.php?product_id=$product_id' class='btn btn-info'>Rent</a>
        
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
       
        
        $product_features= $row['product_features'];
        $list_features = explode(",",$product_features);
        
        echo "
        <div class='row'>
    <div class='col-md-5 mb-3'>
        <div class='card mb-4'>
        <h5 class='card-title p-2' style='text-align:center; font-weight:bold; color:green;'>$product_title</h5>
        <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
        <div class='card-body text-center'>
        <p class='card-text'>$product_description</p>
        <p class='card-text'style='font-weight:bold;'>Price:$product_price/week</p>
        
        <a href='./user_area/checkout.php?product_id=$product_id' class='btn btn-info'>Rent</a>
        <a href='index1.php?add_to_cart=$product_id' class='btn btn-secondary'>Add to Favorites</a>
        
        <a href='index1.php' class='btn btn-info'>Go Home</a>
        
        </div>
        </div>
            <div class='reviews'>
            <h3 class='fw-bold text-center'>Reviews and Ratings</h3>";

         $select_reviews="SELECT * FROM `reviews` where product_id=$product_id";
         $result_reviews = mysqli_query($con,$select_reviews);
        while($row_reviews=mysqli_fetch_assoc($result_reviews)){
            $comment = $row_reviews['comment'];
            $star = $row_reviews['star'];
            $date = $row_reviews['date'];
            $review_username = $row_reviews['username'];
            $select_image = "SELECT * FROM `user_table` WHERE username='$review_username'";
            $result_image = mysqli_query($con,$select_image);
            $row_user = mysqli_fetch_assoc($result_image);
            $image = $row_user['user_image'];

    echo "<div class='d-flex align-items-start mb-2' style='border:3px solid  rgba(24, 122, 149, 0.638); padding: 20px; margin-right: 15px;'>
    <img src='./user_area/user_images/$image' alt='Profile Picture' style='width: 40px; height: 40px; border-radius: 50%; margin-right: 10px; object-fit: cover;'>
    <div class='flex-grow-1'>
        <div class='d-flex'>
            <div>
                <h3 style='font-size: 16px; font-weight: bold; margin-right: 10px;'>$review_username</h3>
                <p style='font-size: 14px; color: grey;'>$date</p>
            </div>
            <div class='d-flex'>
                <p style='margin-right: 5px;'></p>";
                for($i=0;$i<$star;$i++){
                echo"
                
                <i class='fa fa-star text-secondary'></i>";
                }
                echo"
            </div>
        </div>
        <p style='margin-right: 30px;'>$comment</p>
    </div>
</div>";}
        


         



                
       echo"     </div>
    </div>
    
    
    <div class='col-md-7'>
                    
                <div class='row' style='margin-top:30px;'>
                    <div class='col-md-6'>
                    <img src='./admin_area/product_images/$product_image2' class='card-img-top' alt='$product_title'>
                    </div>
                    <div class='col-md-6'>
                    <img src='./admin_area/product_images/$product_image3' class='card-img-top' alt='$product_title'>
                    </div>
                </div>
                

                <div class='row' style='margin-top:30px; margin-left:15px;'>";
                echo "<h3 style='color:green;'>Key Features</h3>";

                echo"<ul>";
                foreach($list_features as $list){
                    echo "<li>". trim($list) . "</li>";
                }
                echo"</ul>";
                if(isset($_SESSION['username']))
                {
                $username = $_SESSION['username'];
                echo $username;
                
                echo"
            <form method='post'>
                <h4 class='fw-bold my-2'>Leave a Reply</h4>
                <div class='row'>
                                    <div class='col-lg-12'>
                                        <div class='border-bottom rounded'>
                                            <textarea name='review' id='' class='form-control' cols='30' rows='8' placeholder='Your Review *' spellcheck='false' style='border:3px solid aqua; border-radius:14px;'></textarea>
                                        </div>
                                    </div>
                                    <div class='col-lg-12'>
                                        <div class='d-flex justify-content-between py-3 mb-5'>
                                            <div class='d-flex align-items-center'>
                                                <p class='mb-0 me-3 fw-bold'>Please rate:</p>
                                                <div class='d-flex align-items-center' style='font-size: 12px;'>
                                                    <label for='star' style='color:red; font-size:20px;'><i class='fa-regular fa-star'></i>Star :</label>
                                                <select name='star' id='star' style='color:green; font-size:20px; '>
                                                    <option value='5'>5</option>
                                                    <option value='4'>4</option>
                                                    <option value='3'>3</option>
                                                    <option value='2'>2</option>
                                                    <option value='1'>1</option>
                                                </select>
                                                </div>
                                            </div>
                                            
                                            <button type='submit' name='post_comment' class='btn btn-secondary rounded-pill px-4 py-3 '>Post Comment</button>
            </form>
                                        </div>
                                    </div>
                                </div>
                            
                </div>

            </div>
        
        
        </div>";
       if(isset($_POST['post_comment']))
       {
        
        $comment = $_POST['review'];
        $star = $_POST['star'];

        $insert_comment = "INSERT INTO `reviews`(product_id,username,comment,star) VALUES($product_id,'$username','$comment',$star)";
        $result_comment = mysqli_query($con,$insert_comment);
        if($result_comment){

        echo "<script>window.alert('comment posted succussfully')</script>";
        echo "<script>window.open('./product_detail.php?product_id=$product_id','_self')</script>";
        }
        else
        {
            echo "<script>window.alert('comment posting failed')</script>";
        }
    }


    }
    else{
        echo"
               
        <h4 class='fw-bold my-2'>Leave a Reply</h4>
        <div class='row'>
                            <div class='col-lg-12'>
                                <div class='border-bottom rounded'>
                                    <textarea name='review' id='' class='form-control' cols='30' rows='8' placeholder='Your Review *' spellcheck='false' style='border:3px solid aqua; border-radius:14px;'></textarea>
                                </div>
                            </div>
                            <div class='col-lg-12'>
                                <div class='d-flex justify-content-between py-3 mb-5'>
                                    <div class='d-flex align-items-center'>
                                        <p class='mb-0 me-3 fw-bold'>Please rate:</p>
                                        <div class='d-flex align-items-center' style='font-size: 12px;'>
                                            <label for='star' style='color:red; font-size:20px;'><i class='fa-regular fa-star'></i>Star :</label>
                                        <select name='star' id='star' style='color:green; font-size:20px; '>
                                            <option value='5'>5</option>
                                            <option value='4'>4</option>
                                            <option value='3'>3</option>
                                            <option value='2'>2</option>
                                            <option value='1'>1</option>
                                        </select>
                                        </div>
                                    </div>
                                    <a href='./user_area/user_login.php' class='btn btn-secondary rounded-pill px-4 py-3'>Login</a>
                                    
                                </div>
                            </div>
                        </div>
                    
        </div>

    </div>


</div>";

    }


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
            echo "<script>alert('Bike alredy present in favorites')</script>";
            echo "<script>window.open('product.php','_self')</script>";
        }
        else{
            $insert_query = "INSERT INTO `cart_details` (product_id, ip_address, quantity) VALUES ($get_product_id,'$get_ip_address',1)";
            $result_query = mysqli_query($con,$insert_query);
            echo "<script>alert('Bike sucussfully added to Favorites')</script>";
            echo "<script>window.open('cart.php','_self')</script>";
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
                        <p class='text-center'><a href='profile.php?my_order' class='text-dark'>Order Details</a>"; 
                                               
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