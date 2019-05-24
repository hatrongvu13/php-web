<?php 
if ($_POST['Name']) {
	$name = $_POST['Name'];
}
if ($_POST['Phone']) {
	$phone = $_POST['Phone'];
}
if ($_POST['Address']) {
	$address = $_POST['Address'];
}
if ($_POST['Email']) {
	$email = $_POST['Email'];
}
if ($_POST['Name']) {
	$name = $_POST['Name'];
}
if ($_POST['Name']) {
	$name = $_POST['Name'];
}
if ($_POST['password']) {
	$password = $_POST['password'];
}
$conn = mysqli_connect("localhost","root","","webthuongmai");
mysqli_set_charset($conn, 'UTF8');
$sql = "INSERT INTO `customer`(`id`, `c_name`, `gender`, `email`, `address`, `phone_number`, `note`,`password`, `created_at`, `updated_at`) VALUES (NULL,'$name',NULL,'$email','$address','$phone',NULL,'$password',CURRENT_TIME(),CURRENT_TIME())";
$recordset = mysqli_query($conn, $sql);
header("Location: index.php");
// echo $sql;
$message = "Đăng kí thành công";
echo "<script type='text/javascript'>alert('$message');</script>";
 ?>
