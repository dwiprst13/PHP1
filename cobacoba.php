<?php 
$nama = array("Ahmad", "Salma", "Susi", "Budi", "Susan", "Rifa", "Dwi", "Jihan");
$umur = array(23, 21, 22, 21, 18, 19, 21, 20);
$jenis_kelamin = array("Laki-laki", "Perempuan" ,"Perempuan", "Laki-laki", "Perempuan", "Perempuan", "Laki-laki", "Perempuan");

echo "Perulangan\n";
echo "\n";

foreach($nama as $key => $value) {
    echo $value . " sekarang berumur " . $umur[$key] . " tahun, dia berjenis kelamin " . $jenis_kelamin[$key]. "\n";
} 

echo "\n";
echo "Percabangan\n";
echo "\n";

foreach($nama as $key => $value) {
    if ($jenis_kelamin[$key] == "Laki-laki") {
        echo $value . " akan menjadi kepala keluarga. \n";
    } elseif ($jenis_kelamin[$key] == "Perempuan") {
        echo $value . " akan menjadi ibu rumah tangga. \n";
    }
} 

echo "\n";
$laki = array();
$wanita = array();
for ($i = 0; $i < count($nama); $i++) {
    if ($jenis_kelamin[$i] == "Laki-laki") {
        array_push($laki, $nama[$i]);
    } else {
        array_push($wanita, $nama[$i]);
    }
}

echo "Jodoh\n";
echo "\n";
foreach ($laki as $key => $val_laki) {
    $jodoh = array();
    foreach ($wanita as $key => $val_wanita) {
        $jodoh[] = $val_wanita;
    }
    
    echo $val_laki . " akan berjodoh dengan ";
    for ($i = 0; $i < count($jodoh); $i++) {
        if ($i == count($jodoh) - 1) {
            echo "atau " . $jodoh[$i] . "\n";
        } elseif ($i == count($jodoh) - 2) {
            echo $jodoh[$i] . " ";
        } else {
            echo $jodoh[$i] . ", ";
        }
    }
}
foreach ($wanita as $key => $val_wanita) {
    $jodoh = array();
    foreach ($laki as $key => $val_laki) {
        $jodoh[] = $val_laki;
    }
    
    echo $val_wanita . " akan berjodoh dengan ";
    for ($i = 0; $i < count($jodoh); $i++) {
        if ($i == count($jodoh) - 1) {
            echo "atau " . $jodoh[$i] . "\n";
        } elseif ($i == count($jodoh) - 2) {
            echo $jodoh[$i] . " ";
        } else {
            echo $jodoh[$i] . ", ";
        }
    }
}
?>
