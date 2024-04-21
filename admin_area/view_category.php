<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Category</title>
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
    color: darkmagenta;
    text-decoration:underline;
}
    </style>
</head>
<body>
    <h3 class="text-underlined">View Categories</h3>


    <table>
        <thead>
            <tr>
                <th>Sno</th>
                <th>Category Id</th>
                <th>Category Name</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $select_categories = "SELECT * FROM `categories`";
            $result_categories = mysqli_query($con,$select_categories);
            $number = 0;
            while($row_categories = mysqli_fetch_assoc($result_categories))
            {
                $categories_id = $row_categories['category_id'];
                $categories_name = $row_categories['category_name'];
                $number++;
            
            
            
            ?>
            <tr>
                <td><?php echo $number;?></td>
                <td><?php echo $categories_id;?></td>
                <td><?php echo $categories_name;?></td>
                <td><a href="index.php?edit_category=<?php echo $categories_id;?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
                <td><a href="index.php?delete_category=<?php echo $categories_id;?>"><i class="fa-solid fa-trash"></i></a></td>
            </tr>
            <?php }?>
        </tbody>
    </table>
    
</body>
</html>