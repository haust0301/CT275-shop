<?php
$sql_lietke_danhmucsp = "SELECT * FROM tbl_danhmuc ORDER BY thutu DESC";
$query_lietke_danhmucsp = mysqli_query($mysqli, $sql_lietke_danhmucsp);
?>
<hr>
<h4 class="mt-2 bg-dark text-white p-3 w-50">Danh sách các danh mục</h4>
<div class="mt-4 mb-5" style="height: 100%;">
  <table class="table table-bordered" style="margin-bottom: 0;">
    <thead class="thead-light">
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Tên danh mục</th>
        <th scope="col">Thao tác</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $i = 0;
      while ($row = mysqli_fetch_array($query_lietke_danhmucsp)) {
        $i++;
      ?>
        <tr>
          <td><?php echo $row["id_danhmuc"] ?></td>
          <td><?php echo $row['tendanhmuc'] ?></td>
          <td>
            <a href="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Xoá</a> | <a href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Sửa</a>
          </td>
        </tr>

      <?php
      }
      ?>
      <tr>
    </tbody>
  </table>
</div>