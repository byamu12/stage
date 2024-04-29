<?php 
session_start();
if(!isset($_SESSION['username'])) {
header("location../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>welcome to admin dashboard</h1>
    <a href="add_trade">add_trade</a>
    <a href="tranee">add_tranee</a>
    <a href="add_marks">add_marks</a>
    <a href="logout">logout</a>

</body>
</html>