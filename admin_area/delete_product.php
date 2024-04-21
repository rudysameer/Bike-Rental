

<?php
    if(isset($_GET['delete_products'])){
        $delete_id = $_GET['delete_products'];
        echo $delete_id;
        $delete_product = "DELETE FROM `products` WHERE product_id=$delete_id";
        $result_delete = mysqli_query($con,$delete_product);

        if($result_delete)
        {
            echo "<script>alert('Bikes deleted successfully')</script>";
            echo "<script>window.open('./index.php','_self')</script>";

        }
    }


?>