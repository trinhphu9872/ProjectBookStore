<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Quản lý nhân viên</title>

    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto&display=swap"
      rel="stylesheet"
    />
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- JQuery UI -->
    <link rel="stylesheet" href="css/jquery-ui.min.css" />

    <!-- Animate -->
    <!-- <link rel="stylesheet" href="css/animate.css"> -->

    <!-- My CSS -->
    <link rel="stylesheet" href="css/modal.css" />

    <link rel="stylesheet" href="css/style4.css" />

    <link rel="stylesheet" type="text/css" href="css/main.css" />
  </head>

  <body>
    <div class="wrapper">
      <!-- Sidebar Holder -->
      <?php
         include("sidebar.php");
      
      ?>
      <!-- Page Content Holder -->
      <div id="content">
        <h1 class="text-center text-title-Don text-light">
          Đơn Hàng
        </h1>
        <table class="my-5 table table-bordered table-hover table-light">
                <thead class="text-primary">
                  <tr>
                    <th class="nowrap">
                      <span class="">Mã Chi tiết đơn </span>
                    </th>
                    <th>Mã đơn</th>
                    <th>Sản Phẩm</th>
                    <th>Số lượng </th>
                    <th>Đơn Giá</th>
                    <th>Chiết Khấu</th>
                    <th>Tổng giá trị đơn hàng</th>
              
                  </tr>
                </thead>
                <tbody id="tableDonHang">
                
                <?php
            $id = $_GET['id'];
            include("connect.php");
            $lenh = "SELECT c.MachiTietDH,c.MaDonHang,s.TenSP,c.SoLuong,s.DonGia,c.ChietKhau,c.TongTien FROM chitietdonhang as c , sanpham as s where c.MaDonHang = $id AND c.MaSP = s.MaSP ";
            $kq = mysqli_query($conn,$lenh);
            
            while($row = mysqli_fetch_row($kq))
            {
                echo"
                    <tr key=$row[0] id='item'>
                            <td>$row[0]</td>
                            <td>$row[1]</td>
                            <td>$row[2]</td>
                            <td>$row[3]</td>
                            <td>$row[4]</td>
                            <td>$row[5]</td>
                            <td>$row[6]</td>
                         

                            
                            <td>
                       
                            <a href=''> <button class='my-2 btn btn-info' onclick='edit()'>Edit</button></a>

                            <a href=''> <button class='my-2 btn btn-danger' '>Delete</button></a>
                            </td>
                        </tr>
                        ";

            };
        
        ?>
                </tbody>
              </table>
        
        
      </div>
    </div>

    <!-- Bootstrap -->
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- Date Picker -->
    <!-- <script src="js/jquery-ui.min.js"></script> -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/datepicker.js"></script>
    <script src="./js/User.js"></script>

    <!-- Wow -->
    <!-- <script src="js/wow.min.js"></script>	
	<script>
		new WOW().init();
	</script>  -->

    <!-- <script src="js/modal.js"></script> -->

    <script type="text/javascript">
      $(document).ready(function () {
        $("#sidebarCollapse").on("click", function () {
          $("#sidebar").toggleClass("active");
        });
      });
    </script>
    <script src="./js/DanhSachDonHang.js"></script>
    <script src="./js/DonHang.js"></script>

  </body>
</html>
