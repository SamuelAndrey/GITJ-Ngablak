<?php 
require '../koneksi.php';

function caringm($keyword) {
    $query = "SELECT * FROM ngm NATURAL JOIN ngm_jmt
                WHERE tanggal LIKE '%$keyword%' OR nama_jmt LIKE '%$keyword%' ORDER BY tanggal DESC";
    return query($query);
}

// Konversi tanggal
function tanggal($tanggal) {

    switch (date('m', strtotime($tanggal))) {
        case '01':
            $bulan = 'Jan';
            break;
        case '02':
            $bulan = 'Feb';
            break;
        case '03':
            $bulan = 'Maret';
            break;
        case '04':
            $bulan = 'April';
            break;
        case '05':
            $bulan = 'Mei';
            break;
        case '06':
            $bulan = 'Juni';
            break;
        case '07':
            $bulan = 'Juli';
            break;
        case '08':
            $bulan = 'Agu';
            break;
        case '09':
            $bulan = 'Sept';
            break;
        case '10':
            $bulan = 'Okt';
            break;
        case '11':
            $bulan = 'Nov';
            break;
        case '12':
            $bulan = 'Des';
            break;
        default:
            $bulan = 'Tidak diketahui';
            break;
    }

    return date('d', strtotime($tanggal)). ' '. $bulan. ' '. date('Y', strtotime($tanggal));
}

// Natural join pm
function pm_nama($ngablak_kd, $jiwo_kd, $gerit_kd, $giling_kd) {

    $jmt = query("SELECT * FROM ngm_jmt");
    // Pengecekan Natural Join
    foreach($jmt as $row) :
        if($row["kd_jmt"] === $ngablak_kd) {
            $ngablak_n = $row["nama_jmt"];
        } 
        if($row["kd_jmt"] === $jiwo_kd) {
            $jiwo_n = $row["nama_jmt"];
        } 
        if($row["kd_jmt"] === $gerit_kd) {
            $gerit_n = $row["nama_jmt"];
        }
        if($row["kd_jmt"] === $giling_kd) {
            $giling_n = $row["nama_jmt"];
        }
    endforeach;

    // Pengecekan Isi variabel Firman Tuhan
    // Ngablak
    if(isset($ngablak_n)) {
        global $ngablak;
        $ngablak = "$ngablak_n ($ngablak_kd)";
    } else {
        global $ngablak;
        $ngablak = "$ngablak_kd - No Data";
    }

    // Jiwo
    if(isset($jiwo_n)) {
        global $jiwo;
        $jiwo = "$jiwo_n ($jiwo_kd)";
    } else {
        global $jiwo;
        $jiwo = "$jiwo_kd - No Data";
    }

    // Gerit
    if(isset($gerit_n)) {
        global $gerit;
        $gerit = "$gerit_n ($gerit_kd)";
    } else {
        global $gerit;
        $gerit = "$gerit_kd - No Data";
    }

    // Giling
    if(isset($giling_n)) {
        global $giling;
        $giling = "$giling_n ($giling_kd)";
    } else {
        global $giling;
        $giling = "$giling_kd - No Data";
    }
}

// Natural join ngm
function ngm_nama($firman) {

    $jmt = query("SELECT * FROM ngm_jmt");

    foreach($jmt as $row) :
        if($row["kd_jmt"] === $firman) {
            $ft_n = $row["nama_jmt"];
        }
    endforeach;

    // Pengecekan Variabel
    if(isset($ft_n)) {
        global $ft;
        $ft = $ft_n;
    } else {
        global $ft;
        $ft = "$firman - No data";
    }
}


?>