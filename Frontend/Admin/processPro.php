<?php
    
    $mysqli = new mysqli("127.0.0.1", "root", "","dbbook") or die(mysqli_error($mysqli));
    $Ma = '';
    $Ten = '';
    $TacGia = '';
    $Nxb = '';
    $loai = '';
    $Bia = '';
    $Gia  = '';
    $SoLuong = '';
    $SoTrang = '';
    $kichthuoc = '';
    $trongluong = '';
    $image = '';
    $mota = '';
    if (isset($_POST['add'])){
        $Ma = $_POST['maSanPham'];
        $Ten = $_POST['tenSanPham'];
        $TacGia = $_POST['tenTacGia'];
        $Nxb = $_POST['tenNXB'];
  
        $Bia = $_POST['BiaSach'];
        $Gia  = $_POST['DonGia'];
        $SoLuong = $_POST['soluong'];
        $SoTrang = $_POST['SoTrang'];
        $kichthuoc = $_POST['kichthuoc'];
        $trongluong = $_POST['trongluong'];
        $target_dir ="images/";
        $filename =$_FILES["images"]["name"];
        $target_file = $target_dir .basename($_FILES["images"]["name"]);
        move_uploaded_file($_FILES["images"]["tmp_name"],$target_file);
        $mota = $_POST['mota'];

   


        $mysqli->query("INSERT INTO sanpham(MaSP, TenSP, TacGia, NXB, DonGia, MoTa, SoLuong, SoTrang, TrongLuong, KichThuoc, LoaiBia, ImagePath) VALUES('$Ma','$Ten','$TacGia','$Nxb','$Gia','$mota','$SoLuong','$SoTrang','$trongluong','$kichthuoc','$Bia','$filename')") or die(mysqli->error);
        header("Location:SanPhamAdmin.php");
    };

    if (isset($_GET['delete'])){
        $id = $_GET['delete'];
        $_SESSION['message']= "Xóa thành công";
        $_SESSION['type']= "danger";
        $mysqli->query("DELETE FROM sanpham WHERE MaSP=$id") or die(mysqli.error);
        header("Location:SanPhamAdmin.php");
    }

    if (isset($_POST['update'])){
        $id = $_GET['id'];
      
      
        $Ma = $_POST['maSanPham'];
        $Ten = $_POST['tenSanPham'];
        $TacGia = $_POST['tenTacGia'];
        $Nxb = $_POST['tenNXB'];
  
        $Bia = $_POST['BiaSach'];
        $Gia  = $_POST['DonGia'];
        $SoLuong = $_POST['soluong'];
        $SoTrang = $_POST['SoTrang'];
        $kichthuoc = $_POST['kichthuoc'];
        $trongluong = $_POST['trongluong'];
        $target_dir ="images/";
        $filename =$_FILES["images"]["name"];
        $target_file = $target_dir .basename($_FILES["images"]["name"]);
        move_uploaded_file($_FILES["images"]["tmp_name"],$target_file);
        $mota = $_POST['mota'];
        $mysqli->query("UPDATE sanpham SET MaSP='$Ma',TenSP='$Ten',TacGia ='$TacGia', NXB = '$Nxb',DonGia= '$Gia', MoTa='$mota',SoLuong= '$SoLuong',SoTrang='$SoTrang',TrongLuong ='$trongluong',KichThuoc='$kichthuoc',LoaiBia = '$Bia',ImagePath='$filename' WHERE MaSP = $id ") or die(mysqli->error);
        header("Location:SanPhamAdmin.php");
    };

?>