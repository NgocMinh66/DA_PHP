<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Book Shop - Trang quản trị </title>
        <!-- Custom fonts for this template-->
        <link href="/PHP/public/admin/css/all.min.css" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,90 "  rel="stylesheet">
        <!-- Custom styles for this template-->
        <link href="/PHP/public/admin/css/sb-admin-2.min.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/d899a74ef7.js" crossorigin="anonymous"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body id="page-top">
        <!-- Page Wrapper -->
        <div id="wrapper">
            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center">
                    <div class="sidebar-brand-icon rotate-n-15">
                    <i class='fas fa-book'></i>
                    </div>
                    <div class="sidebar-brand-text mx-3">Book Shop </div>
                </a>
                <!-- Divider -->
                <hr class="sidebar-divider my-0">
                <!-- Nav Item - Dashboard -->
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    
                    <span>Bảng điều khiển</span></a>
                
                <?php
 if(isset($_SESSION["nguoidung"]) && $_SESSION["nguoidung"]["loai"]==1){
 ?>
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                        <i class='fas fa-user-cog'></i>
                    <span>Quản lí người dùng</span>
                    </a>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="../qlnguoidung">Danh sách người dùng </a>
                        </div>
                    </div>
                </li>

 <?php } ?>
                <!-- Divider -->
                <hr class="sidebar-divider">
                <!-- Heading -->
                <div class="sidebar-heading">
                    Sản phẩm
                </div>
                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                        aria-expanded="true" aria-controls="collapseTwo">
                        <i class='fas fa-align-justify'></i>
                    <span>Quản lí danh mục</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="../qldanhmuc/index.php">Danh sách danh mục</a>
                        </div>
                    </div>
                </li>
                <!-- Nav Item - Utilities Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                        aria-expanded="true" aria-controls="collapseUtilities">
                       <i class= "fas fa-gift"></i>
                    <span>Quản lí sản phẩm</span>
                    </a>
                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="../qlmathang/index.php">Danh sách sản phẩm </a>
                        </div>
                    </div>
                </li>
                <!-- Divider -->
                <hr class="sidebar-divider">
                <!-- Heading -->
                <div class="sidebar-heading">
                    Tài khoản
                </div>
                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item active">
                    <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
                        aria-controls="collapsePages">
                    <i class="fas fa-user"></i>
                    <span>Người dùng</span>
                    </a>
                    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Tài khoản:</h6>
                        <a class="collapse-item" href="">Đăng ký tài khoản</a>
                       
                            <hr>
                    
                            <a class="collapse-item" href="../../index.php">Thoát</a>
                         
                        </div>
                    </div>
                </li>
               
                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">
                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>
            </ul>
            <!-- End of Sidebar -->
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
                <!-- Main Content -->
                <div id="content">
                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                        </button>
                        <!-- Topbar Search -->
                        <form
                            class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small" placeholder="Tìm kiếm..."
                                    aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary"type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                            <li class="nav-item dropdown no-arrow d-sm-none">
                                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                                </a>
                                <!-- Dropdown - Messages -->
                                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                    aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto w-100 navbar-search">
                                        <div class="input-group">
                                            <input type="text" class="form-control bg-light border-0 small"
                                                placeholder="Search for..." aria-label="Search"
                                                aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <!-- Nav Item - Alerts -->
                            <li class="nav-item dropdown no-arrow mx-1">
                                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-bell fa-fw"></i>
                                    <!-- Counter - Alerts -->
                                    <span class="badge badge-danger badge-counter">1+</span>
                                </a>
                                <!-- Dropdown - Alerts -->
                                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="alertsDropdown">
                                    <h6 class="dropdown-header">
                                        Thông báo
                                    </h6>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="mr-3">
                                            <div class="icon-circle bg-primary">
                                                <i class="far fa-bell"></i>
                                            </div>
                                        </div>
                                        <div>
                                          
                                        <span class="mr-2 d-none d-lg-inline text-gray-600 small" style="font-size: 14px;"> Thông báo tài khoản
                                 <?php if(isset($_SESSION["nguoidung"])) echo
                                 $_SESSION["nguoidung"]["hoten"]; ?> đăng nhập thành công
                                 <span class="caret"></span>
                                        </div>
                                    </a>
                          
                                <!-- Dropdown - Messages -->
                                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="messagesDropdown">
                                    <h6 class="dropdown-header">
                                       Tất cả sản phẩm 
                                    </h6>
                                
                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small" style="font-size: 14px;"> Chào 
                                 <?php if(isset($_SESSION["nguoidung"])) echo
                                 $_SESSION["nguoidung"]["hoten"]; ?>
                                 <span class="caret"></span>
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="#"  data-toggle="modal" data-target="#fcapnhatthongtin">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Hồ sơ cá nhân
                                    </a>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#fdoimatkhau">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Đổi mật khẩu
                                    </a>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#fthongbao">
                                    <i class="fas fa-mail-bulk text-gray-400"></i>
                                    
                                    Thông báo
                                    <span class="badge badge-danger badge-counter">1</span>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="../ktnguoidung/index.php?action=dangxuat">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Thoát
                                    </a>
                                </div>
