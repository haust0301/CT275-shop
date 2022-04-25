<h3 class="mt-1 mb-4">Danh mục</h3>
<ul class="list_sidebar mt-3" style="background: #241C57">
	<?php

	$sql_danhmuc = "SELECT * FROM tbl_danhmuc";
	$query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
	while ($row = mysqli_fetch_array($query_danhmuc)) {
	?>
		<li style="text-transform: uppercase;"><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row['id_danhmuc'] ?>"><?php echo $row['tendanhmuc'] ?></a></li>
	<?php

	} ?>

</ul>