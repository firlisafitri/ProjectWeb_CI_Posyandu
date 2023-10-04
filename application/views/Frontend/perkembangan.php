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
    <title>Perkembangan - Posyandu Anggrek Bulan</title>
    
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
                    <h1>Perkembangan</h1>
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
                        <a href="<?php echo base_url().'index.php/Frontend'?>">Home</a><i class="fa fa-angle-double-right"></i><span>Kemampuan Motorik</span>
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->


    <div class="container px-6 mx-auto grid">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
              Pilih Kemampuan Motorik Balita
            </h2>

            <div class="w-full overflow-hidden rounded-lg shadow-xs">
              <div class="card-body">

              <?php foreach ($tbl_balita as $balita) { ?>

                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Nama Balita</label>
                                <input type="text" name="nm_balita" class="form-control" readonly="readonly" value="<?php echo $balita->nm_balita ?>">
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Jenis Kelamin</label><br>
                                <div class="form-check form-check-inline">
                                <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="custom1" name="jenis_kelamin" value="Laki-Laki" <?php if($balita->jenis_kelamin == 'Laki-Laki') echo "checked='checked'" ?>>
                                <label class="custom-control-label" for="custom1">Laki-Laki</label>
                                </div>&nbsp;&nbsp;
                                                    
                                <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="custom2" name="jenis_kelamin" value="Perempuan" <?php if($balita->jenis_kelamin == 'Perempuan') echo "checked='checked'" ?>>
                                <label class="custom-control-label" for="custom2">Perempuan</label>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                           
              <?php } ?>

              </div>
                
            </div>&nbsp;&nbsp;
            
            <div
              class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
            >

            <?php
