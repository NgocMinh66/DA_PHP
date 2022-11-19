<?php include("view/top.php"); ?>
<br><br>
<div class="container">    
<div class="row">

<h3 style="font-family:Opensans">Các sản phẩm <?php echo $tendm; ?></h3>
<?php
if($mathang != null){
foreach($mathang as $mh):  
?>
<div class="col-sm-3">
  <div class="panel panel-info text-center">
    <div class="panel-heading"><a href="?action=xemchitiet&mahang=<?php echo $mh["id"]; ?>"style="font-size:16px; font-family:OpenSans; text-decoration:none;">
    	<?php echo $mh["tenmathang"]; ?></a></div>
    <div class="panel-body">    	
    	<a href="?action=xemchitiet&mahang=<?php echo $mh["id"]; ?>">
    	<img src="<?php echo $mh["hinhanh"]; ?>" class="img-responsive" style="width:100%" alt="<?php echo $mh["tenmathang"]; ?>"></a>
    	<div style="font-size:16px; font-family:OpenSans;">Giá bán: <span  class="text-danger" style="font-size:16px; font-family:OpenSans;"><?php echo number_format($mh["giaban"]); ?>đ</span>  </div>
    </div> 
	<div class="panel-footer">
        <a class="btn btn-info" href="?action=xemchitiet&mahang=<?php echo $mh["id"]; ?>"style="font-size:16px; font-family:OpenSans;">
    	Chi tiết</a> 
        <a class="btn btn-danger" href="" style="font-size:16px; font-family:OpenSans;">Chọn mua</a>  
    </div>  
     
  </div>
</div>
<?php 
endforeach; 
}
else{
    echo "<p>Vui lòng xem danh mục khác...</p>";
}
?>


</div>

<?php include("topview.php"); ?>
</div>
<?php include("view/carousel.php"); ?>
<?php include("view/bottom.php"); ?>