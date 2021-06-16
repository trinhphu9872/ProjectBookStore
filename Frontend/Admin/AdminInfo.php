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
          Thông tin tài khoản Admin
        </h1>
        
        <div class="container my-auto">
        <div class='form'>
                    <form role='form' method='POST' enctype='multipart/form-data' action='processAdmin.php'>
                      <h3 class='text-center'>Thêm tài khoản Admin</h3>
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
                           
        
                          />
                        </div>
                      </div>
                      <button class='btn btn-primary ' type='submit' name='add' onClick='update()'>
                        Lưu Tài Khoản
                      </button>
                    </form>
                  </div>
          
          
          <div class="Data">
            <table class="table table-hover table-light">
              <thead class="thead-dark  ">
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Tên Tài Khoản</th>
                  <th scope="col">Mật khẩu</th>
                  <th scope="col">Email</th>
                  <th scope="col">Chỉnh Sửa</th>
                </tr>
              </thead>
              <tbody>
                <?php require_once 'processUser.php';?>
              <?php
                      include('connect.php');
                      $lenh = "select * from taikhoanAdmin";
                      $kq = mysqli_query($conn,$lenh);
                      
                      while($row = mysqli_fetch_row($kq))
                      {
                        echo"
                        <tr key=$row[0] id='item'>
                            <td>$row[0]</td>
                            <td>$row[2]</td>
                            <td>$row[3]</td>
                            <td>$row[1]</td>
                            <td>
                            <a href='updateAdmin.php?edit=$row[0]'><button class='my-2 btn btn-info' >Edit</button></a>      
                              <a href='processAdmin.php?delete=$row[0]'><button class='my-2 btn btn-danger' onclick='xoa($row[2])' )'>Delete</button></a>
                            </td>
                        </tr>
                        ";
                      };
                   
                  ?>
              </tbody>
            </table>
          </div>
         
        </div>
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