$dataKemampuan = ([
    [
        "usia_awal"         => 0,
        "usia_akhir"        => 3,
        "kode_kemampuan1"   => "KM11",
        "kemampuan1"        => "Mengangkat kepala setinggi 45 drajat ",
        "kode_kemampuan2"   => "KM12",
        "kemampuan2"        => "Menggerakkan kepala ke kiri dan kanan ",
        "kode_kemampuan3"   => "KM13",
        "kemampuan3"        => "Menggerakkan tangan dan kaki ",
        "kode_kemampuan4"   => "KM14",
        "kemampuan4"        => "Menunjukkan gerakan sebagai respons terhadap stimulus visual ",
        "kode_kemampuan5"   => "KM15",
        "kemampuan5"        => "Membuka telapak tangan ",
    ],
    [
        "usia_awal"         => 4,
        "usia_akhir"        => 6,
        "kode_kemampuan1"   => "KM21",
        "kemampuan1"        => "Berbalik dari posisi telungkup ke terlentang ",
        "kode_kemampuan2"   => "KM22",
        "kemampuan2"        => "Mengangkat kepala setinggi 90 drajat pada posisi tengkurap ",
        "kode_kemampuan3"   => "KM23",
        "kemampuan3"        => "Mempertahankan posisi kepala tetap tegak dan stabil",
        "kode_kemampuan4"   => "KM24",
        "kemampuan4"        => "Menggenggam mainan atau tangannya sendiri",
        "kode_kemampuan5"   => "KM25",
        "kemampuan5"        => "Meraih benda yang ada didekatnya ",
    ],
    [
        "usia_awal"         => 7,
        "usia_akhir"        => 9,
        "kode_kemampuan1"   => "KM31",
        "kemampuan1"        => "Duduk sendiri tanpa sandaran",
        "kode_kemampuan2"   => "KM32",
        "kemampuan2"        => "Mulai merangkak",
        "kode_kemampuan3"   => "KM33",
        "kemampuan3"        => "Memindahkan benda dari satu tangan ke tangan lainnya",
        "kode_kemampuan4"   => "KM34",
        "kemampuan4"        => "Memungut benda sebesar kacang",
        "kode_kemampuan5"   => "KM35",
        "kemampuan5"        => "Makan kue sendiri",
    ],
    [
        "usia_awal"         => 10,
        "usia_akhir"        => 12,
        "kode_kemampuan1"   => "KM41",
        "kemampuan1"        => "Mengangkat badan ke posisi berdiri",
        "kode_kemampuan2"   => "KM42",
        "kemampuan2"        => "Berdiri selama 30 detik sambil berpegangan",
        "kode_kemampuan3"   => "KM43",
        "kemampuan3"        => "Berjalan dengan dituntun",
        "kode_kemampuan4"   => "KM44",
        "kemampuan4"        => "Mengulurkan lengan atau badan untuk meraih mainan yang diinginkan",
        "kode_kemampuan5"   => "KM45",
        "kemampuan5"        => "Menggenggam erat pensil",
    ],
    [
        "usia_awal"         => 13,
        "usia_akhir"        => 18,
        "kode_kemampuan1"   => "KM51",
        "kemampuan1"        => "Berdiri sendiri tanpa berpegangan",
        "kode_kemampuan2"   => "KM52",
        "kemampuan2"        => "Berjalan beberapa langkah ",
        "kode_kemampuan3"   => "KM53",
        "kemampuan3"        => "Membungkuk memungut mainan kemudian berdiri kembali",
        "kode_kemampuan4"   => "KM54",
        "kemampuan4"        => "Menumpuk dua kubus",
        "kode_kemampuan5"   => "KM55",
        "kemampuan5"        => "Memasukkan kubus di kotak",
    ],
    [
        "usia_awal"         => 19,
        "usia_akhir"        => 24,
        "kode_kemampuan1"   => "KM61",
        "kemampuan1"        => "Berdiri sendiri tanpa berpegangan",
        "kode_kemampuan2"   => "KM62",
        "kemampuan2"        => "Berjalan sendiri",
        "kode_kemampuan3"   => "KM63",
        "kemampuan3"        => "Mengglindingkan bola",
        "kode_kemampuan4"   => "KM64",
        "kemampuan4"        => "Memungut benda kecil dengan ibu jari dan jari telunjuk",
        "kode_kemampuan5"   => "KM65",
        "kemampuan5"        => "Memegang cangkir sendiri, belajar makan-minum sendiri",
    ],
    [
        "usia_awal"         => 25,
        "usia_akhir"        => 36,
        "kode_kemampuan1"   => "KM71",
        "kemampuan1"        => "Menendang bola tanpa kesulitan",
        "kode_kemampuan2"   => "KM72",
        "kemampuan2"        => "Mencoret-coret pensil pada kertas",
        "kode_kemampuan3"   => "KM73",
        "kemampuan3"        => "Membantu memungut mainannya sendiri",
        "kode_kemampuan4"   => "KM74",
        "kemampuan4"        => "Makan nasi sendiri tanpa banyak tumpah",
        "kode_kemampuan5"   => "KM75",
        "kemampuan5"        => "Melepas pakaiannya sendiri",
    ],
    [
        "usia_awal"         => 37,
        "usia_akhir"        => 48,
        "kode_kemampuan1"   => "KM81",
        "kemampuan1"        => "Melompat kedua kaki diangkat",
        "kode_kemampuan2"   => "KM82",
        "kemampuan2"        => "Mengayuh sepeda roda tiga",
        "kode_kemampuan3"   => "KM83",
        "kemampuan3"        => "Bermain bersama teman",
        "kode_kemampuan4"   => "KM84",
        "kemampuan4"        => "Menggambar garis lurus",
        "kode_kemampuan5"   => "KM85",
        "kemampuan5"        => "Mencuci dan mengeringkan tangan sendiri",
    ],
    [
        "usia_awal"         => 49,
        "usia_akhir"        => 60,
        "kode_kemampuan1"   => "KM91",
        "kemampuan1"        => "Melompat dan menari",
        "kode_kemampuan2"   => "KM92",
        "kemampuan2"        => "Menggambar tanda silang dan lingkaran",
        "kode_kemampuan3"   => "KM93",
        "kemampuan3"        => "Mencuci tangan dan sikat gigi sendiri",
        "kode_kemampuan4"   => "KM94",
        "kemampuan4"        => "Mengancing baju atau pakaian boneka",
        "kode_kemampuan5"   => "KM95",
        "kemampuan5"        => "Berpakaian sendiri tanpa dibantu",
    ],
    [
        "usia_awal"         => 61,
        "usia_akhir"        => 72,
        "kode_kemampuan1"   => "KM101",
        "kemampuan1"        => "Berjalan lurus",
        "kode_kemampuan2"   => "KM102",
        "kemampuan2"        => "Berdiri dengan 1 kaki",
        "kode_kemampuan3"   => "KM103",
        "kemampuan3"        => "Menangkap bola kecil dengan kedua tangan",
        "kode_kemampuan4"   => "KM104",
        "kemampuan4"        => "Menggambar segi empat",
        "kode_kemampuan5"   => "KM105",
        "kemampuan5"        => "Berpakaian sendiri tanpa dibantu",
    ],
]);

