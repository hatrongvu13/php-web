<?php 
$search = $_POST['data'];
$conn = mysqli_connect("localhost","root","","webthuongmai");
mysqli_set_charset($conn, 'UTF8');
$sql = "SELECT * FROM products WHERE product_name LIKE '%$search%'";
$recordset = mysqli_query($conn, $sql);
$num = mysqli_num_rows($recordset);  
if ($num > 0) {
	while ($row = mysqli_fetch_assoc($recordset)) { ?>
		<div class="col-md-3">
			<div class="card">
				<img src="public/images/product/<?php echo $row['image'] ?>" class="card-img-top" alt="..." style="width: 245px;height: 195px">
				<div class="card-body" style="padding: 10px">
					<h5 class="card-title"><?php echo $row['product_name']; ?></h5>
					<?php if ($row['promotion_price'] > 0 ) { ?>
						<i class="card-text" style="text-decoration: line-through; font-size: 10px"><?php echo $row['promotion_price']; ?> vnd</i>
						<b class="card-text"><?php echo $row['unit_price']; ?> vnd</b>
					<?php }else { ?> 
						<b class="card-text"><?php echo $row['unit_price']; ?> vnd</b>
					<?php } ?>       
					<div class="nut">
						<a href="index.php?function=xem&id=<?php echo $row['id'] ?>" class="btn btn-primary" style="padding: 10px">Xem</a>
						<a href="index.php?function=suasanpham&id=<?php echo $row['id'] ?>" class="btn btn-success" style="padding: 10px">Sửa</a>
						<a href="index.php?function=sanpham&id=<?php echo $row['id'] ?>" class="btn btn-danger" style="padding: 10px">Xóa</a>
					</div>
				</div>
			</div>
		</div>
	<?php }?>		
<?php 
}else {
	echo 'Không có sản phẩm';
} 
?>
