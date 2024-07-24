<?php 
    include "../includes/connect.php";
    @session_start();
?>

<?php 
if(isset($_SESSION['admin_username'])){
    $admin_name = $_SESSION['admin_username'];
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Responsive Pending Order </title>
   
    <!-- <link rel="stylesheet" href="./admin_css/pendingorder.css"> -->
   
  <style>
       * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url('product_images/helmetrider.jpg'); /* Replace 'your-image-url.jpg' with the actual URL of your background image */
            background-size: cover;
            background-repeat: no-repeat;
        }

        main.table {
            width: 150vh;
            height: 90vh;
            background-color: rgba(255, 255, 255, 0.8); /* Optional: Adds a semi-transparent white background to the table */
            padding: 20px; /* Optional: Adds padding to the main container */
            border-radius: 10px; /* Optional: Adds rounded corners to the main container */
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Optional: Adds a subtle shadow effect to the main container */
            overflow: auto; /* Makes the container scrollable */
            position: relative;
        }

        /* Additional styles for table and its content */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
            color: #1e3767; /* Dark blue color for the headings */
            padding: 8px;
            border: 1px solid #ddd;
        }

        td {
            text-align: center;
        }
        tr:hover td {
            background-color: #f0f0f0; /* Light gray background on hover */
        }
        td:nth-child(5), /* 5th column (From Date) */
        td:nth-child(6)  /* 6th column (To Date) */
        {
            width: 120px; /* Adjust the width as needed */
        }
        .home_button {
  display: inline-block;
  padding: 10px 20px;
  text-decoration: none;
  color: white;
  background-color: darkgreen;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
  transition: background-color 0.3s ease;
}

.home_button:hover {
  background-color: green;
}

.home_button:active {
  background-color: forestgreen;
}

  </style>

</head>




<body>
    <main class="table">
        <section class="table_header">
            <h1>Customer's Pending Orders</h1>
            <button><a href="./index.php"  class="home_button">Home</a></button>
        </section>
        <section class="table_body">
        <table>
            <thead>
                <tr>
                    <th>Order_id</th>
                    <th>User_id</th>
                    <th>Invoice_number</th>
                    <th>Product id</th>
                    <th style="width: 100px;">From Date</th>
                    <th>To Date</th>
                    <th>Full name</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Street</th>
                    <th>E-mail</th>
                    <th>Contact</th>
                    <th>Province</th>
                    <th>Payment Method</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php 
    $order_query = "SELECT * FROM `orders_pending`";
    $result_order = mysqli_query($con,$order_query);
    while($row=mysqli_fetch_assoc($result_order))
    {
        $order_id = $row['order_id'];
        $user_id = $row['user_id'];
        $invoice_number = $row['invoice_number'];
        $invoice_number = $row['invoice_number'];
        $product_id = $row['product_id'];
        $from_date = $row['from_date'];
        $to_date = $row['to_date'];
        $order_status = $row['order_status'];
        $fullname = $row['fullname'];
        $address = $row['address'];
        $city = $row['city'];
        $street = $row['street'];
        $email = $row['email'];
        $contact = $row['contact'];
        $province = $row['province'];
        $payment = $row['payment'];



    

?>
                <tr>
                    <td><?php echo $order_id?></td>
                    <td><?php echo $user_id?></td>
                    <td><?php echo $invoice_number?></td>
                    <td><?php echo $product_id ?></td>
                    <td><?php echo $from_date ?></td>
                    <td><?php echo $to_date ?></td>
                    
                    <td><?php echo $fullname ?></td>
                    <td><?php echo $address?></td>
                    <td><?php echo $city ?></td>
                    <td><?php echo $street?></td>
                    <td><?php echo $email?></td>
                    <td><?php echo $contact ?></td>
                    <td><?php echo $province?></td>
                    <td><?php echo $payment ?></td>
                    <td><?php echo $order_status?></td>
                    <td><a href="pendingorder.php?cid=<?php echo $order_id;?>" onclick="return confirm('Do you really want to Confirm this booking')"> Confirm</a> /
                    <a href="pendingorder.php?did=<?php echo $order_id;?>" onclick="return confirm('Do you really want to Cancel this Booking')"> Cancel</a>
                    </td>

                    
                    <!-- <td>
                            <select class="status-dropdown">

                                <option value="">Pending</option>
                                <option value="Confirm">confirm</option>
                                <option value="Reject">Reject</option>
                                
                            </select>
                        </td> -->
                </tr>

                <?php }?>
                <?php 
                        if(isset($_GET['cid']))
                        {
                            $order_id = $_GET['cid'];
                            $update_confirm = "UPDATE `orders_pending` SET order_status = 'Confirmed' WHERE order_id=$order_id";
                            $result_update = mysqli_query($con,$update_confirm);
                            if($result_update){
                                echo "<script>window.alert('Order Confirmed')</script>";
                                echo "<script>window.open('pendingorder.php','_self')</script>";
                            }
                        }
                        if(isset($_GET['did']))
                        {
                            $order_id = $_GET['did'];
                            $update_confirm = "UPDATE `orders_pending` SET order_status = 'Cancelled' WHERE order_id=$order_id";
                            $result_update = mysqli_query($con,$update_confirm);
                            if($result_update){
                                echo "<script>window.alert('Order Cancelled')</script>";
                                echo "<script>window.open('pendingorder.php','_self')</script>";
                            }
                        }

                    
                    
                    
                    ?>
            </tbody>
        </table>
        </section>

    </main>




    
</body>
</html>
<?php }
else{
    echo "<script>window.open('admin_login.php','_self')</script>";

}
?>