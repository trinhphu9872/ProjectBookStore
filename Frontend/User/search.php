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
    <!-- header section start -->

    <div class="py-5 detail" style="background-color:#fff">

        <nav aria-label="breadcrumb">
            <ol class="ml-3 breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Library</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data</li>
            </ol>
        </nav>
        <div class="container-fluid mx-auto p-0 align-content-center">
            <div class="back-Book">
                <div class="row mx-5">
                    <div class="col-2 ">
                        <div class="card bg-light-50">
                            <div class="card-title">
                                <i class="fa fa-list-ul m-3"></i>
                                <span>Danh M???c</span>
                            </div>
                            <div class="card-body">
                                <ul>
                                    <a href="">
                                        <li>S??ch L???p Tr??nh</li>
                                    </a>
                                    <a href="">
                                        <li>S??ch V??n H???c</li>
                                    </a>
                                    <a href="">
                                        <li>S??ch Ti???ng Anh</li>
                                    </a>
                                    <a href="">
                                        <li>C??c s??ch kh??c</li>
                                    </a>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="danhMuc bg-light m-2">

                            <nav class="nav pt-4 my-2">
                                <p class="p mx-3 mt-3">S???p x???p theo</p>
                                <a class="nav-link btn mx-3 p-3 btn-primary  " href="#">Ph??? Bi???n</a>
                                <a class="nav-link btn mx-3 p-3 btn-primary " href="#">M???i Nh???t</a>
                                <a class="nav-link btn mx-3 p-3 btn-primary " href="#">B??n ch???y</a>
                                <div class=" my-auto">
                                    <select id="inputState" class="form-control h-100">
                                        <option value="Gi??" selected>Gi??</option>
                                        <option value="Gi?? Cao">Gi?? Cao</option>
                                        <option value="Gi?? Th???p">Gi?? Th???p</option>
                                    </select>
                                </div>
                                <div>
                                    <a class="carousel-control-prev" href="#carouselExampleInterval" role="button"
                                        data-slide="prev">
                                        <i class="text-left w-100   icon-bg  fa fa-arrow-left  text-primary  "
                                            aria-hidden="true"></i>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleInterval" role="button"
                                        data-slide="next">
                                        <i class="text-right w-100  icon-bg  fa fa-arrow-right text-primary "
                                            aria-hidden="true"></i>
                                    </a>
                                </div>
                            </nav>
                            <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active" data-interval="10000">
                                        <div class="listBook">
                                            <div class="row my-2">

                                                <?php
    
    $keyword = $_GET["keyword"];

    include ("connec.php");

    $sql = "SELECT * FROM sanpham WHERE TenSP  like '%$keyword%'";
    $kq = mysqli_query($conn,$sql);

    while($row = mysqli_fetch_row($kq))
        {
            $title = substr($row[1],0,20);
            echo"      <div class='col-3'>
            .<div class='card mx-2  my-1'>
            <a href='ProductDetail.php?idPro=$row[0]'>
                <img class='card-img-top    mx-auto px-1'
                    src=./images$row[11] alt=''  height='280px'>
            </a>
                <div class='card-body'>
                    <h4 class='card-title'>$title</h4>
                    <p class='card-text'>Gi?? $row[4] vnd </p>
               
                    <a href='ProductDetail.php?idPro=$row[0]'>
                        <button class='btn btn-primary'>Chi Ti???t</button>
                    </a>
                </div>
            </div>
    
            </div> ";
        };

    mysqli_close($conn);
    ?>

                                            </div>

                                        </div>



                                    </div>
                                    <div class="carousel-item" data-interval="2000">
                                        <div class="listBook">
                                            <div class="row my-2">





                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">

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