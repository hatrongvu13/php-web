<nav class="sidebar sidebar-offcanvas" id="sidebar" style="">
  <ul class="nav">
    <!-- anh va ten nguoi dung -->
    <li class="nav-item nav-profile">
      <div class="nav-link">
        <div class="user-wrapper">
          <div class="profile-image">
            <img src="public/images/faces/face1.jpg" alt="profile image">
          </div>
          <div class="text-wrapper">
            <p class="profile-name">Admin</p>
            <div>
              <small class="designation text-muted">Quản trị viên</small>
              <span class="status-indicator online"></span>
            </div>
          </div>
        </div>
      </div>
    </li>
    <!-- end anh va ten nguoi dung -->
    <!-- Menu điều hướng -->
    <li class="nav-item">
      <a class="nav-link" href="index.php?function=bangtin">
        <i class="menu-icon mdi mdi-television"></i>
        <span class="menu-title">Bảng tin</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <i class="menu-icon mdi mdi-content-copy"></i>
        <span class="menu-title">Quản lý</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="index.php?function=sanpham">Quản lý sản phẩm</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?function=loai">Quản lý loại sản phẩm</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?function=nguoidung">Quản lý người dùng</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?function=hoadon">Quản lý đơn hàng</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?function=slide">Quản lý slide</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.php?function=thongke">
        <i class="menu-icon mdi mdi-table"></i>
        <span class="menu-title">Thống kê</span>
      </a>
    </li>
  </ul>
</nav>