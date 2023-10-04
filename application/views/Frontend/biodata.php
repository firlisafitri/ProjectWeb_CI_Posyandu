<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Tivo is a HTML landing page template built with Bootstrap to help you crate engaging presentations for SaaS apps and convert visitors into users.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
  <meta property="og:site_name" content="" /> <!-- website name -->
  <meta property="og:site" content="" /> <!-- website link -->
  <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
  <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
  <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
  <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
  <meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Tambah Data Anak - Posyandu Anggrek Bulan</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url().'assets/Backend/css/tailwind.output.css'?>" />
    <link href="<?php echo base_url().'assets/Frontend/css/bootstrap.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/Frontend/css/fontawesome-all.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/Frontend/css/swiper.css'?>" rel="stylesheet">
  <link href="<?php echo base_url().'assets/Frontend/css/magnific-popup.css'?>" rel="stylesheet">
  <link href="<?php echo base_url().'assets/Frontend/css/styles.css'?>" rel="stylesheet">
  
  <!-- Favicon  -->
    <link rel="icon" href="<?php echo base_url().'assets/Backend/img/logo_posyandu.png'?>">
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
  <div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">

            <!-- Image Logo -->
            <img src="<?php echo base_url().'assets/Frontend/images/logoposyandu.png'?>" width="100px" alt=""> 
            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <a class="navbar-brand logo-text page-scroll" href="index.html">Posyandu Anggrek Bulan</a> 
            
            <!-- Mobile Menu Toggle Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-awesome fas fa-bars"></span>
                <span class="navbar-toggler-awesome fas fa-times"></span>
            </button>
            <!-- end of mobile menu toggle button -->

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="<?php echo base_url().'index.php/Frontend'?>">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a
                        class="nav-link page-scroll" href="<?php echo base_url().'index.php/Frontend/cek_hasil_gizi/'.$this->session->userdata('ses_id_ortu').'' ?>"
                        
                        >PERTUMBUHAN</a>
                    </li>
                    <!--<li class="nav-item">
                        <a class="nav-link page-scroll" href="<?php echo base_url().'index.php/Frontend/periksa_kemampuan_motorik'?>">PERKEMBANGAN</a>
                    </li>-->
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="<?php echo base_url().'index.php/Frontend/cek_kemampuan_motorik'?>">PERKEMBANGAN</a>
                    </li>

                    <!-- Dropdown Menu -->          
                    <li class="nav-item dropdown">
                        <a <?php foreach ($tbl_ortu as $ortu) { ?>
                        class="nav-link dropdown-toggle page-scroll" href="<?php echo base_url().'index.php/Frontend/profil_view/'.$this->session->userdata('ses_id_ortu').'' ?>" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false"
                        <?php } ?>
                        >WELCOME <?php echo $this->session->userdata('ses_name')?></a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo base_url().'index.php/Frontend/biodata'?>"><span class="item-text">TAMBAH DATA ANAK</span></a>
                            <?php foreach ($tbl_balita as $balita) { ?>
                            <div class="dropdown-items-divide-hr"></div>
                            <a class="dropdown-item" href="<?php echo base_url().'index.php/Frontend/biodata_view/'.$balita->id_balita.'' ?>"><span class="item-text">
                                <?php echo $balita->nm_balita ?><br>
                            </span></a>
                            <?php } ?>
                        </div>
                    </li>
                    <!-- end of dropdown menu -->
                    
                </ul>
                <span class="nav-item">
                    <a class="btn-outline-sm" href="<?php echo base_url().'index.php/Login/logout'?>">LOG OUT</a>
                </span>
            </div>
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Tambah Data Balita</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->


    <!-- Breadcrumbs -->
    <div class="ex-basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                        <a href="<?php echo base_url().'index.php/Frontend'?>">Home</a><i class="fa fa-angle-double-right"></i><span>Tambah Data Balita</span>
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->


    <div class="container">
        <form method="POST" action="">
            <div class="row">
                <div class="col-lg-12">
                    <br>
                    <!-- Sign Up Form -->
                    <input type="hidden" name="id_ortu" value="<?php echo $this->session->userdata('ses_id_ortu')?>" />
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Nama Balita *</label>
                                <input type="text" name="nm_balita" value="<?php echo set_value('nm_balita')?>" class="form-control" placeholder="Masukkan Nama Balita">
                            </div>
                            <span class="text-sm text-red-600"><?=form_error('nm_balita')?></span>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tanggal Lahir *</label>
                                <input type="date" name="tgl_lahir" value="<?php echo set_value('tgl_lahir')?>" class="form-control" placeholder="Masukkan Tanggal Lahir">
                            </div>
                            <span class="text-sm text-red-600"><?=form_error('tgl_lahir')?></span>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Jenis Kelamin *</label><br>
                                <div class="form-check form-check-inline">
                                <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="custom1" name="jenis_kelamin" value="Laki-Laki">
                                <label class="custom-control-label" for="custom1">Laki-Laki</label>
                                </div>&nbsp;&nbsp;
                                                    
                                <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="custom2" name="jenis_kelamin" value="Perempuan">
                                <label class="custom-control-label" for="custom2">Perempuan</label>
                                </div>
                                </div>
                            </div>
                            <span class="text-sm text-red-600"><?=form_error('jenis_kelamin')?></span>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Berat Badan Lahir *</label>
                                <input type="number" name="bb_lahir" value="<?php echo set_value('bb_lahir')?>" step='any' class="form-control" placeholder="0,0 kg">
                            </div>
                            <span class="text-sm text-red-600"><?=form_error('bb_lahir')?></span>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Panjang Badan Lahir *</label>
                                <input type="number" name="pb_lahir" value="<?php echo set_value('pb_lahir')?>" step='any' class="form-control" placeholder="00 cm">
                            </div>
                            <span class="text-sm text-red-600"><?=form_error('pb_lahir')?></span>
                        </div>
                    </div>


                    <center>
                        <div class="form-group mt-4 mb-0">
                            <input type="submit" name="proses" class="btn btn-primary" value="Simpan Data Balita">
                        </div>
                    </center>

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
        <br>
        <br>

    
    
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-col first">
                        <h4>About Tivo</h4>
                        <p class="p-small">We're passionate about offering some of the best business growth services for start more words</p>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col middle">
                        <h4>Important Links</h4>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Our business partners <a class="white" href="#your-link">startupguide.com</a></div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Read our <a class="white" href="terms-conditions.html">Terms & Conditions</a>, <a class="white" href="privacy-policy.html">Privacy Policy</a></div>
                            </li>
                        </ul>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col last">
                        <h4>Contact</h4>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li class="media">
                                <i class="fas fa-map-marker-alt"></i>
                                <div class="media-body">22 Innovative, San Francisco, CA 94043, US</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-envelope"></i>
                                <div class="media-body"><a class="white" href="mailto:contact@Tivo.com">contact@Tivo.com</a> <i class="fas fa-globe"></i><a class="white" href="#your-link">www.Tivo.com</a></div>
                            </li>
                        </ul>
                    </div> 
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2020 <a href="https://inovatik.com">Template by Inovatik</a><br>
                        Distributed By <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                    </p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
    
      
    <!-- Scripts -->
    <script src="<?php echo base_url().'assets/Frontend/js/jquery.min.js'?>"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="<?php echo base_url().'assets/Frontend/js/popper.min.js'?>"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="<?php echo base_url().'assets/Frontend/js/bootstrap.min.js'?>"></script> <!-- Bootstrap framework -->
    <script src="<?php echo base_url().'assets/Frontend/js/jquery.easing.min.js'?>"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="<?php echo base_url().'assets/Frontend/js/swiper.min.js'?>"></script> <!-- Swiper for image and text sliders -->
    <script src="<?php echo base_url().'assets/Frontend/js/jquery.magnific-popup.js'?>"></script> <!-- Magnific Popup for lightboxes -->
    <script src="<?php echo base_url().'assets/Frontend/js/validator.min.js'?>"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="<?php echo base_url().'assets/Frontend/js/scripts.js'?>"></script> <!-- Custom scripts -->
</body>
</html>