<?php
class C_khach_hang
{
	public function Hien_thi_khach_hang()
	{
		// Xử lý thêm khách hàng
		include("models/m_khach_hang.php");
		$mkh = new M_khach_hang;
		$listkh = $mkh -> khach();
	}	
}
?>