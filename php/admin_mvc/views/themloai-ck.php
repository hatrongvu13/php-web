<?php 
include_once("models/m_chu_de.php");
$them = new M_chu_de();
$them-> Them_loai();
 ?>
<div class="themsp">
	<a href="index.php?function=loai" class="mb-3 btn btn-success">Quay lại</a>
	<h3>Thêm sản phẩm</h3>
	<form method="post" enctype = "multipart/form-data">
		<div class="form-group">
			<label for="loaisp">Tên loại sản phẩm</label>
			<input type="text" class="form-control" name="loaisp" placeholder="Nhập tên loại sản phẩm">
		</div>
		<div class="form-group">
			<label for="mota">Mô tả loại sản phẩm</label>
			<textarea class="form-control" id="editor" name="mota" placeholder="Nhập mô tả" rows="10"></textarea>
		</div>
		<div class="form-group">
			<label for="anh">Ảnh</label><br>
			<input type="file" name="anh" >
		</div>
		<button type="Thêm" class="btn btn-success">Submit</button>
	</form>
</div>