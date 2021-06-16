<?php
     $id = ' ';                
     $TaiKhoan = ' ';                
     $password = '';                      
     $email = ' ';  
    $mysqli = new mysqli("127.0.0.1", "root", "","dbbook") or die(mysqli_error($mysqli));
    //Del
    if (isset($_GET['delete'])){
        $id = $_GET['delete'];
        $mysqli->query("DELETE FROM taikhoan WHERE maKH=$id") or die(mysqli.error);
        header("Location:UserInfo.php");
    }
    // getDataa
    if (isset($_POST['update'])) {
        $id = $_GET['id'];
        $maKH = $_POST['id'];
        $TaiKhoan = $_POST['TaiKhoan'];
        $MatKhau = $_POST['password'];
        $email = $_POST['email'];
        $mysqli->query("UPDATE taikhoan SET maKH='$maKH',Email='$email',tenTk ='$TaiKhoan', matKhau='$MatKhau' WHERE maKH = $id ") or die(mysqli->error);
        header("Location:UserInfo.php");
    }
?>
 