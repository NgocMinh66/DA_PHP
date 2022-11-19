<?php include("../view/top.php"); ?>

<h3>Thêm người dùng</h3> 
<br>
<form method="post" enctype="multipart/form-data" action="index.php">
<input type="hidden" name="action" value="xulythem">

<div class="form-group">
	<label>Email</label>
	<input class="form-control" type="text" name="txtemail">
</div>
<div class="form-group">
	<label>Tên</label>
	<input class="form-control" type="text" name="txtten">
</div>

<div>
    <span class="form-label">Phân quyền</span>
										<select class="form-control"  type="text" name="txtphanquyen">
											<option>Quản trị</option>
											<option>Nhân viên</option>
                                            <option>Khách hàng</option>
										</select>
										<span class="select-arrow"></span>
</div>

<br>
<div class="form-group">
	<input type="submit" value="Thêm" class="btn btn-success">
	<input type="reset" value="Hủy" class="btn btn-warning">
</div>
</form>

<?php include("../view/bottom.php"); ?>
