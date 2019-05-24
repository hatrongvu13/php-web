<?php 
class show{
    public function show_type_product(){
        include_once('models/m_page.php');
        $n = new page;
        // $n->();
        if(!isset($_GET['type']) || $_GET['type'] == '1' ){
            $loaihientai = 1;
            }
            else{
                $loaihientai = $_GET['type'];
            }
        // model
        $kichthuoc  = 8;
        $total = $n->total($loaihientai);
        if(!isset($_GET['typepage']) || $_GET['typepage'] == '1' ){
            $tranghientai = 1;
            }
            else{
                $tranghientai = $_GET['typepage'];
            }
        $start = ($tranghientai-1)*$kichthuoc;
        $sotrang = $total%$kichthuoc+1;
        $list = $n->Hien_thi_theo_loai($loaihientai,$start,$kichthuoc);
        $left = $n->Hien_thi_sp_khuyenmai(0);
        $bot = $n->Hien_thi_sp_khuyenmai(3);
        $slide ='page-slide.php';
        // $view = 'view/page/main.php';
        include('includes/layout.php');
    }
}
?>