<?php 
    include "../includes/connect.php";
    include "../functions/common_functions.php";
  @session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
   <style>
        img{
            width: 100%;
        }
    </style>
    <link rel="stylesheet" href="./css/payment.css">
</head>
<body>
    <?php
   $user_ip = getIPAddress();
    $get_user="SELECT * FROM `user_table` WHERE user_ip='$user_ip'";
    $result = mysqli_query($con,$get_user);
    $run_query=mysqli_fetch_assoc($result);
    $user_id=$run_query['user_id']; 
    $product_id = $_GET['product_id'];
    $name = $_SESSION['username'];
    $get_user_id = "SELECT * FROM `user_table` WHERE username='$name'";
    $result_user_id =mysqli_query($con,$get_user_id);
    $row_user_id = mysqli_fetch_assoc($result_user_id);
    $user_personal_id = $row_user_id['user_id'];



    ?>
    
   
    <header>
        <div class="container">
            <div class="left">
                <h3>Billing Address</h3>
                
                <form action="" method="post">
                Full Name
                <input type="text" name="full_name" placeholder="Enter your Full name">
                
                Delivery Address
                <input type="text" name="address" placeholder="Enter your Delivery Address ">
                City
                <input type="text" name="city" placeholder="Enter your city name">
                
                Street
                <input type="text" name="street" placeholder="Enter your Street name">
              
               Email
                <input type="email" name="email" placeholder="example@gmail.com">
               Contact
                <input type="text" name="contact" placeholder="9283748923">

                <div id="zip">
                    <label>
                        State
                        <select name="province" id="">
                            <option value="">Choose a Province</option>
                            <option value="1">Province 1</option>
                            <option value="2">Province 2</option>
                            <option value="3">Province 3</option>
                            <option value="4">Province 4</option>
                            <option value="5">Province 5</option>
                            <option value="6">Province 6</option>
                            <option value="7">Province 7</option>
                        </select>
                    </label>
                    <label for="">Zip code
                        <input type="number" placeholder="Zipo code">
                    </label>
                </div>
                <div class="date">
                <label for="">From Date
                <input type="date" name="from_date" placeholder="Enter starting date you want to rent"></label>
               <label for="">
                To Date
                <input type="date" name="to_date" placeholder="Enter your Ending date"></label>
                </div>

               

            </div>
            <div class="right">
            <h3>Payment</h3>
            
                Accepted Payment
                <img src="./user_images/esewa.jpg" alt="photos" height="50px;" width="100%" style=" object-fit: contain;">
                
               
              
               

                <div id="payment">
                    <label>
                        Payment Options</label>
                        <select name="payment" id="">
                            <option value="">Choose an option</option>
                            <option value="cash">Cash in Hand</option>
                            <option value="bank">Bank Transfer</option>
                            <option value="esewa">Esewa</option>
                            <option value="khalti">Khalti</option>
                            <option value="cheque">Cheque</option>
                            
                        </select>
                    </label>
                   
                </div>
               
                <input type="submit" name="place_order" value="Place an order">
              

              
                </form>



            </div>
        </div>
    </header>
  

    
</body>
</html>
<?php 
 if(isset($_POST['place_order']))
 {
  
   
   
    $from_date = $_POST['from_date'];
    $to_date = $_POST['to_date'];
    $fullname = $_POST['full_name'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $street = $_POST['street'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $province = $_POST['province'];
    $payment = $_POST['payment'];
    $invoice_number = rand();

    



    $insert_order= "INSERT INTO `orders_pending`(`user_id`,`invoice_number`,`ip_address`,`product_id`, `from_date`, `to_date`, `order_status`, `fullname`, `address`, `city`, `street`, `email`, `contact`, `province`, `payment`) VALUES ($user_personal_id,$invoice_number,'$user_ip','$product_id','$from_date','$to_date','pending','$fullname','$address ','$city','$street','$email','$contact','$province','$payment')";
    $order_query=mysqli_query($con,$insert_order);
    echo "<script>window.alert('Order succusfully placed')</script>";


     echo "<script>window.open('profile.php?user_id=$user_personal_id','_self')</script>";
    

 }

?>
