</html>

<!DOCTYPE html>
<!--
Template: Metronic Frontend Freebie - Responsive HTML Template Based On Twitter Bootstrap 3.3.4
Version: 1.0.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase Premium Metronic Admin Theme: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Head BEGIN -->

<head>
    <meta charset="utf-8">
    <title></title>

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <meta content="Metronic Shop UI description" name="description">
    <meta content="Metronic Shop UI keywords" name="keywords">
    <meta content="keenthemes" name="author">

    <meta property="og:site_name" content="-CUSTOMER VALUE-">
    <meta property="og:title" content="-CUSTOMER VALUE-">
    <meta property="og:description" content="-CUSTOMER VALUE-">
    <meta property="og:type" content="website">
    <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
    <meta property="og:url" content="-CUSTOMER VALUE-">

    <link rel="shortcut icon" href="<?= base_url('assets/front_end/master/') ?>fall.ico">

    <!-- Fonts START -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
    <!-- Fonts END -->

    <!-- Global styles START -->
    <link href="<?= base_url('assets/front_end/master/') ?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/front_end/master/') ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Global styles END -->

    <!-- Page level plugin styles START -->
    <link href="<?= base_url('assets/front_end/master/') ?>assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
    <!-- Page level plugin styles END -->

    <!-- Theme styles START -->
    <link href="<?= base_url('assets/front_end/master/') ?>assets/pages/css/components.css" rel="stylesheet">
    <link href="<?= base_url('assets/front_end/master/') ?>assets/corporate/css/style.css" rel="stylesheet">
    <link href="<?= base_url('assets/front_end/master/') ?>assets/corporate/css/style-responsive.css" rel="stylesheet">
    <link href="<?= base_url('assets/front_end/master/') ?>assets/corporate/css/themes/red.css" rel="stylesheet" id="style-color">
    <link href="<?= base_url('assets/front_end/master/') ?>assets/corporate/css/custom.css" rel="stylesheet">
    <!-- Theme styles END -->
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

        .site-logo {
            color: black;
        }

        .md {
            margin: 10px;
        }

        .mb {
            margin: 10px;
            padding: 3px;
        }

        ul.custom-list,
        ul.custom-list li {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        ul.custom-list {
            background-color: #f0f0f0;
            border-radius: 8px;
            padding: 10px;
            width: 200px;
        }

        ul.custom-list li {
            margin-bottom: 5px;
            padding: 5px;
            background-color: #ffffff;
            border: 1px solid #ccc;
            border-radius: 4px;
        }


        ul.custom-list li:hover {
            background-color: #e0e0e0;
            cursor: pointer;
        }
    </style>
</head>
<!-- Head END -->

<!-- Body BEGIN -->

<body class="corporate">
    <div class="header">
        <div class="container">
            <a class="navbar-brand brand-logo" href="<?= base_url() ?>">
                <h5 class="site-logo"><?= $konfig->judul_website; ?>
                </h5>
            </a>
            <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>
            <!-- BEGIN NAVIGATION -->
            <div class="header-navigation pull-right font-transform-inherit">
                <ul>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                            Home
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?= base_url(); ?>">Home</a></li>
                            <li><a href="<?= base_url('home/galeri/'); ?>">Galeri</a></li>
                            <li><a href="<?= base_url('home/about/'); ?>">About</a></li>
                            <li><a href="<?= base_url('home/saran/'); ?>">Saran</a></li>
                        </ul>
                    </li>

                    <?php foreach ($kategori as $kate) { ?>
                        <li><a href="<?= base_url('home/kategori/' . $kate['id_kategori']) ?>">
                                <?= $kate['nama_kategori'] ?>
                            </a>
                        </li>
                    <?php } ?>

                    <!-- <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                            Lainnya
                        </a>

                        <ul class="dropdown-menu">
                            <li><a href="blog.html">Blog Page</a></li>
                            <li><a href="blog-item.html">Blog Item</a></li>
                        </ul>
                    </li> -->

                    <li><a href="<?= base_url('auth') ?>"><button type="button" class="btn btn-primary">Login</button></a></li>

                    <!-- BEGIN TOP SEARCH -->
                    <li class="menu-search">
                        <span class="sep"></span>
                        <i class="fa fa-search search-btn"></i>
                        <div class="search-box">
                            <form action="#">
                                <div class="input-group">
                                    <input type="text" placeholder="Search" class="form-control">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="submit">Search</button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </li>
                    <!-- END TOP SEARCH -->
                </ul>
            </div>
            <!-- END NAVIGATION -->
        </div>
    </div>

    <!-- ISI KONTEN -->

    <div class="main">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><a href="javascript:;">Pages</a></li>
                <li class="active">Gallery</li>
            </ul>
            <!-- BEGIN SIDEBAR & CONTENT -->
            <div class="row margin-bottom-40">
                <!-- BEGIN CONTENT -->
                <div class="col-md-14">
                    <h1>Gallery</h1>
                    <hr>
                    <?php foreach ($konten as $uu) { ?>
                        <div class="content-page">
                            <div class="row margin-bottom-40">
                                <div class="col-md- col-sm-4 gallery-item">
                                    <a data-rel="fancybox-button" title="Project Name" href="<?= base_url('assets/upload/konten/' . $uu['foto']) ?>" class="fancybox-button">
                                        <img alt="" src="<?= base_url('assets/upload/konten/' . $uu['foto']) ?>" class="img-responsive">
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <!-- END CONTENT -->
            </div>
        </div>
    </div>

    <!-- BEGIN PRE-FOOTER -->
    <div class="pre-footer">
        <div class="container">
            <div class="row">
                <!-- BEGIN BOTTOM ABOUT BLOCK -->
                <div class="col-md-4 col-sm-6 pre-footer-col">
                    <h2><?= $konfig->judul_website; ?></h2>
                    <h5><?= $konfig->profil_website; ?></h5>

                    <br><br>
                    <div class="photo-stream">
                        <h2>Photos Stream</h2>
                        <?php foreach ($konten as $uu) { ?>
                            <li><a href="<?= base_url('home/artikel/' . $uu['slug']) ?>"><img alt="" src="<?= base_url('assets/upload/konten/' . $uu['foto']) ?>"></a></li>
                        <?php } ?>
                    </div>
                </div>
                <!-- END BOTTOM ABOUT BLOCK -->
                <!-- BEGIN BOTTOM CONTACTS -->
                <div class="col-md-4 col-sm-6 pre-footer-col">
                    <h2>Our Contacts</h2>
                    <address class="margin-bottom-40">
                        <?= $konfig->alamat ?><br>
                        Indonesia<br>
                        Phone: <?= $konfig->no_wa ?><br>
                        Email: <?= $konfig->email ?>
                    </address>

                    <div class="pre-footer-subscribe-box pre-footer-subscribe-box-vertical">
                        <h2>Saya <span style="color: #57C8EB">Arrofi</span></h2>
                        <p>saya suka pixsel art <br>itu saja <span style="color: #57C8EB">Terima Kasih</span></p>
                        <form action="#">
                            <div class="input-group">
                                <input type="text" placeholder="Subscribe Mio Channel 大神ミオ" class="form-control">
                                <span class="input-group-btn">
                                    <a href="https://www.youtube.com/@OokamiMio"><button class="btn btn-primary" type="submit">Subscribe</button></a>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END BOTTOM CONTACTS -->

                <!-- BEGIN TWITTER BLOCK -->
                <div class="col-md-4 col-sm-6 pre-footer-col">
                    <h2 class="margin-bottom-0">My Portofolio </h2>
                    <a href="https://blog.ayohosting.repl.co/">Muhammad Yusuf Arrofi</a>
                </div>
                <!-- END TWITTER BLOCK -->
            </div>
        </div>
    </div>
    <!-- END PRE-FOOTER -->

    <!-- BEGIN FOOTER -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <!-- BEGIN COPYRIGHT -->
                <div class="col-md-4 col-sm-4 padding-top-10">
                    2023© -M_Projecr. ALL Rights Reserved.
                </div>

                <!-- END COPYRIGHT -->
                <!-- BEGIN PAYMENTS -->
                <div class="col-md-4 col-sm-4">
                    <ul class="social-footer list-unstyled list-inline pull-right">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://twitter.com/MYArrofi"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
                <!-- END PAYMENTS -->
                <!-- BEGIN POWERED -->
                <div class="col-md-4 col-sm-4 text-right">
                    <p class="powered">Powered by: <a href="http://www.keenthemes.com/" target="_blank">KeenThemes.com</a></p>
                </div>
                <!-- END POWERED -->
            </div>
        </div>
    </div>
    <!-- END FOOTER -->

    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src="<?= base_url('assets/front_end/master/') ?>assets/plugins/respond.min.js"></script>
    <![endif]-->
    <script src="<?= base_url('assets/front_end/master/') ?>assets/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="<?= base_url('assets/front_end/master/') ?>assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="<?= base_url('assets/front_end/master/') ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="<?= base_url('assets/front_end/master/') ?>assets/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->

    <script src="<?= base_url('assets/front_end/master/') ?>assets/corporate/scripts/layout.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();
            Layout.initTwitter();
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->

</html>