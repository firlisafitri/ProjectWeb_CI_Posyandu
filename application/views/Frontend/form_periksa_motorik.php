<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Periksa Motorik</title>
</head>
<body>
<?php
$dataKemampuan = ([
    [
        "usia_awal"         => 0,
        "usia_akhir"        => 3,
        "kode_kemampuan1"   => "KM11",
        "kemampuan1"        => "Kemampuan 1",
        "kode_kemampuan2"   => "KM12",
        "kemampuan2"        => "Kemampuan 2",
        "kode_kemampuan3"   => "KM13",
        "kemampuan3"        => "Kemampuan 3",
        "kode_kemampuan4"   => "KM14",
        "kemampuan4"        => "Kemampuan 4",
        "kode_kemampuan5"   => "KM15",
        "kemampuan5"        => "Kemampuan 5",
    ],
    [
        "usia_awal"         => 4,
        "usia_akhir"        => 6,
        "kode_kemampuan1"   => "KM21",
        "kemampuan1"        => "Kemampuan 1",
        "kode_kemampuan2"   => "KM22",
        "kemampuan2"        => "Kemampuan 2",
        "kode_kemampuan3"   => "KM23",
        "kemampuan3"        => "Kemampuan 3",
        "kode_kemampuan4"   => "KM24",
        "kemampuan4"        => "Kemampuan 4",
        "kode_kemampuan5"   => "KM25",
        "kemampuan5"        => "Kemampuan 5",
    ],
    [
        "usia_awal"         => 7,
        "usia_akhir"        => 9,
        "kode_kemampuan1"   => "KM31",
        "kemampuan1"        => "Kemampuan 1",
        "kode_kemampuan2"   => "KM32",
        "kemampuan2"        => "Kemampuan 2",
        "kode_kemampuan3"   => "KM33",
        "kemampuan3"        => "Kemampuan 3",
        "kode_kemampuan4"   => "KM34",
        "kemampuan4"        => "Kemampuan 4",
        "kode_kemampuan5"   => "KM35",
        "kemampuan5"        => "Kemampuan 5",
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
    <b>Pilih Usia <br></b>
    <select name='usia'>
        <?php
        for($u = 0; $u <= $dataKemampuan[count($dataKemampuan)-1]['usia_akhir']; $u++){
            echo "<option value='{$u}'>{$u}</option>";
        }
        ?>
    </select>
    <button type="submit" name="kirim_usia">
        Kirim Usia
    </button>
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
<form method="post" action="">
    <b>Usia : <?= $usia ?> Bulan</b> <br>
    <input type='hidden' name='usia' value="<?= $usia ?>">
    <?php
    for($km = 1; $km <= 5; $km++){
        ?>
    <label>
        <input type='checkbox' name='kemampuan[]' value="<?= $dataKemampuan[$indexKemampuan]['kode_kemampuan'.$km] ?>~<?= $dataKemampuan[$indexKemampuan]['kemampuan'.$km] ?>">
        [<?= $dataKemampuan[1]['kode_kemampuan'.$km] ?>] <?= $dataKemampuan[1]['kemampuan'.$km] ?>
    </label> <br>
        <?php
    }
    ?>
    <br>
    <button type="submit" name="kirim_kemampuan">
        Kirim Kemampuan
    </button>
</form>
<hr>
    <?php
}
?>
<?php
if(isset($_POST['kirim_kemampuan'])){
    $usia = $_POST['usia'];
    if(!isset($_POST['kemampuan'])){
        $kemampuan = NULL;
        $jumlah_kemampuan = 0;
    }else{
        $kemampuan = $_POST['kemampuan'];
        $jumlah_kemampuan = count($kemampuan);
    }

    echo "Usia : <b>{$usia} Bulan</b><br>";
    echo "Kemampuan yang dipilih : <br>";
    echo "<ul style='margin:0;padding:0;'>";
    for($k = 0; $k <= $jumlah_kemampuan - 1; $k++){
        $explodeKemampuan = explode("~",$kemampuan[$k]);
        $kodeKemampuan = $explodeKemampuan[0];
        $namaKemampuan = $explodeKemampuan[1];

        echo"<li>- [{$kodeKemampuan}] {$namaKemampuan}</li>";
    }
    echo"</ul>";

    $jawabanKemampuan = $dataJawaban[$jumlah_kemampuan];

    echo "Jumlah Kemampuan : <b>{$jumlah_kemampuan} [{$jawabanKemampuan}]</b> <br>";

    if($jawabanKemampuan == "J02" || $jawabanKemampuan == "J01"){
        $kodeKesimpulan = "K01";
        $kodeSaran = "S01";
    }elseif($jawabanKemampuan == "J05" || $jawabanKemampuan == "J04" || $jawabanKemampuan == "J03"){
        $kodeKesimpulan = "K02";
        $kodeSaran = "S02";
    }elseif($jawabanKemampuan == "J06"){
        $kodeKesimpulan = "K02";
        $kodeSaran = "S03";
    }else{
        $kodeKesimpulan = NULL;
        $kodeSaran = NULL;
    }

    $indexKesimpulan = 0;
    foreach ($dataKesimpulan as $indexData => $data) {
        if ($kodeKesimpulan == $data['kode']) {
            $indexKesimpulan = $indexData;
            break;
        }
    }
    $indexSaran = 0;
    foreach ($dataSaran as $indexData => $data) {
        if ($kodeSaran == $data['kode']) {
            $indexSaran = $indexData;
            break;
        }
    }

    echo "Maka : <br>";
    if($kodeKesimpulan != NULL && $kodeSaran != NULL){
        echo "[".$dataKesimpulan[$indexKesimpulan]['kode']."] ".$dataKesimpulan[$indexKesimpulan]['keterangan']." <br>";
        echo "[".$dataSaran[$indexSaran]['kode']."] ".$dataSaran[$indexSaran]['keterangan']." <br>";
    }
}
?>
</body>
</html>