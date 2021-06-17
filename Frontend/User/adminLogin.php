<?php
    

    include "connec.php";
    if(isset($_POST['Email']) && isset($_POST['MatKhau'])) {
        
        function validate($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $Email = validate($_POST['Email']);
        $MatKhau = validate($_POST['MatKhau']);

        $sql = "SELECT * FROM taikhoanadmin WHERE Email = '$Email' and MatKhau = '$MatKhau'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) === 1) {
                header("Location:../Admin");
          
        } else {
            header("Location: Login-Admin.php?error=Sai tài khoản đăng nhập hoặc mật khẩu");
            exit();
        }

    }
    else {
        header("Location: Login-Admin.php?error");
        exit();
    }
?>