$dataKesimpulan = ([
    [
        "kode"          => "K01",
        "keterangan"    => "Perkembangan anak sesuai",
    ],
    [
        "kode"          => "K02",
        "keterangan"    => "Perkembangan anak tidak sesuai",
    ],
]);

$dataSaran = ([
    [
        "kode"          => "S01",
        "keterangan"    => "Teruskan stimulasi sesuai tahapan perkembangan anak berikutnya"
    ],
    [
        "kode"          => "S02",
        "keterangan"    => "Ulangi setelah 2 minggu kemudian sesuai usia anak",
    ],
    [
        "kode"          => "S03",
        "keterangan"    => "Rujuk ke Puskesmas/Fasilitas kesehatan",
    ],
]);

$dataJawaban = ([
    "J06","J05","J04","J03","J02","J01"
]);
?>
<form method="post" action="">
    <div class="col-md-12">
                            <div class="form-group">
                                <label>Usia</label>
                                <select name="usia" class="form-control">
                                    <option>~Pilih Usia</option>
                                    <option value='3'>3</option>";
                                    <option value='6'>6</option>";
                                    <option value='9'>9</option>";
                                    <option value='12'>12</option>";
                                    <option value='18'>18</option>";
                                    <option value='24'>24</option>";
                                    <option value='36'>36</option>";
                                    <option value='48'>48</option>";
                                    <option value='60'>60</option>";
                                    <option value='72'>72</option>";
                                </select>
                                <div class="form-group mt-4 mb-0">
                                <input type="submit" name="kirim_usia" class="btn btn-primary" value="Kirim Usia">
                                </div>
                            </div>
                        </div>
