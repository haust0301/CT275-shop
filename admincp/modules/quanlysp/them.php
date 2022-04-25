<h4 class="mt-5 bg-dark text-white p-3 w-50">Thêm sản phẩm mới</h4>
<form class="mt-4 border p-3 border-dark mb-5" method="POST" action="modules/quanlysp/xuly.php" enctype="multipart/form-data">
	<div class="form-group">
		<label for="tensanpham">Tên sản phẩm</label>
		<input type="text" class="form-control" id="tensanpham" name="tensanpham">
	</div>
	<div class="form-group">
		<label for="masp">Mã sản phẩm</label>
		<input type="text" class="form-control" id="masp" name="masp">
	</div>
	<div class="form-group">
		<label for="giasp">Giá sản phẩm</label>
		<input type="text" class="form-control" id="giasp" name="giasp">
	</div>
	<div class="form-group">
		<label for="soluong">Số lượng</label>
		<input type="text" class="form-control" id="soluong" name="soluong">
	</div>
	<div class="form-group">
		<label for="hinhanh">Hình ảnh</label>
		<input type="file" class="form-control" id="hinhanh" name="hinhanh">
	</div>
	<div class="form-group">
		<label for="tomtat">Sơ lược sản phẩm</label>
		<textarea class="form-control" id="tomtat" name="tomtat" rows="3"></textarea>
	</div>
	<div class="form-group">
		<label for="noidung">Chi tiết thông số sản phẩm</label>
		<textarea class="form-control" id="noidung" name="noidung" rows="5	"></textarea>
	</div>
	<div class="form-group">
		<label for="danhmuc">Danh mục sản phẩm </label>
		<select name="danhmuc">
			<?php
			$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
			$query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
			while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
			?>
				<option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
			<?php
			}
			?>
		</select>
	</div>
	<div class="form-group">
		<label for="tinhtrang">Chế độ hiển thị</label>
		<select name="tinhtrang">
			<option value="1">Kích hoạt</option>
			<option value="0">Ẩn</option>
		</select>
	</div>
	<button type="submit" name="themsanpham" class="btn btn-primary mb-2">Thêm sản phẩm</button>
</form>