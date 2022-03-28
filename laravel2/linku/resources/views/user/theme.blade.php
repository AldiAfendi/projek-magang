<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/agroxa/layouts/red/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Feb 2022 06:28:05 GMT -->
<head>

        <meta charset="utf-8" />
        <title>Dashboard | Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Icon -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
        <!-- MD Bootstrap CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css" rel="stylesheet">
        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

        <style>
          html{
            scroll-behavior: smooth;
          }

          /* HIDE RADIO */
          [class=radio-image] { 
            position: absolute;
            opacity: 0;
            width: 0;
            height: 0;
          }

          /* IMAGE STYLES */
          [class=radio-image] + img {
            cursor: pointer;
          }

          /* CHECKED STYLES */
          [class=radio-image]:checked + img {
            outline: 2px solid #f00;
          }
        </style>
    </head>

    <body data-topbar="colored">

    <!-- <body data-layout="horizontal" data-topbar="colored"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">

            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm-dark.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-dark.png" alt="" height="24">
                    </span>
                </a>

                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm-light.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-light.png" alt="" height="24">
                    </span>
                </a>
            </div>

            <!-- Menu Icon -->

            <button type="button" class="btn px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                <i class="mdi mdi-menu"></i>
            </button>


            
        </div>

        <div class="d-flex">
            <div class="dropdown d-inline-block d-lg-none ms-2">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="mdi mdi-magnify"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-search-dropdown">

                    <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search ..."
                                    aria-label="Recipient's username">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit"><i
                                            class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


            <!-- App Search -->
            <form class="app-search d-none d-lg-block">
                <div class="position-relative">
                    <input type="text" class="form-control" placeholder="Cari...">
                    <span class="mdi mdi-magnify"></span>
                </div>
            </form>

            <!-- Notification Dropdown -->
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect"
                    id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <i class="mdi mdi-bell"></i>
                    <span class="badge bg-info rounded-pill">3</span>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-notifications-dropdown">
                    <h5 class="p-3 text-dark mb-0">Notifikasi (3)</h5>
                    <div data-simplebar style="max-height: 230px;">
                        <a href="#" class="text-reset notification-item">
                            <div class="d-flex mt-3">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-success rounded-circle font-size-16">
                                        <i class="mdi mdi-cart"></i>
                                    </span>
                                </div>
                                <div class="flex-1">
                                    <h6 class="mb-1">Akun anda sudah siap</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">Mulai lah membuat linktree
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="text-reset notification-item">
                            <div class="d-flex mt-3">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-warning rounded-circle font-size-16">
                                        <i class="mdi mdi-message"></i>
                                    </span>
                                </div>
                                <div class="flex-1">
                                    <h6 class="mb-1">Seseorang menekan linktree anda</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">Periksa perkembangannya
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="text-reset notification-item">
                            <div class="d-flex mt-3">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-info rounded-circle font-size-16">
                                        <i class="mdi mdi-flag"></i>
                                    </span>
                                </div>
                                <div class="flex-1">
                                    <h6 class="mb-1">Anda berhasil menambahkan tautan</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">Tautan pada linktree anda telah ditambahkan
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </a>
                        
                        

                    </div>
                    <div class="p-2 d-grid">
                        <a class="font-size-14 text-center" href="javascript:void(0)">View all</a>
                    </div>
                </div>
            </div>

            <!-- User -->
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-4.jpg"
                        alt="Header Avatar">
                </button>

                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="setting.html"><i
                            class="mdi mdi-account-circle font-size-16 align-middle me-2 text-muted"></i>
                        <span>Profil</span></a>
                    
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-primary" href="../non-user/index.html"><i
                            class="mdi mdi-power font-size-16 align-middle me-2 text-primary"></i>
                        <span>Keluar</span></a>
                </div>
            </div>

            <!-- Setting -->
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                    <i class="mdi mdi-cog bx-spin"></i>
                </button>
            </div>

        </div>
    </div>
