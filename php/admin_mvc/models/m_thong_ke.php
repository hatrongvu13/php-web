<?php 
/**
 * summary
 */
class M_thong_ke
{
    /**
     * summary
     */
    public function Thongke($month)
    {
    	$conn = mysqli_connect("localhost","root","","db_banhang");
    	$sql = "SELECT SUM(total) FROM bills WHERE month(created_at) = ".$month;
    	$re = mysqli_query($conn, $sql);
    	$row = mysqli_fetch_row($re); 
    	$doanhthu = $row[0];
    	return $doanhthu;
    }
    public function So_don_hang_thang($month)
    {
    	$conn = mysqli_connect("localhost","root","","db_banhang");
    	$sql2 = "SELECT COUNT(*) FROM bills WHERE month(created_at) = ".$month;
    	$re2 = mysqli_query($conn, $sql2);
    	$row2 = mysqli_fetch_row($re2); 
    	$sodonhang = $row2[0];
    	return $sodonhang;
    }
}
// class Thongke
// {
// 	public $id;
// 	public $date_order;
// 	public $note;
// 	public $total;
// 	public function __construct($id,$date_order,$note,$total)
// 	{
// 		$this->ma=$id;
// 		$this->tg=$date_order;
// 		$this->gc=$note;
// 		$this->tong=$total;
// 	}
// }
?>