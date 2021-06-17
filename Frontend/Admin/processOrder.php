<?php

$mysqli = new mysqli("127.0.0.1", "root", "","dbbook") or die(mysqli_error($mysqli));
if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM donhang WHERE MaDH=$id") or die(mysqli.error);
    header("Location:Order.php");
}

if (isset($_POST['update'])){
    $id = $_GET['id'];
    $MaKH = $_POST['MaKH'];
    $PhoneNguoiNhan = $_POST['PhoneNguoiNhan'];
    $DiaChiNguoiNhan = $_POST['DiaChiNguoiNhan'];
    $ThoiGianTao = $_POST['ThoiGianTao'];
    $PhuongThucThanhToan = $_POST['PhuongThucThanhToan'];
    $TongGiaTriDonHang = $_POST['TongGiaTriDonHang'];        

    
    $mysqli->query("UPDATE  donhang set  MaDH='$id' , MaKH='$MaKH', PhoneNguoiNhan='$PhoneNguoiNhan',ThoiGianTao = '$ThoiGianTao'  , PhuongThucThanhToan='$PhuongThucThanhToan', TongGiaTriDonHang = $TongGiaTriDonHang where MaDH = $id") or die(mysqli.error);
    header("Location:Order.php");
}
?>