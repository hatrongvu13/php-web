<?php
session_start();
// function goback(){
//     header("location:{$_SERVER['HTTP_REFERER']}");
// }
if(isset($_POST['save']) && $_POST['save'] == 'action'){
    for ($i=0; $i <count($_SESSION['products']) ; $i++) { 
        $id = $_SESSION['products'][$i]['id'];
        $id_bill = 2;
        $total = $_SESSION['products'][$i]['total'];
        $price = $_SESSION['products'][$i]['price'];
        // $id_product = $_SESSION['products'][$i]['id']
    // câu truy vấn
    $sql = "INSERT INTO `bill_detail`(`id_bill`, `id_product`, `quantity`, `unit_price`) VALUES ($id_bill,$id,$total,$price)";
    $db = new PDO('mysql:host=localhost; dbname=webthuongmai;charset=utf8','root','');
    $results = $db->query($sql);
    }
    // echo 'theem';
    // echo $id;
}else{
    echo 'Đơn hàng bị lỗi';
}

goback();
?>