<?php
if (isset($_POST['dangky'])) {
	$tenkhachhang = $_POST['hovaten'];
	$email = $_POST['email'];
	$dienthoai = $_POST['dienthoai'];
	$matkhau = md5($_POST['matkhau']);
	$diachi = $_POST['diachi'];
	$sql_dangky = mysqli_query($mysqli, "INSERT INTO tbl_dangky(tenkhachhang,email,diachi,matkhau,dienthoai) VALUE('" . $tenkhachhang . "','" . $email . "','" . $diachi . "','" . $matkhau . "','" . $dienthoai . "')");
	if ($sql_dangky) {
		header('Location:index.php?quanly=giohang');
		echo '<p style="color:green">Bạn đã đăng ký thành công</p>';
		$_SESSION['dangky'] = $tenkhachhang;
		$_SESSION['email'] = $email;
		$_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
	}
}
?>
<div class="container border border-dark rounded p-3 w-50 float-left ml-5 my-4">
	<form action="" autocomplete=" off" method="POST">
		<div class="form-group">
			<label for="hovaten">Họ tên: </label>
			<input type="text" class="form-control" size="50" id="hovaten" name="hovaten">
		</div>
		<div class="form-group">
			<label for="email">Email: </label>
			<input type="email" class="form-control" size="50" id="email" name="email">
		</div>
		<div class="form-group">
			<label for="dienthoai">Số điện thoại:</label>
			<input type="text" class="form-control" size="50" id="dienthoai" name="dienthoai">
		</div>
		<div class="form-group">
			<label for="diachi">Địa chỉ:</label>
			<input type="text" class="form-control" size="50" id="diachi" name="diachi">
		</div>
		<div class="form-group">
			<label for="matkhau">Mật khẩu: </label>
			<input type="password" class="form-control" size="50" id="matkhau" name="matkhau">
		</div>
		<button type="submit" name="dangky" class="btn my-3 text-white" style="background-color: #241C57;">Đăng ký</button>
		<a href="index.php?quanly=dangnhap" class="ml-3">Đăng nhập nếu có tài khoản</a>
	</form>
</div>