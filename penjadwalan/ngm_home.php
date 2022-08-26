<?php 
require 'komponen/fungsi_ibadah.php';
$ngm = query("SELECT * FROM ngm");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GITJ Ngablak - Ibadah Minggu Ngablak</title>

    <!-- Datatable -->
    <link href="../assets/datatable/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="../assets/datatable/css/responsive.dataTables.min.css" rel="stylesheet">

    <script src="../assets/datatable/js/jquery-3.5.1.js"></script>
    <script src="../assets/datatable/js/jquery.dataTables.min.js"></script>
    <script src="../assets/datatable/js/dataTables.responsive.min.js"></script>

    <script>
    $(document).ready(function() {
        var table = $('#tabel_ibd').DataTable( {
            lengthMenu: [
            [35, 20, 45, 60, -1],
            ['-- Tampilan Jumlah Data (35) --', 20, 45, 60, 'Semua'],
            ],
  
            order: [[0, 'desc']],
            bLengthChange : true,
            info : false,
            responsive: true
        } );

        var dataTable = $('#tabel_ibd').dataTable();
        $("#searchbox").keyup(function() {
            dataTable.fnFilter(this.value);
        });

        $(".dataTables_length select").addClass("mb-4 form-control form-control-sm");
            
    });
    </script>
    <!-- Datatable -->

    <link rel="icon" type="image/png" sizes="16x16" href="../assets/favicon-16x16.png">
    <link href="css/ngm.css" rel="stylesheet">
    <link href="../assets/css/mdb.min.css" rel="stylesheet">
    <link href="../assets/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">


</head>
<body>

<?php require 'komponen/header.php'; ?>

  <!-- Jumbotron -->
  <div id="intro" class="p-5 text-center">
    <h1 class="mb-3 h2">Gereja Injili di Tanah Jawa</h1>
    <h1 class="mb-3 h2"><strong>INDUK NGABLAK</strong></h1>
    <div class="container">
      <div class="mb-3">
        <p>
            <a
            tabindex="0"
            class="bi bi-info-circle-fill text-dark fst-italic petunjuk"
            role="button"
            data-mdb-toggle="popover"
            data-mdb-trigger="focus"
            title="Petunjuk"
            data-mdb-content="
            Ketikan keyword di form input seperti Pembawa Firman Tuhan, Tanggal dan MD. Klik tombol hijau dengan ikon cross 
            untuk melihat semua kolom, dan klik tombol detail untuk melihat jadwal ibadah beserta nama (bukan kode). Klik tombol
            Jemaat & keluarga untuk melihat data yang berisi kode dan nama jemaat & keluarga."> Petunjuk pemakaian
            </a>
        </p>
      </div>
    </div>
    <a href="../">
      <button class="btn btn-sm btn-dark btn-rounded text-capitalize">Kembali</button>
    </a>
  </div>
  <!-- Jumbotron -->
  
  <!--Main layout-->
  <main class="my-2">
  
    <div class="container">
        
      <!--Section: Content-->
      <section class="mb-6">
        <h4 class="mb-3">Jadwal Ibadah Minggu</h4>
        <div class="container">
          <div class="row">
            <input class="form-control form-control-sm col me-2" type="text" id="searchbox" placeholder="Cari Tanggal, FT & MD..">
            <a href="ngm_jmt_kel.php" class="btn btn-sm btn-info col shadow-0 text-capitalize">
              Jemaat & Keluarga
            </a>
          </div>
        </div>
        <p class="ex">untuk input tanggal 1-9 mohon disertakan 0 diawal. ex : 03 juli 2022</p>

            <table id="tabel_ibd" class="display nowrap" style="width:100%">
                <thead>
                    <tr>
                      <th>#</th>
                      <th>Tanggal</th>
                      <th>Hari</th>
                      <th>FT</th>
                      <th>Pbk</th>
                      <th>Musik</th>
                      <th>WL</th>
                      <th>Singer</th>
                      <th>Perpujian</th>
                      <th>PNT</th>
                      <th>MD</th>
                      <th>Gerit</th>
                      <th>Giling</th>
                      <th>Keterangan</th>
                      <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($ngm as $row) : ?>
                  <?php ngm_nama($row["kd_ft"]); ?>

                  <?php $tgl = tanggal(date($row['tanggal'])) ?>
                    <tr>
                        <td><?= $row['id_ngm']?></td>
                        <td><?= $tgl?></td>
                        <td><?= $row['hari']?></td>
                        <td><?= $ft?></td>
                        <td><?= $row['pambuka']?></td>
                        <td><?= $row['musik']?></td>
                        <td><?= $row['wl']?></td>

                        <!-- Untuk mengecek apakah singer kosong -->
                        <?php if($row['singer1'] != "") : ?>
                          <td><?= $row['singer1']?>, <?= $row['singer2']?>, <?= $row['singer3']?></td>
                        <?php else : ?>
                          <td></td>
                        <?php endif; ?>
                        <!-- Untuk mengecek apakah singer kosong -->

                        <td><?= $row['perpujian']?></td>
                        <td><?= $row['pnt1']?> & <?= $row['pnt2']?></td>
                        <td><?= $row['md']?></td>
                        <td><?= $row['gerit']?></td>
                        <td><?= $row['giling']?></td>
                        <td><?= $row['keterangan']?></td>
                        <td><a href="ngm_detail.php?id=<?= $row["id_ngm"]?>"><span class="badge rounded-pill badge-primary">Detail</span></a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
      </section>
      <!--Section: Content-->
    </div>

  </main>

<script src="../assets/js/mdb.min.js"></script>

</body>
</html>