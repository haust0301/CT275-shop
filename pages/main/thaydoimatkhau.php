<?php
if (isset($_POST['doimatkhau'])) {
	$taikhoan = $_POST['email'];
	$matkhau_cu = md5($_POST['password_cu']);
	$matkhau_moi = md5($_POST['password_moi']);
	$sql = "SELECT * FROM tbl_dangky WHERE email='" . $taikhoan . "' AND matkhau='" . $matkhau_cu . "' LIMIT 1";
	$row = mysqli_query($mysqli, $sql);
	$count = mysqli_num_rows($row);
	if ($count > 0) {
		$sql_update = mysqli_query($mysqli, "UPDATE tbl_dangky SET matkhau='" . $matkhau_moi . "'");
		echo '<p style="color:green">Mật khẩu đã được thay đổi."</p>';
	} else {
		echo '<p style="color:red">Tài khoản hoặc Mật khẩu cũ không đúng,vui lòng nhập lại."</p>';
	}
}
?>
<form action="" autocomplete="off" method="POST" class="w-50">
	<table class="table-login table table-bordered" style="text-align: center;border-collapse: collapse;">
		<thead class="thead-light">
			<tr>
				<td colspan="2">
					<h5 style="color: #241C57;" class="font-weight-bold">ĐỔI MẬT KHẨU TÀU KHOẢN</h5>
				</td>
			</tr>
		</thead>
		<tr>
			<td>Tài khoản</td>
			<td><input style="color: #241C57;" type="text" name="email"></td>
		</tr>
		<tr>
			<td>Mật khẩu cũ</td>
			<td><input style="color: #241C57;" type="text" name="password_cu"></td>
		</tr>
		<tr>
			<td>Mật khẩu mới</td>
			<td><input style="color: #241C57;" type="text" name="password_moi"></td>
		</tr>
		<tr>

			<td colspan="2"><input class="text-white rounded px-4 py-1" style="background-color: #241C57;" type="submit" name="doimatkhau" value="Đổi mật khẩu"></td>
		</tr>
	</table>
</form>