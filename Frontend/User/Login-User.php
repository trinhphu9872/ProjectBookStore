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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/main.css">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <link rel="stylesheet" href="./node_modules/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="./node_modules/slick-carousel/slick/slick-theme.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    .back {
        background-color: black;
    }

    .navbar {
        padding: 0;
    }

    .navraw {
        padding: 0;
    }

    .arrowbtn {
        font-size: 2rem;
        padding: 0 10px;
    }

    @font-face {
        font-family: Futura;
        src: url(./font/Futura.otf);
    }

    .size-text {
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

    .info-sach {
        font-size: 1.5rem;
    }

    .icon-bg {
        font-size: 30px;

    }

    .login-error {
        background-color: #F2DEDE;
        color: #A94442;
        padding: 10px;
        border-radius: 4px;
        margin: 20px 500px;
        text-align: center
    }

    /* .price-box{
            transform: skew(10deg);
            background-color: orange;
        } */
    </style>
</head>
<!-- body -->

<body class="main-layout">
    <?php
            include("header.php");
    ?>
    <!-- Login-User -->
    <div class="collection_text">Login</div>
        <form action="login.php" class=" collection_section" method="post">
            <?php if(isset($_GET['error'])) {
            ?>
                <div class="login-error"><?php echo $_GET['error'] ?></div>
            <?php
            } ?>
			<div class="container">
				<div class="collection_section_2">
					<div class="row">
						<div class = "login_box mx-auto my-3" style ="margin-left: 120px">
                            <label>Nh???p Email</label>
							<input required class="center-block" type="text" id="account" name="Email" placeholder = "Vui l??ng nh???p Email" style="width: 400px; height: 40px;"><br><br>
							<label>Nh???p M???t Kh???u</label>
                            <input required class="center-block" type="password" id="pass" name="MatKhau" placeholder = "Vui l??ng nh???p m???t kh???u" style="width: 400px; height: 40px;">
							<p> Don't have an account?<a href="Registration.php"> Click here</a></p><br>
                            <input type = "submit" name = "dangnhap" id = " " class="subscribr_bt" style ="width: 100%;" value = "Sign In" > <br><br><br><br>		
						</div>
					</div>
				</div>
			</div>
        </form>
    
    

     <?php
             include("footer.php")
     ?>

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
                <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
                <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
                <script type="text/javascript" src="slick/slick.min.js"></script>

                

</body>

</html>