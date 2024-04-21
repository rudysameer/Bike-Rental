<?php 
    if(isset($_GET['delete_brand']))
    {
        $delete_id = $_GET['delete_brand'];
        $delete_query = "DELETE FROM `brands` WHERE brands_id=$delete_id";
        $result_delete = mysqli_query($con,$delete_query);
        if($result_delete)
        {
            echo "<script>alert('Brand Deleted successfully')</script>";
            echo "<script>window.open('index.php?view_brands','_self')</script>";
        }
    }



?>