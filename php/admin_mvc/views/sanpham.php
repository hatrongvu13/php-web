<?php 
$id="";
if(isset($_GET['id'])){
  $id = $_GET['id'];
}
$search = "";
if(isset($_POST['search'])){
  $search = $_POST['search'];
}
$mpro = new M_product();
$xoa = $mpro->Xoa_san_pham($id);
?>
<div class="container-fluid mb-4">
  <div class="row mb-3">
    <div class="col-md-6">
     <a href="index.php?function=themsanpham" class="btn btn-success">Thêm sản phẩm + </a>
   </div>
   <div class="col-md-6 float-right">
    <form action="" method="post" style="position: relative;">
      <input type="search" name="search" class="form-control timkiem" placeholder="Tìm kiếm sản phẩm">
    </form>
  </div>
</div>
<i class="mb-3">Có <?php echo $tongsodong; ?> sản phẩm</i>
<div class="row danhsach">
  <!-- 1 sản phẩm -->
  <?php foreach ($listsp as $sanpham) { ?>
    <div class="col-md-3">
      <div class="card">
        <img src="public/images/product/<?php echo $sanpham->anh ?>" class="card-img-top" alt="..." style="width: 245px;height: 195px">
        <div class="card-body" style="padding: 10px">
          <h5 class="card-title"><?php echo $sanpham->ten; ?></h5>
          <?php if ($sanpham->giakm > 0 ) { ?>
            <i class="card-text" style="text-decoration: line-through; font-size: 10px"><?php echo $sanpham->gia; ?> vnd</i>
            <b class="card-text"><?php echo $sanpham->giakm; ?> vnd</b>
          <?php }else { ?> 
            <b class="card-text"><?php echo $sanpham->gia; ?> vnd</b>
          <?php } ?>       
          <div class="nut">
           <a href="index.php?function=xem&id=<?php echo $sanpham->ma ?>" class="btn btn-primary" style="padding: 10px">Xem</a>
           <a href="index.php?function=suasanpham&id=<?php echo $sanpham->ma ?>" class="btn btn-success" style="padding: 10px">Sửa</a>
           <a href="index.php?function=sanpham&id=<?php echo $sanpham->ma ?>" class="btn btn-danger" style="padding: 10px">Xóa</a>
         </div>
       </div>
     </div>
   </div>
 <?php } ?>
 <!-- end 1 sản phẩm -->
</div>

<div class="container justify-content-center">
  <nav aria-label="Page navigation example">
    <ul class="pagination">
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
        </a>
      </li>
      <?php
      for($i = 1; $i <= $tongsotrang; $i++) { ?>
        <li class="page-item"><a class="page-link" href="index.php?function=sanpham&tranghientai=<?php echo $i; ?>"><?php echo $i; ?></a></li>
      <?php }?>
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
</div>
</div>