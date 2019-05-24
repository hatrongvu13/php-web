<div class="container-fluid mb-4">
  <a href="index.php?function=themloai" class="btn btn-success">Thêm loại sản phẩm + </a>
  <div class="mt-3 mb-3">
    <h3>Danh sách loại sản phẩm</h3>
    <i>Có 5 loại sản phẩm</i>
  </div>
  <?php 
  include_once("models/m_chu_de.php");
  $m_chude = new M_chu_de();
  $list_cd = $m_chude->Doc_chu_de();
  // truyền id đến model để xóa
  $id= "";
  if(isset($_GET['id'])){
    $id = $_GET['id'];
  }
  $xoa = $m_chude->Xoa_loai($id);
  ?>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Tên</th>
        <th scope="col">Ảnh</th>
        <th scope="col">Ngày tạo</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($list_cd as $cd) {?>
        <tr>
          <th scope="row">1</th>
          <th scope="row">
            <img src="public/images/product/<?php echo $cd->anh ;?>" alt="">
          </th>
          <td><?php echo $cd->ten ; ?></td>
          <td><?php echo $cd->tg; ?></td>
          <td>
            <a href="index.php?function=sualoai&id=<?php echo $cd->ma ?>" class="btn btn-success">Sửa</a>
            <a href="index.php?function=loai&id=<?php echo $cd->ma ?>" class="btn btn-danger">Xóa</a>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>