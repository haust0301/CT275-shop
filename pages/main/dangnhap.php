<?php
if (isset($_POST['dangnhap'])) {
	$email = $_POST['email'];
	$matkhau = md5($_POST['password']);
	$sql = "SELECT * FROM tbl_dangky WHERE email='" . $email . "' AND matkhau='" . $matkhau . "' LIMIT 1";
	$row = mysqli_query($mysqli, $sql);
	$count = mysqli_num_rows($row);

	if ($count > 0) {
		header('Location:index.php?quanly=giohang');
		$row_data = mysqli_fetch_array($row);
		$_SESSION['dangky'] = $row_data['tenkhachhang'];
		$_SESSION['email'] = $row_data['email'];
		$_SESSION['id_khachhang'] = $row_data['id_dangky'];
	} else {
		echo '<p style="color:red">Mật khẩu hoặc Email sai ,vui lòng nhập lại.</p>';
	}
}
?>
<div class="container border border-dark rounded py-3 px-4 w-50 float-left mx-5">
	<form action="" autocomplete="off" method="POST" class="w-100">
		<div class="form-group">
			<label for="email">Email: </label>
			<input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
		</div>
		<div class="form-group">
			<label for="password">Mật khẩu: </label>
			<input type="password" class="form-control" id="password" name="password">
		</div>
		<button type="submit" name="dangnhap" class="btn text-white" style="background-color: #241C57;">Đăng nhập</button>
	</form>
</div>