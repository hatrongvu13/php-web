<?php 
if (isset($_POST['email'])) {
	$email = $_POST['email'];
}
if (isset($_POST['password'])) {
	$password = $_POST['password'];
}
$db = new PDO('mysql:host=localhost; dbname=webthuongmai','root','');
$db->query('set names "utf8"');
$sql="SELECT * FROM users WHERE email= :email AND password=:password";
$req = $db->prepare($sql);
$req->execute(
	array(
		'email' => $email,
		'password' => $password
	)
);
$count = $req->rowCount();
if( $count == 1){
	$_SESSION['user_name'] = $email;
	header("Location: admin_mvc/");
}else {
	echo 'Mật khẩu hoặc tài khoản sai';
	header("Location: admin_mvc/");
}
?>