<?php 
include_once("models/m_don_hang.php");
$m_donhang = new M_don_hang();
$sodon = $m_donhang->So_don_hang();
$list_dh = $m_donhang->Hien_don_hang();
$id = "";
if (isset($_GET['id'])) {
  $id = $_GET['id'];
}
$capnhat = $m_donhang->Cap_nhat($id);
?>
<div class="container-fluid mb-4">
  <div class="mt-3 mb-3">
    <h3>Danh sách đơn hàng</h3>
    <i>Có <?php echo $sodon ?> dơn hàng</i>
  </div>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Tên khách hàng</th>
        <th scope="col">Số lượng sản phẩm</th>
        <th scope="col">Giá trị</th>
        <th scope="col">Tình trạng</th>
        <th scope="col">Ngày tạo</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($list_dh as $dh) { ?>
        <tr>
          <th scope="row">1</th>
          <td><?php echo $dh->ten ; ?></td>
          <td><?php echo $dh->soluong; ?></td>
          <td><?php echo $dh->gia; ?>vnd</td>
          <td>
            <?php 
            if ($dh->tt == 0) { ?>
              <?php echo "Đang giao"; ?>
            <?php }else { ?>
              <?php echo 'Đã giao'; ?>
            <?php } ?>
          </td>
          <td><?php echo $dh->tg; ?></td>
          <td>
            <a href="index.php?function=chitiethoadon&id=<?php echo $dh->ma ?>" class="btn btn-primary">Chi tiết</a>
            <a href="index.php?function=hoadon&id=<?php echo $dh->ma ?>" class="btn btn-success">Cập nhật</a>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>