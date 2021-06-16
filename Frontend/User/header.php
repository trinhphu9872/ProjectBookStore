<?php 
    session_start();
?> 
     <div class='back'>
        <div class='container-fluid'>
            <div class='pt-2 row navrow'>
                <div class='col-2'>
                    <div><a class='logo' href='Index.php'>JUSTBOOK</a></div>
                </div>
                <div class='col-8'>
                    <div class='row'>
                        <nav class='navbar navbar-expand-lg navbar-light bg-light col-2'>
                            <button class='navbar-toggler' type='button' data-toggle='collapse'
                                data-target='#navbarNavAltMarkup' aria-controls='navbarNavAltMarkup'
                                aria-expanded='false' aria-label='Toggle navigation'>
                                <span class='navbar-toggler-icon'></span>
                            </button>
                            <div class='collapse navbar-collapse' id='navbarNavAltMarkup'>
                                <div class='navbar-nav'>
                                    <div class='col-6 dropdown'>
                                        <a class='nav-link' href='#' id='navbarDropdown' role='button'
                                            data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                            <div class='bookMenu'>
                                                <div>
                                                    <div class='iconMenu'></div>
                                                    <div class='iconMenu'></div>
                                                    <div class='iconMenu'></div>
                                                </div>
                                                <div class='wrapTextMenu'>
                                                    <div>Book</div>
                                                    <span style='font-size: 17px;'>Collection</span>
                                                    <span class='dropdown-toggle'></span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class='bookCollection dropdown-menu' aria-labelledby='navbarDropdown'>
                                            <a class='bookItem dropdown-item' href='#'>Sách Lập Trình</a>
                                            <a class='bookItem dropdown-item' href='#'>Sách Văn Học</a>
                                            <a class='bookItem dropdown-item' href='#'>Sách Tiếng Anh</a>
                                            <div class='dropdown-divider'></div>
                                            <a class='bookItem dropdown-item' href='#'>Sách Giảm Giá</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                        <nav class='col-7 navbar navbar-light bg-light'>
                            <form class='form-inline' method='GET' action='search.php'>
                                <div class='custom-search'>
                                    <input class='form-control mr-sm-2' name ="keyword" type='search' placeholder='Search...'
                                        aria-label='Search'>
                                </div>
                                <button class='my-2 custom-btn btn btn-outline-danger my-sm-0'
                                    type='submit'>Search</button>
                            </form>
                        </nav>
                        <div class='col-3 cart'>
                            <a href='cart.php'>
                                <i class='fa fa-shopping-cart'></i>
                                <?php
                                    if (!isset($_SESSION)) {
                                        session_start();
                                    }  
                                      if(isset($_SESSION['carts'])) {
                                         ?>
                                             <span class='badge badge-warning' id='CartCount'><?php echo $_SESSION['carts']?></span>
                                         <?php
                                     }
                                     else {
                                         ?>
                                             <span class='badge badge-warning' id='CartCount'>0</span>
                                         <?php
                                     }
                                ?>
                                <span class='cartText'>Giỏ Hàng</span>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="col-2 login dropdown">
                    <div id="loginMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <span class="glyphicon glyphicon-user" style="font-size: 25px; align-self: center;"></span>
                     <div style="padding-left: 10px;">
                         <span style="font-size: 11px;">Đăng nhập / Đăng ký</span>
                         <div class="dropdown-toggle">Tài khoản</div>
                     </div>	
                 </div>
                 <div class="dropdownMenuLogin dropdown-menu" aria-labelledby="loginMenu">
                    <button class="itemLogin dropdown-item"> <a href="Login-User.php" style="color: #FFF;">Đăng nhập<a></button>
                        <button class="itemLogin dropdown-item"> <a href="Registration.php" style="color: #FFF;">Tạo tài khoản<a>
                        <button class="itemLoginAdmin dropdown-item" >
                            <a href="Login-Admin.php" style="color: #FFF;">Tài khoản Admin </a>
                        </button>
                 </div>
                </div>
            </div>

        </div>

