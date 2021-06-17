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
            $lenh = "select * from sanpham where MaSP = $id";
            $kq = mysqli_query($conn,$lenh);
                while($row = mysqli_fetch_row($kq)) {
                   echo "
                   <form style='width:650px' class='px-5 ' role='form' method='POST' enctype='multipart/form-data' action='processPro.php?id=$id'>
                   <div class='form-group'>
                        <label for='MaSanPham'><i class='fa fa-user'></i> Mã Sản Phẩm</label>
                         <input 
                            type='number'
                            name='maSanPham'
                            id='maSanPham'
                            class='form-control '
                            placeholder='Mã sản phẩm'
                            value = '$row[0]'/>
                    </div>
                    <div class='form-group'>
                    <label for='tenSanPham'><i class='fa fa-address-book'></i> Tên Sản Phẩm</label>
                     <input 
                        type='text'
                        name='tenSanPham'
                        id='tenSanPham'
                        class='form-control input-sm'
                        placeholder='Tên sản phẩm'
                        value = '$row[1]'
                    </div>
                    <div class='form-group'>
                    <label for='tenTacGia'><i class='fa fa-address-book'></i> Tên Tác Giả </label>
                     <input 
                        type='text'
                         name='tenTacGia'
                         id='tenTacGia'
                         class='form-control input-sm'
                         placeholder='Tên Tác giả'
                         value = '$row[2]'
                    </div>
                    <div class='form-group'>
                    <label for='tenNXB'><i class='fa fa-address-book'></i> Nhà Xuất Bản</label>
                     <input 
                        value = '$row[3]'
                         type='text'
                         name='tenNXB'
                         id='tenNXB'
                         class='form-control input-sm'
                         placeholder='Nhà Xuất Bản'
                    </div>
                   <div class='form-group my-2'>
                    <label class='text_label_01 mt_01'>   <i class='fa fa-address-book mr-1'></i>Loại Bìa : </label>
                    <select id='BiaSach'    value = '$row[11]'  name='BiaSach' style='padding: 0px; border: 1px solid; border-radius: 0px;'>
                                    <option value='Sách IT'>Bìa cứng</option>
                                    <option value='Sách AV'>Bìa mềm</option>
                     </select>
                  </div>
               
                   <div class='form-group my-1'>
                       </div>
                       <label class='text_label_01 mt_01'>   <i class='fa fa-address-book'></i> Giá: </label>
                       <input 
                         value = '$row[4]' id='DonGia' required   name='DonGia'
                               type='number' class='text_input_01' 
                               placeholder='Đơn Giá'
                             
                               min='1' oninput='validity.valid||(value='');'><samp> (VND)</samp>
               
                     </div>
                     <div class='form-group my-1'>
                     </div>
                     <label class='text_label_01 mt_01'>   <i class='fa fa-address-book'></i> Số lượng: </label>
                    
                     <input 
                     value = '$row[6]' id='SoLuong' required autocomplete='off'  name='soluong'
                           type='number' class='text_input_01' 
                           placeholder='Số lượng'
                       
                           min='1' oninput='validity.valid||(value='');'>
             
                   </div>

                   <div class='form-group my-1'>
                   </div>
                   <label class='text_label_01 mt_01'>   <i class='fa fa-address-book'></i> Kích Thước: </label>
                  
                 
                  <span> 
                  <input 
                  value = '$row[9]' id='KickThuoc' required autocomplete='off'  name='kichthuoc'
                        type='number' class='text_input_01' 
                        placeholder='Kích Thước'
                        min='1' oninput='validity.valid||(value='');'>
                  Cm</span>
           
                 </div>

                 <div class='form-group my-1'>
             
                 <label class='text_label_01 mt_01'>   <i class='fa fa-address-book'></i>Số trang: </label>
                
               
                <span> 
                <input 
                         value = '$row[7]' id='TrongLuong' required autocomplete='off' name='SoTrang'
                               type='number' class='text_input_01' 
                          
                            
                               min='1' oninput='validity.valid||(value='');'>Trang</span>
         
               </div>

                <div class='form-group my-1'>
             
                 <label class='text_label_01 mt_01'>   <i class='fa fa-address-book'></i> Khối Lượng: </label>
                
               
                <span> 
                <input 
                         value = '$row[8]' id='TrongLuong' required autocomplete='off' name='trongluong'
                               type='number' class='text_input_01' 
                               placeholder='Trọng Lượng'
                            
                               min='1' oninput='validity.valid||(value='');'>Kg</span>
         
               </div>
            

              <div >
              <h5>Hình Ảnh</h5>
              <span>
              <input type='file' name='images'>
              <img src='images$row[11]' width='170px'>
              </span>
            

              
             </div>

             <div class='form-group my-1'>
             
             <label class='text_label_01 mt_01'>   <i class='fa fa-address-book'></i> Khối Lượng: </label>
            
           
          
            <label class='text_label_01 mt_01'>Mô tả</label>
                    <textarea required rows='10' cols='70' 
                            id='MoTa' name='mota' 
                            placeholder='Nhập mô tả' >$row[5]
                    </textarea>
     
           </div>
                   
               
                 <button type='submit' id='btnUpdate' type='button' name='update' onClick='editPro($row[1])' class='btn btn-success'>
                   Update
                 </button>
            <from/>
                   ";
              
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