<!-- form cap nhat ttin -->
<div class="modal fade" id="fcapnhatthongtin" role="dialog">
 <div class="modal-dialog">
 <div class="modal-content">
 <div class="modal-header">
 <h3 class="modal-title">Hồ sơ cá nhân</h3>
 <button type="button" class="close" data-dismiss="modal">&times;</button>

 
 </div>
 <div class="modal-body">
 <form method="post" enctype="multipart/form-data">
 <div class="text-center">
 <img class="img-circle" src="../images/<?php echo $_SESSION["nguoidung"]["hinhanh"]; ?>" alt="<?php echo
$_SESSION["nguoidung"]["hoten"]; ?>" width="100px">
 </div>
 <div class="form-group"> 
 <label>Email</label> 
 <input class="form-control" type="email" name="txtemail"
placeholder="Email" value="<?php echo $_SESSION["nguoidung"]["email"]; ?>"
disable>
 </div> 
 <div class="form-group"> 
 <label>Số điện thoại</label> 
 <input class="form-control" type="number" name="txtdienthoai"
placeholder="Email" value="<?php echo $_SESSION["nguoidung"]["sodienthoai"]; ?>"
>
 </div> 
 <div class="form-group">
 <label>Họ tên</label>
 <input class="form-control" type="text" name="txthoten"
placeholder="Họ tên" value="<?php echo $_SESSION["nguoidung"]["hoten"]; ?>"
required></div>
 <div class="form-group">
 <label>Đổi hình đại diện</label>
 <input type="file" name="fhinh">
 <input type="hidden" name="txthinhanh" value="<?php echo
$_SESSION["nguoidung"]["hinhanh"]; ?>" >
 </div>
 <div class="form-group">
 <input type="hidden" name="txtid" value="<?php echo
$_SESSION["nguoidung"]["id"]; ?>" > 
 <input type="hidden" name="action" value="capnhat" >
 <input type="submit" style= "background-color: #4169E1;  border: none;  color: white;  padding: 7px 12px;.jhpx;  text-decoration: none;text-decoration: none;  margin: 4px 2px;  border-radius: 4px; cursor: pointer;" value="Lưu">
 <input type="reset" style= "background-color: #DAA520;  border: none;  color: white;  padding: 7px 12px;.jhpx;  text-decoration: none;text-decoration: none;  margin: 4px 2px;  border-radius: 4px; cursor: pointer;" value="Hủy"></div>
 </form>
 </div>
 <div class="modal-footer">
 <button type="button" class="btn btn-success" data-dismiss="modal">Đóng</button>
 </div>
 </div>
 </div>
 </div>

 <!--form cap nhat mat khau -->

<div class="modal fade" id="fdoimatkhau" role="dialog">
<div class="modal-dialog">
 <div class="modal-content">
 <div class="modal-header">
 <h3 class="modal-title">Đổi mật khẩu</h3>
 <button type="button" class="close" data-dismiss="modal">&times;</button>


 </div>
 <div class="modal-body">
 <form method="post" >
 <div class="text-center">
 <input type="hidden" name="txtemail" value ="<?php echo $_SESSION["nguoidung"]["email"]; ?>">
  </div>
 <div class="form-group"> 
 <label>Mật khẩu mới</label> 
 <input class="form-control" type="password" name="txtmatkhau">
 </div> 


 <div class="form-group">

 <input type="hidden" name="action" value="doimatkhau" >
 <input type="submit" style= "background-color: #4169E1;  border: none;  color: white;  padding: 7px 12px;.jhpx;  text-decoration: none;text-decoration: none;  margin: 4px 2px;  border-radius: 4px; cursor: pointer;" value="Lưu">
 <input type="reset" style= "background-color: #DAA520;  border: none;  color: white;  padding: 7px 12px;.jhpx;  text-decoration: none;text-decoration: none;  margin: 4px 2px;  border-radius: 4px; cursor: pointer;" value="Hủy"></div>
 </form>
 </div>
 <div class="modal-footer">
 <button type="button" class="btn btn-success" data-dismiss="modal">Đóng</button>
 </div>
 </div>
 </div>
 </div>
 <!-- form thông báo -->
 <div class="modal fade" id="fthongbao" role="dialog">
<div class="modal-dialog">
 <div class="modal-content">
 <div class="modal-header">
 <h3 class="modal-title">Thông báo</h3>
 <button type="button" class="close" data-dismiss="modal">&times;</button>


 </div>
 <div class="modal-body">
 <form method="post" >
 <div class="text-center">
 <input type="hidden" name="txtemail" value ="<?php echo $_SESSION["nguoidung"]["email"]; ?>">
</div>

 <span class="mr-2 d-none d-lg-inline text-gray-600 small" style="font-size: 14px;"> Thông báo tài khoản
                                 <?php if(isset($_SESSION["nguoidung"])) echo
                                 $_SESSION["nguoidung"]["hoten"]; ?> đăng nhập thành công
                                 <span class="caret"></span>
                                 <div class="modal-footer">
 <button type="button" class="btn btn-success" data-dismiss="modal">Đóng</button>
</div>
</div>
</div>
</div>

                            </li>
                        </ul>
                    </nav>
                
                    <!-- End of Topbar -->
                    <!-- Begin Page Content -->
                    <div class="container-fluid">