<?php 
include("models/m_don_hang.php");
$motdon = new M_don_hang();
$id = "";
if (isset($_GET['id'])) {
	$id = $_GET['id'];
}
$chitiethoadon = $motdon -> Xem_chi_tiet($id);
?>
<div class="container">
	<a href="index.php?function=hoadon" class="btn btn-success mb-3">Quay lại</a>
	<h3>Chi tiết hóa đơn</h3>
	<table border="1"> 
		<?php foreach ($chitiethoadon as $hd) {?>
			<tr>
				<td>Mã đơn hàng: </td>
				<td><?php echo $hd->ma; ?></td>
			</tr>
			<tr>
				<td>Tên người mua: </td>
				<td><?php echo $hd->ten; ?></td>
			</tr>
			<tr>
				<td>Tên sản phẩm: </td>
				<td><?php echo $hd->tensp; ?></td>
			</tr>
			<tr>
				<td>Đơn giá: </td>
				<td><?php echo $hd->gia; ?></td>
			</tr>
			<tr>
				<td>Khuyến mại </td>
				<td><?php echo $hd->km; ?></td>
			</tr>
			<tr>
				<td>Ảnh </td>
				<td><img src="public/images/product/<?php echo $hd->anh; ?>" alt="" style="width: 100px; height: 100px"></td>
			</tr>
			<tr>
				<td>Số lượng: </td>
				<td><?php echo $hd->soluong; ?></td>
			</tr>
			<tr>
				<td>Tình trạng: </td>
				<td><i>
					<?php if ($hd->tt == 0){ ?>
						<?php echo 'Đang giao'; ?>
					<?php }else { ?>
						<?php echo 'Đã giao'; ?>
					<?php } ?>
				</i></td>
			</tr>
			<tr>
				<td>Thời gian đặt hàng: </td>
				<td><?php echo $hd->tg; ?></td>
			</tr>
		<?php } ?>
	</table>
</div>