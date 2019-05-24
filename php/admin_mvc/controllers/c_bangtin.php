<?php
include_once("models/m_bang_tin.php");
class C_bang_tin
{
	public function Hien_thi_doanh_thu()
	{
		$mbangtin = new BangTin();
		$dt = $mbangtin -> doanhthu();
		echo $dt;
	}	
	public function Hien_thi_so_don_hang()
	{
		$mbangtin = new BangTin();
		$dh = $mbangtin -> donhang();
		echo $dh;
	}	
	public function Trung_binh(){
		$mbangtin = new BangTin();
		$dt = $mbangtin -> doanhthu();
		$dh = $mbangtin -> donhang();
		$trungbinh = round($dt/$dh);
		echo $trungbinh;
	}
	public function So_khach_hang(){
		$mbangtin = new BangTin();
		$kh = $mbangtin -> khachhang();
		echo $kh;
	}
}
?>