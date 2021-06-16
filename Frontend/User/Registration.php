<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Pullshoes</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	  <style>
        .back{
            background-color: black;
        }
        .navbar{
            padding: 0;
        }
        .navraw{
            padding: 0;
        }
		@font-face {
			font-family: Futura;
			src: url(./font/Futura.otf);
		}
        .size-text{
            width: 50px;
        }
		.logo {
			font-family: Futura, Arial, Helvetica, sans-serif;
			color: rgb(184, 183, 183);
			font-style: italic;
			font-size: 30px;
		}
		.logo:hover {
			color: #FFF;
		}
		.logo:focus {
			color: #FFF;
		}
        .info-sach{
            font-size: 1.5rem;
        }
        /* .price-box{
            transform: skew(10deg);
            background-color: orange;
        } */
	  </style>
   </head>
   <!-- body -->
   <body class="main-layout">
	<!-- header section start -->
	<div class="back">
		<div class="container-fluid">
			<div class="pt-2 row navrow">
				<div class="col-sm-2">
					<div><a class="logo" href="Index-Home.html">JUSTBOOK</a></div>
				</div>
				<div class="col-8">
                    <div class="row">
                        <nav class="navbar navbar-expand-lg navbar-light bg-light col-2" >
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            </button>
                                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                    <div class="navbar-nav">
                                       <div class="col-6 dropdown">				
                                        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="bookMenu">
                                                <div>
                                                    <div class="iconMenu"></div>
                                                    <div class="iconMenu"></div>
                                                    <div class="iconMenu"></div>
                                                </div>
                                                <div class="wrapTextMenu">
                                                    <div>Book</div>
                                                    <span style="font-size: 17px;">Collection</span>
                                                    <span class="dropdown-toggle"></span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="bookCollection dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="bookItem dropdown-item" href="#">Sách Lập Trình</a>
                                            <a class="bookItem dropdown-item" href="#">Sách Văn Học</a>
                                            <a class="bookItem dropdown-item" href="#">Sách Tiếng Anh</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="bookItem dropdown-item" href="#">Sách Giảm Giá</a>
                                       </div>
                                    </div>
                                 </div>
                                </div>
                     </nav>
                        <nav class="col-7 navbar navbar-light bg-light">
                            <form class="form-inline">
                                <div class="custom-search">
                                    <input class="form-control mr-sm-2" type="search" placeholder="Search..." aria-label="Search">
                                </div>
                                <button class="my-2 custom-btn btn btn-outline-danger my-sm-0" type="submit">Search</button>
                            </form>
                        </nav>
                        <div class="col-3 cart">
                            <a href="Cart-Index.html">
                                <i class="fa fa-shopping-cart"></i>
                                <span class='badge badge-warning' id='cartCount'>0</span>
                                <span class="cartText">Giỏ Hàng</span>
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
                    <button class="itemLogin dropdown-item"> <a href="Login-User.html" style="color: #FFF;">Đăng nhập<a></button>
                        <button class="itemLogin dropdown-item"> <a href="Registration.html" style="color: #FFF;">Tạo tài khoản<a>
                        <button class="itemLoginAdmin dropdown-item" >
                            <a href="Login-Admin.html" style="color: #FFF;">Tài khoản Admin </a>
                        </button>
                 </div>
            </div>
				</div>
               
			</div>
      
            <div class="collection_text" >Create Account</div>
        <!-- Create Account -->
        <div class="layout_padding collection_section">
            <div class="container">
                <div class="collection_section_2">
                    <div class="row">
                        <div class="login_box" style="margin-left: 150px">
                           
                            <label style="color: red; margin-bottom: 15px;">
                                
                            </label>
                            <form>
                                <input class="center-block" type="email" id="email" name="Email" placeholder="Enter Email" required style="width: 500px; height: 40px;"><br>
                                <input class="center-block" type="text" id="password" name="password" placeholder="Enter Password" required style="width: 500px; height: 40px;"><br>
                                <input class="center-block" type="text" id="Password" name="Password" placeholder="Enter Confirm Password" required style="width: 500px; height: 40px;"><br>
                                <input class="center-block" type="text" id="accountName" name="TenKH" placeholder="Enter Account Name" required style="width: 500px; height: 40px;"><br>
                                <input class="center-block" type="text" id="Address" name="DiaChi" placeholder="Enter Your Address" required style="width: 500px; height: 40px;"><br>
                                <input class="center-block" type="number" id="phoneNumber" name="Phone" placeholder="Enter Your Phone Number" required style="width: 500px; height: 40px;"><br>
                                <input type="radio" id="male" name="GioiTinh" value="Nam" required>
                                <label for="male">Male</label><br>
                                <input type="radio" id="female" name="GioiTinh" value="Nữ" required>
                                <label for="female">Female</label><br>
                                <label for="birthday">Birthday:</label>
                                <input type="date" id="birthday" name="NgaySinh" required><br><br>
                                <input type="checkbox" id="agreeTerm" name="agreeTerm" value="acceptTerm" required>  <label for="agreeTerm"> I agree all statements in <a href="https://support.google.com/chrome/?p=incognito"> Terms of service</a></label><br><br>
                                <button class="subscribr_bt" style="width: 100%;">Sign Up</button><br>
                                <p> Have already an account? <a href="Login-User.html"> Login here</a></p><br><br><br><br>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- Footer -->
    	    <div class="footer_section_2 back">
		        <div class="px-5 my-5 row " >
    		        <div class="col-2">
    		        	<h2 class="shop_text">Address </h2>
    		        	<div class="image-icon"><img src="images/map-icon.png"><span class="pet_text">No 40 Baria Sreet 15/2 NewYork City, NY, United States.</span></div>
    		        </div>
    		        <div class="text-center col-3">
    				    <h2 class="shop_text">Our Company </h2>
    				    <div class="delivery_text">
    				    	<ul>
    				    		<li>Delivery</li>
    				    		<li>Legal Notice</li>
    				    		<li>About us</li>
    				    		<li>Secure payment</li>
    				    		<li>Contact us</li>
    				    	</ul>
    				    </div>
    		        </div>
    			    <div class="text-center col-3">
    				<h2 class="adderess_text">Products</h2>
    				<div class="delivery_text">
    				    	<ul>
    				    		<li>Prices drop</li>
    				    		<li>New products</li>
    				    		<li>Best sales</li>
    				    		<li>Contact us</li>
    				    		<li>Sitemap</li>
    				    	</ul>
    				    </div>
    			    </div>
    			    <div class="text-right col-3">
    				<h2 class="adderess_text">Newsletter</h2>
    				<div class="form-group">
                        <input type="text" class="enter_email" placeholder="Enter Your email" name="Name">
                    </div>
                    <button class="subscribr_bt">Subscribe</button>
    			    </div>
    			</div>
            </div> 
	      
    	</div>
    </div>
	<!-- section footer end -->
	<div class="copyright">2019 All Rights Reserved. <a href="https://html.design">Free html  Templates</a></div>


      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         
$('#myCarousel').carousel({
            interval: false
        });

        //scroll slides on swipe for touch enabled devices

        $("#myCarousel").on("touchstart", function(event){

            var yClick = event.originalEvent.touches[0].pageY;
            $(this).one("touchmove", function(event){

                var yMove = event.originalEvent.touches[0].pageY;
                if( Math.floor(yClick - yMove) > 1 ){
                    $(".carousel").carousel('next');
                }
                else if( Math.floor(yClick - yMove) < -1 ){
                    $(".carousel").carousel('prev');
                }
            });
            $(".carousel").on("touchend", function(){
                $(this).off("touchmove");
            });
        	});
		});
	</script> 
   </body>
</html>