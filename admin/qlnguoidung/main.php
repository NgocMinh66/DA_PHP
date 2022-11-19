<?php include("../view/top.php"); ?>

<h3>Quản lý người dùng</h3> 
<br>
<a href="index.php?action=them" class="btn btn-info"><i class='fas fa-plus'></i> Thêm người dùng</a>
<br> <br> 

 <!-- Danh sách người dùng -->
 <table class="table table-hover">
 <tr><th>Email</th>
 <th>Tên</th>
 <th>Phân quyền</th>
 <th>Trạng thái</th>
 <th>Khóa</th></tr>
 <?php foreach ($nguoidung as $nd): ?>
 <tr><td><?php echo $nd["email"]; ?></td>
 <td><?php echo $nd["hoten"]; ?></td>
 <td><?php if($nd["loai"]==1) echo "Quản trị";
else if($nd["loai"]==2) echo "Nhân viên"; 
else echo "Khách hàng" ; ?></td>
 <td><?php if($nd["loai"]!=1) 
 {if($nd["trangthai"]==1) echo "Kích hoạt"; 
else echo "Khóa" ; }?></td>
 <td>
 <?php
 if($nd["loai"]!=1) {
 if($nd["trangthai"]==1){ ?>
 <a href="?action=khoa&trangthai=0&id=<?php echo $nd["id"];
?>">Khóa</a></td></tr>
 <?php
 }
 else { ?>
 <a href="?action=khoa&trangthai=1&id=<?php echo $nd["id"];
?>">Kích hoạt</a></td></tr>
 <?php
 }
 }
 endforeach; ?>
 </table>

 