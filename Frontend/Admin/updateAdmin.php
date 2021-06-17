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
  
        <h1 class="text-center text-title-Don text-light">Update Thông tin</h1>
        <?php
         
                $id = $_GET['edit'];
                include('connect.php');
                $lenh = "select * from taikhoanadmin where maAdmin=$id";
                $kq = mysqli_query($conn,$lenh);
                
                while($row = mysqli_fetch_row($kq))
                {
                    echo"
                    <div class='form'>
                    <form role='form' method='POST' enctype='multipart/form-data' action='processAdmin.php?id=$id'>
                      <h3 class='text-center'>Chi tiết Thông tin Admin</h3>
                      <div class='form-group row'>
                        <label for='Id' class='col-sm-5 col-form-label'
                          >Mã </label
                        >
                        <div class='col-sm-7'>
                          <input
                            type='text'
                            readonly
                            class='form-control-plaintext'
                            id='Id'
                            name='id'
                            value = '$row[0]'
                          
                          />
                        </div>
                      </div>
                      <div class='form-group row'>
                        <label for='inputTaiKhoan' class='col-sm-5 col-form-label'
                          >Tên Tài Khoản</label>
                        <div class='col-sm-7'>
                          <input
                            type='text'
                            class='form-control'
                            id='inputTaiKhoan'
                            name='TaiKhoan'
                            value = '$row[2]'
                       
                          />
                        </div>
                      </div>
        
                      <div class='form-group row'>
                        <label for='inputPassword' class='col-sm-5 col-form-label'
                          >Mật Khẩu</label
                        >
                        <div class='col-sm-7'>
                          <input
                            type='text'
                            class='form-control'
                            id='inputPassword'
                            name='password'
                            value = '$row[3]'
                          />
                        </div>
                      </div>
                      <div class='form-group row'>
                        <label for='Email' class='col-sm-5 col-form-label'>Email</label>
                        <div class='col-sm-7'>
                          <input
                            type='text'
                            class='form-control'
                            id='Email'
                            name='email'
                            value = '$row[1]'
        
                          />
                        </div>
                      </div>
                      <button class='btn btn-primary' type='submit' name='update' onClick='update($row[2])'>
                        Lưu thay đổi
                      </button>
                    </form>
                  </div>
                  ";};
            
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
