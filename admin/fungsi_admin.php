<?php 
require '../koneksi.php';

function tanggal($tanggal) {

    switch (date('m', strtotime($tanggal))) {
        case '01':
            $bulan = 'Januari';
            break;
        case '02':
            $bulan = 'Februari';
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
            $bulan = 'Agustus';
            break;
        case '09':
            $bulan = 'September';
            break;
        case '10':
            $bulan = 'Oktober';
            break;
        case '11':
            $bulan = 'November';
            break;
        case '12':
            $bulan = 'Desember';
            break;
        
        default:
            $bulan = 'Tidak diketahui';
            break;
    }

    return date('d', strtotime($tanggal)). ' '. $bulan. ' '. date('Y', strtotime($tanggal));
}

// =============================================================
// FUNGSI PM ==============
function tambah_pm($data) {
    global $conn;
    $tanggal = htmlspecialchars($data["tanggal"]);
    $hari = htmlspecialchars($data["hari"]);
    $ngablak = htmlspecialchars($data["ngablak"]);
    $jiwo = htmlspecialchars($data["jiwo"]);
    $gerit = htmlspecialchars($data["gerit"]);
    $giling = htmlspecialchars($data["giling"]);
    $materi = htmlspecialchars($data["materi"]);
    $keterangan = htmlspecialchars($data["keterangan"]);

    $data = query("SELECT if(max(id_pm)is null,1,max(id_pm)+1) as maks_id  FROM pm");
    foreach ($data as $rec){
      $id_pm = $rec["maks_id"];
    }

    $query = "INSERT INTO pm VALUES 
    ('$id_pm', '$hari', '$tanggal', '$ngablak', '$jiwo','$gerit', '$giling', '$materi', '$keterangan')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus_pm($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM pm WHERE id_pm = $id");
    return mysqli_affected_rows($conn);
}

function ubah_pm($data) {
    global $conn;
    $id = $data['id'];
    $tanggal = htmlspecialchars($data["tanggal"]);
    $hari = htmlspecialchars($data["hari"]);
    $ngablak = htmlspecialchars($data["ngablak"]);
    $jiwo = htmlspecialchars($data["jiwo"]);
    $gerit = htmlspecialchars($data["gerit"]);
    $giling = htmlspecialchars($data["giling"]);
    $materi = htmlspecialchars($data["materi"]);
    $keterangan = htmlspecialchars($data["keterangan"]);

    $query = "UPDATE pm SET
    hari = '$hari',
    tanggal = '$tanggal',
    ngablak = '$ngablak',
    jiwo = '$jiwo',
    gerit = '$gerit',
    giling = '$giling',
    materi = '$materi',
    keterangan = '$keterangan'
    WHERE id_pm = $id;";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// =============================================================
// FUNGSI NGM ==============
function tambah_ngm($data) {
    global $conn;
    $hari = htmlspecialchars($data["hari"]);
    $tanggal = htmlspecialchars($data["tanggal"]);
    $kd_ft = htmlspecialchars($data["kd_ft"]);
    $pambuka = htmlspecialchars($data["pambuka"]);
    $musik = htmlspecialchars($data["musik"]);
    $wl = htmlspecialchars($data["wl"]);
    $singer1 = htmlspecialchars($data["singer1"]);
    $singer2 = htmlspecialchars($data["singer2"]);
    $singer3 = htmlspecialchars($data["singer3"]);
    $perpujian = htmlspecialchars($data["perpujian"]);
    $pnt1 = htmlspecialchars($data["pnt1"]);
    $pnt2 = htmlspecialchars($data["pnt2"]);
    $md = htmlspecialchars($data["md"]);
    $gerit = htmlspecialchars($data["gerit"]);
    $giling = htmlspecialchars($data["giling"]);
    $keterangan = htmlspecialchars($data["keterangan"]);

    $data = query("SELECT if(max(id_ngm)is null,1,max(id_ngm)+1) as maks_id  FROM ngm");
    foreach ($data as $rec){
      $id_ngm = $rec["maks_id"];
    }

    $query = "INSERT INTO ngm VALUES 
    ('$id_ngm', '$hari', '$tanggal','$kd_ft','$pambuka','$musik','$wl',
     '$singer1','$singer2','$singer3','$perpujian','$pnt1','$pnt2','$md',
     '$gerit','$giling', '$keterangan')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function ubah_ngm($data) {
    global $conn;
    $id = $data['id'];
    $hari = htmlspecialchars($data["hari"]);
    $tanggal = htmlspecialchars($data["tanggal"]);
    $kd_ft = htmlspecialchars($data["kd_ft"]);
    $pambuka = htmlspecialchars($data["pambuka"]);
    $musik = htmlspecialchars($data["musik"]);
    $wl = htmlspecialchars($data["wl"]);
    $singer1 = htmlspecialchars($data["singer1"]);
    $singer2 = htmlspecialchars($data["singer2"]);
    $singer3 = htmlspecialchars($data["singer3"]);
    $perpujian = htmlspecialchars($data["perpujian"]);
    $pnt1 = htmlspecialchars($data["pnt1"]);
    $pnt2 = htmlspecialchars($data["pnt2"]);
    $md = htmlspecialchars($data["md"]);
    $gerit = htmlspecialchars($data["gerit"]);
    $giling = htmlspecialchars($data["giling"]);
    $keterangan = htmlspecialchars($data["keterangan"]);

    $query = "UPDATE ngm SET
    hari = '$hari',
    tanggal = '$tanggal',
    kd_ft = '$kd_ft',
    pambuka = '$pambuka',
    musik = '$musik',
    wl = '$wl',
    singer1 = '$singer1',
    singer2 = '$singer2',
    singer3 = '$singer3',
    perpujian = '$perpujian',
    pnt1 = '$pnt1',
    pnt2 = '$pnt2',
    md = '$md',
    gerit = '$gerit',
    giling = '$giling',
    keterangan = '$keterangan'
    WHERE id_ngm = $id;";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus_ngm($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM ngm WHERE id_ngm = $id");
    return mysqli_affected_rows($conn);
}

// =============================================================
// FUNGSI NGM KEL ==============
function tambah_ngm_kel($data) {
    global $conn;
    $kd_kel = htmlspecialchars($data["kd_kel"]);
    $nama_kel = htmlspecialchars($data["nama_kel"]);

    $query = "INSERT INTO ngm_kel VALUES 
    ('$kd_kel', '$nama_kel')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function ubah_ngm_kel($data) {
    global $conn;
    $id = $data['id'];
    $kd_kel = htmlspecialchars($data["kd_kel"]);
    $nama_kel = htmlspecialchars($data["nama_kel"]);

    $query = "UPDATE ngm_kel SET
    kd_kel = '$kd_kel',
    nama_kel = '$nama_kel'
    WHERE kd_kel = $id;";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus_ngm_kel($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM ngm_kel WHERE kd_kel = $id");
    return mysqli_affected_rows($conn);
}

// =============================================================
// FUNGSI NGM JMT ==============
function tambah_ngm_jmt($data) {
    global $conn;
    $kd_jmt = htmlspecialchars($data["kd_jmt"]);
    $nama_jmt = htmlspecialchars($data["nama_jmt"]);

    $data = query("SELECT if(max(id_jmt)is null,1,max(id_jmt)+1) as maks_id  FROM ngm_jmt");
    foreach ($data as $rec){
      $id_jmt=$rec["maks_id"];
    }

    $query = "INSERT INTO ngm_jmt VALUES 
    ('$id_jmt','$kd_jmt', '$nama_jmt')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function ubah_ngm_jmt($data) {
    global $conn;
    $id = $data['id'];
    $kd_jmt = htmlspecialchars($data["kd_jmt"]);
    $nama_jmt = htmlspecialchars($data["nama_jmt"]);

    $query = "UPDATE ngm_jmt SET
    kd_jmt = '$kd_jmt',
    nama_jmt = '$nama_jmt'
    WHERE id_jmt = $id;";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus_ngm_jmt($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM ngm_jmt WHERE id_jmt = $id");
    return mysqli_affected_rows($conn);
}

// =============================================================
// FUNGSI ADMIN ==============
function tambah_admin($data) {
    global $conn;
    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);
    $role = htmlspecialchars($data["role"]);

    $data = query("SELECT if(max(id_admin)is null,1,max(id_admin)+1) as maks_id  FROM admin");
    foreach ($data as $rec){
      $id_admin=$rec["maks_id"];
    }

    $query = "INSERT INTO admin VALUES 
    ('$id_admin','$username', '$password','$role')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function ubah_admin($data) {
    global $conn;
    $id = $data['id'];
    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);
    $role = htmlspecialchars($data["role"]);

    $query = "UPDATE admin SET
    username = '$username',
    password = '$password',
    role = '$role'
    WHERE id_admin = $id;";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus_admin($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM admin WHERE id_admin = $id");
    return mysqli_affected_rows($conn);
}
?>