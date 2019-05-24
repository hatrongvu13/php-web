<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
    <!-- logo -->
    <a class="navbar-brand brand-logo" href="/admin">
      <img src="public/images/logo.svg" alt="logo" />
    </a>
    <a class="navbar-brand brand-logo-mini" href="index.html">
      <img src="public/images/logo-mini.svg" alt="logo" />
    </a>
    <!-- end logo -->
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center">
    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item dropdown">
        <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
          <i class="mdi mdi-file-document-box"></i>
          <span class="count">7</span>
        </a>
        <!-- thong bao mail -->
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
          <div class="dropdown-item">
            <p class="mb-0 font-weight-normal float-left">Bạn có 7 mail chưa đọc
            </p>
            <span class="badge badge-info badge-pill float-right">Xem tất cả</span>
          </div>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <img src="public/images/faces/face4.jpg" alt="image" class="profile-pic">
            </div>
            <div class="preview-item-content flex-grow">
              <h6 class="preview-subject ellipsis font-weight-medium text-dark">David Grey
                <span class="float-right font-weight-light small-text">1 phút trước</span>
              </h6>
              <p class="font-weight-light small-text">
                The meeting is cancelled
              </p>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <img src="public/images/faces/face2.jpg" alt="image" class="profile-pic">
            </div>
            <div class="preview-item-content flex-grow">
              <h6 class="preview-subject ellipsis font-weight-medium text-dark">Tim Cook
                <span class="float-right font-weight-light small-text">1 phút trước</span>
              </h6>
              <p class="font-weight-light small-text">
                New product launch
              </p>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <img src="public/images/faces/face3.jpg" alt="image" class="profile-pic">
            </div>
            <div class="preview-item-content flex-grow">
              <h6 class="preview-subject ellipsis font-weight-medium text-dark"> Johnson
                <span class="float-right font-weight-light small-text">18 phút trước</span>
              </h6>
              <p class="font-weight-light small-text">
                Upcoming board meeting
              </p>
            </div>
          </a>
        </div>
      </li>
      <!-- chuong thong bao -->
      <li class="nav-item dropdown">
        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
          <i class="mdi mdi-bell"></i>
          <span class="count">4</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
          <a class="dropdown-item">
            <p class="mb-0 font-weight-normal float-left">Bạn có 4 thông báo mới
            </p>
            <span class="badge badge-pill badge-warning float-right">Xem tất cả</span>
          </a>
          <div class="dropdown-divider"></div>
          <!-- 1 thong bao -->
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-success">
                <i class="mdi mdi-alert-circle-outline mx-0"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <h6 class="preview-subject font-weight-medium text-dark">Application Error</h6>
              <p class="font-weight-light small-text">
                Just now
              </p>
            </div>
          </a>
        </div>
      </li>
      <!-- end 1 thong bao -->
      <!-- hien thi phan tai khoan -->
      <li class="nav-item dropdown d-none d-xl-inline-block">
        <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
          <span class="profile-text">Xin chào, Admin !</span>
          <img class="img-xs rounded-circle" src="public/images/faces/face1.jpg" alt="Profile image">
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
            <a class="dropdown-item">Đổi mật khẩu</a>
            <a class="dropdown-item" href="../admin.php">Đăng xuất</a>
        </div>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="mdi mdi-menu"></span>
    </button>
  </div>
</nav>