<?php
class C_product
{
	public function Hien_thi_san_pham(){
		$kichthuoctrang = 8;
		$dongbatdau = 0;
		$tranghientai = 1;
		// Models
		include_once("models/m_product.php");
		$mpro = new m_product();
		$tongsodong = $mpro->tongsosanpham();
		$tongsotrang = 0;
		
		if($tongsodong%$kichthuoctrang == 0) {
			$tongsotrang = $tongsodong/$kichthuoctrang;	
		} else {
			$tongsotrang = (int)($tongsodong/$kichthuoctrang) + 1;	
		}
		// Phân trang
		if((!isset($_GET['tranghientai'])) || ($_GET['tranghientai'] == '1')){
			$dongbatdau = 0;
			$tranghientai = 1;
		} else {
			$dongbatdau = ($_GET['tranghientai'] - 1) * $kichthuoctrang;
			$tranghientai = $_GET['tranghientai'];
		}
		$listsp = $mpro->Doc_san_pham($dongbatdau, $kichthuoctrang);
		// Views
		include("includes/layout.php");	
	}
}
?>