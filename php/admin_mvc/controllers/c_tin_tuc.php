<?php
class C_tin_tuc
{
	public function Hien_thi_tin_tuc_theo_ma_tin_tuc()
	{
		// Modes
		
		include_once("models/m_tin_tuc.php");
		
		
		// Views
		$title="Tên tin tức";
		$view="views/tin_tuc/v_tin_tuc.php";
		include("includes/layout.php");
	}	
}
?>