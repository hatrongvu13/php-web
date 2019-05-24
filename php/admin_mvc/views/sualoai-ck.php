<?php 
include_once("models/m_chu_de.php");
$sua = new M_chu_de();
$id= "";
if(isset($_GET['id'])){
	$id = $_GET['id'];
}
$edit = $sua-> Sua_loai(1);

?>
<?php 
$con = mysqli_connect('localhost','root','','db_banhang');
mysqli_set_charset($con, 'UTF8');	
$sql = "select * from type_products where id = " .$id;

$code = mysqli_query($con,$sql);
while ($row = mysqli_fetch_assoc($code)) { 
	print_r($row)?>
	<div class="themsp">
		<a href="index.php?function=loai" class="mb-3 btn btn-success">Quay lại</a>
		<h3>Sửa sản phẩm</h3>
		<form method="post" enctype = "multipart/form-data">
			<div class="form-group">
				<label for="loaisp">Tên loại sản phẩm</label>
				<input type="text" class="form-control" name="loaisp" value="<?php echo $row['name'] ; ?>">
			</div>
			<div class="form-group">
				<label for="mota">Mô tả loại sản phẩm</label>
				<textarea class="form-control" id="editor" name="mota" rows="10" value="<?php print $row['description']; ?>"></textarea>
			</div>
			<div class="old">
				<label for="anhcu">Ảnh cũ</label>
				<img src="public/images/product/<?php echo $row['image'] ;?>" alt="" style="width: 100px;height: 100px">
			</div>
			<div class="form-group">
				<label for="anhmoi">Ảnh mới</label><br>
				<input type="file" name="anhmoi">
			</div>
			<input type="submit" name="" value="submit" class="btn btn-success">
		</form>
	</div>
<?php }?>