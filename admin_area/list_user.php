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
            border-radius: 8rem;
        }
       
    </style>

    <h2>User's List</h2>
    <table class="table">
        <thead>
            <tr>
                <th>S.no</th>
                <th>User Image</th>
                <th>User ID</th>
                <th>Username</th>
                <th>User Email</th>
                <th>User Address</th>
                <th>USer Contact</th>
                <!-- <th>Delete</th> -->
            </tr>
        </thead>
        <tbody>
            <?php 
                $get_users= "SELECT * FROM `user_table`";
                $result_user = mysqli_query($con,$get_users);
                $number=0;
                while($row = mysqli_fetch_assoc($result_user))
                {
                    $number++;
                    $user_image = $row['user_image'];
                    $user_id = $row['user_id'];
                    $username = $row['username'];
                    $user_email = $row['user_email'];
                    $user_address = $row['user_address'];
                    $user_mobile = $row['user_mobile'];

                

                
            
            
            ?>
        <tr>
            <td><?php echo $number;?></td>
            <td><img src="../user_area/user_images/<?php echo $user_image;?>" alt="" class="product_img"></td>
            <td><?php echo $user_id;?></td>
            <td><?php echo $username;?></td>
            <td><?php echo $user_email;?></td>
            <td><?php echo $user_address;?></td>
            <td><?php echo $user_mobile;?></td>
            <!-- <td><a href="index.php?delete_users=<?php echo $user_id;?>" class="text-dark"><i class="fa-solid fa-trash"></i></a></td> -->
        </tr>
        <?php }?>
       
        </tbody>
    </table>
    <h4>Total Users = <?php echo $number;?></h4>

  