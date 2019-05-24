<?php 
// echo 'controll';
class Laydulieu{
    public function laytatca(){
        include_once('models/m_product.php');
        $n = new get;
        // phân trang
        $kichthuoc  = 9;
        if(!isset($_GET['page']) || $_GET['page'] == '1' ){
            $tranghientai = 1;
            }
            else{
                $tranghientai = $_GET['page'];
            }
        $start = ($tranghientai-1)*$kichthuoc;
        $list = $n->getData($start, $kichthuoc);
        $left = $n->Hien_thi_sp_khuyenmai(0);
        $bot = $n->Hien_thi_sp_khuyenmai(3);
        $total = $n->tongsp('');
        $tongsp = $total;
        $sotrang = $tongsp%$kichthuoc+1;
        //hiển thị
        $trang ='page=';
        $title = 'Tất cả sản phẩm';
        $slide = 'includes/slide.php';
        include('includes/layout.php');
    }
    public function Lay_san_pham_theo_id($id){
        include_once('models/m_product.php');
        $n = new get;
        $motsp = $n->one_product($id);
        return $motsp;
        // include('includes/layout.php');
    }
}
?>