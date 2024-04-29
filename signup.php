<?php
include('db_connect.php');
if(isset($_POST['signup'])){
    $username =$_POST['username'];
    $password =$_POST['password'];

    $query="INSERT INTO user_acount VALUES('','$username','$password')";
    if(mysqli_query($conn_db,$query)==true){
        echo "account is created";} 
        else{
            echo "acount is not created";
        }  
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
</head>
<body>
    <h1>signup</h1>
   <form action="" method="post">
    <div>
        <input type="text" name="username" required placeholder="username">
</div>
<div>
    <input type="password" name="password" required placeholder="password">
</div>
<div>
    <input type="submit" name="signup" value="signup">
</div>
</form>
<a href="index.php">login</a>

    
</body>
</html>
