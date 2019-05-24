<?php 
include("models/m_slide.php");
$mslide = new Slide();
$list_slide = $mslide->Hien_thi_slide();
// lay anh
$image = "";
if (isset($_FILES['anh'])) {
	$image = $_FILES['anh']['name'];
}
// var_dump($image);
$them = $mslide->Them_slide($image);
// lay id
$id="";
if(isset($_GET['id'])){
	$id = $_GET['id'];
}
$xoa = $mslide->Xoa_slide($id);
?>
<h3 class="mb-3">Quản lý slide</h3>
<div class="container-fluid" style="display: flex;flex-wrap: wrap;">
	<?php foreach ($list_slide as $slide) { ?>
		<div class="card" style="width: 23%; margin-right: 10px">
			<img src="public/images/slide/<?php echo $slide->anh ?>" style="width: 240px; height: 170px" class="card-img-top" alt="...">
			<div class="card-body text-center">
				<a href="index.php?function=slide&id=<?php echo $slide->ma ?>" class="btn btn-danger">Xóa</a>
			</div>
		</div>
	<?php } ?>
</div>
<div class="themslide">
	<form action="" method="post" enctype = "multipart/form-data">
		<h3>Thêm ảnh</h3>
		<input type="file" name="anh">
		<input type="submit" class="btn btn-success" value="Thêm" name="upload">
	</form>
</div>