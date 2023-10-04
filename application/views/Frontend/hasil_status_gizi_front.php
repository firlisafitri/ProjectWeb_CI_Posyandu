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
    <title>Privacy Policy - Tivo - SaaS App HTML Landing Page Template</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url().'assets/Backend/css/tailwind.output.css'?>" />
    <link href="<?php echo base_url().'assets/Frontend/css/bootstrap.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/Frontend/css/fontawesome-all.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/Frontend/css/swiper.css'?>" rel="stylesheet">
  <link href="<?php echo base_url().'assets/Frontend/css/magnific-popup.css'?>" rel="stylesheet">
  <link href="<?php echo base_url().'assets/Frontend/css/styles.css'?>" rel="stylesheet">
  
  <!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
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
                        <a class="nav-link page-scroll" href="<?php echo base_url().'index.php/Frontend/hasil_status_gizi'?>">PERTUMBUHAN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="index.html#details">PERKEMBANGAN</a>
                    </li>

                    <!-- Dropdown Menu -->          
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle page-scroll" href="index.html#video" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">WELCOME <?php echo $this->session->userdata('ses_name')?></a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="article-details.html"><span class="item-text">ARTICLE DETAILS</span></a>
                            <div class="dropdown-items-divide-hr"></div>
                            <a class="dropdown-item" href="terms-conditions.html"><span class="item-text">TERMS CONDITIONS</span></a>
                            <div class="dropdown-items-divide-hr"></div>
                            <a class="dropdown-item" href="privacy-policy.html"><span class="item-text">PRIVACY POLICY</span></a>
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
                    <h1>Pertumbuhan</h1>
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
                        <a href="<?php echo base_url().'index.php/Frontend'?>">Home</a><i class="fa fa-angle-double-right"></i><span>Pertumbuhan</span>
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->


    <div class="container grid px-6 mx-auto">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
              Tabel Pertumbuhan
            </h2>
            

            
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
              <div class="w-full overflow-x-auto">
                 <table class="w-full whitespace-wrap">
                  <thead>
                    <tr
                      class="text-sm font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                    >
                      <th class="px-4 py-3">No</th>
                      <th class="px-4 py-3">Nama Balita</th>
                      <th class="px-4 py-3">Tanggal Cek Pertumbuhan</th>
                      <th class="px-4 py-3">Usia (Bulan)</th>
                      <th class="px-4 py-3">Berat Badan (Kg)</th>
                      <th class="px-4 py-3">Status Gizi</th>
                      <th class="px-4 py-3">Saran Gizi</th>
                    </tr>
                  </thead>
                  <tbody
                    class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                  >

                <?php $no = 1; foreach ($tbl_pertumbuhan as $pertumbuhan) { 
$trainingData = ([
        [
            "usia"      => 40,
            "berat"     => 13.3,
            "status"    => "Baik"
        ],
        [
            "usia"      => 13,
            "berat"     => 7.3,
            "status"    => "Kurang"
        ],
        [
            "usia"      => 1,
            "berat"     => 4,
            "status"    => "Baik"
        ],
        [
            "usia"      => 5,
            "berat"     => 5.4,
            "status"    => "Kurang"
        ],
        [
            "usia"      => 17,
            "berat"     => 8,
            "status"    => "Kurang"
        ],
        [
            "usia"      => 6,
            "berat"     => 5.8,
            "status"    => "Kurang"
        ],
        [
            "usia"      => 14,
            "berat"     => 7.5,
            "status"    => "Kurang"
        ],
        [
            "usia"      => 12,
            "berat"     => 7.2,
            "status"    => "Kurang"
        ],
        [
            "usia"      => 38,
            "berat"     => 10.8,
            "status"    => "Baik"
        ],
        [
            "usia"      => 2,
            "berat"     => 4.6,
            "status"    => "Baik"
        ],
        [
            "usia"      => 3,
            "berat"     => 5.5,
            "status"    => "Baik"
        ],
        [
            "usia"      => 42,
            "berat"     => 13.5,
            "status"    => "Baik"
        ],
        [
            "usia"      => 4,
            "berat"     => 5.3,
            "status"    => "Baik"
        ],
        [
            "usia"      => 28,
            "berat"     => 10.5,
            "status"    => "Baik"
        ],
        [
            "usia"      => 44,
            "berat"     => 13.4,
            "status"    => "Baik"
        ],
        [
            "usia"      => 29,
            "berat"     => 10.7,
            "status"    => "Baik"
        ],
        [
            "usia"      => 21,
            "berat"     => 8,
            "status"    => "Buruk"
        ],
        [
            "usia"      => 50,
            "berat"     => 14.2,
            "status"    => "Baik"
        ],
        [
            "usia"      => 25,
            "berat"     => 9.7,
            "status"    => "Kurang"
        ],
        [
            "usia"      => 8,
            "berat"     => 6.2,
            "status"    => "Kurang"
        ],
        [
            "usia"      => 11,
            "berat"     => 6.8,
            "status"    => "Buruk"
        ],
        [
            "usia"      => 15,
            "berat"     => 7.7,
            "status"    => "Kurang"
        ],
        [
            "usia"      => 46,
            "berat"     => 14,
            "status"    => "Baik"
        ],
        [
            "usia"      => 22,
            "berat"     => 8.3,
            "status"    => "Buruk"
        ],
        [
            "usia"      => 7,
            "berat"     => 5.6,
            "status"    => "Kurang"
        ],
    ]);

    $trainingData = json_decode(json_encode($trainingData), FALSE);

    if( function_exists('hitungJarak') == FALSE ) {
    function hitungJarak($usiaTraining, $beratTraining, $usia, $bb){ // fungsi hitung jarak
        $pangkat_usia = pow(($usiaTraining - $usia),2);
        $pangkat_berat = pow(($beratTraining - $bb),2);
        $jum_pangkat = $pangkat_usia + $pangkat_berat;
        $akar_pangkat = sqrt($jum_pangkat);
        $hasil = number_format($akar_pangkat,8,",",".");

        return $hasil;
    }
  }

?>

    
   
    
                    <?php
            $arrayHasilJarak = ([]);
            $i = 0;
            foreach($trainingData as $training){
                $i++;
                ?>
            
                <?php
                $hasilJarak = hitungJarak($training->usia, $training->berat, $pertumbuhan->usia, $pertumbuhan->berat_badan);
                ?>
                
                <?php
                array_push($arrayHasilJarak,([
                    "usia"          => $training->usia,
                    "berat"         => $training->berat,
                    "status"        => $training->status,
                    "hasil_jarak"   => $hasilJarak,
                ]));
            }
            ?>
    <?php
    usort($arrayHasilJarak, function($a, $b) { // fungsi urutkan array berdasarkan data terdekat
        return (float)$a["hasil_jarak"] - (float)$b["hasil_jarak"];
    });
    $arrayHasilJarak = json_decode(json_encode($arrayHasilJarak), FALSE);
    ?>
                    <?php
            $i = 0;
            foreach($arrayHasilJarak as $hasil){
                $i++;
                ?>
            
                <?php
            }
            ?>
        
    <?php
    if( function_exists('calculateMode') == FALSE ) {
    function calculateMode($arr) { // fungsi hitung modus
        $frequency = array_count_values($arr);
        $maxFrequency = max($frequency);
        $modes = array_keys($frequency, $maxFrequency);
        
        return $modes[0];
    }
  }
    ?>
    
                    <?php
            $i = 0;
            $arrayHasilStatus = ([]);
            foreach($arrayHasilJarak as $hasil){
                $i++;

                if($i <= 5) :
                ?>
            
                <?php
                array_push($arrayHasilStatus, $hasil->status);

                endif;
            }
            ?>
       
            <?php
              $hasil = (calculateMode($arrayHasilStatus));
                
              if($hasil == 'Buruk'){
                $saran = '1. Memberikan suplemen, berupa vitamin A, zat besi, dan asam folat. 2. Memberikan makanan bergizi lengkap dan seimbang sesuai kebutuhan anak. 3. Memberikan ASI eksklusif hingga usia anak 6 bulan, dilanjutkan dengan memberikan MPASI yang bergizi lengkap dan seimbang.';
              }
              else if($hasil == 'Kurang'){
                $saran = '1. Memberikan suplemen, berupa vitamin A, zat besi, dan asam folat. 2. Memberikan makanan bergizi lengkap dan seimbang sesuai kebutuhan anak. 3. Memberikan ASI eksklusif hingga usia anak 6 bulan, dilanjutkan dengan memberikan MPASI yang bergizi lengkap dan seimbang.';
              }
              else if($hasil == 'Lebih'){
                $saran = '1. Mengatur asupan karbohidrat, protein, lemak, vitamin dan mineral. 2. Susu diberikan 1-2 gelas per hari, dalam bentuk susu rendah lemak. 3. Memberikan makan secara teratur 3 kali sehari dengan 2 kali makanan selingan.';
              }
              else if($hasil == 'Baik'){
                $saran = 'Terus jaga pola makan';
              }
            ?>
            

            

               
                  
                    
                    <tr class="text-gray-700 dark:text-gray-400">
                      <td class="px-4 py-3">
                        <div class="flex items-center text-sm">
                          <!-- Avatar with inset shadow -->
                          <div>
                            <p class="font-semigrey"><?php echo $no++ ?></p>
                          </div>
                        </div>
                      </td>
                      <td class="px-4 py-3 text-sm">
                        <?php echo $pertumbuhan->nm_balita ?>
                      </td>
                      <td class="px-4 py-3 text-sm">
                        <?php echo $pertumbuhan->tgl_cek ?>
                      </td>
                      <td class="px-4 py-3 text-sm">
                        <?php echo $pertumbuhan->usia ?> bulan
                      </td>
                      <td class="px-4 py-3 text-sm">
                        <?php echo $pertumbuhan->berat_badan ?> kg
                      </td>
                      <td class="px-4 py-3 text-sm">
                        <?= calculateMode($arrayHasilStatus) ?>
                      </td>
                      <td class="px-4 py-3 text-sm">
                        <?php echo $saran ?>
                      </td>
                    </tr>

                    <?php
}
?>
                  </tbody>
                </table>
                
              </div>
            </div>
            <br>
                <CENTER>
                    <a
                    class="btn-outline-reg" href="<?php echo base_url().'index.php/Frontend/cetak_hasil_pertumbuhan/'.$this->session->userdata('ses_id_ortu').'' ?>"
                    >CETAK HASIL PERTUMBUHAN</a>
                </CENTER>
          </div>
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