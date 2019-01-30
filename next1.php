<html>
<head>
    <style>
     body{
        background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
         text-align: center;
         text-shadow: 1px 2px 4px #000000;
         font-size: 40px;
    }
    
    </style>
    <title>transfer</title></head>
<body style="background-image:url(1.jpg); ">
    
    <?php
    echo "<br>";echo "<br>";echo "<br>";echo "<br>";
    $sid = $_GET['id'];
    $sname  = $_GET['sname'];
    $scredit = $_GET['scredit']; 
$connection = mysqli_connect("localhost","root","","user");
if(isset($_POST['submit'])){
   // $sname=$_POST['sname'];
   // $sid=$_POST['sid'];
    $rname=$_POST['rname'];
   /* $rid=$_POST['rid'];*/
    $amt=$_POST['amt'];
}
mysqli_autocommit($connection,FALSE);

$query_id="SELECT * from users WHERE user_name ='$rname'";

$result_id=mysqli_query($connection,$query_id);
$row=mysqli_fetch_assoc($result_id);
$rid =$row['user_id'];
if($rid>0 and ($scredit-$amt)>100 ){
    if($sid == $rid){
        echo "Cannot transfer credits to yourself.";
            mysqli_rollback($connection);
    }
    else{
    $query1="INSERT INTO transfer(sender_id,sender,receiver_id,receiver,credit)
    VALUES ('$sid','$sname','$rid','$rname','$amt')";
$result1=mysqli_query($connection,$query1);
    
$query2="UPDATE users SET user_credit = user_credit-'$amt'  WHERE user_id = '$sid'" ;
$res2=mysqli_query($connection,$query2);

    $query3="UPDATE users SET user_credit = user_credit+'$amt'  WHERE user_id = '$rid' ";
$res3=mysqli_query($connection,$query3);
    
    
    if($result1 and $res2 and $res3){
        echo "Transaction successful.";
         mysqli_commit($connection);
    }
    else{
        echo "Transaction failed.";
        mysqli_rollback($connection);
    }}
}
        else{
            echo "Invalid Receiver or Insufficient Balance";
            echo "<br>";
            echo "Transaction failed.";
        }
        echo "<br>";echo "<br>";
?>
    
    <a href="2.php">View all users</a>
    </body>

</html>