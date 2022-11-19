<?php 

include("view/top.php"); 

$giohang = laygiohang();
if(isset($_REQUEST["action"])){
  $action = $_REQUEST["action"];
}
else{
  $action="macdinh"; 
}
switch($action){
  case "xoagiohang":
    xoatatcamathang();
  }
?>

<br><br><br>
<div class="container">    
  <div class="row"> 
    <h3 style="font-family:OpenSans;">Giỏ hàng của bạn</h3>
  <?php 
  if(demhangtronggio()==0):
    echo "<h1 style=font-family:OpenSans;> Không có sản phẩm nào trong giỏ hàng. </h1>";
  else:
    ?>
    <form method="post">
    <input type="hidden" name="action" value ="capnhatgiohang">
    <table class="table table-hover">
    <tr class="info" style="font-size:18px;font-family:OpenSans;">
      <th>Sản phẩm</th><th>Đơn giá</th><th>Số lượng</th><th>Thành tiền</th><tr>
      <?php foreach ($giohang as $mahang => $mh): ?>
      <tr><td style="font-size:18px;font-family:OpenSans;"><?php echo $mh ["tenhang"]; ?></td>
      <td style="font-size:18px;font-family:OpenSans;"><?php echo number_format ($mh["giaban"]) . "đ"; ?></td>
      <td style="font-size:18px;font-family:OpenSans;"><input type="number" size="3" name="mh [<?php echo $mahang; ?>]"
          value ="<?php echo $mh ["soluong"]; ?>"> </td>
        <td style="font-size:18px;font-family:OpenSans;"><?php echo number_format($mh["sotien"]) . "đ"; ?></td>   </tr>
        <?php endforeach; ?>
        <tr><td colspan="3" align="right" style="font-size:16px;font-family:OpenSans;" ><b>Tổng tiền </b></td>
        <td style="font-size:18px;font-family:OpenSans;"><b><?php echo number_format (tinhtiengiohang()); ?>đ</b></td>   </tr>
        <tr><td colspan="2" align="left" style="font-size:16px;font-family:OpenSans;" ><i>Để xóa một sản phẩm nhập số lượng = 0</i> |
        <a href="?action=xoagiohang" style="font-size:16px;font-family:OpenSans;" >Xóa tất cả</a></td>
        <td colspan="2" align="right">
          <input class="btn btn-info" type="submit" style="font-size:16px;font-family:OpenSans;"  value="Cập nhật">
          <a class="btn btn-danger" href="#" style="font-size:16px;font-family:OpenSans;" >Thanh toán</a></td></tr>
      </table>
      </form>
      <?php endif; ?>
  </div>
</div>
<?php include("view/carousel.php"); ?>
<?php include("view/bottom.php"); ?>