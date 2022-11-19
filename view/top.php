<?php 
require_once("libraries/database.php");
require_once("libraries/danhmuc.php");
require_once("libraries/mathang.php");
require_once("libraries/giohang.php");


$dm = new DANHMUC();
$mh = new MATHANG();
$danhmuc = $dm->laydanhmuc(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Book Shop - Trang chủ </title>
        <!-- Custom fonts for this template-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
            <!-- Custom styles for this template-->
        <script src="https://kit.fontawesome.com/d899a74ef7.js" crossorigin="anonymous"></script>
            <!-- Template Main CSS File -->
  <link href="/PHP/public_1/admin/css/style.css" rel="stylesheet">
  <link href="/PHP/public_1/admin/frontawesome/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/PHP/public_1/admin/frontawesome/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

   

  <style>
  h3{

    font-size:24px;
    font-family: OpenSans;
    font-weight:bold;
    color:blue;
  }
  .carousel-inner img {  
      width: 100%; /* Set width to 100% */
      margin: auto;
  }
  .carousel-caption h3 {
      color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  footer {
      background-color:#283a5a;
      color: #ffffff;
      padding: 20px;
      font-family: OpenSans;
      font-weight:bold;
  }
  footer a:hover {
      color: #ffffff;
      text-decoration: none;
  }  
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo"><a href="index.php" style="text-decoration:none;">BOOK SHOP</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
    
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php" style="margin-left:50px;">Trang chủ</a></li>
          <li class="dropdown"><a href="#" style="text-decoration:none;"><span >Danh mục sản phẩm</span> <i class="bi bi-chevron-down"></i></a>
          <ul class="dropdown-menu">
            <?php            
            foreach($danhmuc as $dm):
            ?>
            <li><a href="?action=xemnhom&madm=<?php echo $dm["id"]; ?>"style="text-decoration:none;"><?php echo $dm["tendanhmuc"]; ?></a></li>
            <?php endforeach; ?>
          </ul>
          
        </li>
          </li>
          <li><a class="nav-link scrollto" href="#">Liên hệ</a></li>
          <li><a class="nav-link scrollto" href="admin/ktnguoidung/loginform.php">Đăng nhập</a></li>
          <li class="dropdown">
                                <a class="nav-link scrollto" href="#" id="alertsDropdown" style="text-decoration:none;"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Thông báo
           <span class="top-0 start-100 translate-right badge rounded-pill bg-danger"> +1
  </span>

  <!-- thông báo -->
<!-- Dropdown - Alerts -->
<div class=" dropdown-menu"
                                    aria-labelledby="alertsDropdown">
                                   
                                    <a class="align-items-center" href="#">
                                        <div class="mr-2">
                                            <div class=".bg-primary" style="margin-right:10px;" >
                                            <i class="fas fa-bell fa-fw"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="font-weight-bold" style="margin-right:30px; font-size:12px; color:blue;" align="center">Có sản phẩm giảm 50% !!!</span>
                                        </div>
                                    </a>
          
                                    <li><a class="nav-link scrollto" href="cart.php"  style="text-decoration:none;">Giỏ hàng</a></li>
          <span class=" translate-middle badge rounded-pill bg-danger"><?php echo demhangtronggio(); ?>
  </span>
         
        
        </ul>
       
        <form class="d-flex" style="margin-left:20px;">
				<input class="form-control me-2" type="search" placeholder="Tìm kiếm sản phẩm mong muốn..." aria-label="Search" style="width:300px;">
				<button class="btn btn-outline-light btn-sm" type="submit" style="font-size:14px; border-radius:3px; "><i class="fa-solid fa-magnifying-glass"></i></button>
			</form>
           
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  
  <section id="hero" class="d-flex align-items-center">

<div class="container">
  <div class="row">
    <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
      <h1>Good choice for you</h1>
      <h2>The more that you read, the more things you will know. The more that you learn, the more places you’ll go.</h2>
      <div class="d-flex justify-content-center justify-content-lg-start">
        <a href="#about" class="btn-get-started scrollto" style="text-decoration:none;">Get Started</a>
        <a href="https://www.youtube.com/watch?v=mIYzp5rcTvU" class="glightbox btn-watch-video" style="text-decoration:none;"><i class='far fa-play-circle'></i></i><span>Watch Video</span></a>
      </div>
    </div>
    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
      <img src="images/book1.jpg" class="img-fluid animated" alt="">
    </div>
  </div>
</div>

</section><!-- End Hero -->

<!-- Hộp tìm kiếm -->

    
    


 