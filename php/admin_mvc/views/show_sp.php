<?php
include_once("models/m_product.php");
if (isset($_GET['id'])) {
	$id = $_GET['id'];
}
if(isset($_GET['search'])){
	$search = $_GET['search'];
}
$show = new M_product();
$chitietsanpham = $show -> Doc_mot_san_pham($id);
// chưa hoạt động
$dem = $show->Dem_so_san_pham_da_ban($id);
?>
<div class="container">
	<a href="index.php?function=sanpham" class="btn btn-success mb-4">Quay lại</a>
	<h3>Chi tiết sản phẩm</h3>
	<div class="row">
		<?php foreach ($chitietsanpham as $chitiet) { ?>
		<div class="col-md-5">
			<img src="public/images/product/<?php echo $chitiet->anh ?>" alt="" class="img-fluid">
		</div>
		<div class="col-md-7">
			<h3><?php echo $chitiet->ten; ?></h3>
			<table style="width: 400px">
				<tr style="width: 100px" >
					<td>Giá:</td>
					<td class="text-center"><?php echo $chitiet->gia; ?></td>
				</tr>
				<tr style="width: 100px">
					<td>Giá khuyến mãi:</td>
					<td class="text-center">
						<?php if ($chitiet->giakm == 0) { ?>
							<?php echo "Không có" ?>
						<?php }else {?>
							<?php echo $chitiet->giakm; ?>
						<?php } ?> 						
					</td>
				</tr>
				<tr style="width: 100px">
					<td>Só lượng còn lại:</td>
					<td class="text-center"><?php echo $chitiet->soluong; ?></td>
				</tr>
				<tr style="width: 100px">
					<td>Đơn vị:</td>
					<td class="text-center"><?php echo $chitiet->donvi; ?></td>
				</tr>
				<tr style="width: 100px">
					<td>Thời gian thêm vào:</td>
					<td class="text-center"><?php echo $chitiet->tao; ?></td>
				</tr>
			</table>
		</div>
		<div class="mota mt-4">
			<h4>Mô tả sản phẩm</h4>
			<p>
				<?php if ($chitiet->mota == "") { ?>
					<?php echo "Không có mô tả"; ?>
				<?php }else {?>
					<?php echo $chitiet->mota; ?>
				<?php } ?>					
				</p>
		</div>
		<?php } ?>
	</div>
</div>