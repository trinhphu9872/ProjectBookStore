<?php
            include_once('../connect.php');
            if (isset($_POST["btn_submit"])) {
		        $Email = $_POST["email"];
		        $MatKhau = $_POST["matkhau"];
		        $TenKH = $_POST["username"];
		        $Phone = $_POST["sdt"];
		        if ($Email == "" || $MatKhau == "" || $TenKH == "" || $Phone == "") {
			        echo "Bạn vui lòng nhập đầy đủ thông tin";
		        }else{
                    $sql="select * from taikhoan where email='$Email'";
                    $kt=mysqli_query($conn, $sql);

                    if(mysqli_num_rows($kt)  > 0){
                        echo "Tài khoản đã tồn tại";
                    }else{
                        $sql = "INSERT INTO taikhoan(
                            Email,
                            MatKhau,
                            TenKH,
                            Phone
                            ) VALUES (
                            '$Email',
                            '$MatKhau',
                            '$TenKH',
                            '$Phone'
                            )";
                            mysqli_query($conn,$sql);
                            echo "Chúc mừng bạn đã đăng ký thành công";
                        }
                    }
            }
?>
        

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
  
        <!-- Create Account -->
        <div class="collection_text" >Create Account</div>
        
    <div class="layout_padding collection_section">
        <form action="Registration.php" class="layout_padding collection_section" method="post">   
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
        <form>    
    </div>
    

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

                <script>



                </script>

</body>

</html>