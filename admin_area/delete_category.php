<?php 
    if(isset($_GET['delete_category']))
    {
        $delete_id = $_GET['delete_category'];
        $delete_query = "DELETE FROM `categories` WHERE category_id=$delete_id";
        $result_delete = mysqli_query($con,$delete_query);
        if($result_delete)
        {
            echo "<script>alert('Categories Deleted successfully')</script>";
            echo "<script>window.open('index.php?view_category','_self')</script>";
        }
    }



?>