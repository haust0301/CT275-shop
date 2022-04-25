<?php
$code = $_GET['code'];
$sql_lietke_dh = "SELECT * FROM tbl_cart_details,tbl_sanpham WHERE tbl_cart_details.id_sanpham=tbl_sanpham.id_sanpham AND tbl_cart_details.code_cart='" . $code . "' ORDER BY tbl_cart_details.id_cart_details DESC";
$query_lietke_dh = mysqli_query($mysqli, $sql_lietke_dh);
?>

<h4 class="my-4 bg-dark text-white p-3 w-50">Chi tiết đơn hàng</h4>
<table class="table table-bordered ">
  <thead class="thead-light text-center">
    <tr>
      <th scope="col">Mã đơn hàng</th>
      <th scope="col">Tên sản phẩm</th>
      <th scope="col">Số lượng</th>
      <th scope="col">Đơn giá</th>
      <th scope="col">Thành tiền</th>
  </thead>
  <tbody>
    <?php
    $i = 0;
    $tongtien = 0;
    while ($row = mysqli_fetch_array($query_lietke_dh)) {
      $i++;
      $thanhtien = $row['giasp'] * $row['soluongmua'];
      $tongtien += $thanhtien;
    ?>
      <tr>
        <td><?php echo $row['code_cart'] ?></td>
        <td><?php echo $row['tensanpham'] ?></td>
        <td><?php echo $row['soluongmua'] ?></td>
        <td class="text-right"><?php echo number_format($row['giasp'], 0, ',', '.') . 'vnđ' ?></td>
        <td class="text-right"><?php echo number_format($thanhtien, 0, ',', '.') . 'vnđ' ?></td>

      </tr>
    <?php
    }
    ?>
  </tbody>
</table>
<p class="text-right mr-3 font-weight-bold">Tổng tiền: <?php echo number_format($tongtien, 0, ',', '.') . 'vnđ' ?></p>

<button class="btn btn-primary float-right mr-3">In hóa đơn</button>