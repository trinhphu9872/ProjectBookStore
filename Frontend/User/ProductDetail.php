

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
    <!-- header section start -->

    <div class="py-5 detail" style="background-color:#fff">
    <div class="container-fluid ">
            <div class="row my-5 py-5 mx-auto " >
            <?php
                    $idPro = $_GET["idPro"];
                    include("connec.php");
                    $lenh = "select * from sanpham where MaSP = $idPro";
                    $kq = mysqli_query($conn,$lenh);
                        while($row = mysqli_fetch_row($kq)) {
                            $mota = substr($row[5],0,369);
                            echo"
                      
                            <div class='col-5 text-center p-5 '>
                                <img src=images/$row[11] width='420px' >
                            </div>
                            <div class='col-7 mx-auto '>
                                <h2 class='my-4'> $row[1]</h2>
                                <h4 class='my-4'><i class='fa fa-user-graduate'></i>  T??c Gi??? :  $row[2]</h4>
                                <h4 class='my-4'><i class='fa fa-home'></i>  Nh?? Xu???t B???n : $row[3]</h4>
                                <h4 class='my-4'> Tr???ng L????ng v?? K??ch Th?????c : $row[8] x $row[9] </h4>
                                <h4 class='my-4'> <i class='fa fa-scroll'></i> M?? t???</h4>
                                <div class='col-7 my-2'>
                                    <p>$mota ...</p>
                                </div>
                                <h4> <i class='fa fa-store'></i> T???n kho : $row[7]</h4>
                                    <div class='form-group col-6 mx-0 px-0'>
                                    <h4> <label for='count'><i class='fa fa-shopping-basket'></i>  S??? l?????ng</label>    <input  type='number' class='form-control mt-2' id='count' min='0' max='$row[7]' id='quanlity' required></h4>
                                
                                </div>
                                <a href='cart.php' onclick='addItemCart(this)' item='$row[0]'> <div class='btn btn-danger '> <i class='fa fa-shopping-cart'></i> Add Shopping Cart</div></a>
                            </div>
                       

                         ";
                        }
                    ?>
               

            </div>
        </div>
        
        
       

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