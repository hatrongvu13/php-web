<?php 
include_once('include/head.php');
include_once('include/header.php');
$function = "bangtin";
?>
<div style="display: flex;">
	<?php  
	include_once('include/sidebar.php');
	?>
	<div class="container-fluid mb-4 noidung" style="width: 82%; position: relative; margin-top: 80px">
		<?php 
		if(isset($_GET['function'])){
			$function = $_GET['function'];
		}
		switch ($function) {
			case "bangtin":
				include_once('view/bangtin.php');
				break;
			case "sanpham":
				include_once('view/sanpham.php');
				break;
			case "nguoidung":
				include_once('view/nguoidung.php');
				break;
			case "hoadon":
				include_once('view/hoadon.php');
				break;
			case "loai":
				include_once('view/loaisp.php');
				break;
			case "slide":
				include_once('view/slide.php');
				break;
			default:
				// code...
				break;
		}
		?>
	</div>
</div>
<?php  
include_once('include/footer.php');
include_once('include/foot.php');
		
?>