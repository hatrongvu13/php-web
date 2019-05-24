<?php 
include_once("models/m_chu_de.php");
include_once("models/m_product.php");
$mchude = new M_chu_de();
$mpro = new M_product();
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
if (isset($_FILES['anh'])) {
	$image = $_FILES['anh']['name'];
}
$listcd = $mchude->Doc_chu_de();
$sua = $mpro->Them_san_pham($name,$type,$brand,$quantity,$price,$sale,$description,$image,$unit);
?>
<div class="themsp">
	<a href="index.php?function=sanpham" class="mb-3 btn btn-success">Quay lại</a>
	<h3>Thêm sản phẩm</h3>
	<form method="post" enctype = "multipart/form-data">
		<div class="form-group">
			<label for="tensp">Tên sản phẩm</label>
			<input type="text" class="form-control" name="tensp" placeholder="Nhập tên sản phẩm">
		</div>
		<div class="form-group">
			<label for="loai">Loại sản phẩm</label>
			<select class="form-control" name="loai">
				<option>...</option>
				<?php foreach ($listcd as $cd) { ?>
					<option value="<?php echo $cd->ma; ?>"><?php echo $cd->ma; ?>-<?php echo $cd->ten; ?></option>
				<?php } ?>
			</select>
		</div>
		<div class="form-group">
			<label for="thuonghieu">Tên thương hiệu</label>
			<input type="text" class="form-control" name="thuonghieu" placeholder="Tên thương hiệu">
		</div>
		<div class="form-group">
			<label for="gia">Giá</label>
			<input type="text" class="form-control" name="gia" placeholder="Tên thương hiệu">
		</div>
		<div class="form-group">
			<label for="giakm">Giá khuyến mãi(nếu có)</label>
			<input type="text" class="form-control" name="giakm" placeholder="Tên thương hiệu">
		</div>
		<div class="form-group">
			<label for="donvi">Đơn vị</label>
			<input type="text" class="form-control" name="donvi" placeholder="Đơn vị">
		</div>
		<div class="form-group">
			<label for="soluong">Số lượng sản phẩm</label>
			<input type="text" class="form-control" name="soluong" placeholder="Số lượng sản phẩm">
		</div>
		<div class="form-group">
			<label for="mota">Mô tả sản phẩm</label>
			<textarea name="mota" id="editor" placeholder="Mô tả sản phẩm" rows="10" class="form-control"></textarea>
		</div>
		<div class="form-group">
			<label for="anh">Ảnh sản phẩm</label>
			<input type="file" class="form-control-file" name="anh">
		</div>
		<button type="Thêm" class="btn btn-success">Submit</button>
	</form>
</div>
<?php 
// include_once("controllers/c_product.php");
// $mpro = new C_product();
// $mpro->Them_san_pham();
?>