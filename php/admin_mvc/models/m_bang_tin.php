<?php 
	class BangTin
	{
		public function doanhthu()
		{
			// tổng doanh thu
			$conn = mysqli_connect("localhost","root","","webthuongmai");
			$sql = "SELECT SUM(unit_price) FROM `bill_detail`";
			$re = mysqli_query($conn, $sql);
			$row = mysqli_fetch_row($re); 
			$doanhthu = $row[0];
			return $doanhthu;
			// giá trị trung bình mỗi đơn
			

			// số khách hàng
			// $sql3 = "SELECT COUNT(*) FROM customers";
			// $re3 = mysqli_query($conn, $sql3);
			// $row3 = mysqli_fetch_row($re3); 
			// $sokhachhang = $row[0];
			// return $sokhachhang;
		}
		public function donhang()
		{
			// so don hang
			$conn = mysqli_connect("localhost","root","","webthuongmai");
			$sql2 = "SELECT COUNT(*) FROM bills";
			$re2 = mysqli_query($conn, $sql2);
			$row2 = mysqli_fetch_row($re2); 
			$sodonhang = $row2[0];
			return $sodonhang;
		}
		public function khachhang()
		{
			// so don hang
			$conn = mysqli_connect("localhost","root","","webthuongmai");
			$sql = "SELECT COUNT(*) FROM customer";
			$re = mysqli_query($conn, $sql);
			$row = mysqli_fetch_row($re); 
			$sokhachhang = $row[0];
			return $sokhachhang;
		}
	}
	?>