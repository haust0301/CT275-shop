 <?php
	session_start();
	include('config/config.php');
	if (isset($_POST['dangnhap'])) {
		$taikhoan = $_POST['username'];
		$matkhau = md5($_POST['password']);
		$sql = "SELECT * FROM tbl_admin WHERE username='" . $taikhoan . "' AND password='" . $matkhau . "' LIMIT 1";
		$row = mysqli_query($mysqli, $sql);
		$count = mysqli_num_rows($row);
		if ($count > 0) {
			$_SESSION['dangnhap'] = $taikhoan;
			header("Location:index.php");
		} else {
			echo '<script>alert("Tài khoản hoặc Mật khẩu không đúng,vui lòng nhập lại.");</script>';
			header("Location:login.php");
		}
	}
	?>

 <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
 <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


 <!DOCTYPE html>
 <html>

 <head>
 	<title>Login Page</title>
 	<!--Made with love by Mutiullah Samim -->

 	<!--Bootsrap 4 CDN-->
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

 	<!--Fontawesome CDN-->
 	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

 	<!--Custom styles-->
 	<link rel="stylesheet" type="text/css" href="styles.css">
 	<style>
 		@import url('https://fonts.googleapis.com/css?family=Numans');

 		html,
 		body {
 			background-image: url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg');
 			background-size: cover;
 			background-repeat: no-repeat;
 			height: 100%;
 			font-family: 'Numans', sans-serif;
 		}

 		.container {
 			height: 100%;
 			align-content: center;
 		}

 		.card {
 			height: 300px;
 			margin-top: auto;
 			margin-bottom: auto;
 			width: 400px;
 			background-color: rgba(0, 0, 0, 0.5) !important;
 		}

 		.card-header h3 {
 			color: white;
 			text-align: center;
 		}

 		.social_icon {
 			position: absolute;
 			right: 20px;
 			top: -45px;
 		}

 		.input-group-prepend span {
 			width: 50px;
 			background-color: #FFC312;
 			color: black;
 			border: 0 !important;
 		}

 		input:focus {
 			outline: 0 0 0 0 !important;
 			box-shadow: 0 0 0 0 !important;

 		}

 		.login_btn {
 			color: black;
 			background-color: #FFC312;
 			width: 100px;
 		}

 		.login_btn:hover {
 			color: black;
 			background-color: white;
 		}
 	</style>
 </head>

 <body>
 	<div class="container">
 		<div class="d-flex justify-content-center h-100">
 			<div class="card">
 				<div class="card-header m-3">
 					<h3>ADMIN LOGIN</h3>
 				</div>
 				<div class="card-body">
 					<form action="" autocomplete="off" method="POST">
 						<div class="input-group form-group">
 							<div class="input-group-prepend">
 								<span class="input-group-text"><i class="fas fa-user"></i></span>
 							</div>
 							<input type="text" class="form-control" placeholder="username" name="username">

 						</div>
 						<div class="input-group form-group">
 							<div class="input-group-prepend">
 								<span class="input-group-text"><i class="fas fa-key"></i></span>
 							</div>
 							<input type="password" class="form-control" placeholder="password" name="password">
 						</div>
 						<div class="form-group">
 							<input input type="submit" name="dangnhap" value="Login" class="btn float-right login_btn">
 						</div>
 					</form>
 				</div>
 			</div>
 		</div>
 	</div>
 	</div>
 	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 </body>

 </html>