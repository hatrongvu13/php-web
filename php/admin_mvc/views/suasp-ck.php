<?php 
include_once("models/m_product.php");
$mpro = new M_product();
// lấy dữ liệu
$id = "";
if (isset($_GET['id'])) {
	$id = $_GET['id'];
}
$name = "";
if(isset($_POST['tensp'])){
	$name = $_POST['tensp'];
}
$type="";
if(isset($_POST['loai'])){
	$type = $_POST['loai'];
}
$brand = "";
if(isset($_POST['thuonghieu'])){
	$brand = $_POST['thuonghieu'];
}
$quantity = "";
if(isset($_POST['soluong'])){
	$quantity = $_POST['soluong'];
}
$price = "";
if(isset($_POST['gia'])){
	$price = $_POST['gia'];
}
$sale="";
if(isset($_POST['giakm'])){
	$sale = $_POST['giakm'];
}
$unit="";
if(isset($_POST['donvi'])){
	$unit = $_POST['donvi'];
}
$description="";
if(isset($_POST['mota'])){
	$description = $_POST['mota'];
}
$image = "";
if (isset($_FILES['anhsp'])) {
	$image = $_FILES['anhsp']['name'];
}
$doc = $mpro->Doc_mot_san_pham($id);
$sua = $mpro->Sua_san_pham($id,$name,$type,$brand,$quantity,$price,$sale,$description,$image,$unit);
?>
<?php foreach ($doc as $motsp) { ?>
	<div class="themsp">
		<a href="index.php?function=sanpham" class="mb-3 btn btn-success">Quay lại</a>
		<h3>Sửa sản phẩm</h3>
		<form method="post" enctype = "multipart/form-data">
			<div class="form-group">
				<label for="tensp">Tên sản phẩm</label>
				<input type="text" class="form-control" name="tensp" value="<?php echo $motsp->ten?>">
			</div>
			<div class="form-group">
				<label for="loai">Loại sản phẩm</label>
				<select class="form-control" name="loai">
					<option>...</option>
				</select>
			</div>
			<div class="form-group">
				<label for="thuonghieu">Tên thương hiệu</label>
				<input type="text" class="form-control" name="thuonghieu" placeholder="Tên thương hiệu">
			</div>
			<div class="form-group">
				<label for="gia">Giá</label>
				<input type="text" class="form-control" name="gia" placeholder="Tên thương hiệu" value="<?php echo $motsp->gia?>">
			</div>
			<div class="form-group">
				<label for="giakm">Giá khuyến mãi(nếu có)</label>
				<input type="text" class="form-control" name="giakm" placeholder="Tên thương hiệu" value="<?php echo $motsp->giakm?>">
			</div>
			<div class="form-group">
				<label for="soluong">Số lượng sản phẩm</label>
				<input type="text" class="form-control" name="soluong" placeholder="Số lượng sản phẩm" value="<?php echo $motsp->soluong?>">
			</div>
			<div class="form-group">
				<label for="mota">Mô tả sản phẩm</label>
				<textarea name="mota" id="editor" placeholder="Mô tả sản phẩm" rows="10" class="form-control" value="<?php echo $motsp->mota ?>"></textarea>
			</div>
			<div class="form-group">
				<label for="anhcu">Ảnh cũ</label><br>
				<img src="public/images/product/<?php echo $motsp->anh ?>" alt="" style="width: 150px; height: 150px">
			</div>
			<div class="form-group">
				<label for="anhsp">Ảnh sản phẩm</label>
				<input type="file" class="form-control-file" name="anhsp">
			</div>
			<button type="Thêm" class="btn btn-success">Submit</button>
		</form>
	</div>
	<?php } ?>