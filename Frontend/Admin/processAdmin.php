<?php

    $mysqli = new mysqli("127.0.0.1", "root", "","dbbook") or die(mysqli_error($mysqli));

    // add

    if (isset($_POST['add'])){
        
        $TaiKhoan = $_POST['TaiKhoan'];
        $MatKhau = $_POST['password'];
        $email = $_POST['email'];
        $mysqli->query("INSERT INTO taikhoanadmin (maAdmin, Email, tenAdmin, matKhau) VALUES ('','$email','$TaiKhoan','$MatKhau') ") or die(mysqli->error);
        header("Location:AdminInfo.php");
    }
    //Del
    if (isset($_GET['delete'])){
        $id = $_GET['delete'];
        $mysqli->query("DELETE FROM taikhoanadmin WHERE maAdmin=$id") or die(mysqli.error);
        header("Location:AdminInfo.php");
    }
    // getDataa
    if (isset($_POST['update'])) {
        $id = $_GET['id'];
        $maKH = $_POST['id'];
        $TaiKhoan = $_POST['TaiKhoan'];
        $MatKhau = $_POST['password'];
        $email = $_POST['email'];
        $mysqli->query("UPDATE taikhoanadmin SET maAdmin='$maKH',Email='$email',tenAdmin ='$TaiKhoan', matKhau='$MatKhau' WHERE maAdmin = $id ") or die(mysqli->error);
        header("Location:AdminInfo.php");
    }
?>
 