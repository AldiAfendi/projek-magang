<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/agroxa/layouts/red/pages-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Feb 2022 06:31:44 GMT -->
<head>

        <meta charset="utf-8" />
        <title>Register | Agroxa - Responsive Bootstrap 5 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-topbar="colored">

    <!-- <body data-layout="horizontal" data-topbar="colored"> -->


        <!-- Background -->
        <div class="account-pages"></div>

        <!-- Begin page -->
        <div class="wrapper-page">
            <div class="card">
                <div class="card-body">

                    <div class="auth-logo">
                        <h3 class="text-center">
                            <a href="index.html" class="logo d-block my-4">
                                <img src="assets/images/logo-dark.png" class="logo-dark mx-auto" height="30" alt="logo-dark">
                                <img src="assets/images/logo-light.png" class="logo-light mx-auto" height="30" alt="logo-light">
                            </a>
                        </h3>
                    </div>

                    <div class="p-3">
                        <h4 class="text-muted font-size-18  text-center">Daftar Gratos</h4>
                        <p class="text-muted text-center">Silakan login terlebih dahulu, atau register jika belum memiliki akun</p>

                        <form class="form-horizontal " action="{{ route('register') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label" for="useremail">Email</label>
                                <input type="email" class="form-control" id="useremail" placeholder="Enter email">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="username">Username</label>
                                <input type="text" class="form-control" id="username" placeholder="Enter username">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="userpassword">Password</label>
                                <input type="password" class="form-control" id="userpassword" placeholder="Enter password">
                            </div>

                            <div class="mb-3 row">
                                <div class="col-12 text-end">
                                    <button class="btn btn-primary w-md waves-effect waves-light"
                                        type="submit">Register</button>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <div class="col-12">
                                    <p class="font-size-14 text-muted mb-0">Dengan mendaftar, anda menyetujui persyaratan dari LinkU</p>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

            <div class="text-center">
                <p class="text-muted">Sudah punya akun ? <a href="pages-login.html" class="text-white"> Login </a> </p>
                <p class="text-muted">©
                    <script>document.write(new Date().getFullYear())</script> LinkU. Crafted with <i
                        class="mdi mdi-heart text-primary"></i> by kang_copas
                </p>
            </div>
        </div>


        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title px-3 py-4">
                    <a href="javascript:void(0);" class="right-bar-toggle float-end">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                    <h5 class="m-0">Settings</h5>
                </div>

                <!-- Settings -->
                <hr class="" />
                <h6 class="text-center mb-0">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-1.png" class="img-fluid img-thumbnail" alt="">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input type="checkbox" class="form-check-input theme-choice" id="light-mode-switch" checked />
                        <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-2.png" class="img-fluid img-thumbnail" alt="">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input type="checkbox" class="form-check-input theme-choice" id="dark-mode-switch"
                            data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css" />
                        <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-3.png" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="form-check form-switch mb-5">
                        <input type="checkbox" class="form-check-input theme-choice" id="rtl-mode-switch"
                            data-appStyle="assets/css/app-rtl.min.css" />
                        <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
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

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>


<!-- Mirrored from themesbrand.com/agroxa/layouts/red/pages-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Feb 2022 06:31:44 GMT -->
</html>