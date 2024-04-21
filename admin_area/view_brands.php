<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Brands</title>
    <style>
        /* General styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;;
}

th, td {
    padding: 8px;
    text-align: left;
    border: 2px solid black;
    justify-content: center;
    text-align: center;
}

/* Table header styles */
thead {
    background-color: #f2f2f2;
}

th {
    background-color: darkcyan;
    color: white;
}

/* Table row styles */
tbody tr:nth-child(even) {
    background-color: burlywood;
}

/* Link styles */
a {
    text-decoration: none;
    color: green;
}

a:hover {
    text-decoration: none;
    color: red;
    background-color: antiquewhite;
}
.text-underlined{
    text-align: center;
    color: darkorange;
    text-decoration:underline;
}
    </style>
</head>
<body>
    <h3 class="text-underlined">View Brands</h3>


    <table>
        <thead>
            <tr>
                <th>Sno</th>
                <th>Brand Id</th>
                <th>Brand Name</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $select_categories = "SELECT * FROM `brands`";
            $result_categories = mysqli_query($con,$select_categories);
            $number = 0;
            while($row_categories = mysqli_fetch_assoc($result_categories))
            {
                $brands_id = $row_categories['brands_id'];
                $brand_name = $row_categories['brand_name'];
                $number++;
            
            
            
            ?>
            <tr>
                <td><?php echo $number;?></td>
                <td><?php echo $brands_id;?></td>
                <td><?php echo $brand_name;?></td>
                <td><a href="index.php?edit_brand=<?php echo $brands_id;?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
                <td><a type="button" data-toggle="modal" data-target="#exampleModal" href="index.php?delete_brand=<?php echo $brands_id;?>"><i class="fa-solid fa-trash"></i></a></td>
            </tr>
            <?php }?>
        </tbody>
    </table>
        <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
      </div>
      <div class="modal-body">
        <h4>Are you sure you want to delete this?</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-primary"><a class="text-decoration-none text-light" href="index.php?delete_brand=<?php echo $brands_id;?>">Yes</a></button>
      </div>
    </div>
  </div>
</div>
<!-- model end  -->
</body>
</html>