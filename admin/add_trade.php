<?php
include("db_connect.php");
session_start();
if(!isset($_SESSION['username'])){
header('location:../index.php? error=🤞 you are traing to hark us');
}
if(isset($_POST['add_trade'])){
    $trade_name=$_POST['trade_name'];
    $query="INSERT INTO trade VALUES('','$trade_name')";
    $result=mysqli_query($conn_db,$query);
    if($result ==true){
    header("location add_trade.php?success= trade is");
}
else{
    header("location: add_trade.php?succes=trade is created");
}

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add trade</title>
</head>
<body>
    <form action=""method="post">
        <div>
            <input type="text" name="trade_name" required placeholder="add trade">
</div>
<div>
    <input type="submit" name="add_trade" value="add_trade">
</div>
</form>
<a href="add_trade.php">addtrade</a>
<a href="logout.php">logout</a> 
</body>
</html>