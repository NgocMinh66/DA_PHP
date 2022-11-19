<?php
require("../../libraries/database.php");
require("../../libraries/nguoidung.php");

// Biến $isLogin cho biết người dùng đăng nhập chưa
$isLogin = isset($_SESSION["nguoidung"]);
// Kiểm tra hành động $action: yêu cầu đăng nhập nếu chưa xác thực
if(isset($_REQUEST["action"])){
 $action = $_REQUEST["action"];
}
elseif($isLogin == FALSE){
 $action = "dangnhap";
}
else{
 $action="macdinh";
}
$nd = new NGUOIDUNG();
switch($action){
 case "macdinh": 
 include("main.php");
 break;
 case "dangnhap":
 include("loginform.php");
 break;
 case "xldangnhap":
 $email = $_POST["txtemail"];
 $matkhau = $_POST["txtmatkhau"];
 if($nd->kiemtranguoidunghople($email,$matkhau)==TRUE){
 $_SESSION["nguoidung"] = $nd->laythongtinnguoidunghople($email);
 include("main.php");
 }
 else{

 include("loginform.php");
 }
 break;
 case "dangxuat":
 unset($_SESSION["nguoidung"]);
 include("loginform.php");
 break;
 
 case "capnhat":
    $email = $_POST["txtemail"];
    $hoten= $_POST["txthoten"];
    $sodienthoai=$_POST["txtdienthoai"];
    $hinhanh=$_POST["txthinhanh"];
    if($_FILES["fhinh"]["name"] !=""){
        $hinhanh =basename($_FILES["fhinh"]["name"]);
        move_uploaded_file($_FILES["fhinh"]["tmp_name"],"../images/" .$hinhanh);

    }
    $nd->capnhathoso($email,$hoten,$sodienthoai,$hinhanh);
    
   $_SESSION["nguoidung"] = $nd-> laythongtinnguoidunghople($email);
   include("main.php");
    break;
case "doimatkhau":
    $email = $_POST["txtemail"];
    $matkhau = $_POST["txtmatkhau"];
    $nd->capnhatmatkhau($email,$matkhau);

    $_SESSION["nguoidung"] =$nd->laythongtinnguoidunghople($email);
    include("loginform.php");
break;
case "thongbao":
    $_SESSION["nguoidung"] = $nd-> laythongtinnguoidunghople($email);
    include("main.php");
    default;
    break;
}
?>