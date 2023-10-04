<body onload="javascript:window.print()" style="margin auto; width: 100%;">
	<div style="margin-left: 10px; margin-right: 10px"></div>

<table style="width: 100%" cellpadding="0" cellspacing="0"> 
	<tr>
		<td align="center"><font size="7">POSYANDU</font>  </td>
	</tr>
	<tr>
		<td align="center"><font size="6">Anggrek Bulan</font></td>
	</tr>
</table><br>
<div style="border-bottom: 3px dotted gray"></div><br>
	
<font size="5"><center><u> Data Pertumbuhan</u></center></font>
<p>&nbsp;</p>
<?php foreach ($tbl_balita as $balita)?>
<font size="3">Nama Balita : <?php echo $balita->nm_balita ?></font><br>
<font size="3">Tanggal Lahir : <?php echo $balita->tgl_lahir ?></font><br>
<font size="3">Jenis Kelamin : <?php echo $balita->jenis_kelamin ?></font>

<table width="100%" cellpadding="0" cellspacing="0">
	<tr>
		<td align="center" style="border-left: 1px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-top: 1px solid #000; padding: 3px 5px; background-color: lightgray;">No</td>
		<td align="center" style="border-left: 1px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-top: 1px solid #000; padding: 3px 5px; background-color: lightgray;">Tanggal Cek Pertumbuhan</td>
		<td align="center" style="border-left: 1px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-top: 1px solid #000; padding: 3px 5px; background-color: lightgray;">Usia (Bulan)</td>
		<td align="center" style="border-left: 1px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-top: 1px solid #000; padding: 3px 5px; background-color: lightgray;">Berat Badan (Kg)</td>
		<td align="center" style="border-left: 1px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-top: 1px solid #000; padding: 3px 5px; background-color: lightgray;">Status Gizi</td>
		<td align="center" style="border-left: 1px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-top: 1px solid #000; padding: 3px 5px; background-color: lightgray;">Saran Gizi</td>
	</tr>

<?php $no = 1; foreach ($tbl_pertumbuhan as $pertumbuhan) { 
$trainingData = ([
        [
            "usia"      => 6,
            "berat"     => 15,
            "status"    => "Lebih"
        ],
        [
            "usia"      => 14,
            "berat"     => 10,
            "status"    => "Baik"
        ],
        [
            "usia"      => 24,
            "berat"     => 13,
            "status"    => "Baik"
        ],
        [
            "usia"      => 10,
            "berat"     => 7,
            "status"    => "Kurang"
        ],
        [
            "usia"      => 18,
            "berat"     => 6.5,
            "status"    => "Buruk"
        ],
        [
            "usia"      => 12,
            "berat"     => 10,
            "status"    => "Baik"
        ],
        [
            "usia"      => 5,
            "berat"     => 5.5,
            "status"    => "Baik"
        ],
        [
            "usia"      => 4,
            "berat"     => 6,
            "status"    => "Baik"
        ],
        [
            "usia"      => 16,
            "berat"     => 12,
            "status"    => "Baik"
        ],
        [
            "usia"      => 26,
            "berat"     => 17,
            "status"    => "Lebih"
        ],
        [
            "usia"      => 30,
            "berat"     => 16,
            "status"    => "Baik"
        ],
        [
            "usia"      => 0,
            "berat"     => 3.5,
            "status"    => "Baik"
        ],
        [
            "usia"      => 8,
            "berat"     => 6,
            "status"    => "Kurang"
        ],
        [
            "usia"      => 10,
            "berat"     => 6.5,
            "status"    => "Buruk"
        ],
        [
            "usia"      => 6,
            "berat"     => 10,
            "status"    => "Lebih"
        ],
        [
            "usia"      => 13,
            "berat"     => 15,
            "status"    => "Lebih"
        ],
        [
            "usia"      => 25,
            "berat"     => 9,
            "status"    => "Kurang"
        ],
        [
            "usia"      => 23,
            "berat"     => 7,
            "status"    => "Buruk"
        ],
        [
            "usia"      => 30,
            "berat"     => 6,
            "status"    => "Buruk"
        ],
        [
            "usia"      => 4,
            "berat"     => 4,
            "status"    => "Kurang"
        ],
        [
            "usia"      => 10,
            "berat"     => 8.5,
            "status"    => "Baik"
        ],
        [
            "usia"      => 6,
            "berat"     => 7,
            "status"    => "Baik"
        ],
        [
            "usia"      => 6,
            "berat"     => 5,
            "status"    => "Kurang"
        ],
        [
            "usia"      => 18,
            "berat"     => 10,
            "status"    => "Baik"
        ],
        [
            "usia"      => 14,
            "berat"     => 8,
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

	<tr>
		<td style="border-left: 1px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-top: 1px solid #000; padding: 3px 5px;"><?php echo $no++ ?></td>

		<td style="border-left: 1px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-top: 1px solid #000; padding: 3px 5px;"><?php echo $pertumbuhan->tgl_cek ?></td>

		<td style="border-left: 1px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-top: 1px solid #000; padding: 3px 5px;"><?php echo $pertumbuhan->usia ?> bulan</td>

		<td align="center" style="border-left: 1px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-top: 1px solid #000; padding: 3px 5px;"><?php echo $pertumbuhan->berat_badan ?> kg</td>

		<td style="border-left: 1px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-top: 1px solid #000; padding: 3px 5px;"><?= calculateMode($arrayHasilStatus) ?></td>

		<td style="border-left: 1px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-top: 1px solid #000; padding: 3px 5px;"><?php echo $saran ?></td>
	</tr>

<?php } ?>

	

</table>
</body>