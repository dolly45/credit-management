<html>
<head><style>
     body{
        background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
    }
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
        font-size: 20px;
    }
    tbody{
        text-align: center;
    }
    .details{

                height: auto;
                top: 70%;
                left: 50%;
                position: absolute;
                transform: translate(-50%,-50%);
                box-sizing: border-box;
                padding: 30px 40px;
            }

    .details input{
                width: 100%;
                margin-bottom: 10px;
            }
            .details input[type="text"], input[type="password"], input[type="email"]{
                border: none;
                border-bottom: 1px solid #000;
                background: transparent;
                outline: none;
                height: 40px;
                font-size: 16px;
            }
            .details button[type="submit"]{
                border: none;
                outline: none;
                height: 37px;
                background: lightblue;
                color: #fff;
                font-size: 18px;
            }
            .details button[type="submit"]:hover{
                cursor: pointer;
                background: darkblue;
                color: #fff;
            }

   
    </style>
     <title>
     Users</title>
    </head>
    <body style="background-image:url(1.jpg); " >

    <?php
$id = $_GET['id'];
$sname  = $_GET['sname'];
$scredit = $_GET['scredit'];
        $connection = mysqli_connect("localhost","root","","user");
$query="SELECT * FROM users WHERE user_id = $id";
$result=mysqli_query($connection,$query);
$row = mysqli_fetch_assoc($result);
        ?>
        <p style="font-size:18px;text-align:center;"><B>NAME : </B> <?php
       echo $row['user_name'];?> </p>
        <p style="font-size:18px;text-align:center;"><B>EMAIL-ID : </B> <?php
       echo $row['user_email'];?> </p>
        <p style="font-size:18px;text-align:center;"><B>CURRENT BALANCE : </B> <?php
       echo $row['user_credit'];?> </p>
      <B> <?php  echo "Tranfer Table : " ?> </B>
        <?php
        $query1="SELECT * FROM transfer WHERE sender_id = $id ORDER BY trans_id DESC ";
$result1=mysqli_query($connection,$query1);
?>
         <table style="width:100%">
        <thead>
        <tr>
        <th>Transaction no.</th>
        <th>SenderName</th>
        <th>SenderId</th>
        <th>ReceiverName</th>
        <th>ReceiverId</th>
        <th>Credits transferred</th>
        </tr></thead>
        <tr>
        <tbody>
        <?php
            while($rows1 = mysqli_fetch_assoc($result1)){                    ?>
            <tr>
            <td><?php echo $rows1['trans_id'];?></td>
                <td><?php echo $rows1['sender'];?></td>
                <td><?php echo $rows1['sender_id'];?></td>
                <td><?php echo $rows1['receiver'];?></td>
                <td><?php echo $rows1['receiver_id'];?></td>
                <td><?php echo $rows1['credit'];?></td>
            </tr>
            <?php             }
             ?>            
                </tbody></table>
       
<br><br>
         <B><?php echo "**(You can transfer money to the following people only :";
             ?></B>
   <?php
        
        $query2="SELECT * FROM users WHERE user_id != $id";
$result2=mysqli_query($connection,$query2);
while( $row2 = mysqli_fetch_assoc($result2)){
echo $row2['user_name'];
    echo ", ";
}
        echo ")";
?><br><br>
        <div class="details" align="center">
        <form action="next1.php?id=<?php echo "$id"?>&sname=<?php echo "$sname"?>&scredit=<?php echo "$scredit"?>" method="POST" role="form">
	<legend><B style="font-size:20px;">Transfer</B></legend><br>
   <div class="form-group">
		<label for=""><B>Enter Receiver Name : &ensp;&ensp; </B></label>
		<input type="text" name="rname" required>
	</div>
                <div class="form-group">
		<label for=""><B>Enter Amount : &nbsp; </B></label>
		<input type="text" name="amt" required>
	</div>
<br>
	<button type="submit" name="submit">Transfer</button>
</form>
        </div>
      
    </body></html>