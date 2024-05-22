<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Products</title>
    <style>
        h2{
            text-align: center;
            color: darkcyan;
        }
        .table,tr{
            border: 2px solid goldenrod;
            justify-content: center;
            text-align: center;
            margin-top: 30px;
        }
        th{
            
            border: 2px solid goldenrod;
        }
        td{
            border: 2px solid goldenrod;
        }
        .product_img{
            width: 140px;
            object-fit: contain;
        }
       
    </style>
</head>
<body>
    <h2>View Products</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Product Id</th>
                <th>Product Title</th>
                <th>Product Image</th>
                <th>Product Price</th>
                <th>Total Sold</th>
                <th>Status</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $get_products= "SELECT * FROM `products`";
                $result_products = mysqli_query($con,$get_products);
                while($row = mysqli_fetch_assoc($result_products))
                {
                    $product_id = $row['product_id'];
                    $product_title = $row['product_title'];
                    $product_image = $row['product_image1'];
                    $product_price = $row['price'];
                    $status = $row['status'];

                

                
            
            
            ?>
        <tr>
            <td><?php echo $product_id;?></td>
            <td><?php echo $product_title;?></td>
            <td><img class="product_img" src="./product_images/<?php echo $product_image;?>" alt=""></td>
            <td><?php echo $product_price;?></td>
            <td>
                <?php 
                $sold_query = "SELECT * FROM `orders_pending` WHERE product_id=$product_id";
                $result_sold = mysqli_query($con,$sold_query);
                $sold_count = mysqli_num_rows($result_sold);
                echo $sold_count;
                
                
                ?>


            </td>
            <td><?php echo $status;?></td>
            <td><a href="index.php?edit_products=<?php echo $product_id;?>" class="text-dark"><i class="fa-solid fa-pen-to-square"></i></a></td>
            <td><a href="index.php?delete_products=<?php echo $product_id;?>" class="text-dark"><i class="fa-solid fa-trash"></i></a></td>
            
        </tr>
        <?php }?>
       
        </tbody>
    </table>
    <!-- Button trigger modal -->



</body>
</html>