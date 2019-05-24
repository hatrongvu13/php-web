<?php
session_start();
$mysqli = new mysqli('localhost','root','','webthuongmai');
mysqli_set_charset($mysqli,"utf8");
// xóa giỏ hàng
function goback(){
    header("location:{$_SERVER['HTTP_REFERER']}");
}
if(isset($_GET["emptycart"]) && $_GET["emptycart"]==1){
// $return_url = base64_decode($_GET["return_url"]); ///return url
session_destroy();
// header('location:'.$_SERVER['http_referrer']);
goback();
}
// thêm vào giỏ hàng 
if(isset($_POST["type"]) && $_POST["type"]=='add'){
    $product_id   = $_POST["id"];
    if (isset($_POST["total"])) {
        $total = $_POST["total"];
    }else{
        $total = 1;
    }
    // $return_url = ($_POST["return_url"]);
    // if($product_qty > 10){
    //     die('<div align="center">Ví dụ này không quá 10 sản phẩm</div>');
    // }

//Lấy thông tin chi tiết sản phẩm bằng product_id
    $sql = "SELECT * FROM products WHERE id= $product_id LIMIT 1";
    $db = new PDO('mysql:host=localhost; dbname=webthuongmai;charset=utf8','root','');
    $results = $db->query($sql);
    $r = $results->fetch();
    if ($results) {
        //array để lưu thông tin sản phẩm 
        $new_product = array(array('name'=>$r['name'], 'id'=>$product_id, 'total'=>$total, 'price'=>$r['unit_price'],'promotion_price'=>$r['promotion_price'],'img'=>$r['image']));
        // arr lưu số lượng
        $total_pr = array();
        if(isset($_SESSION["products"])) // kiểm tra nếu có sản phẩm trong giỏ hàng rồi thì cập nhật lại
        {
            $found = false; //Thiết lập mặc định ban đầu biến kiểm tra sản phẩm tồn tại thành false
            
            foreach ($_SESSION["products"] as $cart_itm) //vòng lặp mảng SESSION 
            {
                if($cart_itm["id"] == $product_id){ //sản phẩm đã tồn tại trong mảng
                    $product[] = array('name'=>$cart_itm["name"], 'id'=>$cart_itm["id"], 'total'=>$total, 'price'=>$cart_itm["price"],
                'promotion_price'=>$cart_itm['promotion_price'], 'img'=>$cart_itm['img']);
                    $found = true; // Thiết lập biến kiểm tra sản phẩm tồn tại thành true
                }else{
                    //item doesn't exist in the list, just retrive old info and prepare array for session var
                    $product[] = array('name'=>$cart_itm["name"], 'id'=>$cart_itm["id"], 'total'=>$cart_itm["total"], 'price'=>$cart_itm["price"], 'promotion_price'=>$cart_itm['promotion_price'], 'img'=>$cart_itm['img']);
                }
            }
        
            if($found == false) //Không tìm thấy sản phẩm trong giỏ hàng
            {
                //Thêm mới sản phẩm vào mảng
                $_SESSION["products"] = array_merge($product, $new_product);
            }else{
                //Tìm thấy sản phẩm đã có trong mảng SESSION nên chỉ cập nhật lại số lượng(QTY)
                $_SESSION["products"] = $product;
            }
        
        }else{
            //Tạo biến SESSION mới hoàn toàn nếu không có sản phẩm nào trong giỏ hàng
            $_SESSION["products"] = $new_product;
        }
    
    }
    // $_SESSION["products"] = null;
    //Trở về lại trang cũ
    // header('location:'.$_POST['return_url']);
    goback();
}
// xóa sản phẩm
if(isset($_GET["removep"]) && isset($_SESSION["products"]))
{
    $product_id   = $_GET["removep"]; //Lấy product_id để xóa
    foreach ($_SESSION["products"] as $cart_itm) //Vòng lặp biến SESSION
    {
        if($cart_itm["id"]!=$product_id){ //Lọc lại giỏ hàng, sản phẩm nào trùng product_id muốn xóa sẽ bị loại bỏ
            $product[] = array('name'=>$cart_itm["name"], 'id'=>$cart_itm["id"], 'total'=>$cart_itm["total"], 'price'=>$cart_itm["price"]);
        }
        //Tạo mới biến SESSION lưu giỏ hàng
        $_SESSION["products"] = $product;
    }
    
    //Trở về lại trang cũ
    // header('location:checkout.php');
    goback();
}
?>