<div class="container-scroller">
  <div class="row">
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
      <div class="card card-statistics">
        <div class="card-body">
          <div class="clearfix">
            <div class="float-left">
              <i class="mdi mdi-cube text-danger icon-lg"></i>
            </div>
            <div class="float-right">
              <p class="mb-0 text-right">Tổng doanh thu</p>
              <div class="fluid-container">
                <h3 class="font-weight-medium text-right mb-0">
                  <?php 
                  include("controllers/c_bangtin.php");
                  $bangtin = new C_bang_tin();
                  $bangtin -> Hien_thi_doanh_thu();
                  ?>
                </h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
      <div class="card card-statistics">
        <div class="card-body">
          <div class="clearfix">
            <div class="float-left">
              <i class="mdi mdi-receipt text-warning icon-lg"></i>
            </div>
            <div class="float-right">
              <p class="mb-0 text-right">Tổng đơn hàng</p>
              <div class="fluid-container">
                <h3 class="font-weight-medium text-right mb-0">
                 <?php 
                 $bangtin -> Hien_thi_so_don_hang();
                 ?>
               </h3>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
   <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="clearfix">
          <div class="float-left">
            <i class="mdi mdi-poll-box text-success icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right">Giá trị trung bình/ đơn</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-right mb-0">
                <?php 
                   $bangtin -> Trung_binh();
                 ?>
              </h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="clearfix">
          <div class="float-left">
            <i class="mdi mdi-account-location text-info icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right">Số khách hàng</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-right mb-0">
              <?php 
                   $bangtin -> So_khach_hang();
                 ?>
              </h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-7 grid-margin stretch-card">
    <!--weather card-->
    <div class="card card-weather">
      <div class="card-body">
        <div class="weather-date-location">
          <h3>Monday</h3>
          <p class="text-gray">
            <span class="weather-date">25 October, 2016</span>
            <span class="weather-location">London, UK</span>
          </p>
        </div>
        <div class="weather-data d-flex">
          <div class="mr-auto">
            <h4 class="display-3">21
              <span class="symbol">&deg;</span>C</h4>
              <p>
                Mostly Cloudy
              </p>
            </div>
          </div>
        </div>
        <div class="card-body p-0">
          <div class="d-flex weakly-weather">
            <div class="weakly-weather-item">
              <p class="mb-0">Sun</p>
              <i class="mdi mdi-weather-cloudy"></i>
              <p class="mb-0"> 30°</p>
            </div>
            <div class="weakly-weather-item">
              <p class="mb-1">Mon</p>
              <i class="mdi mdi-weather-hail"></i>
              <p class="mb-0"> 31°
              </p>
            </div>
            <div class="weakly-weather-item">
              <p class="mb-1">Tue</p>
              <i class="mdi mdi-weather-partlycloudy"></i>
              <p class="mb-0">28°</p>
            </div>
            <div class="weakly-weather-item">
              <p class="mb-1">Wed</p>
              <i class="mdi mdi-weather-pouring"></i>
              <p class="mb-0">30°</p>
            </div>
            <div class="weakly-weather-item">
              <p class="mb-1">Thu</p>
              <i class="mdi mdi-weather-pouring"></i>
              <p class="mb-0">29°</p>
            </div>
            <div class="weakly-weather-item">
              <p class="mb-1">Fri</p>
              <i class="mdi mdi-weather-snowy-rainy"></i>
              <p class="mb-0">31°</p>
            </div>
            <div class="weakly-weather-item">
              <p class="mb-1">Sat</p>
              <i class="mdi mdi-weather-snowy"></i>
              <p class="mb-0">32°</p>
            </div>
          </div>
        </div>
      </div>
      <!--weather card ends-->
    </div>
    <div class="col-lg-5 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h2 class="card-title text-primary mb-5">Tổng thu nhập tháng này</h2>
          <div class="wrapper d-flex justify-content-between">
            <div class="side-left">
              <p class="mb-2">Doanh thu</p>
              <p class="display-3 mb-4 font-weight-light">200.000.000 vnd</p>
            </div>
            <div class="side-right">
              <small class="text-muted">3/2017</small>
            </div>
          </div>
          <div class="wrapper d-flex justify-content-between">
            <div class="side-left">
              <p class="mb-2">Lợi nhuận</p>
              <p class="display-3 mb-5 font-weight-light">100.000.000 vnd</p>
            </div>
            <div class="side-right">
              <small class="text-muted">3/2017</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
