<?php
if (isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1) {
	unset($_SESSION['dangnhap']);
	header('Location:login.php');
}
?>
<style>
	.nav-link:hover {
		opacity: 0.8;
	}
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<ul class="admincp_list">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand text-white" href="index.php">HOME</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a href="index.php?action=quanlydanhmucsanpham&query=them" class="nav-link text-white">Quản lí danh mục sản phẩm</a>
				</li>
				<li class="nav-item">
					<a href="index.php?action=quanlysp&query=them" class="nav-link text-white">Quản lí sản phẩm</a>
				</li>
				<li class="nav-item">
					<a href="index.php?action=quanlydonhang&query=lietke" class="nav-link text-white">Quản lí đơn hàng</a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<a href="index.php?dangxuat=1" class="btn btn-secondary btn-md active" role="button" aria-pressed="true">Đăng xuất</a>
			</form>
		</div>
	</nav>
</ul>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>