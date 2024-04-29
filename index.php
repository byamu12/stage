<?php
include("db_connect.php");
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password =$_POST['password'];
    $query="SELECT * FROM user_acount WHERE username='$username' && PASSWORD ='$password' ";
    $result= mysqli_query($conn_db,$query);
    if(mysqli_num_rows($result)>0){
        session_start();
        $_SESSION['username']=$username;
        header("location:admin/index.php");
    }
    else{
            echo "account is not created";
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
    <?php
    if(isset($_GET['error'])){
        ?>
        <div>
            <p><?php echo $_GET['error']?></p>
        <?php 
    }
    ?>
   
    <h1>login</h1>
   <form action="" method="post">
    <div>
        <input type="text" name="username" required placeholder="username">
</div>
<div>
    <input type="password" name="password" required placeholder="password">
</div>
<div>
    <input type="submit" name="login" value="login">
</div>
</form>
<a href="signup.php">signup</a>
    
</body>
</html>
