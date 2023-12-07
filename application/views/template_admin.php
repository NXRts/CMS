<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $judul_halaman ?></title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= site_url('assets/back_end/stara/') ?>vendors/feather/feather.css">
    <link rel="stylesheet" href="<?= site_url('assets/back_end/stara/') ?>vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?= site_url('assets/back_end/stara/') ?>vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?= site_url('assets/back_end/stara/') ?>vendors/typicons/typicons.css">
    <link rel="stylesheet" href="<?= site_url('assets/back_end/stara/') ?>vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="<?= site_url('assets/back_end/stara/') ?>vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?= site_url('assets/back_end/stara/') ?>vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="<?= site_url('assets/back_end/stara/') ?>js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= site_url('assets/back_end/stara/') ?>css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?= site_url('assets/back_end/stara/') ?>images/icon.png" />

    <!-- Text editor -->
    <script src="https://cdn.tiny.cloud/1/YOUR_API_KEY/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>


    <!-- Style Start -->
    <style>
        .m {
            color: red;
        }

        a {
            text-decoration: none;
        }

        .f {
            color: blue;
        }

        .asd {
            color: black;
        }

        .nas {
            color: blue;
            padding: 1px;
            margin: 1.6px;
        }
    </style>
    <!-- Style END -->
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
                <div class="me-3">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
                        <span class="icon-menu"></span>
                    </button>
                </div>
                <div>
                    <a class="navbar-brand brand-logo" href="#">
                        <h4 class="asd">CMS<f class="f">XIRC</f>
                        </h4>
                    </a>
                    <a class="navbar-brand brand-logo-mini" href="<?= base_url('auth/logout') ?>">
                        <img src="<?= site_url('assets/back_end/stara/') ?>images/icon.png" alt="logo" />
                    </a>
                </div>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-top">
                <ul class="navbar-nav">
                    <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
                        <h1 class="welcome-text">Good Morning, <span class="nas fw-bold"><?= $this->session->userdata('nama'); ?></span></h1>
                        <h3 class="welcome-sub-text">Your performance summary this week </h3>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item d-none d-lg-block">
                        <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
                            <span class="input-group-addon input-group-prepend border-right">
                                <span class="icon-calendar input-group-text calendar-icon"></span>
                            </span>
                            <input type="text" class="form-control">
                        </div>
                    </li>
                    <li class="nav-item dropdown d-none d-lg-block user-dropdown">
                        <a class="nav-link" id="UserDropdown" href="<?= site_url('assets/back_end/stara/') ?>#" data-bs-toggle="dropdown" aria-expanded="false">
                            <img class="img-xs rounded-circle" src="<?= site_url('assets/back_end/stara/') ?>images/it's.ico" alt="Profile image"> </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                            <div class="dropdown-header text-center">
                                <img class="img-md rounded-circle" src="<?= site_url('assets/back_end/stara/') ?>images/it's.ico" alt="Profile image">
                                <p class="mb-1 mt-3 font-weight-semibold"><?= $this->session->userdata('nama'); ?></p>
                                <p class="fw-light text-muted mb-0"><a href="">
                                        <m class="m"><?= $this->session->userdata('level'); ?></m>
                                    </a></p>
                            </div>
                            <a href="" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-eye-off text-primary me-2"></i> Password</a>
                            <a href="<?= base_url('auth/logout') ?>" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Logout</a>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('admin/home') ?>" aria-expanded="false" aria-controls="ui-basic">
                            <i class="mdi mdi-grid-large menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('admin/caraousel') ?>" aria-expanded="false" aria-controls="ui-basic">
                            <i class="menu-icon mdi mdi-crown"></i>
                            <span class="menu-title">Caraousel</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('admin/kategori') ?>" aria-expanded="false" aria-controls="ui-basic">
                            <i class="menu-icon mdi mdi mdi-puzzle"></i>
                            <span class="menu-title">Kategori</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('admin/konten') ?>" aria-expanded="false" aria-controls="ui-basic">
                            <i class="menu-icon mdi mdi-floor-plan"></i>
                            <span class="menu-title">Konten</span>
                        </a>
                    </li>
                    <?php if ($this->session->userdata('level') == 'Admin') {; ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('admin/konfigurasi') ?>" aria-expanded="false" aria-controls="ui-basic">
                                <i class="menu-icon mdi mdi-nfc-variant"></i>
                                <span class="menu-title">Konfigurasi</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('admin/user') ?>" aria-expanded="false" aria-controls="auth">
                                <i class="menu-icon mdi mdi-account-circle-outline"></i>
                                <span class="menu-title">User</span>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-sm-12">
                            <?= $contents; ?>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Subscribe <a href="https://www.youtube.com/@OokamiMio">
                                <m class="m "> Mio Channel 大神ミオ</m>
                            </a></span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2023. <a href="https://blog.ayohosting.repl.co" target="_blank">
                                <m class="m">-M_Project</m>
                            </a></span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->


    <!-- Text Editor -->
    <script>
        tinymce.init({
            selector: '#keterangan',
            height: 200,
            plugins: 'autoresize',
            toolbar: 'undo redo | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent',
            autoresize_bottom_margin: 16,
            setup: function(editor) {
                editor.on('Change', function() {
                    tinymce.triggerSave();
                });
            }
        });
    </script>

    <!-- plugins:js -->
    <script src="<?= site_url('assets/back_end/stara/') ?>vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?= site_url('assets/back_end/stara/') ?>vendors/chart.js/Chart.min.js"></script>
    <script src="<?= site_url('assets/back_end/stara/') ?>vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="<?= site_url('assets/back_end/stara/') ?>vendors/progressbar.js/progressbar.min.js"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?= site_url('assets/back_end/stara/') ?>js/off-canvas.js"></script>
    <script src="<?= site_url('assets/back_end/stara/') ?>js/hoverable-collapse.js"></script>
    <script src="<?= site_url('assets/back_end/stara/') ?>js/template.js"></script>
    <script src="<?= site_url('assets/back_end/stara/') ?>js/settings.js"></script>
    <script src="<?= site_url('assets/back_end/stara/') ?>js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="<?= site_url('assets/back_end/stara/') ?>js/dashboard.js"></script>
    <script src="<?= site_url('assets/back_end/stara/') ?>js/Chart.roundedBarCharts.js"></script>
    <!-- End custom js for this page-->
</body>

</html>