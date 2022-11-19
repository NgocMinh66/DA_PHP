<?php
if(!isset($_SESSION["nguoidung"]))
 header("location:../index.php");
 require("../../libraries/database.php");
require("../../libraries/nguoidung.php");
if(isset($_REQUEST["action"])){
 $action = $_REQUEST["action"];
}
else{
 $action="macdinh";
}
$nd = new NGUOIDUNG();
switch($action){
 case "macdinh": 
 $nguoidung = $nd->laydanhsachnguoidung();
 include("main.php");
 break; 

 case "them":
    $nguoidung = $nd->laydanhsachnguoidung();
    include("addform.php");
    break;
case "xulythem":	
    // xử lý thêm		
    $email = $_POST["txtemail"];
    $hoten = $_POST["txtten"];
    $loai = $_POST["txtphanquyen"];

    $nd->themnguoidung($email,$hoten,$loai);
    $nguoidung = $nd->laydanhsachnguoidung();
    include("main.php");
    break;
}
?>
