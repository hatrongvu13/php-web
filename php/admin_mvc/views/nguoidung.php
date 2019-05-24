<?php 
include("models/m_khach_hang.php");
$mkh = new M_khach_hang();
$listkh = $mkh ->khach();
// lay id khach
$id="";
if (isset($_GET['id'])) {
  $id = $_GET['id'];
}
$xoa = $mkh->Xoa_tai_khoan($id);
?>
<div class="container-fluid mb-4">
  <div class="mt-3 mb-3">
    <h3>Danh sách người dùng</h3>
  </div>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Tên người dùng</th>
        <th class="text-center"> Số tiền đã thanh toán </th>
        <th scope="col">Ngày tạo</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($listkh as $kh) { ?>
        <tr>
          <th scope="row">1</th>
          <td><?php echo $kh->ten; ?></td>
          <th class="text-center"><?php echo $kh->em; ?></th>
          <td><?php echo $kh->tg; ?></td>
          <td><a href="index.php?function=nguoidung&id=<?php echo $kh->ma ?>" class="btn btn-danger">Xóa</a></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>