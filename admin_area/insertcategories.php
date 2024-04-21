<?php  
  include "../includes/connect.php";

  if(isset($_POST['insert_cat'])){
    $category_title = $_POST['cat_title'];

    //select data fromthe databases
    $select_query = "SELECT * FROM `categories` where (category_name)='$category_title'";
    $result_select = mysqli_query($con,$select_query);
    $number = mysqli_num_rows($result_select);
    if($number>0){
      echo "<script>alert('Category already present in the database. Cannot be inserted')</script>";
    }
    else{

    $insert_query = "INSERT into `categories` (category_name) VALUES ('$category_title')";
    $result = mysqli_query($con,$insert_query);

    if($result){
      echo "<script>alert('Category has been succussfully inserted')</script>";
    }
  }

  }


?>


<h2 class="text-center">Insert Categories</h2>
<form action="" method="post" class="mb-2">
<div class="input-group w-90 mb-2">
  <span class="input-group-text " style="background-color:darkgreen;" id="basic-addon1"><i class="fa-solid fa-reciept"></i></span>
  <input type="text" class="form-control" name="cat_title" placeholder="Insert categories" aria-label="categories" aria-describedby="basic-addon1">
</div>

<div class="input-group w-10 mb-2 m-auto">
  
  <input type="submit" class="border-0 p-2 my-3" style="background-color:darkgreen;" name="insert_cat" value="Insert categories">
  
</div>

</form>