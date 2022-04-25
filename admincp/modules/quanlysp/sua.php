<?php
$sql_sua_sp = "SELECT * FROM tbl_sanpham WHERE id_sanpham='$_GET[idsanpham]' LIMIT 1";
$query_sua_sp = mysqli_query($mysqli, $sql_sua_sp);
?>


<h4 class="mt-5 bg-dark text-white p-3 w-50">Sửa đỗi thông tin sản phẩm</h4>
<?php
while ($row = mysqli_fetch_array($query_sua_sp)) {
?>
	<form class="mt-3 border p-3 border-dark" method="POST" action="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>" enctype="multipart/form-data">
		<div class="form-group">
			<label for="tensanpham">Tên sản phẩm</label>
			<input type="text" value="<?php echo $row['tensanpham'] ?>" class="form-control" id="tensanpham" name="tensanpham">
		</div>
		<div class="form-group">
			<label for="masp">Mã sản phẩm</label>
			<input type="text" value="<?php echo $row['masp'] ?>" class="form-control" id="masp" name="masp">
		</div>
		<div class="form-group">
			<label for="giasp">Giá sản phẩm</label>
			<input type="text" value="<?php echo $row['giasp'] ?>" class="form-control" id="giasp" name="giasp">
		</div>
		<div class="form-group">
			<label for="soluong">Số lượng</label>
			<input type="text" value="<?php echo $row['soluong'] ?>" class="form-control" id="soluong" name="soluong">
		</div>
		<div class="form-group">
			<label for="hinhanh">Hình ảnh</label>
			<input type="file" class="form-control" id="hinhanh" name="hinhanh">
			<img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" width="150px">
		</div>
		<div class="form-group">
			<label for="tomtat">Sơ lược sản phẩm</label>
			<textarea class="form-control" id="tomtat" name="tomtat" rows="3"><?php echo $row['tomtat'] ?></textarea>
		</div>
		<div class="form-group">
			<label for="noidung">Chi tiết thông số sản phẩm</label>
			<textarea class="form-control" id="noidung" name="noidung" rows="5	"><?php echo $row['noidung'] ?></textarea>
		</div>
		<div class="form-group">
			<label for="danhmuc">Danh mục sản phẩm </label>
			<select name="danhmuc">
				<?php
				$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
				$query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
				while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
					if ($row_danhmuc['id_danhmuc'] == $row['id_danhmuc']) {
				?>
						<option selected value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
					<?php
					} else {
					?>
						<option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
				<?php
					}
				}
				?>
			</select>
		</div>
		<div class="form-group">
			<label for="tinhtrang">Chế độ hiển thị</label>
			<select name="tinhtrang">
				<?php
				if ($row['tinhtrang'] == 1) {
				?>
					<option value="1" selected>Kích hoạt</option>
					<option value="0">Ẩn</option>
				<?php
				} else {
				?>
					<option value="1">Kích hoạt</option>
					<option value="0" selected>Ẩn</option>
				<?php
				}
				?>

			</select>
		</div>
		<button type="submit" name="suasanpham" class="btn btn-primary mb-2">Sửa sản phẩm</button>
	</form>
<?php
}
?>