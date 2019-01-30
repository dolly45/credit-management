<html>
<head><style>
        table,td,th{
            border:1px solid black;
            border-collapse:collapse;
            font-weight: bolder;
        }
        td,th{
            padding:12px;
            text-align:left;
        }
    thead{
        font-size: 30px;
    }
    body{
        background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
    }
    
        </style>
    
    <title>
    All users</title></head>
<body style="background-image:url(1.jpg); ">
    <?php
    $connection = mysqli_connect("localhost","root","","user");
    $query1="SELECT * FROM users";
    $res1=mysqli_query($connection,$query1);
?>
    
    <table style="width:100%">
        <thead>
    <tr>
        <th>User_ID</th>
        <th>User_Name</th>
        <th>User_Email</th>
        <th>User_Credit</th>
        </tr></thead>
        <tr>
            <tbody>
            <?php
                while( $rows = mysqli_fetch_assoc($res1)){
                    ?>
            <tr>
                <td><?php echo $rows['user_id'];?></td>
                <td><a href="next.php?id=<?php echo $rows['user_id']?>&sname=<?php echo $rows['user_name']?>&scredit=<?php echo $rows['user_credit']?> " style="color:black;"><?php echo $rows['user_name'];?></a></td>
                <td><?php echo $rows['user_email'];?></td>
                <td><?php echo $rows['user_credit'];?></td>
                </tr>
                <?php             }
                ?>            
            </tbody></table>
    
          
    </body></html>