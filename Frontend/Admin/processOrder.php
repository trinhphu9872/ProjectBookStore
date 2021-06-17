<?php

$mysqli = new mysqli("127.0.0.1", "root", "","dbbook") or die(mysqli_error($mysqli));
if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM donhang WHERE MaDH=$id") or die(mysqli.error);
    header("Location:Order.php");
}

if (isset($_POST['update'])){
    $id = $_GET['id'];
    
    $mysqli->query("DELETE FROM donhang WHERE MaDH=$id") or die(mysqli.error);
    header("Location:Order.php");
}
?>