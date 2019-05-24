<?php 
include_once('includes/head.php');
include_once('includes/header.php');
$function = "bangtin";
?>
<div style="display: flex;">
	<?php  
	include_once('includes/sidebar.php');
	?>
	<div class="container-fluid mb-4 noidung" style="width: 82%; position: relative; margin-top: 80px">
		<?php 
		if(isset($_GET['function'])){
			$function = $_GET['function'];
		}
		switch ($function) {
			case "bangtin":
				include_once('views/bangtin.php');
				break;
			case "sanpham":
				include_once('views/sanpham.php');
				break;
			case "nguoidung":
				include_once('views/nguoidung.php');
				break;
			case "hoadon":
				include_once('views/hoadon.php');
				break;
			case "loai":
				include_once('views/loaisp.php');
				break;
			case "slide":
				include_once('views/slide.php');
				break;
			case "themsanpham":
				include_once('views/themsp-ck.php');
				break;
			case "suasanpham":
				include_once('views/suasp-ck.php');
				break;
			case "themloai":
				include_once('views/themloai-ck.php');
				break;
			case "sualoai":
				include_once('views/sualoai-ck.php');
				break;
			case "chitiethoadon":
				include_once('views/chitiethoadon.php');
				break;
			case "xem":
				include_once('views/show_sp.php');
				break;
			case "tksanpham":
				include_once('views/tksanpham.php');
				break;
			case "thongke":
				include_once('views/thongke.php');
				break;
			default:
				// code...
				break;
		}
		?>
	</div>
</div>
<?php  
include_once('includes/footer.php');
include_once('includes/foot.php');	
?>