<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login CMS XIRC</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= site_url('assets/back_end/stara/') ?>vendors/feather/feather.css">
    <link rel="stylesheet" href="<?= site_url('assets/back_end/stara/') ?>vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?= site_url('assets/back_end/stara/') ?>vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?= site_url('assets/back_end/stara/') ?>vendors/typicons/typicons.css">
    <link rel="stylesheet" href="<?= site_url('assets/back_end/stara/') ?>vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="<?= site_url('assets/back_end/stara/') ?>vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= site_url('assets/back_end/stara/') ?>css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?= site_url('assets/back_end/stara/') ?>images/icon.png" />
    <!-- Style -->
    <style>
        .f {
            color: blue;
        
        }

    </style>

</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">
                                <h4>CMS<f class="f">XIRC</.>
                                </h4>
                            </div>
                            <h4>Hello! let's get started</h4>
                            <h6 class="fw-light">Sign in to continue.</h6>
                            <form class="pt-3" action="<?= base_url('auth/login') ?>" method="POST">
                                <div class="form-group">
                                    <label for="email" class="form-label">Username</label>
                                    <input type="text" class="form-control form-control-lg" name="username" placeholder="Username" autofocus>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="password">Password</label>
                                    <input type="password" class="form-control form-control-lg" name="password" aria-describedby="password" placeholder="Password">
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?= site_url('assets/back_end/stara/') ?>vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?= site_url('assets/back_end/stara/') ?>vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?= site_url('assets/back_end/stara/') ?>js/off-canvas.js"></script>
    <script src="<?= site_url('assets/back_end/stara/') ?>js/hoverable-collapse.js"></script>
    <script src="<?= site_url('assets/back_end/stara/') ?>js/template.js"></script>
    <script src="<?= site_url('assets/back_end/stara/') ?>js/settings.js"></script>
    <script src="<?= site_url('assets/back_end/stara/') ?>js/todolist.js"></script>
    <!-- endinject -->
</body>

</html>