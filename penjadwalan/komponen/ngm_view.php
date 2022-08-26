<?php 
require 'fungsi_ibadah.php';
$ngm = query("SELECT * FROM ngm WHERE id_ngm = $id");
$ngm_jmt = query("SELECT * FROM ngm_jmt");
$ngm_kel = query("SELECT * FROM ngm_kel");

foreach($ngm as $row) :
    $md = $row['md'];
    $keterangan = $row['keterangan'];
    $tanggal = $row['tanggal'];

    foreach($ngm_jmt as $jmt) {
        if($jmt['kd_jmt'] === $row['kd_ft']) {
            $ft = $jmt['nama_jmt'];
        }
        if($jmt['kd_jmt'] === $row['pambuka']) {
            $pbk = $jmt['nama_jmt'];
        }
        if($jmt['kd_jmt'] === $row['wl']) {
            $wl = $jmt['nama_jmt'];
        }
        if($jmt['kd_jmt'] === $row['musik']) {
            $musik = $jmt['nama_jmt'];
        }
        if($jmt['kd_jmt'] === $row['singer1']) {
            $s1 = $jmt['nama_jmt'];
        }
        if($jmt['kd_jmt'] === $row['singer2']) {
            $s2 = $jmt['nama_jmt'];
        }
        if($jmt['kd_jmt'] === $row['singer3']) {
            $s3 = $jmt['nama_jmt'];
        }
    }

    foreach($ngm_kel as $kel) {
        if($kel['kd_kel'] === $row['pnt1']) {
            $pnt1 = $kel['nama_kel'];
        }
        if($kel['kd_kel'] === $row['pnt2']) {
            $pnt2 = $kel['nama_kel'];
        }
        if($kel['kd_kel'] === $row['gerit']) {
            $gerit = $kel['nama_kel'];
        }
        if($kel['kd_kel'] === $row['giling']) {
            $giling = $kel['nama_kel'];
        }
    }
    
endforeach;

// Pengecekan variabel yang kemungkinan kosong
// yang lain ada di ngm_detail.php
if(!isset($ft)) {
    $ft = "-";
}
if(!isset($pbk)) {
    $pbk = "-";
}
if(!isset($wl)) {
    $wl = "-";
}
if(!isset($musik)) {
    $musik = "-";
}
if(!isset($wl)) {
    $wl = "-";
}

?>