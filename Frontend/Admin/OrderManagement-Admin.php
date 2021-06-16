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
      <nav id="sidebar">
        <div class="sidebar-header">
          <a href="#"><h3 class="title-Book text-center">BookStore</h3></a>
        </div>

        <ul class="list-unstyled components">
          <li>
            <a href="Index--Admin.html">
              <i class="fa fa-home"></i>
              Trang chủ
            </a>
          </li>
          <li>
            <a href="indexInfo-Admin.html">
              <i class="fa fa-user"></i>
              Thông tin tài khoản
            </a>
            <a href="#">
              <i class="fa fa-bell"></i>
              Thông báo của tôi
            </a>
          </li>
          <li>
            <a href="IndexOrder-Admin.html">
              <i class="fa fa-id-card"></i>
              Quản lí đơn hàng
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-tags"></i>
              Quản lí sản phẩm
            </a>
          </li>
        </ul>
        <ul>
          <li class="text-center text"></li>
        </ul>
      </nav>

      <!-- Page Content Holder -->
      <div id="content">
        <h1 class="text-center text-title-Don text-light">Quản lí sản phẩm</h1>
        <div class="container-fluid">
          <div class="card">
            <!-- Header -->
            <div class="card-header myCardHeader">
              <div class="row">
                <div class="col-md-6">
                  <h3
                    class="
                      text-left text-primary text-title-Don
                      font-weight-bold
                    "
                  >
                    Danh Sách Sản Phẩm
                  </h3>
                </div>
                <div class="col-md-6 text-right">
                  <button
                    class="btn btn-primary"
                    id="btnThem"
                    data-toggle="modal"
                    data-target="#myModal"
                  >
                    Thêm Sản Phẩm
                  </button>
                </div>
              </div>
            </div>

            <!-- Body -->
            <div class="card-body">
              <div class="row mb-3">
                <div class="col">
                  <div class="input-group">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Sản phẩm"
                      id="searchName"
                    />
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="btnTimNV"
                        ><i class="fa fa-search"></i
                      ></span>
                    </div>
                  </div>
                </div>
              </div>
              <table class="table table-bordered table-hover myTable">
                <thead class="text-primary">
                  <tr>
                    <th class="nowrap">
                      <span class="">Mã sản phẩm</span>
                    </th>
                    <th>Tên Sản Phẩm</th>
                    <th>Tên Tác Giả</th>
                    <th>Nhà Sản Xuất</th>
                    <th>Loại Sảm Phẩm</th>
                    <th>Loại Sách</th>
                    <th></th>
                    <th><em class="fa fa-cog"></em></th>
                  </tr>
                </thead>
                <tbody id="tableDonHang">
                  <?php
                      include('db_connect.php')
                      $kq = mysqli_query($conn,$lenh);
                                                
                      while($row = mysqli_fetch_row($kq)){
                       echo" <tr key=$row[0]>
                            <td>$row[0]</td>
                            <td>${item.maKH}</td>
                            <td>${item.ngay}</td>
                            <td>${item.pay}</td>
                            <td>${item.price}</td>
                            <td>${item.status}</td>
                            <td>
                              <button class="btn btn-info" data-toggle="modal" data-target="#myModal" onclick="editDon('${item.maDonHang}')">Edit</button>
                              <button class="btn btn-danger" onclick="delDon('${item.maDonHang}')">Delete</button>
                            </td>
                        </tr>"
                      }
                   
                  ?>
                </tbody>
              </table>
            </div>

            <!-- Footer -->
            <div class="card-footer myCardFooter">
              <nav>
                <ul
                  class="pagination justify-content-center"
                  id="ulPhanTrang"
                ></ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- The Modal -->
    <div class="modal fade" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <header class="head-form mb-0">
            <h2 id="header-title">Sản Phẩm</h2>
          </header>

          <!-- Modal Header -->
          <!-- 	<div class="modal-header">
					<h4 class="modal-title" id="modal-title">Modal Heading</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div> -->

          <!-- Modal body -->
          <div class="modal-body">
            <form role="form">
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"
                      ><i class="fa fa-user"></i
                    ></span>
                  </div>
                  <input
                    type="number"
                    name="maSanPham"
                    id="maSanPham"
                    class="form-control input-sm"
                    placeholder="Mã sản phẩm"
                  />
                </div>
                <span class="sp-thongbao" id="tbMaSanPham"></span>
              </div>

              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"
                      ><i class="fa fa-address-book"></i
                    ></span>
                  </div>
                  <input
                    type="text"
                    name="tenSanPham"
                    id="tenSanPham"
                    class="form-control input-sm"
                    placeholder="Tên sản phẩm"
                  />
                </div>
                <span class="sp-thongbao" id="tbTenSanPham"></span>
              </div>

              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"
                      ><i class="fa fa-address-book"></i
                    ></span>
                  </div>
                  <input
                    type="text"
                    name="tenTacGia"
                    id="tenTacGia"
                    class="form-control input-sm"
                    placeholder="Tên Tác giả"
                  />
                </div>
                <span class="sp-thongbao" id="tbTenTacGia"></span>
              </div>

              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"
                      ><i class="fa fa-address-book"></i
                    ></span>
                  </div>
                  <input
                    type="text"
                    name="tenNXB"
                    id="tenNXB"
                    class="form-control input-sm"
                    placeholder="Nhà Xuất Bản"
                  />
                </div>
                <span class="sp-thongbao" id="tbNXB"></span>
              </div>

              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"
                      ><i class="fa fa-address-book"></i
                    ></span>
                  </div>
                 
                  <label class="text_label_01 mt_01">Loại sách : </label>
                            <select id="LoaiSach" autocomplete="off" name="LoaiSach" style="padding: 0px; border: 1px solid; border-radius: 0px;">
								<option value="Sách IT">Sách IT</option>
								<option value="Sách AV">Sách AV</option>
                <option value="Sách VanHoc">Sách Văn Học</option>
							    </select>
                </div>
                <span class="sp-thongbao" id="tbLoaiSach"></span>
              </div>

              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"
                      ><i class="fa fa-address-book"></i
                    ></span>
                  </div>
                 
                  <label class="text_label_01 mt_01">Loại Bìa : </label>
                            <select id="BiaSach" autocomplete="off" name="BiaSach style="padding: 0px; border: 1px solid; border-radius: 0px;">
								<option value="Sách IT">Bìa cứng</option>
								<option value="Sách AV">Bìa mềm</option>
                
							    </select>
                </div>
                <span class="sp-thongbao" id="tbBiaSach"></span>
              </div>

              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"
                      ><i class="fa fa-address-book"></i
                    ></span>
                  </div>
                  
                  <input id="DonGia" required autocomplete="off" 
                          type="number" class="text_input_01" 
                          placeholder="Đơn Giá"
                          min="1" oninput="validity.valid||(value='');"><samp> (VND)</samp>

                </div>
                <span class="sp-thongbao" id="tbDonGia"></span>
              </div>

              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"
                      ><i class="fa fa-address-book"></i
                    ></span>
                  </div>
                  
                  <input id="SoLuong" required autocomplete="off" 
                          type="number" class="text_input_01" 
                          placeholder="Số lượng"
                          min="1" oninput="validity.valid||(value='');">

                </div>
                <span class="sp-thongbao" id="tbSoLuong"></span>
              </div>

              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"
                      ><i class="fa fa-address-book"></i
                    ></span>
                  </div>
                  
                  <input id="SoTrang" required autocomplete="off" 
                          type="number" class="text_input_01" 
                          placeholder="Số Trang"
                          min="1" oninput="validity.valid||(value='');">

                </div>
                <span class="sp-thongbao" id="tbSoTrang"></span>
              </div>

              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"
                      ><i class="fa fa-address-book"></i
                    ></span>
                  </div>
                  
                  <input id="KickThuoc" required autocomplete="off" 
                          type="number" class="text_input_01" 
                          placeholder="Kích Thước"
                          min="1" oninput="validity.valid||(value='');"><samp> (cm)</samp>

                </div>
                <span class="sp-thongbao" id="tbKickThuoc"></span>
              </div>

              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"
                      ><i class="fa fa-address-book"></i
                    ></span>
                  </div>
                  
                  <input id="TrongLuong" required autocomplete="off" 
                          type="number" class="text_input_01" 
                          placeholder="Trọng Lượng"
                          min="1" oninput="validity.valid||(value='');"><samp> (kg)</samp>

                </div>
                <span class="sp-thongbao" id="tbTrongLuong"></span>
              </div>

              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"
                      ><i class="fa fa-address-book"></i
                    ></span>
                  </div>
                    <label class="text_label_01 mt_01">Hình ảnh</label>
							      <input type="file" name="image" class="input_img_01" id="ImagePath" required>
							      <div class="image_aria " id="image_aria">
								      <img src="" alt="anhSP" class="anh">
								      <span class="them_image">Hình đại diện sách</span>
							      </div>

                </div>
                <span class="sp-thongbao" id="tbHinhAnh"></span>
              </div>

              <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"
                        ><i class="fa fa-address-book"></i
                      ></span>
                    </div>
                    <label class="text_label_01 mt_01">Mô tả</label>
							      <textarea required rows="10" cols="70" 
                    id="MoTa" name="mota" form="add_product" 
                    placeholder="Nhập mô tả" 
                    autocomplete="off" 
                    class="text_input_01"></textarea>
                </div>

                <span class="sp-thongbao" id="tbMota"></span>
              </div>

              

              

              
            </form>
          </div>

          <!-- Modal footer -->
          <div class="modal-footer" id="modal-footer">
            <button id="btnAdd" type="button" class="btn btn-success">
              Add
            </button>
            <button id="btnEdit" type="button" class="btn btn-success">
              Edit
            </button>
            <button
              id="btnDong"
              type="button"
              class="btn btn-danger"
              data-dismiss="modal"
            >
              Close
            </button>
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
    <script src="./js/mainDonHang.js"></script>
  </body>
</html>
