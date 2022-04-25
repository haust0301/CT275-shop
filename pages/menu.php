<?php

$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
$query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);


?>
<?php
if (isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1) {
	unset($_SESSION['dangky']);
}
?>
<nav class="navbar navbar-expand-lg navbar-dark px-5" style="width: 100%; background-color: #241C57">
	<a class="navbar-brand" href="index.php">CT275 SHOP</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active px-1">
				<a class="nav-link" href="index.php">Trang chủ <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item active px-1">
				<a class="nav-link" href="index.php?quanly=giohang">Giỏ hàng</a>
			</li>
			<li class="nav-item active px-1"><a class="nav-link" href="index.php?quanly=tintuc">Sản phẩm mới</a></li>

			<li class="nav-item dropdown active px-1">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
					Danh mục sản phẩm
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<?php
					while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
					?>
						<a class="dropdown-item" href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></a>
					<?php
					}
					?>
				</div>
			</li>

		</ul>
	</div>
	<?php
	if (isset($_SESSION['dangky'])) {

	?>
		<a class="float-right btn btn-primary mr-2" href="index.php?dangxuat=1">Đăng xuất</a>
		<a class="float-right  btn btn-primary mr-2" href="index.php?quanly=thaydoimatkhau">Thay đổi mật khẩu</a>
		<a class="float-right  btn btn-primary" href="index.php?quanly=lichsudonhang">Lịch sử đơn hàng</a>
	<?php
	} else {
	?>
		<a class="float-right btn btn-primary" href="index.php?quanly=dangky">Đăng ký/ Đăng nhập</a>
	<?php
	}
	?>
</nav>