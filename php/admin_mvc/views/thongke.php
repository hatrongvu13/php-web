<?php 
include("models/m_thong_ke.php");
$month = 0;
if (isset($_POST['month'])) {
	$month = $_POST['month'];
}
$tk = new M_thong_ke();
$thongke = $tk->Thongke($month);
$thongke2 = $tk->So_don_hang_thang($month);
?>

<div class="container">
	Chọn tháng:	
	<form action="" method="post">
		<select name="month" id="" class="form-control">
			<?php for($i=1;$i<=12;$i++) {?>
				<option value="<?php echo $i ?>"><?php echo $i ?></option>
			<?php } ?>
		</select>
		<input type="submit" name="" class="btn btn-success" value="Thống kê">
	</form>
	<h3 class="mt-4">Báo cáo</h3>
	<?php if ($thongke == NULL) {?>
		<?php echo "Không có báo cáo"; ?>
	<?php }else {?>
		<table>
			<tr>
				<td>Doanh thu tháng <?php echo $month ?>: </td>
				<td><b><?php echo $thongke ?></b> vnd</td>
			</tr>
			<tr>
				<td>Số khách hàng tháng <?php echo $month ?>:</td>
				<td><b><?php echo $thongke2 ?></b></td>
			</tr>
		</table>
	<?php } ?> 
</div>

