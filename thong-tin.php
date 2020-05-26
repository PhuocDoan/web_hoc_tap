
  <?php
  $title = "Giảng Dạy - ";
  include_once('header.php');
  include_once('config/config.php');
  if ($_SESSION["taikhoan"] == NULL) { ?>
    <script>
      window.location.href = "tai-khoan/dang-nhap.php";
    </script>
  <?php } else {
  ?>
    <?php
    $masv = $_SESSION["taikhoan"];
    $sqlgiangday = "SELECT * FROM `lop_hoc` WHERE `id_gvphutrach` = '$masv'";
    $qrgiangday = mysqli_query($conn, $sqlgiangday);
    $sqlthamgia = "SELECT * FROM `lop_hoc` WHERE `id_gvthamgia` = '$masv'";
    $qrthamgia = mysqli_query($conn, $sqlthamgia);
    $sqlchamthi = "SELECT * FROM `cham_thi` WHERE `id_giaovien` = '$masv'";
    $qrchamthi = mysqli_query($conn, $sqlchamthi);
    $sqlcoithi = "SELECT * FROM `coi_thi` WHERE `id_giaovien` = '$masv'";
    $qrcoithi = mysqli_query($conn, $sqlcoithi);
    $sqlnghiencuu = "SELECT * FROM `nghien_cuu` WHERE `id_giaovien` = '$masv'";
    $qrnghiencuu = mysqli_query($conn, $sqlnghiencuu);
    $sqldaygioi = "SELECT * FROM `day_gioi` WHERE `id_giaovien` = '$masv'";
    $qrdaygioi = mysqli_query($conn, $sqldaygioi);
    $sqlngoihoidong = "SELECT * FROM `ngoi_hoi_dong` WHERE `id_giaovien` = '$masv'";
    $qrngoihoidong = mysqli_query($conn, $sqlngoihoidong);
    ?>
<body>
    <!-- Start Nav  -->
    <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white divcollap" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <!-- <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="../assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
      </div> -->
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse menu-left" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="nav nav-tabs" id="myTab">
            <li class="nav-item" >
              <a class="nav-link active" href="#giangday" data-toggle="tab">
                  <i class="ni ni-tv-2 text-primary"></i>
                  <span class="nav-link-text">DANH SÁCH GIẢNG DẠY</span>
              </a>
            </li>
            <li class="nav-item" >
              <a class="nav-link" href="#thamgia" data-toggle="tab">
                  <i class="ni ni-circle-08 text-orange"></i>
                  <span class="nav-link-text">DANH SÁCH THAM GIA</span>
              </a>
            </li>

            <li class="nav-item" >
              <a class="nav-link" href="#chamthi" data-toggle="tab">
                  <i class="ni ni-chart-bar-32 text-primary"></i>
                  <span class="nav-link-text">DANH SÁCH CHẤM THI</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#coithi" data-toggle="tab">
                  <i class="ni ni-time-alarm text-blue"></i>
                  <span class="nav-link-text">DANH SÁCH COI THI</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#daygioi" data-toggle="tab">
                  <i class="ni ni-calendar-grid-58 text-yellow"></i>
                  <span class="nav-link-text">DẠY GIỎI</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#nghiencuu" data-toggle="tab">
                  <i class="ni ni-air-baloon text-red"></i>
                  <span class="nav-link-text">NGHIÊN CỨU</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#ngoihoidong" data-toggle="tab">
                  <i class="ni ni-single-02 text-green"></i>
                  <span class="nav-link-text">NGỒI HỘI ĐỒNG</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tai-khoan/dang-xuat.php" >
                <i class="ni ni-button-power"></i>
                <span class="nav-link-text logout">Đăng Xuất</span>
              </a>
            </li>
           
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          <!-- Navigation -->
        </div>
      </div>
    </div>
  </nav>
    <!-- End Nav  -->

    
    <div class="container-fluid">
      <div class="row flex flex-row-reverse">
        <!-- Start  -->
        <div class="col-md-10 div_main">
          <!-- Main content -->
          <div class="main-content" id="panel">
            <!-- Topnav -->
            <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
              <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                  <!-- Search form -->
          <button class="ni ni-bullet-list-67 collap" >
            
          </button>
                  <!-- Navbar links -->
                  <ul class="navbar-nav align-items-center  ml-md-auto ">
                    <li class="nav-item d-xl-none">
                      <!-- Sidenav toggler -->
                      <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                        <div class="sidenav-toggler-inner">
                          <i class="sidenav-toggler-line"></i>
                          <i class="sidenav-toggler-line"></i>
                          <i class="sidenav-toggler-line"></i>
                        </div>
                      </div>
                    </li>
                   </ul>
                  <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
                    <!-- Profile  -->
                    <li class="nav-item dropdown">
                      <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media align-items-center">
                          <span class="avatar avatar-sm rounded-circle">
                            <img alt="Image placeholder" src="<?php echo $url; ?>assets/img/theme/avatar.png">
                          </span>
                          <div class="media-body  ml-2  d-none d-lg-block">
                            <span class="mb-0 text-sm  font-weight-bold"> <?php echo $_SESSION["tensv"]; ?></span>
                          </div>
                        </div>
                      </a>
                      <div class="dropdown-menu  dropdown-menu-right ">
                        <div class="dropdown-header noti-title">

                          <img src="<?php echo $url; ?>assets/img/theme/c500.jpg" alt="Image placeholder" class="card-img-top">
                          <div class="row justify-content-center">
                            <div class="col-lg-1 order-lg-1">
                              <div class="card-profile-image">
                                <a href="#">
                                  <img src="<?php echo $url; ?>assets/img/theme/avatar.png" class="rounded-circle">
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="card-body pt-6">
                            <div class="text-left">
                              <h5 class="h2">
                                <i class="ni ni-single-02"></i>
                                <?php echo $_SESSION["tensv"]; ?><span class="font-weight-light"></span>
                              </h5>
                              <div class="h5 font-weight-300">
                                <i class="ni ni-single-copy-04 mr-2"></i><?php echo $_SESSION["ns"]; ?>
                              </div>
                              <div class="h5 font-weight-300">
                                <i class="ni ni-mobile-button mr-2"></i>
                                <?php echo $_SESSION["sdt"]; ?>
                              </div>

                              <div>
                                <h6>
                                  <i class="ni ni-briefcase-24 mr-2"></i>
                                  Khoa Quản Lý Nhà Nước Về An Ninh Quốc Gia
                                </h6>
                              </div>
                              <div>
                                <a href="tai-khoan/dang-xuat.php" class="dropdown-item text-center mt-2" style="color: #F86241">
                                  <i class="ni ni-button-power"></i>
                                  Đăng Xuất
                                </a>
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>
                    </li>
                    <!-- End Profile  -->
                    <!-- Start Sửa thông tin cá nhân -->
                    <li class="nav-item dropdown">
                      <button type="button" data-toggle="modal" data-target="#ModalSuaThongTin" id="suathongtin" idtk="<?php echo $_SESSION["taikhoan"] ?>" tentk="<?php echo $_SESSION["user"] ?>" tenhienthitk="<?php echo $_SESSION["tensv"] ?>" sdttk="<?php echo $_SESSION["sdt"] ?>" ngaysinhtk="<?php echo $_SESSION["ns"] ?>" matkhautk="<?php echo $_SESSION["password"] ?>" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="ni ni-settings-gear-65"></i>
                      </button>
                    </li>
                   
                  </ul>
                </div>
              </div>
            </nav>
            <!-- Các Bảng  -->
            <div class="header bg-primary pb-6">
              <div class="container-fluid">
                <div class="header-body tab-content">


                  <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                      <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                          <li class="breadcrumb-item"><a href="#"><i class="fas fa-user"></i></a></li>
                          <li class="breadcrumb-item"><a href="#"><?php echo $_SESSION["tensv"]; ?></a></li>
                          <li class="breadcrumb-item active" aria-current="page">Thông Tin Giờ Giảng</li>
                        </ol>
                      </nav>
                    </div>
                  </div>
                  <!-- End  -->
                  <!-- Danh Sách Giảng Dạy -->
                 
                    <div class="card bg-default shadow tab-pane fade in active" id="giangday">
                      <div class="card-header bg-transparent border-0">
                        <h3 class="text-white mb-0 text-center">DANH SÁCH GIẢNG DẠY</h3>
                      </div>
                      <div class="table-responsive">
                        <table class="table align-items-center table-dark table-flush">
                        <?php if (mysqli_num_rows($qrgiangday) > 0) { ?>
                          <thead class="thead-dark">
                            <tr>
                              <th>STT</th>
                              <th>Tên Lớp</th>
                              <th>Thời Gian<br> Giảng Dạy</th>
                              <th>Thời Gian <br> Chi Tiết</th>
                              <th>Số Giờ <br> Lý Thuyết</th>
                              <th>Xemina</th>
                              <th>Thảo Luận</th>
                              <th>Hình <br> Thức Thi</th>
                              <th>Tổng Giờ</th>
                              <th class="edit">Quản Lý</th>
                            </tr>
                          </thead>
                          <tbody class="list">
                            <?php $stt1 = 1; ?>
                            <?php while ($row = mysqli_fetch_assoc($qrgiangday)) { ?>
                              <tr>
                                <td><?php echo $stt1;
                                    $stt1 += 1; ?></td>
                                <td style="color: #fb6340;"><?php echo $row["ten_lop"] ?></td>
                                <td style="color: #f5365c;"><?php echo $row["thoigian_gv_phutrach"] ?></td>
                                <td><?php
                                    $link = "user/show-tkb.php?tkb=" . $row["id_lop"];
                                    echo  "<a href='$link'>";
                                    echo "Thời Khóa Biểu";
                                    echo "</a>";
                                    ?>
                                </td>
                                <td style="color: #f5365c;"><?php echo $row["so_gio_ly_thuyet_gvphutrach"]." giờ";?> </td>
                                <td style="color: #f5365c;"><?php echo $row["xemina_gvphutrach"]." giờ" ?></td>
                                <td style="color: #f5365c;"><?php echo $row["thaoluan_gvphutrach"]." giờ" ?></td>
                                <td><?php echo $row["hinh_thuc_thi"] ?></td>
                                <td style="color: #f5365c;"><?php echo ($row["thoi_gian"] + $row["so_gio_ly_thuyet"] + $row["xemina"] + $row["thaoluan"])." giờ"; ?></td>
                                <td align="center">
                                  <button type="button" data-toggle="modal" data-target="#ModalSuaGiangDay" id="suagiangday" title="Sửa" class="btn btn-icon btn-warning button-sua" type="button" idgiangday="<?php echo $row["id_lop"] ?>" giangday="<?php echo $row["thoigian_gv_phutrach"] ?>" giolythuyet="<?php echo $row["so_gio_ly_thuyet_gvphutrach"] ?>" xemina="<?php echo $row["xemina_gvphutrach"] ?>" thaoluan="<?php echo $row["thaoluan_gvphutrach"] ?>" hinhthucthi="<?php echo $row["hinh_thuc_thi"] ?>"> <span class="btn-inner--icon"><i class="ni ni-settings"></i></span>
                                  </button>
                                </td>
                              </tr>
                            <?php } ?>
                          </tbody>
                          <?php } ?>
                        </table>
                      </div>
                    </div>
                
                  <!-- End Danh Sách Giảng Dạy -->

                  <!-- Danh Sách Tham Gia -->
                 
                    <div class="card bg-default shadow tab-pane fade" id="thamgia">
                      <div class="card-header border-0">
                        <h3 class="mb-0 text-center">DANH SÁCH THAM GIA</h3>
                      </div>
                      <div class="table-responsive">
                        <table class="table align-items-center table-light table-flush">
                        <?php if (mysqli_num_rows($qrthamgia) > 0) { ?>
                          <thead class="thead-light">
                            <tr>
                              <th>STT</th>
                              <th>Tên Lớp</th>
                              <th>Thời Gian<br> Giảng Dạy</th>
                              <th>Thời Gian <br> Chi Tiết</th>
                              <th>Số Giờ <br> Lý Thuyết</th>
                              <th>Xemina</th>
                              <th>Thảo Luận</th>
                              <th>Hình <br> Thức Thi</th>
                              <th>Tổng Giờ</th>
                              <th class="edit">Quản Lý</th>
                            </tr>
                          </thead>
                          <tbody class="list">
                            <?php $stt1 = 1; ?>
                            <?php while ($row = mysqli_fetch_assoc($qrthamgia)) { ?>
                              <tr>
                                <td>
                                  <?php echo $stt1;
                                  $stt1 += 1; ?>
                                </td>
                                <td style="color: #fb6340;"><?php echo $row["ten_lop"] ?></td>
                                <td style="color: #f5365c;"><?php echo $row["thoigian_gv_thamgia"] ?></td>
                                <td><?php
                                    $link = "user/show-tkb.php?tkb=" . $row["id_lop"];
                                    echo  "<a href='$link'>";

                                    echo "Thời Khóa Biểu";
                                    echo "</a>";
                                    ?>

                                </td>
                                <td style="color: #f5365c;"><?php echo $row["so_gio_ly_thuyet_gvthamgia"]." giờ" ?></td>
                                <td style="color: #f5365c;"><?php echo $row["xemina_gvthamgia"]." giờ" ?></td>
                                <td style="color: #f5365c;"><?php echo $row["thaoluan_gvthamgia"]." giờ" ?></td>
                                <td><?php echo $row["hinh_thuc_thi"] ?></td>
                                <td style="color: #f5365c;"><?php echo ($row["thoi_gian"] + $row["so_gio_ly_thuyet"] + $row["xemina"] + $row["thaoluan"])." giờ" ?></td>
                                <td align="center">
                                  <button type="button" data-toggle="modal" data-target="#ModalSuaThamGia" id="suathamgia" class="btn btn-icon btn-warning button-sua" title="Sửa" idthamgia="<?php echo $row["id_lop"] ?>" thamgia2="<?php echo $row["thoigian_gv_thamgia"] ?>" giolythuyet2="<?php echo $row["so_gio_ly_thuyet_gvthamgia"] ?>" xemina2="<?php echo $row["xemina_gvthamgia"] ?>" thaoluan2="<?php echo $row["thaoluan_gvthamgia"] ?>" hinhthucthi2="<?php echo $row["hinh_thuc_thi"] ?>"><span class="btn-inner--icon"><i class="ni ni-settings"></i></span>
                                  </button>
                                </td>
                              </tr>
                            <?php } ?>
                          </tbody>
                          <?php } ?>
                        </table>

                      </div>
                    </div>
                
                  <!-- End Danh Sách Tham Gia -->

                  <!-- Danh Sách Chấm Thi  -->
                  
                    <div class="card bg-default shadow tab-pane fade" id="chamthi">
                      <div class="card-header bg-transparent border-0">
                        <h3 class="text-white mb-0 text-center">DANH SÁCH CHẤM THI</h3>
                      </div>
                      <div class="table-responsive">
                        <table class="table align-items-center table-dark table-flush">
                        <?php if (mysqli_num_rows($qrchamthi) > 0) { ?>
                          <thead class="thead-dark">
                            <tr>
                              <th>STT</th>
                              <th>Tên Lớp</th>
                              <th>Thi Viết</th>
                              <th>Thi <br> Tiểu Luận</th>
                              <th>Thi<br> Vấn Đáp</th>
                              <th>Thi <br> Tốt Nghiệp</th>
                              <th>Tổng Giờ</th>
                              <th>Quản Lý</th>
                            </tr>
                          </thead>
                          <tbody class="list">
                            <?php $stt2 = 1; ?>
                            <?php while ($row = mysqli_fetch_assoc($qrchamthi)) { ?>
                              <tr>
                                <td> <?php echo $stt2;
                                      $stt2 += 1; ?></td>
                                <td style="color: #fb6340;">
                                  <?php
                                  $idlop = $row["id_lop"];
                                  $sqllop = "SELECT `ten_lop` FROM `lop_hoc` WHERE `id_lop` = '$idlop'";
                                  $qrlop = mysqli_query($conn, $sqllop);
                                  $rowlop = mysqli_fetch_assoc($qrlop);
                                  echo $rowlop["ten_lop"];
                                  ?>
                                </td>
                                <td style="color: #f5365c;"><?php echo $row["thi_viet"]." giờ" ?></td>
                                <td style="color: #f5365c;"><?php echo $row["thi_tieu_luan"]." giờ" ?></td>
                                <td style="color: #f5365c;"><?php echo $row["thi_van_dap"]." giờ" ?></td>
                                <td style="color: #f5365c;"><?php echo $row["thi_tot_nghiep"]." giờ" ?></td>
                                <td style="color: #f5365c;"><?php echo ($row["thi_viet"] + $row["thi_tieu_luan"] + $row["thi_van_dap"] + $row["thi_tot_nghiep"])." giờ" ?></td>
                                <td align="center">
                                  <button type="button" data-toggle="modal" data-target="#ModalSuaChamThi" id="suachamthi" class="btn btn-icon btn-warning button-sua" title="Sửa" idchamthi="<?php echo $row["id_chamthi"] ?>" thiviet="<?php echo $row["thi_viet"] ?>" tieuluan="<?php echo $row["thi_tieu_luan"] ?>" vandap="<?php echo $row["thi_van_dap"] ?>" totnghiep="<?php echo $row["thi_tot_nghiep"] ?>"><span class="btn-inner--icon"><i class="ni ni-settings"></i></span>
                                  </button>
                                </td>
                              </tr>
                            <?php } ?>
                          </tbody>
                          <?php } ?>
                        </table>
                      </div>
                    </div>
                 
                  <!-- End Danh Sách Chấm Thi  -->

                  <!-- Danh Sách Coi Thi -->
                  
                    <div class="card bg-default shadow tab-pane fade" id="coithi">
                      <div class="card-header bg-transparent border-0">
                        <h3 class="text-white mb-0 text-center">DANH SÁCH COI THI</h3>
                      </div>
                      <div class="table-responsive">
                        <table class="table align-items-center table-dark table-flush">
                        <?php if (mysqli_num_rows($qrcoithi) > 0) { ?>
                          <thead class="thead-dark">
                            <tr>
                              <th>STT</th>
                              <th>Tên Lớp</th>
                              <th>Thời Gian</th>
                              <th>Thi <br> Tốt Nghiệp</th>
                              <th>Thi <br> Học Phần</th>
                              <th>Tổng Giờ</th>
                              <th>Quản Lý</th>
                            </tr>
                          </thead>
                          <tbody class="list">
                            <?php $stt3 = 1; ?>
                            <?php while ($row = mysqli_fetch_assoc($qrcoithi)) { ?>
                              <tr>
                                <td> <?php echo $stt3;
                                      $stt3 += 1; ?></td>
                                <td style="color: #fb6340;">
                                  <?php
                                  $idlop = $row["id_lop"];
                                  $sqllop = "SELECT `ten_lop` FROM `lop_hoc` WHERE `id_lop` = '$idlop'";
                                  $qrlop = mysqli_query($conn, $sqllop);
                                  $rowlop = mysqli_fetch_assoc($qrlop);
                                  echo $rowlop["ten_lop"];
                                  ?>
                                </td>
                                <td style="color: #f5365c;"><?php echo $row["thoi_gian"]." giờ" ?></td>
                                <td style="color: #f5365c;"><?php echo $row["thi_tot_nghiep"]." giờ" ?></td>
                                <td style="color: #f5365c;"><?php echo $row["thi_het_hoc_phan"]." giờ" ?></td>
                                <td style="color: #f5365c;"><?php echo ($row["thi_tot_nghiep"] + $row["thi_het_hoc_phan"])." giờ" ?></td>
                                <td align="center">
                                  <button type="button" data-toggle="modal" data-target="#ModalSuaCoiThi" id="suacoithi" class="btn btn-icon btn-warning button-sua" title="Sửa" idcoithi="<?php echo $row["id_coi_thi"] ?>" ttotnghiep="<?php echo $row["thi_tot_nghiep"] ?>" hocphan="<?php echo $row["thi_het_hoc_phan"] ?>"><span class="btn-inner--icon"><i class="ni ni-settings"></i></span>
                                  </button>
                                </td>
                              </tr>
                            <?php } ?>
                          </tbody>
                          <?php } ?>
                        </table>
                      </div>
                    </div>
                  
                  <!-- End Danh Sách Coi Thi -->

                  <!-- Danh Sách Hướng Dẫn Nghiên Cứu  -->
                 
                    <div class="card bg-default shadow tab-pane fade" id="nghiencuu">
                      <div class="card-header bg-transparent border-0">
                        <h3 class="text-white mb-0 text-center">NCKH, THỰC TẬP, KHÓA HỌC</h3>
                      </div>
                      <div class="table-responsive">
                        <table class="table align-items-center table-dark table-flush">
                        <?php if (mysqli_num_rows($qrnghiencuu) > 0) { ?>
                          <thead class="thead-dark">
                            <tr>
                              <th>STT</th>
                              <th>Luận Án</th>
                              <th>Chấm <br> Luận Án</th>
                              <th>Luận <br> Văn</th>
                              <th>Chấm <br> Luận Văn</th>
                              <th>Khóa <br> Luận</th>
                              <th>Chấm <br> Khóa Luận</th>
                              <th>Nghiên Cứu <br> Học</th>
                              <th>Thực Tập <br> Tốt Nghiệp</th>
                              <th>Chấm <br> Thực Tập <br> Tốt Nghiệp</th>
                              <th>Tổng Giờ</th>
                              <th>Quản Lý</th>
                            </tr>
                          </thead>
                          <tbody class="list">
                            <?php $stt5 = 1; ?>
                            <?php while ($row = mysqli_fetch_assoc($qrnghiencuu)) { ?>
                              <tr>
                                <td> <?php echo $stt5;
                                      $stt5 += 1; ?></td>
                                <td><?php echo ($row["luan_an"])?></td>
                                <td><?php echo $row["cham_luan_an"]?></td>
                                <td><?php echo ($row["luan_van"])?></td>
                                <td><?php echo $row["cham_luan_van"]?></td>
                                <td><?php echo ($row["khoa_luan"]) ?></td>
                                <td><?php echo $row["cham_khoa_luan"]?></td>
                                <td><?php echo $row["nc_khoa_hoc"]?></td>
                                <td><?php echo ($row["thuc_tap_tot_nghiep"])?></td>
                                <td><?php echo $row["cham_thuc_tap_tot_nghiep"]?></td>
                                <?php 
                                  $la_h = ($row["luan_an"]==null) ? 0 : 10;
                                  $cla_h = ($row["cham_luan_an"]==null) ? 0 : 10;
                                  $lv_h = ($row["luan_van"]==null) ? 0 : 10;
                                  $clv_h = ($row["cham_luan_van"]==null) ? 0 : 10;
                                  $kl_h = ($row["khoa_luan"]==null) ? 0 : 10;
                                  $ckl_h = ($row["cham_khoa_luan"]==null) ? 0 : 10;
                                  $kh_h = ($row["nc_khoa_hoc"]==null) ? 0 : 10;
                                  $tttn_h = ($row["thuc_tap_tot_nghiep"]==null) ? 0 : 10;
                                  $ctttn_h = ($row["cham_thuc_tap_tot_nghiep"]==null) ? 0 : 10;
                                
                                ?>
                                <td><?php echo $la_h + $cla_h + $lv_h + $clv_h + $kl_h + $ckl_h + $kh_h + $tttn_h + $ctttn_h ; echo " giờ";?></td>
                                <td align="center">

                                <td align="center">

                                  <button type="button" data-toggle="modal" data-target="#ModalSuaNghienCuu" id="suanghiencuu" class="btn btn-icon btn-warning button-sua" title="Sửa" idnghiencuu="<?php echo $row["id_nghien_cuu"] ?>" las="<?php echo $row["luan_an"] ?>" clas="<?php echo $row["cham_luan_an"] ?>" lvs="<?php echo $row["luan_van"] ?>" clvs="<?php echo $row["cham_luan_van"] ?>" kls="<?php echo $row["khoa_luan"] ?>" ckls="<?php echo $row["cham_khoa_luan"] ?>" ncs="<?php echo $row["nc_khoa_hoc"] ?>" tttns="<?php echo $row["thuc_tap_tot_nghiep"] ?>" ctttns="<?php echo $row["cham_thuc_tap_tot_nghiep"] ?>"><span class="btn-inner--icon"><i class="ni ni-settings"></i></span>
                                  </button>
                                </td>
                              </tr>
                            <?php } ?>
                          </tbody>
                          <?php } ?>
                        </table>
                      </div>
                    </div>
                 
                  <!-- End Danh Sách Hướng Dẫn Nghiên Cứu  -->

                  <!-- Danh Sách Dạy Giỏi  -->
                  
                    <div class="card bg-default shadow tab-pane fade" id="daygioi">
                      <div class="card-header bg-transparent border-0">
                        <h3 class="text-white mb-0 text-center">DANH SÁCH DẠY GIỎI</h3>
                      </div>
                      <div class="table-responsive">
                        <table class="table align-items-center table-dark table-flush">
                        <?php if (mysqli_num_rows($qrdaygioi) > 0) { ?>
                          <thead class="thead-dark">
                            <tr>
                              <th>STT</th>
                              <th>Tên Lớp</th>
                              <th>Bài Dạy Giỏi</th>
                              <th>Chấm Dạy Giỏi</th>
                              <th>Tổng Giờ</th>
                              <th>Quản Lý</th>
                            </tr>
                          </thead>
                          <tbody class="list">
                            <?php $stt4 = 1; ?>
                            <?php while ($row = mysqli_fetch_assoc($qrdaygioi)) { ?>
                              <tr>
                                <td> <?php echo $stt4;
                                      $stt4 += 1; ?></td>
                                <td style="color: #fb6340;">
                                  <?php
                                  $iddaygioi = $row["id_lop"];
                                  $sqllop = "SELECT `ten_lop` FROM `lop_hoc` WHERE `id_lop` = '$iddaygioi'";
                                  $qrlop = mysqli_query($conn, $sqllop);
                                  $rowlop = mysqli_fetch_assoc($qrlop);
                                  echo $rowlop["ten_lop"];
                                  ?>
                                </td>
                                <td><?php echo $row["bai_day_gioi"]." giờ" ?></td>
                                <td><?php echo $row["cham_day_gioi"]." giờ" ?></td>
                                <td><?php echo ($row["bai_day_gioi"] + $row["cham_day_gioi"])." giờ" ?></td>
                                <td align="center">
                                  <button type="button" data-toggle="modal" data-target="#ModalSuaDayGioi" id="suadaygioi" class="btn btn-icon btn-warning button-sua" title="Sửa" iddaygioi="<?php echo $row["id_daygioi"] ?>" bais="<?php echo $row["bai_day_gioi"] ?>" chams="<?php echo $row["cham_day_gioi"] ?>"><span class="btn-inner--icon"><i class="ni ni-settings"></i></span>
                                  </button>
                                </td>
                                </td>
                              </tr>
                            <?php } ?>
                          </tbody>
                          <?php } ?>
                        </table>

                      </div>
                    </div>
                  
                  <!-- End Danh Sách Dạy Giỏi  -->

                  <!-- Danh Sách Ngồi Hội Đồng  -->
                  
                    <div class="card bg-default shadow tab-pane fade" id="ngoihoidong">
                      <div class="card-header bg-transparent border-0">
                        <h3 class="text-white mb-0 text-center">DANH SÁCH NGỒI HỘI ĐỒNG</h3>
                      </div>
                      <div class="table-responsive">
                        <table class="table align-items-center table-dark table-flush">
                        <?php while ($row = mysqli_fetch_assoc($qrngoihoidong)) { ?>
                          <thead class="thead-dark">
                            <tr>
                              <th>STT</th>
                            </tr>
                          </thead>
                          <tbody class="list">
                            <?php $stt6 = 1; ?>
                            <?php while ($row = mysqli_fetch_assoc($qrngoihoidong)) { ?>
                              <tr>
                                <td><?php echo $stt6;
                                    $stt6 += 1; ?></td>
                              </tr>
                            <?php } ?>
                          </tbody>
                          <?php } ?>
                        </table>
                      </div>
                    </div>
                  
                  <!-- End Danh Sách Ngồi Hội Đồng  -->
                </div>
              </div>
            </div>

            <!-- Modal Sửa Bảng Giảng Dạy-->
           
          <div class="modal fade" id="ModalSuaGiangDay" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
              <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="text-center" style="color: white">SỬA THÔNG TIN GIẢNG DẠY</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="ni ni-fat-remove" style="color: white"></i>
                    </button>
                  </div>
                  <div class="container"></div>
                  <div class="modal-body">
                    <div id="thongbaosuagiangday"></div>
                    <label for=""> Thời Gian Giảng Dạy:</label>
                   
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon">
                        <span><i class="ni ni-calendar-grid-58"></i> </span>
                        </div>
                        <input type="text" id="idgiangday" class="hidden">
                        <input class="form-control" id="giangday" type="number" autofocus="autofocus" placeholder="Tên Đăng Nhập ...">
                      </div>
                    </div>
                    <label for="">  Giờ Lý Thuyết:</label>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon">
                        <span><i class="ni ni-time-alarm"></i> </span>
                        </div>
                        <input class="form-control" id="giolythuyet" type="number" placeholder="......">
                      </div>
                    </div>
                    <label for="">Xemina:</label>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon">
                        <span><i class="ni ni-briefcase-24"></i> </span>
                        </div>
                        <input class="form-control" id="xemina" type="number" placeholder="........">
                      </div>
                    </div>
                    <label for="">  Thảo Luận:</label>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon">
                        <span><i class="ni ni-notification-70"></i> </span>
                        </div>
                        <input class="form-control" id="thaoluan" type="number">
                      </div>
                    </div>
                    <label for=""> Hình Thức Thi:</label>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon">
                        <span><i class="ni ni-collection"></i> </span>
                        </div>
                        <input class="form-control" id="hinhthucthi" type="text" placeholder=".......">
                      </div>
                    </div>
                   
                    <center>
                      <button type="button" id="btngiangday" class="btn btn-success button-update">CẬP NHẬT</button>
                    </center>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
            <!-- END Sửa Bảng Giảng Dạy -->
            <!-- Modal Sửa Tham Gia-->
         
            <div class="modal fade" id="ModalSuaThamGia" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
              <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="text-center" style="color: white">SỬA THÔNG TIN BẢNG THAM GIA</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="ni ni-fat-remove" style="color: white"></i>
                    </button>
                  </div>
                  <div class="container"></div>
                  <div class="modal-body">
                  <div id="thongbaosuathamgia"></div>
                    <label for=""> Thời Gian Tham Gia:</label>
                   
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon">
                        <span><i class="ni ni-calendar-grid-58"></i> </span>
                        </div>
                        <input type="text" id="idthamgia" class="hidden">
                        <input class="form-control" id="thamgia2" type="number" autofocus="autofocus" placeholder="Tên Đăng Nhập ...">
                      </div>
                    </div>
                    <label for="">  Số Giờ Lý Thuyết:</label>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon">
                        <span><i class="ni ni-time-alarm"></i> </span>
                        </div>
                        <input class="form-control" id="giolythuyet2" type="number" placeholder="......">
                      </div>
                    </div>
                    <label for="">Xemina:</label>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon">
                        <span><i class="ni ni-briefcase-24"></i> </span>
                        </div>
                        <input class="form-control" id="xemina2" type="number" placeholder="........">
                      </div>
                    </div>
                    <label for="">  Thảo Luận:</label>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon">
                        <span><i class="ni ni-notification-70"></i> </span>
                        </div>
                        <input class="form-control" id="thaoluan2" type="number">
                      </div>
                    </div>
                    <label for=""> Hình Thức Thi:</label>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon">
                        <span><i class="ni ni-collection"></i> </span>
                        </div>
                        <input class="form-control" id="hinhthucthi2" type="text" placeholder=".......">
                      </div>
                    </div>
                   
                    <center>
                      <button type="button" id="btnthamgia" class="btn btn-success button-update">CẬP NHẬT</button>
                    </center>
                  </div>
                </div>
              </div>
            </div>
          </div>
            <!-- END Sửa Bảng Tham Gia  -->
            <!-- Modal Sửa Chấm Thi-->
          
            <div class="modal fade" id="ModalSuaChamThi" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
              <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="text-center" style="color: white">SỬA THÔNG TIN BẢNG CHẤM THI</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="ni ni-fat-remove" style="color: white"></i>
                    </button>
                  </div>
                  <div class="container"></div>
                  <div class="modal-body">
                  <div id="thongbaosuachamthi"></div>
                    <label for="">Thi Viết:</label>
                   
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon">
                        <span><i class="ni ni-circle-08"></i> </span>
                        </div>
                        <input type="text" id="idchamthi" class="hidden">
                        <input class="form-control" id="thiviet" type="number" autofocus="autofocus" placeholder="Tên Đăng Nhập ...">
                      </div>
                    </div>
                    <label for="">  Thi Tiểu Luận:</label>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon">
                        <span><i class="ni ni-lock-circle-open"></i> </span>
                        </div>
                        <input class="form-control" id="tieuluan" type="number" placeholder="......">
                      </div>
                    </div>
                    <label for="">Thi Vấn Đáp:</label>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon">
                        <span><i class="ni ni-lock-circle-open"></i> </span>
                        </div>
                        <input class="form-control" id="vandap" type="number" placeholder="........">
                      </div>
                    </div>
                    <label for=""> Thi Tốt Nghiệp:</label>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon">
                        <span><i class="ni ni-single-02"></i> </span>
                        </div>
                        <input class="form-control" id="totnghiep" type="number">
                      </div>
                    </div>
                    <label for=""> Hình Thức Thi:</label>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon">
                        <span><i class="ni ni-mobile-button"></i> </span>
                        </div>
                        <input class="form-control" id="hinhthucthi2" type="text" placeholder=".......">
                      </div>
                    </div>
                   
                    <center>
                      <button type="button" id="btnchamthi" class="btn btn-success button-update">CẬP NHẬT</button>
                    </center>
                  </div>
                </div>
              </div>
            </div>
          </div>
            <!-- End Sửa Cham Thi  -->


            <div class="modal fade" id="ModalSuaCoiThi" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
              <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="text-center" style="color: white">SỬA THÔNG TIN BẢNG COI THI</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="ni ni-fat-remove" style="color: white"></i>
                    </button>
                  </div>
                  <div class="container"></div>
                  <div class="modal-body">
                  <div id="thongbaosuacoithi"></div>
                    <label for=""> Thi Tốt Nghiệp:</label>
                   
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon">
                        <span><i class="ni ni-circle-08"></i> </span>
                        </div>
                        <input type="text" id="idcoithi" class="hidden">
                        <input class="form-control" id="ttotnghiep" type="number" autofocus="autofocus" placeholder="Tên Đăng Nhập ...">
                      </div>
                    </div>
                    <label for=""> Thi Hết Học Phần:</label>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon">
                        <span><i class="ni ni-lock-circle-open"></i> </span>
                        </div>
                        <input class="form-control" id="hocphan" type="number" placeholder="......">
                      </div>
                    </div>
                    <center>
                      <button type="button" id="btncoithi" class="btn btn-success button-update">CẬP NHẬT</button>
                    </center>
                  </div>
                </div>
              </div>
            </div>
          </div>
            <!-- End Sửa Coi Thi  -->

            <!-- Modal Sửa Nghiên Cứu-->
            <!-- <div class="modal fade" id="ModalSuaNghienCuu" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
              <div class="modal-dialog modal-danger modal- modal-dialog-centered modal-sm" role="document">
                <div class="modal-content bg-gradient-danger">
                  <div class="modal-body p-0">
                    <div class="card-body px-lg-5 py-lg-5">
                      <div class="text-center text-muted mb-4">
                        <h2>SỬA THÔNG TIN BẢNG NGHIÊN CỨU</h2>
                      </div>
                      <form role="form">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label"> Luận Án:</label>
                          <input type="text" id="idnghiencuu" class="hidden">
                          <input class="form-control" id="las" type="text" autofocus="autofocus" placeholder="Luận Án:...">
                        </div>
                        <div class="form-group">
                          <label for="example-search-input" class="form-control-label">Thời Gian Chấm Luận Án:</label>
                          <input type="text" id="idnghiencuu" class="hidden">
                          <input class="form-control" id="clas" type="text" autofocus="autofocus" placeholder="Thời Gian Chấm Luận Án:...">
                        </div>
                        <div class="form-group">
                          <label for="example-email-input" class="form-control-label"> Luận Văn:</label>
                          <input class="form-control" id="lvs" type="text" autofocus="autofocus" placeholder="Luận Văn:...">
                        </div>
                        <div class="form-group">
                          <label for="example-url-input" class="form-control-label">Chấm Luận Văn:</label>
                          <input class="form-control" id="clvs" type="text" autofocus="autofocus" placeholder="Chấm Luận Văn:..">
                        </div>
                        <div class="form-group">
                          <label for="example-tel-input" class="form-control-label"> Khóa Luận:</label>
                          <input class="form-control" id="kls" type="text" autofocus="autofocus" placeholder="Khóa Luận:...">
                        </div>
                        <div class="form-group">
                          <label for="example-tel-input" class="form-control-label">Thời Gian Chấm Khóa Luận:</label>
                          <input class="form-control" id="ckls" type="text" autofocus="autofocus" placeholder="Thời Gian Chấm Khóa Luận:..">
                        </div>
                        <div class="form-group">
                          <label for="example-tel-input" class="form-control-label">Nghiên Cứu Khoa Học:</label>
                          <input class="form-control" id="ncs" type="text" autofocus="autofocus" placeholder="Nghiên Cứu Khoa Học:...">
                        </div>
                        <div class="form-group">
                          <label for="example-tel-input" class="form-control-label"> Thực Tập Tốt Nghiệp:</label>
                          <input class="form-control" id="tttns" type="text" autofocus="autofocus" placeholder="Thực Tập Tốt Nghiệp:...">
                        </div>
                        <div class="form-group">
                          <label for="example-tel-input" class="form-control-label">Thời Gian Chấm Thực Tập Tốt Nghiệp:</label>
                          <input class="form-control" id="ctttns" type="text" autofocus="autofocus" placeholder="Thời Gian Chấm Thực Tập Tốt Nghiệp:...">
                        </div>
                        <div class="text-center">
                          <button type="button" id="btnnghiencuu" class="btn btn-white my-4">Sửa</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
            <div class="modal fade" id="ModalSuaNghienCuu" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
              <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="text-center" style="color: white">SỬA THÔNG TIN BẢNG NGHIÊN CỨU</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="ni ni-fat-remove" style="color: white"></i>
                    </button>
                  </div>
                  <div class="container"></div>
                  <div class="modal-body">
                    <div id="thongbaosuanghiencuu"></div>
                    <label for="">Luận Án:</label>
                   
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon">
                        <span><i class="ni ni-watch-time"></i> </span>
                        </div>
                        <input type="text" id="idnghiencuu" class="hidden">
                        <input class="form-control" id="las" type="text" autofocus="autofocus" placeholder="Bài Dạy Giỏi...">
                      </div>
                    </div>
                    <label for=""> Chấm Luận Án:</label>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon">
                        <span><i class="ni ni-watch-time"></i></span>
                        </div>
                        <input class="form-control" id="clas" type="text" placeholder="Chấm Dạy Giỏi....">
                      </div>
                    </div>
                    <label for=""> Luận Văn:</label>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon">
                        <span><i class="ni ni-watch-time"></i></span>
                        </div>
                        <input class="form-control" id="lvs" type="text" placeholder="Chấm Dạy Giỏi....">
                      </div>
                    </div>
                    <label for=""> Chấm Luận Văn:</label>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon">
                        <span><i class="ni ni-watch-time"></i></span>
                        </div>
                        <input class="form-control" id="clvs" type="text" placeholder="Chấm Dạy Giỏi....">
                      </div>
                    </div>

                    <label for="">Khóa Luận:</label>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon">
                        <span><i class="ni ni-watch-time"></i></span>
                        </div>
                        <input class="form-control" id="kls" type="text" placeholder="Chấm Dạy Giỏi....">
                      </div>
                    </div>

                    <label for=""> Chấm Khóa Luận:</label>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon">
                        <span><i class="ni ni-watch-time"></i></span>
                        </div>
                        <input class="form-control" id="ckls" type="text" placeholder="Chấm Dạy Giỏi....">
                      </div>
                    </div>

                    <label for=""> Nghiên Cứu:</label>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon">
                        <span><i class="ni ni-watch-time"></i></span>
                        </div>
                        <input class="form-control" id="ncs" type="text" placeholder="Chấm Dạy Giỏi....">
                      </div>
                    </div>

                    <label for=""> Thực Tập Tốt Nghiệp:</label>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon">
                        <span><i class="ni ni-watch-time"></i></span>
                        </div>
                        <input class="form-control" id="tttns" type="text" placeholder="Chấm Dạy Giỏi....">
                      </div>
                    </div>

                    <label for=""> Chấm Thực Tập Tốt Nghiệp:</label>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon">
                        <span><i class="ni ni-watch-time"></i></span>
                        </div>
                        <input class="form-control" id="ctttns" type="text" placeholder="Chấm Dạy Giỏi....">
                      </div>
                    </div>
                    <center>
                      <button type="button" id="btnnghiencuu" class="btn btn-success button-update">CẬP NHẬT</button>
                    </center>
                  </div>
                </div>
              </div>
            </div>
          </div>


            <!-- End Sửa Nghiên Cứu-->

            <!-- Modal Sửa Dạy Giỏi-->
            <!-- <div class="modal fade" id="ModalSuaDayGioi" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
              <div class="modal-dialog modal-danger modal- modal-dialog-centered modal-sm" role="document">
                <div class="modal-content bg-gradient-danger">
                  <div class="modal-body p-0">
                    <div class="card-body px-lg-5 py-lg-5">
                      <div class="text-center text-muted mb-4">
                        <h2>SỬA THÔNG TIN BẢNG DẠY GIỎI</h2>
                      </div>
                      <form role="form">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label">Thời Gian Bài Dạy Giỏi:</label>
                          <input type="text" id="iddaygioi" class="hidden">
                          <input class="form-control" id="bais" type="text" autofocus="autofocus" placeholder="Bài Dạy Giỏi...">
                        </div>
                        <div class="form-group">
                          <label for="example-search-input" class="form-control-label"> Thời Gian Chấm Dạy Giỏi: </label>
                          <input class="form-control" id="chams" type="text" placeholder="Chấm Dạy Giỏi....">
                        </div>
                        <div class="text-center">
                          <button type="button" id="btndaygioi" class="btn btn-white my-4">CẬP NHẬT</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
            <div class="modal fade" id="ModalSuaDayGioi" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
              <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="text-center" style="color: white">SỬA THÔNG TIN BẢNG DẠY GIỎI</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="ni ni-fat-remove" style="color: white"></i>
                    </button>
                  </div>
                  <div class="container"></div>
                  <div class="modal-body">
                    <div id="thongbaosuadaygioi"></div>
                    <label for="">Thời Gian Bài Dạy Giỏi:</label>
                   
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon">
                        <span><i class="ni ni-watch-time"></i> </span>
                        </div>
                        <input type="text" id="iddaygioi" class="hidden">
                        <input class="form-control" id="bais" type="number" autofocus="autofocus" placeholder="Bài Dạy Giỏi...">
                      </div>
                    </div>
                    <label for=""> Thời Gian Chấm Dạy Giỏi:</label>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon">
                        <span><i class="ni ni-watch-time"></i></span>
                        </div>
                        <input class="form-control" id="chams" type="number" placeholder="Chấm Dạy Giỏi....">
                      </div>
                    </div>
                    <center>
                      <button type="button" id="btndaygioi" class="btn btn-success button-update">CẬP NHẬT</button>
                    </center>
                  </div>
                </div>
              </div>
            </div>
          </div>
            <!-- End Sửa Dạy Giỏi--->

            <!-- Start Sửa Thông Tin  -->
            <div class="modal fade" id="ModalSuaThongTin" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
              <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="text-center" style="color: white">SỬA THÔNG TIN TÀI KHOẢN</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="ni ni-fat-remove" style="color: white"></i>
                    </button>
                  </div>
                  <div class="container"></div>
                  <div class="modal-body">
                    <div id="thongbaosuaadmint"></div>
                    <label for=""> Tên Tài Khoản Đăng Nhập:</label>
                   
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon">
                        <span><i class="ni ni-circle-08"></i> </span>
                        </div>
                        <input type="text" id="idtk" class="hidden">
                        <input class="form-control" id="tentk" type="text" autofocus="autofocus" placeholder="Tên Đăng Nhập ...">
                      </div>
                    </div>
                    <label for="">  Mật Khẩu Mới:</label>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon">
                        <span><i class="ni ni-lock-circle-open"></i> </span>
                        </div>
                        <div class="input-group" id="show_hide_password">
                          <input class="form-control" type="password" id="matkhautk">
                          <div class="input-group-addon">
                            <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                          </div>
                        </div>
                      
                      </div>
                    </div>
                   
                    <label for=""> Tên Hiển Thị:</label>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon">
                        <span><i class="ni ni-single-02"></i> </span>
                        </div>
                        <input class="form-control" id="tenhienthitk" type="text">
                      </div>
                    </div>
                    <label for="">  Số Điện Thoại:</label>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon">
                        <span><i class="ni ni-mobile-button"></i> </span>
                        </div>
                        <input class="form-control" id="sdttk" type="text" placeholder=".......">
                      </div>
                    </div>
                    <label for=""> Ngày Sinh:</label>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon">
                          <span><i class="ni ni-calendar-grid-58"></i> </span>
                        </div>
                        <input class="form-control" id="ngaysinhtk" type="text" placeholder="......">
                      </div>
                    </div>
                    <center>
                      <button type="button" id="btnthongtin" class="btn btn-success button-update">CẬP NHẬT</button>
                    </center>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Sửa Thông Tin  -->
        </div>
      </div>
    </div>
    </div>
  <?php
  }
  ?>

  <script>
    $(document).ready(function() {
//reload page 
      $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
        localStorage.setItem('activeTab', $(e.target).attr('href'));
    });
    var activeTab = localStorage.getItem('activeTab');
    if(activeTab){
        $('#myTab a[href="' + activeTab + '"]').tab('show');
    }


      $("#show_hide_password a").on('click', function(event) {
        event.preventDefault();
        if($('#show_hide_password input').attr("type") == "text"){
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').addClass( "fa-eye-slash" );
            $('#show_hide_password i').removeClass( "fa-eye" );
        }else if($('#show_hide_password input').attr("type") == "password"){
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass( "fa-eye-slash" );
            $('#show_hide_password i').addClass( "fa-eye" );
        }
    });

      $('button#suathongtin').click(function(event) {
        var idtk = $(this).attr('idtk');
        var tentk = $(this).attr('tentk');
        var tenhienthitk = $(this).attr('tenhienthitk');
        var sdttk = $(this).attr('sdttk');
        var ngaysinhtk = $(this).attr('ngaysinhtk');
        var matkhautk = $(this).attr('matkhautk');
        $('#ModalSuaThongTin').modal();
        $('#idtk').val(idtk);
        $('#tentk').val(tentk);
        $('#tenhienthitk').val(tenhienthitk);
        $('#sdttk').val(sdttk);
        $('#ngaysinhtk').val(ngaysinhtk);
      });

      $('button#suagiangday').click(function(event) {
        console.log("hihi");
        var idgiangday = $(this).attr('idgiangday');
        var giangday = $(this).attr('giangday');
        var giolythuyet = $(this).attr('giolythuyet');
        var xemina = $(this).attr('xemina');
        var thaoluan = $(this).attr('thaoluan');
        var hinhthucthi = $(this).attr('hinhthucthi');

        $('#idgiangday').val(idgiangday);
        $('#giangday').val(giangday);
        $('#xemina').val(xemina);
        $('#thaoluan').val(thaoluan);
        $('#hinhthucthi').val(hinhthucthi);
        $('#giolythuyet').val(giolythuyet);
      });

      $('button#suathamgia').click(function(event) {
        var idthamgia = $(this).attr('idthamgia');
        var thamgia2 = $(this).attr('thamgia2');
        var giolythuyet2 = $(this).attr('giolythuyet2');
        var xemina2 = $(this).attr('xemina2');
        var thaoluan2 = $(this).attr('thaoluan2');
        var hinhthucthi2 = $(this).attr('hinhthucthi2');
        console.log("hihi");

        $('#idthamgia').val(idthamgia);
        $('#thamgia2').val(thamgia2);
        $('#xemina2').val(xemina2);
        $('#thaoluan2').val(thaoluan2);
        $('#hinhthucthi2').val(hinhthucthi2);
        $('#giolythuyet2').val(giolythuyet2);
      });

      $('button#suachamthi').click(function(event) {
        var idchamthi = $(this).attr('idchamthi');
        var thiviet = $(this).attr('thiviet');
        var tieuluan = $(this).attr('tieuluan');
        var vandap = $(this).attr('vandap');
        var totnghiep = $(this).attr('totnghiep');

        $('#idchamthi').val(idchamthi);
        $('#thiviet').val(thiviet);
        $('#tieuluan').val(tieuluan);
        $('#vandap').val(vandap);
        $('#totnghiep').val(totnghiep);
      });

      $('button#suacoithi').click(function(event) {
        var idcoithi = $(this).attr('idcoithi');
        var ttotnghiep = $(this).attr('ttotnghiep');
        var hocphan = $(this).attr('hocphan');

        $('#idcoithi').val(idcoithi);
        $('#ttotnghiep').val(ttotnghiep);
        $('#hocphan').val(hocphan);
      });

      $('button#suanghiencuu').click(function(event) {
        var idnghiencuu = $(this).attr('idnghiencuu');
        var las = $(this).attr('las');
        var clas = $(this).attr('clas');
        var lvs = $(this).attr('lvs');
        var clvs = $(this).attr('clvs');
        var kls = $(this).attr('kls');
        var ckls = $(this).attr('ckls');
        var ncs = $(this).attr('ncs');
        var tttns = $(this).attr('tttns');
        var ctttns = $(this).attr('ctttns');
        

        $('#idnghiencuu').val(idnghiencuu);
        $('#las').val(las);
        $('#clas').val(clas);
        $('#lvs').val(lvs);
        $('#clvs').val(clvs);
        $('#kls').val(kls);
        $('#lvs').val(lvs);
        $('#ckls').val(ckls);
        $('#ncs').val(ncs);
        $('#tttns').val(tttns);
        $('#ctttns').val(ctttns);

      });

      $('button#suadaygioi').click(function(event) {
        var iddaygioi = $(this).attr('iddaygioi');
        var bais = $(this).attr('bais');
        var chams = $(this).attr('chams');
        $('#iddaygioi').val(iddaygioi);
        $('#bais').val(bais);
        $('#chams').val(chams);
      });

      $('#btnthongtin').click(function(event) {
        $.ajax({
          url: 'tai-khoan/cai-dat.php',
          type: 'POST',
          dataType: 'HTML',
          data: {
            idtk: $('#idtk').val(),
            tentk: $('#tentk').val(),
            tenhienthitk: $('#tenhienthitk').val(),
            matkhautk: $('#matkhautk').val(),
            sdttk: $('#sdttk').val(),
            ngaysinhtk: $('#ngaysinhtk').val()
          },
          success: function(data) {
            $('#thongbaosuaadmint').html(data);
          }
        });
      });

      $('#btngiangday').click(function(event) {
        $.ajax({
          url: 'user/sua-giangday.php',
          type: 'POST',
          dataType: 'HTML',
          data: {
            idgiangday: $('#idgiangday').val(),
            giangday: $('#giangday').val(),
            giolythuyet: $('#giolythuyet').val(),
            xemina: $('#xemina').val(),
            thaoluan: $('#thaoluan').val(),
            hinhthucthi: $('#hinhthucthi').val()
          },
          success: function(data) {
            $('#thongbaosuagiangday').html(data);
          }
        });
      });

      $('#btnthamgia').click(function(event) {
        $.ajax({
          url: 'user/sua-thamgia.php',
          type: 'POST',
          dataType: 'HTML',
          data: {
            idthamgia: $('#idthamgia').val(),
            thamgia2: $('#thamgia2').val(),
            giolythuyet2: $('#giolythuyet2').val(),
            xemina2: $('#xemina2').val(),
            thaoluan2: $('#thaoluan2').val(),
            hinhthucthi2: $('#hinhthucthi2').val()
          },
          success: function(data) {
            $('#thongbaosuathamgia').html(data);
          }
        });
      });


      $('#btnchamthi').click(function(event) {
        $.ajax({
          url: 'user/sua-chamthi.php',
          type: 'POST',
          dataType: 'HTML',
          data: {
            idchamthi: $('#idchamthi').val(),
            thiviet: $('#thiviet').val(),
            tieuluan: $('#tieuluan').val(),
            vandap: $('#vandap').val(),
            totnghiep: $('#totnghiep').val(),
          },
          success: function(data) {
            $('#thongbaosuachamthi').html(data);
          }
        });
      });

      $('#btncoithi').click(function(event) {
        $.ajax({
          url: 'user/sua-coithi.php',
          type: 'POST',
          dataType: 'HTML',
          data: {
            idcoithi: $('#idcoithi').val(),
            totnghiep: $('#ttotnghiep').val(),
            hocphan: $('#hocphan').val(),
          },
          success: function(data) {
            $('#thongbaosuacoithi').html(data);
          }
        });
      });

      $('#btndaygioi').click(function(event) {
        $.ajax({
          url: 'user/sua-daygioi.php',
          type: 'POST',
          dataType: 'HTML',
          data: {
            iddaygioi: $('#iddaygioi').val(),
            bais: $('#bais').val(),
            chams: $('#chams').val(),
          },
          success: function(data) {
            $('#thongbaosuadaygioi').html(data);
          }
        });
      });

      $('#btnnghiencuu').click(function(event) {
        $.ajax({
          url: 'user/sua-nghiencuu.php',
          type: 'POST',
          dataType: 'HTML',
          data: {
            idnghiencuu: $('#idnghiencuu').val(),
            las: $('#las').val(),
            clas: $('#clas').val(),
            lvs: $('#lvs').val(),
            clvs: $('#clvs').val(),
            kls: $('#kls').val(),
            ckls: $('#ckls').val(),
            ncs: $('#ncs').val(),
            tttns: $('#tttns').val(),
            ctttns: $('#ctttns').val(),
          },
          success: function(data) {
            $('#thongbaosuanghiencuu').html(data);
          }
        });
      });

    });
  </script>
  <?php
  include_once('footer.php');
  ?>
  <script>
    $(document).ready(function() {
      $('.collap').click(function() {
        $('.divcollap').toggleClass("collap_menu");
        $('.main-content').toggleClass("collap_menu");
        $('.div_main').toggleClass("col-md-9");
        $('.div_main').toggleClass("col-md-12");


      });
    });
  </script>
  <script>

// Get the element with id="defaultOpen" and click on it

</script>