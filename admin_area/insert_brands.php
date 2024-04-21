<?php  
  include "../includes/connect.php";
  if(isset($_POST['insert_brand'])){
    $brand_title = $_POST['Brand_title'];

    //select data fromthe databases
    $select_query = "SELECT * FROM `brands` where (brand_name)='$brand_title'";
    $result_select = mysqli_query($con,$select_query);
    $number = mysqli_num_rows($result_select);
    if($number>0){
      echo "<script>alert('Brand already present in the database. Cannot be inserted')</script>";
    }
    else{

    $insert_query = "INSERT into `brands` (brand_name) VALUES ('$brand_title')";
    $result = mysqli_query($con,$insert_query);

    if($result){
      echo "<script>alert('Brand has been succussfully inserted')</script>";
    }
  }

  }



?>


<h2 class="text-center">Insert Brands</h2>
<form action="" method="post" class="mb-2">
<div class="input-group w-90 mb-2">
  <span class="input-group-text" style="background-color:darkgreen;" id="basic-addon1"><i class="fa-solid fa-reciept"></i></span>
  <input type="text" class="form-control" name="Brand_title" placeholder="Insert Brands" aria-label="brands" aria-describedby="basic-addon1">
</div>

<div class="input-group w-10 mb-2 m-auto">
  
<input type="submit" class="border-0 p-2 my-3" style="background-color:darkgreen;" name="insert_brand" value="Insert Brands">
  
</div>

</form>