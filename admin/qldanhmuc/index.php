<?php 
require("../../libraries/database.php");
require("../../libraries/danhmuc.php");

// Xét xem có thao tác nào được chọn
if(isset($_REQUEST["action"])){
    $action = $_REQUEST["action"];
}
else{
    $action="xem";
}

$dm = new DANHMUC();

switch($action){
    case "xem":
               
        include("main.php");
        break;
    
    default:
        break;
}
?>
