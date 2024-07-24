<?php 
    include '../includes/connect.php';
    include '../functions/common_functions.php';
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
    <title>Admin Dashobard</title>

    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- css file -->
    <link rel="stylesheet" href="../css/styleA.css">
     <!-- fontawesome link -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
<style>
    .product_img{
        
            width: 140px;
            object-fit: contain;
        
    }
</style>

</head>
<body>
    <div class="container-fluid p-0">
        <!-- first child -->
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color:lightgreen;">
            <div class="container-fluid">
                <img src="../image/img2.png" alt="" class="logo">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <?php 
                            if(isset($_SESSION['admin_username'])){
                            $admin_name = $_SESSION['admin_username'];
                            }
                            
                        ?>
                        <li class="nav-item">WELCOME <?php echo $admin_name; ?></li>
                    </ul>
                </nav>
            </div>
        </nav>

        <!-- second child -->
        <div class="bg-light">
            <h3 class="text-center p-2">MANAGE DETAILS</h3>
        </div>

        <!-- third Child -->
        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                <div class="px-5">
                    <a href="#"><img src="../image/img10.png" alt="" class="admin_image"></a>
                    <p class="text-light text-center">Admin Mr. <?php echo $admin_name;?></p>
                </div>
                <div class="button text-center">
                    <button class="my-3"><a href="insert_product.php" class="nav-link text-light my-1" style="background-color:darkgreen;">INSERT PRODUCTS</a></button>
                    <button><a href="index.php?view_products" class="nav-link text-light my-1" style="background-color:darkgreen;">VIEW PRODUCTS</a></button>
                    <button><a href="index.php?insert_category" class="nav-link text-light my-1" style="background-color:darkgreen;">INSERT CATEGORIES</a></button>
                    <button><a href="index.php?view_category" class="nav-link text-light my-1" style="background-color:darkgreen;">VIEW CATEGORIES</a></button>
                    <button><a href="index.php?insert_brands" class="nav-link text-light my-1" style="background-color:darkgreen;">INSERT BRANDS</a></button>
                    <button><a href="index.php?view_brands" class="nav-link text-light my-1" style="background-color:darkgreen;">VIEW BRANDS</a></button>
                    <button><a href="pendingorder.php" class="nav-link text-light my-1" style="background-color:darkgreen;">PENDING ORDERS</a></button>
                    <!-- <button><a href="" class="nav-link text-light my-1" style="background-color:darkgreen;">Confirm ORDERS</a></button> -->
                    <button><a href="index.php?list_users" class="nav-link text-light my-1" style="background-color:darkgreen;">LIST USERS</a></button>
                    <br>
                    <button><a href="admin_logout.php" class="nav-link text-light my-1" style="background-color:darkgreen;">LOG-OUT</a></button>
                </div>
               
            </div>
        </div>

        <!-- fourth child -->
        <div class="container my-5">
                <?php 
                    if(isset($_GET['insert_category'])){
                        include ('insertcategories.php');

                    }
                    if(isset($_GET['insert_brands'])){
                        include 'insert_brands.php';
                    }

                    if(isset($_GET['view_products']))
                    {
                        include 'view_products.php';
                    }

                    if(isset($_GET['view_category']))
                    {
                        include 'view_category.php';
                    }
                    if(isset($_GET['edit_products']))
                    {
                        include 'edit_products.php';
                    }
                    if(isset($_GET['delete_products']))
                    {
                        include 'delete_product.php';
                    }
                    if(isset($_GET['view_brands']))
                    {
                        include 'view_brands.php';
                    }
                    if(isset($_GET['edit_brand']))
                    {
                        include 'edit_brand.php';
                    }
                    if(isset($_GET['edit_category']))
                    {
                        include 'edit_category.php';
                    }
                    
                    if(isset($_GET['delete_category']))
                    {
                        include 'delete_category.php';
                    }
                    if(isset($_GET['delete_brand']))
                    {
                        include 'delete_brand.php';
                    }
                    if(isset($_GET['list_users']))
                    {
                        include 'list_user.php';
                    }
                    if(isset($_GET['delete_users']))
                    {
                        include 'delete_users.php';
                    }
                    

                    

                
                ?>


        </div>
        




    </div>




    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
</body>
</html>
<?php }
else{
    echo "<script>window.open('admin_login.php','_self')</script>";

}
?>

