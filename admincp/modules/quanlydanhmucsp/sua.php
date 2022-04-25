<?php
$sql_sua_danhmucsp = "SELECT * FROM tbl_danhmuc WHERE id_danhmuc='$_GET[iddanhmuc]' LIMIT 1";
$query_sua_danhmucsp = mysqli_query($mysqli, $sql_sua_danhmucsp);
?>

<div class="px-3 border border-dark rounded mt-5" style="width: 500px;">
	<h4 class=" mb-3 mt-4">Sửa thông tin danh mục</h4>
	<form class="mb-4" method="POST" action="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>">

		<?php
		while ($dong = mysqli_fetch_array($query_sua_danhmucsp)) {
		?>
			<!-- <tr>
				<td>Tên danh mục</td>
				<td><input type="text" value="<?php echo $dong['tendanhmuc'] ?>" name="tendanhmuc"></td>
			</tr>
			<tr>
				<td>Thứ tự</td>
				<td><input type="text" value="<?php echo $dong['thutu'] ?>" name="thutu"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="suadanhmuc" value="Sửa danh mục sản phẩm"></td>
			</tr> -->

			<div class="form-group">
				<label for="tendanhmuc" style="display: inline-block;" class="mr-3">Tên danh mục</label>
				<input type="text" value="<?php echo $dong['tendanhmuc'] ?>" style="display: inline-block; width: 200px" class="form-control" id="tendanhmuc" placeholder="Nhập tên danh mục" name="tendanhmuc">
			</div>
			<button type="submit" name="suadanhmuc" class="btn btn-primary">Lưu thay đỗi</button>
		<?php
		}
		?>

	</form>
</div>