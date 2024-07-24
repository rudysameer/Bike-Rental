<?php 
    include "includes/connect.php";
    include "functions/common_functions.php";
    @session_start();
    error_reporting(0);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- fontawesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
     .cart_img{
        height: 80px;
        width: 90px;
        object-fit: contain;
    }
    </style>

</head>
<body>
   

    <!-- second child -->
    <div class="navbar" style="background-color:black;">
            <img src="/PROJECT/image/img6.png" class="logo" height="7%" width= 7%>
            
            
            <ul>
                
                <li><a href="/project/index1.php">Home</a></li>
                <li><a href="product.php">Products</a></li>
                <li><a href="contact.php">Contact us</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="/project/cart.php"><i class="fa-regular fa-heart"></i> Favorites<sup><?php ?></sup></a></li>
               
                <?php 
                if(isset($_SESSION['username']))
                {
                    echo "<li><a href='./user_area/profile.php'><i class='fa-regular fa-user'></i> My Account</a></li>";
                }
                
                ?>
            </ul>
        </div>  
          <!-- calling cart function -->
    <?php 
        cart();
    
    ?>
    
    

    <!-- third child -->
 

       
    

    <!-- fourth child-table-->
    <div class="container">
        <div class="row">
            <form action="" method="post">
            <table class="table table-bordered text-center" style="margin-top: 30px; border:3px solid black;">
               

                <!-- php code to display dynamic data -->
                    <?php 
                        
                        $grand_total = 0;
                        $get_ip_address = getIPAddress();
                        $cart_query = "SELECT * FROM `cart_details` WHERE ip_address='$get_ip_address'";
                        $result_cart = mysqli_query($con,$cart_query);
                        $result_count = mysqli_num_rows($result_cart);
                        if($result_count>0){
                            echo " <thead>
                            <tr>
                                <th>Product Title</th>
                                <th>Product Image</th>
                                <th>Price</th>

                                
                                <th>Remove</th>
                                <th>Operations</th>
                            </tr>
                        </thead>
                        <tbody>";

                        
                        while($row = mysqli_fetch_array($result_cart))
                        {
                            $product_id = $row['product_id'];
                            $select_product  = "SELECT * FROM `products` WHERE product_id=$product_id";
                            $result_product = mysqli_query($con,$select_product);
                            
                            while($row_product_price = mysqli_fetch_array($result_product))
                            {
                                 // alternate way
                                // $product_price = array($row_product_price['price']);
                                // $array_total = array_sum($product_price);
                                // $grand_total = $array_total+$grand_total;

                                $product_price = $row_product_price['price'];
                                $grand_total += $product_price;
                                $product_title = $row_product_price['product_title'];
                                $product_image1 = $row_product_price['product_image1'];
                                

                            
                        
                                            
                    
                    ?>


                    <tr>
                        <td><?php echo $product_title ?></td>
                        <td><img class="cart_img" src="./admin_area/product_images/<?php echo $product_image1 ?>" alt="Yamahav3"></td>
                        <td><?php echo $product_price ?></td>
                        
                        <!-- aquntites updating -->
                        <?php 
                        $get_ip_address = getIPAddress();
                        if(isset($_POST['update_cart']))
                        {
                            $quantites = $_POST['qty'];
                            $update_quantites = "UPDATE `cart_details` SET quantity=$quantites WHERE ip_address='$get_ip_address'";
                            $result_quantity = mysqli_query($con,$update_quantites);
                            $grand_total*=$quantites;
                            


                        }

                        
                        ?>
                       
                       
                        <td><input type="checkbox" name="removeitem[]" value="<?php echo $product_id;?>"></td>
                        <td>
                            <!-- <button class="bg-info p-2">Update</button> -->
                            <!-- <input class="bg-info p-2" type="submit" value="<?php echo $product_id;?>" name="checkout_bike"> -->
                            <?php echo"  <a href='./user_area/checkout.php?product_id=$product_id' class='btn btn-info'>Rent</a>"; ?>
                            <input class="btn btn-secondary" type="submit" value="Remove Favorites" name="remove_cart">
                            <?php echo"  <a href='./product_detail.php?product_id=$product_id' class='btn btn-secondary'>View Details</a>"; ?>
       
                            <!-- <button class='bg-info p-2'><a href='./user_area/checkout.php' class='text-decoration-none text-light'>Checkout</a></button> -->
                           
                        </td>
                        
                        
                    </tr>
                </tbody>
                <?php }}}
                else{
                    echo "<h2 class='text-center text-danger py-3'>Cart is empty</h2>";
                }
             
             
                
                ?>
            </table>

            <!-- subtotal Div -->
           <div>
            <?php 
           
            $get_ip_address = getIPAddress();
            $cart_query = "SELECT * FROM `cart_details` WHERE ip_address='$get_ip_address'";
            $result_cart = mysqli_query($con,$cart_query);
            $result_count = mysqli_num_rows($result_cart);
            if($result_count>0)
            {
                // echo " <h4 class='px-3'>Sub-total: <strong class='text-info'>$grand_total</strong></h4>
                echo"
                <input class='bg-info p-2' type='submit' value='Countinue Exploring' name='countinue_shopping'>";
            //     <button class='bg-secondary p-2'><a href='./user_area/checkout.php' class='text-decoration-none text-light'>Checkout</a></button>";
            }
            else{
                echo "
                <input class='bg-info p-2' type='submit' value='Countinue Exploring' name='countinue_shopping'>";
            }

            if(isset($_POST['countinue_shopping'])){
                echo "<script>window.open('product.php','_self')</script>";
            }
           
            
            ?>
               
            </div> 

        </div>
    </div>
    </form>

    <!-- function to remove items -->
    <?php 
        function remove_cart_item()
        {
            global $con;
            if(isset($_POST['remove_cart']))
            {
                foreach($_POST['removeitem'] as $remove_id){
                    echo $remove_id;
                    $delete_query = "DELETE FROM `cart_details` WHERE product_id=$remove_id";
                    $run_delete = mysqli_query($con,$delete_query);
                    if($run_delete){
                        echo "<script>window.open('cart.php','_self')</script>";
                    }

                }

            }
        }
     echo $remove_item=remove_cart_item();



    
    ?>


    



    <!-- last child  -->
    <!-- <div class="bg-info p-3 text-center" style="background-color: brown; color: red;">
        <p>All Rights Reserved</p>
    </div> -->
  


    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>