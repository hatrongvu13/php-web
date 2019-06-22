<?php
class C_hoa
{
	public function Hien_thi_hoa_tieu_bieu()
	{
		// Models
		include_once("models/m_hoa.php");
		
		// Phân trang
		
		// Views
		$title="Sản phẩm mới";
		$view="views/hoa/v_hoa.php";
		include("includes/layout.php");	
	}
	public function Hien_thi_hoa_theo_chu_de()
	{
		// Modes
		include_once("models/m_hoa.php");
		
		
		// Views
		$title="Tên chủ đề";
		$view="views/hoa/v_hoa.php";
		include("includes/layout.php");
	}
	public function Tim_hoa()
	{
		// Xử lý tìm webservice
		require_once ('nuSoap/nusoap.php'); 
		//Khai báo tham số Input
		
		// Khai báo tên miền
		
		//Tạo đối tượng tham chiếu đến WebServeices 
		
		// Gọi hàm và truyền tham số 
		
		$hoas=array();
		if(!empty($response))
		{
			
		}
		
		// Views
		$title="Tìm kiếm hoa";
		$view="views/hoa/v_hoa.php";
		include("includes/layout.php"); 
	}
}
?>