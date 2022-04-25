<?php
include('admincp/config/config.php');

require('carbon/autoload.php');

use Carbon\Carbon;
use Carbon\CarbonInterval;

$now = Carbon::now('Asia/Ho_Chi_Minh');

if (isset($_GET['vnp_Amount'])) {

	$vnp_Amount = $_GET['vnp_Amount'];
	$vnp_BankCode = $_GET['vnp_BankCode'];
	$vnp_BankTranNo = $_GET['vnp_BankTranNo'];
	$vnp_OrderInfo = $_GET['vnp_OrderInfo'];
	$vnp_PayDate = $_GET['vnp_PayDate'];
	$vnp_TmnCode = $_GET['vnp_TmnCode'];
	$vnp_TransactionNo = $_GET['vnp_TransactionNo'];
	$vnp_CardType = $_GET['vnp_CardType'];
	$code_cart = $_SESSION['code_cart'];

	//insert database vnpay
	$insert_vnpay = "INSERT INTO tbl_vnpay(vnp_amount,code_cart,vnp_bankcode,vnp_banktranno,vnp_cardtype,vnp_orderinfo,vnp_paydate,vnp_tmncode,vnp_transactionno) VALUE('" . $vnp_Amount . "','" . $code_cart . "','" . $vnp_BankCode . "','" . $vnp_BankTranNo . "','" . $vnp_CardType . "','" . $vnp_OrderInfo . "','" . $vnp_PayDate . "','" . $vnp_TmnCode . "','" . $vnp_TransactionNo . "')";
	$cart_query = mysqli_query($mysqli, $insert_vnpay);

	if ($cart_query) {
		//insert gio hàng
		echo '<h3>Giao dịch thanh toán bằng VNPAY thành công</h3>';
		echo '<p>Vui lòng vào trang <a target="_blank" href="index.php?quanly=lichsudonhang">lịch sử đơn hàng</a> để xem chi tiết đơn hàng của bạn</p>';
	} else {
		echo 'Giao dịch VNPAY thất bại';
	}
}
?>
<span class="badge badge-success" style="font-size: 16px;">Đơn hàng của bạn đã đặt thành công, vui lòng chờ cửa hàng xác nhận và liên hệ bạn sớm nhất!</span>