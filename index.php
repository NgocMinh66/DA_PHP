<?php 
require("libraries/database.php");
require("libraries/danhmuc.php");
require("libraries/mathang.php");
require("libraries/giohang.php");


$dm = new DANHMUC();
$mh = new MATHANG();
$danhmuc = $dm->laydanhmuc();
$soluong=1;
if(isset($_REQUEST["action"])){
    $action = $_REQUEST["action"];
}
else{
    $action="macdinh"; 
}

$mathangnoibat = $mh->laymathangnoibat();

switch($action){
    case "macdinh":
		$tongmh=$mh->demtongsomathang();
		$soluong=4;
		$tongsotrang=ceil($tongmh/$soluong);
		if(!isset($_REQUEST["trang"]))
			$tranghh=1;
		else
			$tranghh=$_REQUEST["trang"];
		if(	$tranghh > $tongsotrang)
			$tranghh=$tongsotrang;
		else if ($tranghh < 1)
			$tranghh=1;
		$batdau=($tranghh-1)*$soluong;
		$mathang=$mh->laymathangphantrang($batdau,$soluong);	
      
        include("main.php");
        break;

    case"chovaogio":
        if(isset($_REQUEST["id"]))
           $mahang=$_REQUEST["id"];
        if(isset($_REQUEST["soluong"]))
           $soluong=$_REQUEST["soluong"];
        if(mathangcotronggio($mahang))
           tangsoluong($mahang);
        else
        themhangvaogio($mahang,$soluong);
        $giohang=laygiohang();
        include("cart.php");
        break;

    case "xemnhom": 
        if(isset($_REQUEST["madm"])){
            $madm = $_REQUEST["madm"];
            $dmuc = $dm->laydanhmuctheoid($madm);
            $tendm =  $dmuc["tendanhmuc"];   
            $mathang = $mh->laymathangtheodanhmuc($madm);
            include("group.php");
        }
        else{
            include("main.php");
        }
        break;
    case "xemchitiet": 
        if(isset($_GET["mahang"])){
            $mahang = $_GET["mahang"];
            // tăng lượt xem lên 1
            $mh->tangluotxem($mahang);
            // lấy thông tin chi tiết mặt hàng
            $mhct = $mh->laymathangtheoid($mahang);
            // lấy các mặt hàng cùng danh mục
            $madm = $mhct["danhmuc_id"];
            $mathang = $mh->laymathangtheodanhmuc($madm);
            include("detail.php");
        }
        break;
    
    default:
        break;
}
?>
