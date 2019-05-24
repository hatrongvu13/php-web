<?php
session_start();
// include_once("login.php");
// $_SESSION['user'] ="";
$email = $password = "";
if (isset($_POST['email'])) {
	$email = $_POST['email'];
}
if (isset($_POST['password'])) {
	$password = $_POST['password'];
}
$conn = mysqli_connect("localhost","root","","webthuongmai");
mysqli_set_charset($conn, 'UTF8');
$sql = "SELECT * FROM customer WHERE email = '$email' AND password = '$password'";
$recordset = mysqli_query($conn, $sql);
$num = mysqli_num_rows($recordset);
if ($num == 1) {
	$_SESSION['user'] = $email;
	// header("Location: index.php");
}
// echo $email;
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Web bán hàng</title>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Grocery Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->
	<link href="source/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="source/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="source/css/font-awesome.css" rel="stylesheet">
	<link href="source/css/easy-responsive-tabs.css" rel="stylesheet">
	<!--pop-up-box-->
	<link href="source/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!--//pop-up-box-->
	<!-- price range -->
	<link rel="stylesheet" type="text/css" href="source/css/jquery-ui1.css">
	<!-- fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>