</header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">
                    <div class="user-details">
                        <div class="d-flex">
                            <div class="me-2">
                                <img src="assets/images/users/avatar-4.jpg" alt="" class="avatar-md rounded-circle">
                            </div>
                            <div class="user-info w-100">
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Donald Johnson
                                        <i class="mdi mdi-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0)" class="dropdown-item"><i class="mdi mdi-account-circle text-muted me-2"></i>
                                                Profile<div class="ripple-wrapper me-2"></div>
                                            </a></li>
                                        <li><a href="javascript:void(0)" class="dropdown-item"><i class="mdi mdi-cog text-muted me-2"></i>
                                                Settings</a></li>
                                        <li><a href="javascript:void(0)" class="dropdown-item"><i class="mdi mdi-lock-open-outline text-muted me-2"></i>
                                                Lock screen</a></li>
                                        <li><a href="javascript:void(0)" class="dropdown-item"><i class="mdi mdi-power text-muted me-2"></i>
                                                Logout</a></li>
                                    </ul>
                                </div>

                                <p class="text-white-50 m-0">Administrator</p>
                            </div>
                        </div>
                    </div>


                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Main</li>

                            <li>
                                <a href="link.html" class="waves-effect">
                                    <i class="bi bi-link-45deg"></i>
                                    <span>Tautan</span>

                                </a>
                            </li>

                            <li>
                                <a href="theme.html" class="waves-effect">
                                    <i class="bi bi-palette-fill"></i>
                                    <span>Tema</span>
                                </a>

                            </li>


                            <li>
                                <a href="../tree-template/linktree.html" class="waves-effect">
                                    <i class="bi bi-tree-fill"></i>
                                    <span>Linktree</span>
                                </a>
                            </li>


                            

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
   p Left Sidebar End -->

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container mt-5">
                      <form action="link.html" method="get">
                        <div class="m-auto d-block">
                            <center><button value="save" class="btn btn-primary border-0 mb-5" style="background-color:#f16c69;">Simpan</button></center>
                        </div>
                        
                        
                        
                      <div class="row">
                        
                        <div class="col-md-3 my-2" style="">
                          <div class="card shadow-sm">
                            <div class="card-body text-light" style="background-color: #f16c69;">
                              <p class="card-text my-auto">Tema 1</p>

                              <div class="d-flex justify-content-between align-items-center">
                                
                              </div>
                            </div>
                            <label class="my-0 py-0">
                            <input type="radio" name="theme" class="radio-image" value="1">
                            <img src="../upload/1.jpg" width="100%">
                            </label>

                            
                          </div>
                        </div>
                        
                        
                        <div class="col-md-3 my-2" style="">
                          <div class="card shadow-sm">
                            <div class="card-body text-light" style="background-color: #f16c69;">
                              <p class="card-text my-auto">Tema 2</p>

                              <div class="d-flex justify-content-between align-items-center">
                                
                              </div>
                            </div>
                            <label class="my-0 py-0">
                            <input type="radio" name="theme" class="radio-image" value="2">
                            <img src="../upload/2.jpg" width="100%">
                            </label>
                            
                          </div>
                        </div>

                        <div class="col-md-3 my-2" style="">
                          <div class="card shadow-sm">
                            <div class="card-body text-light" style="background-color: #f16c69;">
                              <p class="card-text my-auto">Tema 3</p>

                              <div class="d-flex justify-content-between align-items-center">
                                
                              </div>
                            </div>
                            <label class="my-0 py-0">
                            <input type="radio" name="theme" class="radio-image" value="3">
                            <img src="../upload/3.jpg" width="100%">
                            </label>
                            
                          </div>
                        </div>
                        <div class="col-md-3 my-2" style="">
                          <div class="card shadow-sm">
                            <div class="card-body text-light" style="background-color: #f16c69;">
                              <p class="card-text my-auto">Tema 4</p>

                              <div class="d-flex justify-content-between align-items-center">
                                
                              </div>
                            </div>
                            <label class="my-0 py-0">
                            <input type="radio" name="theme" class="radio-image" value="4">
                            <img src="../upload/4.jpg" width="100%">
                            </label>
                            
                          </div>
                        </div>
                        <div class="col-md-3 my-2" style="">
                          <div class="card shadow-sm">
                            <div class="card-body text-light" style="background-color: #f16c69;">
                              <p class="card-text my-auto">Tema 5</p>

                              <div class="d-flex justify-content-between align-items-center">
                                
                              </div>
                            </div>
                            <label class="my-0 py-0">
                            <input type="radio" name="theme" class="radio-image" value="5">
                            <img src="../upload/5.jpg" width="100%">
                            </label>
                            
                          </div>
                        </div>
                        <div class="col-md-3 my-2" style="">
                          <div class="card shadow-sm">
                            <div class="card-body text-light" style="background-color: #f16c69;">
                              <p class="card-text my-auto">Tema 6</p>

                              <div class="d-flex justify-content-between align-items-center">
                                
                              </div>
                            </div>
                            <label class="my-0 py-0">
                            <input type="radio" name="theme" class="radio-image" value="6">
                            <img src="../upload/6.jpg" width="100%">
                            </label>
                            
                          </div>
                        </div>

                        

                        

                          </div>
                        </div></div>
                        <div class="row">
                        <div class="col-12 m-auto d-block">
                            <center>
                                <p>Anda dapat memilih template di atas, atau anda juga dapat mengkustomisasinya sendiri</p>
                                <a href="theme-custom.html" class="btn btn-primary waves-effect">
                    Custom
                </a>
                            </center>
                       </div>



                       
                            
                          </div>
                        </div>
                      </div>


                    
                    <div class="album py-5 bg-light">
                    <div class="container">

                      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        
                        
                        
                        
                        
                        
                      </div>
                    </div>
                    </form>
                  </div>
                    <!-- Container-fluid -->
                </div>
                <!-- End Page-content -->


                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <script>document.write(new Date().getFullYear())</script> © LinkU <span
                                    class="d-none d-sm-inline-block">- Crafted with <i class="mdi mdi-heart text-primary"></i> by
                                    kang_copas.</span>
                            </div>

                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title px-3 py-4">
                    <a href="javascript:void(0);" class="right-bar-toggle float-end">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                    <h5 class="m-0">Pengaturan</h5>
                </div>

                <!-- Settings -->
                <hr class="" />
                <h6 class="text-center mb-0">Pilih Tema</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-1.png" class="img-fluid img-thumbnail" alt="">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input type="checkbox" class="form-check-input theme-choice" id="light-mode-switch" checked />
                        <label class="form-check-label" for="light-mode-switch">Tema Terang</label>
                    </div>

                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-2.png" class="img-fluid img-thumbnail" alt="">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input type="checkbox" class="form-check-input theme-choice" id="dark-mode-switch"
                            data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css" />
                        <label class="form-check-label" for="dark-mode-switch">Tema Gelap</label>
                    </div>

                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-3.png" class="img-fluid img-thumbnail" alt="">
                    </div>

                </div>

            </div>
            <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>

        <!-- Peity JS -->
        <script src="assets/libs/peity/jquery.peity.min.js"></script>

        <script src="assets/libs/morris.js/morris.min.js"></script>

        <script src="assets/libs/raphael/raphael.min.js"></script>
        
        <!-- Dashboard init JS -->
        <script src="assets/js/pages/dashboard.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>


<!-- Mirrored from themesbrand.com/agroxa/layouts/red/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Feb 2022 06:28:33 GMT -->
</html>