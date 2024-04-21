
<?php 

$get_user = "SELECT * FROM `user_table` WHERE username = '$name'";
$result_user = mysqli_query($con,$get_user);
$row_fetch_user = mysqli_fetch_assoc($result_user);
$user_id = $row_fetch_user['user_id'];



?>

<h3 class="text-success">All my orders</h3>
<table class="table table-bordered mt-5 ">
    <thead>
        <tr>
            
            <th>order id</th>
            <th>invoice</th>
            <th>Rented Bike</th>
            <th>From date</th>
            <th>To date</th>
            <th>Address</th>
            <th>Street</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Payment</th>
            <th>Total Amount</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody class="bg-secondary">
        <?php 
            $user_orders = "SELECT * FROM `orders_pending` WHERE user_id=$user_id";
            $result_order = mysqli_query($con,$user_orders);
            while($row_orders = mysqli_fetch_assoc($result_order))
            {
               
                $order_id = $row_orders['order_id'];
                $invoice = $row_orders['invoice_number'];
                $fromdate = $row_orders['from_date'];
                $todate = $row_orders['to_date'];
                $address = $row_orders['address'];
                $street = $row_orders['street'];
                $email = $row_orders['email'];
                $contact = $row_orders['contact'];
                $payment = $row_orders['payment'];
                $status = $row_orders['order_status'];

                $product_id = $row_orders['product_id'];
                $user_product = "SELECT * FROM `products` WHERE product_id=$product_id";
                $result_product = mysqli_query($con,$user_product);
                $fetch_product = mysqli_fetch_assoc($result_product);
                $product_title = $fetch_product['product_title'];
                $price = $fetch_product['price'];
                

                

                $invoice_number = $row_orders['invoice_number'];
                echo "<tr>
                
                
                <td>$order_id</td>
                <td>$invoice</td>
                <td>$product_title</td>
                <td>$fromdate</td>
                <td>$todate</td>
                <td>$address</td>
                <td>$street</td>
                <td>$email</td>
                <td>$contact</td>
                <td>$payment</td>
                <td>$price</td>
                <td>$status</td>
            </tr>";
            

            }

        
        
        ?>
        
    </tbody>

</table>

