<?php include("view/top.php"); ?>

<br><br>
<div class="container">  
  <div class="row"> <!-- Tất cả mặt hàng - Xử lý phân trang -->
     <a name="sptatca"></a>
     <h3>Tất cả sản phẩm </h3>
    <?php
    foreach($mathang as $mh):
    ?>
    <div class="col-sm-3">
      <div class="panel panel-primary text-center">
        <div class="panel-heading">
          <a href="?action=xemchitiet&mahang=<?php echo $mh["id"]; ?>" style="color:white;font-family:OpenSans;font-weight:bold;font-size:16px;text-decoration:none;" >
		  <?php echo $mh["tenmathang"]; ?></a>
        </div>
        <div class="panel-body">
			<a href="?action=xemchitiet&mahang=<?php echo $mh["id"]; ?>">
      <img src="<?php echo $mh["hinhanh"]; ?>" class="img-responsive" style="width:100%" alt="<?php echo $mh["tenmathang"]; ?>"></a>
      <strong style="font-size:16px;font-family:OpenSans;">Giá bán: <span  class="text-danger" style="font-size:16px;font-family:OpenSans;" >
            <?php echo number_format($mh["giaban"]); ?> đ</span></strong>   
    </div>
        <div class="panel-footer">
         
            <a class="btn btn-success" href="?action=xemchitiet&mahang=<?php echo $mh["id"]; ?>"style="font-size:16px;font-family:OpenSans;">Chi tiết</a>
          <a class="btn btn-danger" href="?action=chovaogio&id=<?php echo $mh["id"]; ?>"style="font-size:16px;font-family:OpenSans;&soluong=1">Chọn mua</a>
        </div>
      </div>
    </div>    
    <?php endforeach; ?>
  </div>


 <div class="row"> 
 <ul class='pagination' style="font-size:14px; align:center;" >
	<li><a href="?trang=1">
	<span class="glyphicon glyphicon-step-backward" style="font-size:16px;"></span></a></li>
	<?php
	if ($tranghh>1&&$tongsotrang>1)
	?>
	<li><a href='?trang=<?php echo $tranghh-1; ?>'>
	<span class="glyphicon glyphicon-chevron-left"></span></a></li>
	
	<?php
	for($i=1; $i<=$tongsotrang; $i++){
		if($i==$tranghh){
	?>
		<li class="active"><span><?php echo $i;?></span></li>
	<?php
		}
	else{
	?>
		<li><a href="?trang=<?php echo $i;?>"><?php echo $i; ?></a></li>
	<?php	
		}
	}
	if($tranghh<$tongsotrang&&$tongsotrang>1)
		?>
	<li><a href='?trang=<?php echo $tranghh+1; ?>'>
		<span class="glyphicon glyphicon-chevron-right"></span></a></li>
	<li><a href='?trang=<?php echo $tongsotrang; ?>'>
		<span class="glyphicon glyphicon-step-forward"></span></a></li>
	
</ul>
</div>
  
  <?php include("topview.php"); ?>
  

</div>

<?php include("view/carousel.php"); ?>
<?php include("view/bottom.php"); ?>