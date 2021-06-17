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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

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
  
        <h1 class="text-center text-title-Don text-light">Update sản phẩm</h1>
        <?php
            $idPro = $_GET["edit"];
            include("connect.php");
            $lenh = "select * from donhang where MaDH = $id";
            $kq = mysqli_query($conn,$lenh);
                while($row = mysqli_fetch_row($kq)) {
                    echo"
                    <form style='width:650px' class='px-5 ' role='form' method='POST' enctype='multipart/form-data' action='processOrder.php?id=$id'>
                    <div class='form-group'>
                         <label for='maKH'><i class='fa fa-user'></i> Mã Khách Hàng</label>
                          <input 
                             type='number'
                             name='MaKH'
                             id='maKH'
                             value = '$row[1]'/>
                     </div>
                     <div class='form-group'>
                     <label for='PhoneNguoiNhan'><i class='fa fa-address-book'></i> Số điện thoại</label>
                      <input 
                         type='text'
                         name='PhoneNguoiNhan'
                         id='PhoneNguoiNhan'
                         class='form-control input-sm'
                  
                         value = '$row[2]'
                     </div>
                     <div class='form-group'>
                     <label for='DiaChiNguoiNhan'><i class='fa fa-address-book'></i> Địa Chỉ </label>
                      <input 
                         type='text'
                          name='DiaChiNguoiNhan'
                          id='DiaChiNguoiNhan'
                          class='form-control input-sm'
                
                          value = '$row[3]'
                     </div>
                     <label for='ThoiGianTao'><i class='fa fa-address-book'></i> Ngày Tạo </label>
                     <input 
                        type='date'
                         name='ThoiGianTao'
                         id='ThoiGianTao'
                         class='form-control input-sm'
               
                         value = '$row[4]'
                    </div>
                    <label for='PhuongThucThanhToan'><i class='fa fa-address-book'></i> Thanh Toán </label>
                    <input 
                       type='text'
                        name='PhuongThucThanhToan'
                        id='PhuongThucThanhToan'
                        class='form-control input-sm'
                   
                        value = '$row[5]'
                   </div>
                   <label for='TongGiaTriDonHang'><i class='fa fa-address-book'></i> Tổng Giá </label>
                   <input 
                      type='text'
                       name='TongGiaTriDonHang'
                       id='TongGiaTriDonHang'
                       class='form-control input-sm'
                       placeholder='Tên Tác giả'
                       value = '$row[6]'
                  </div>
                    
                
                  <button type='submit' id='btnUpdate' type='button' name='update' onClick='editPro($row[1])' class='btn btn-success'>
                    Update
                  </button>
             <from/>
                    
                

                };
       
            ?>
        </div>
    </div>  

    <!-- Bootstrap -->
    <script src='js/jquery.min.js'></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

    <!-- Date Picker -->
    <!-- <script src="js/jquery-ui.min.js"></script> -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/datepicker.js"></script>
    <script src="js/Product.js"></script>





    <!-- <script src="js/modal.js"></script> -->

    <script type="text/javascript">
      $(document).ready(function () {
        $("#sidebarCollapse").on("click", function () {
          $("#sidebar").toggleClass("active");
        });
      });
 

    </script>
    
      
    </script>

  </body>
</html>
