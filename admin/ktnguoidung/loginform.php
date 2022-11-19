<!DOCTYPE html>

<head>
<title>Book Shop - Đăng nhập</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body>
<body style="background-color:lightblue">
<div class="container">
<div class="row">	
	<div class="col-sm-4"></div>
	<div class="col-sm-4">
		<h2 class="center">ĐĂNG NHẬP</h2>
		<form method="post" action="index.php">
		<div class="form-group">
    <label for="email">Nhập email:</label>
    <input type="email" class="form-control" placeholder="Enter email" id="email" name="txtemail">
  </div>
  <div class="form-group">
    <label for="pwd">Nhập mật khẩu:</label>
    <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="txtmatkhau">
  </div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Ghi nhớ mật khẩu
    </label>
  </div>
  <input type="hidden" name="action" value="xldangnhap" >
		<input class="btn btn-success"   type="submit" value="Đăng nhập">
		<input class="btn btn-warning"   type="reset" value="Làm lại">

</form>
</body>
</html>