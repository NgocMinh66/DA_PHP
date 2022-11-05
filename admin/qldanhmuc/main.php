<?php include"../view/top.php"; 
 require_once("../../libraries/danhmuc.php"); 
$dm = new DANHMUC();
$danhmuc = $dm->laydanhmuc();
?>
<h3>Quản lý danh mục</h3> 
<br>
<table class="table table-hover">
	<tr>
		<th>Tên danh mục</th>
		<th>Sửa</th>
		<th>Xóa</th>
	</tr>
	<?php
	foreach($danhmuc as $d){
		
	?>
		
	<?php
		
				
	?>
			<tr>
				<td><?php echo $d["tendanhmuc"]; ?></td>
				<td><a href="index.php?action=sua&id=<?php echo $d["id"]; ?>">Sửa</a></td>
				<td><a href="index.php?action=xoa&id=<?php echo $d["id"]; ?>">Xóa</a></td>
			</tr>
	<?php
		
	}
	?>
</table>
<div id="buttonthem">
<a class="btn btn-info"><i class='fas fa-plus'></i> Thêm danh mục</a>
</div>
<br> 
<div id="formthem">
<form class="form-inline" method="post">
	<input type="text" class="form-control" name="txtten" placeholder="Nhập tên danh mục">
	<input type="hidden" name="action" value="them">
	<input type="submit" class="btn btn-warning" style = "margin-left: 10px;" value="Thêm">
</form>
</div>

<script>
    $(document).ready(function(){
        $("#formthem").hide();
        $("#buttonthem").click(function(){
            $("#formthem").toggle();
        })
    });
</script>

<?php include("../view/bottom.php"); ?>