</form>
<hr>
<?php
if(isset($_POST['kirim_usia'])){
    $usia = $_POST['usia'];

    $indexKemampuan = 0;
    foreach ($dataKemampuan as $indexData => $data) {
        if ($usia >= $data['usia_awal'] && $usia <= $data['usia_akhir']) {
            $indexKemampuan = $indexData;
            break; // Stop loop ketika data ditemukan
        }
    }
    ?>
<form method="post" action="<?php echo base_url().'index.php/Frontend/perkembangan_aksi'?>">
    <b>Usia : <?= $usia ?> Bulan</b> <br>
    <input type='hidden' name='usia' value="<?= $usia ?>">
    <?php
    if ($usia <= "3") {
        for($km = 1; $km <= 5; $km++){
        ?>
    <label>
        <input type='checkbox' name='kemampuan[]' value="<?= $dataKemampuan[$indexKemampuan]['kode_kemampuan'.$km] ?>~<?= $dataKemampuan[$indexKemampuan]['kemampuan'.$km] ?>">
        [<?= $dataKemampuan[0]['kode_kemampuan'.$km] ?>] <?= $dataKemampuan[0]['kemampuan'.$km] ?>
    </label> <br>
        <?php
        }
    }
    else if ($usia <= "6") {
        for($km = 1; $km <= 5; $km++){
        ?>
    <label>
        <input type='checkbox' name='kemampuan[]' value="<?= $dataKemampuan[$indexKemampuan]['kode_kemampuan'.$km] ?>~<?= $dataKemampuan[$indexKemampuan]['kemampuan'.$km] ?>">
        [<?= $dataKemampuan[1]['kode_kemampuan'.$km] ?>] <?= $dataKemampuan[1]['kemampuan'.$km] ?>
    </label> <br>
        <?php
        }
    }
    else if ($usia <= "9") {
        for($km = 1; $km <= 5; $km++){
        ?>
    <label>
        <input type='checkbox' name='kemampuan[]' value="<?= $dataKemampuan[$indexKemampuan]['kode_kemampuan'.$km] ?>~<?= $dataKemampuan[$indexKemampuan]['kemampuan'.$km] ?>">
        [<?= $dataKemampuan[2]['kode_kemampuan'.$km] ?>] <?= $dataKemampuan[2]['kemampuan'.$km] ?>
    </label> <br>
        <?php
        }
    }
    else if ($usia <= "12") {
        for($km = 1; $km <= 5; $km++){
        ?>
    <label>
        <input type='checkbox' name='kemampuan[]' value="<?= $dataKemampuan[$indexKemampuan]['kode_kemampuan'.$km] ?>~<?= $dataKemampuan[$indexKemampuan]['kemampuan'.$km] ?>">
        [<?= $dataKemampuan[3]['kode_kemampuan'.$km] ?>] <?= $dataKemampuan[3]['kemampuan'.$km] ?>
    </label> <br>
        <?php
        }
    }
    else if ($usia <= "18") {
        for($km = 1; $km <= 5; $km++){
        ?>
    <label>
        <input type='checkbox' name='kemampuan[]' value="<?= $dataKemampuan[$indexKemampuan]['kode_kemampuan'.$km] ?>~<?= $dataKemampuan[$indexKemampuan]['kemampuan'.$km] ?>">
        [<?= $dataKemampuan[4]['kode_kemampuan'.$km] ?>] <?= $dataKemampuan[4]['kemampuan'.$km] ?>
    </label> <br>
        <?php
        }
    }
    else if ($usia <= "24") {
        for($km = 1; $km <= 5; $km++){
        ?>
    <label>
        <input type='checkbox' name='kemampuan[]' value="<?= $dataKemampuan[$indexKemampuan]['kode_kemampuan'.$km] ?>~<?= $dataKemampuan[$indexKemampuan]['kemampuan'.$km] ?>">
        [<?= $dataKemampuan[5]['kode_kemampuan'.$km] ?>] <?= $dataKemampuan[5]['kemampuan'.$km] ?>
    </label> <br>
        <?php
        }
    }
    else if ($usia <= "36") {
        for($km = 1; $km <= 5; $km++){
        ?>
    <label>
        <input type='checkbox' name='kemampuan[]' value="<?= $dataKemampuan[$indexKemampuan]['kode_kemampuan'.$km] ?>~<?= $dataKemampuan[$indexKemampuan]['kemampuan'.$km] ?>">
        [<?= $dataKemampuan[6]['kode_kemampuan'.$km] ?>] <?= $dataKemampuan[6]['kemampuan'.$km] ?>
    </label> <br>
        <?php
        }
    }
    else if ($usia <= "48") {
        for($km = 1; $km <= 5; $km++){
        ?>
    <label>
        <input type='checkbox' name='kemampuan[]' value="<?= $dataKemampuan[$indexKemampuan]['kode_kemampuan'.$km] ?>~<?= $dataKemampuan[$indexKemampuan]['kemampuan'.$km] ?>">
        [<?= $dataKemampuan[7]['kode_kemampuan'.$km] ?>] <?= $dataKemampuan[7]['kemampuan'.$km] ?>
    </label> <br>
        <?php
        }
    }
    else if ($usia <= "60") {
        for($km = 1; $km <= 5; $km++){
        ?>
    <label>
        <input type='checkbox' name='kemampuan[]' value="<?= $dataKemampuan[$indexKemampuan]['kode_kemampuan'.$km] ?>~<?= $dataKemampuan[$indexKemampuan]['kemampuan'.$km] ?>">
        [<?= $dataKemampuan[8]['kode_kemampuan'.$km] ?>] <?= $dataKemampuan[8]['kemampuan'.$km] ?>
    </label> <br>
        <?php
        }
    }
    else if ($usia <= "72") {
        for($km = 1; $km <= 5; $km++){
        ?>
    <label>
        <input type='checkbox' name='kemampuan[]' value="<?= $dataKemampuan[$indexKemampuan]['kode_kemampuan'.$km] ?>~<?= $dataKemampuan[$indexKemampuan]['kemampuan'.$km] ?>">
        [<?= $dataKemampuan[9]['kode_kemampuan'.$km] ?>] <?= $dataKemampuan[9]['kemampuan'.$km] ?>
    </label> <br>
        <?php
        }
    }
    ?>
    <br>
    <div class="form-group mt-4 mb-0">
    <input type="submit" name="kirim_kemampuan" class="btn btn-primary" value="Cek Hasil Perkembangan">
    </div>
</form>
<hr>
    <?php
}
?>


              
        </div>
    </div>

          

            


    
    
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