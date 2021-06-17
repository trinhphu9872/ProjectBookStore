<?php
    session_start();

    include "connec.php";
    if(isset($_POST['Email']) 
    && isset($_POST['MatKhau']) 
    && isset($_POST['XacNhanMatKhau'])
    && isset($_POST['TenTk'])
    && isset($_POST['DiaChi'])
    && isset($_POST['Phone'])
    && isset($_POST['GioiTinh'])
    && isset($_POST['NgaySinh'])) {
        
        function validate($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $Email = validate($_POST['Email']);
        $MatKhau = validate($_POST['MatKhau']);
        $XacNhanMatKhau = validate($_POST['XacNhanMatKhau']);
        $TenTk = validate($_POST['TenTk']);
        $DiaChi = validate($_POST['DiaChi']);
        $Phone = validate($_POST['Phone']);
        $GioiTinh = validate($_POST['GioiTinh']);
        $NgaySinh = validate($_POST['NgaySinh']);

        $check_UserName = "SELECT * FROM taikhoan WHERE Email = '$Email'";
        $check_result = mysqli_query($conn, $check_UserName);

        if($MatKhau != $XacNhanMatKhau) {
            header("Location: Registration.php?error=Xác nhận mật khẩu phải giống với mật khẩu hiện tại");
            exit();
        }

        if(mysqli_num_rows($check_result) === 1) {
            header("Location: Registration.php?error=Tên đăng nhập đã tồn tại");
            exit();
        }

        $sql = "INSERT INTO taikhoan (Email, MatKhau, TenTk, DiaChi, Phone, GioiTinh, NgaySinh)
        VALUES ('$Email', '$MatKhau', '$TenTk', '$DiaChi', '$Phone', '$GioiTinh', '$NgaySinh')";
        $result = mysqli_query($conn, $sql);

        if($result) {
            $sql_login = "SELECT * FROM taikhoan WHERE Email = '$Email'";
            $login_result = mysqli_query($conn, $sql_login);
            
            $row = mysqli_fetch_assoc($login_result);
            $_SESSION['maKH'] = $row['maKH'];
            $_SESSION['TenTk'] = $row['TenTk'];

            header("Location: Index.php");

        } else {
            header("Location: Registration.php?error=Thông tin không hợp lệ");
            exit();
        }
    }
?>