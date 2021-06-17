
<?php
   
  include ("connec.php");
  if(isset($_POST['dangnhap'])){ 
      $Email = $_POST['Email'];
      $Pass = $_POST['MatKhau'];
     
      $select = ("SELECT * FROM taikhoan WHERE Email='$Email' and  matKhau = '$Pass'") or die(mysqli.error);
      $kq = mysqli_query($conn,$select);
      if (mysqli_num_rows($kq) > 0) {
        header("location:index.php");
      }else{
            alert("Lỗi Đăng Nhập");
            header("location: Login-Admin.php");
      }   
  }
?>