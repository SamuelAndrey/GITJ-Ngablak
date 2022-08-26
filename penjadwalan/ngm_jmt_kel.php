<?php 
require 'komponen/fungsi_ibadah.php';
$jmt = query("SELECT * FROM ngm_jmt");
$kel = query("SELECT * FROM ngm_kel");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GITJ Ngablak - Ibadah Minggu</title>

    <!-- Datatable -->
    <link href="../assets/datatable/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="../assets/datatable/css/responsive.dataTables.min.css" rel="stylesheet">

    <script src="../assets/datatable/js/jquery-3.5.1.js"></script>
    <script src="../assets/datatable/js/jquery.dataTables.min.js"></script>
    <script src="../assets/datatable/js/dataTables.responsive.min.js"></script>

    <script>
    $(document).ready(function () {
        $('table.display').DataTable({
            lengthMenu: [
            [10, 30, 45, 60, -1],
            ['-- Tampilan Jumlah Data (10) --', 30, 45, 60, 'Semua'],
            ],
            bLengthChange : true,
            info : true,
            responsive: true,
            "pagingType": "simple"
        });

        var tabel_jemaat = $('#jmt').dataTable();
        $("#cari_jmt").keyup(function() {
            tabel_jemaat.fnFilter(this.value);
        });

        var tabel_kel = $('#kel').dataTable();
        $("#cari_kel").keyup(function() {
            tabel_kel.fnFilter(this.value);
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
    <style>
      
    @media (max-width: 992px) {
        table tr {font-size : 13px;}
    }
    </style>
</head>
<body>

<?php require 'komponen/header.php'; ?>

  <!-- Jumbotron -->
  <div id="intro" class="p-5 text-center">
    <div class="container">
      <div class="mb-3">
        <p>
            <a
            tabindex="0"
            class="bi bi-info-circle-fill text-dark fst-italic"
            role="button"
            data-mdb-toggle="popover"
            data-mdb-trigger="focus"
            title="Data jemaat & keluarga"
            data-mdb-content="
            Dihalaman ini terdapat dua tabel yaitu tabel yaitu tabel data jemaat & tabel data keluarga yang terdapat dibawah
            tabel data jemaat. Disediakan pencarian di masing-masing tabel untuk mencari dat yang diinginkan."> Petunjuk pemakaian
            </a>
        </p>
      </div>
    </div>
    <a href="ngm_home.php">
      <button class="btn btn-sm btn-dark btn-rounded text-capitalize">Kembali</button>
    </a>
  </div>
  <!-- Jumbotron -->
  
  <!--Main layout-->
  <main class="my-2">
  
    <div class="container">
        
      <!--Section: Content-->
      <section class="mb-6">
        <h4 class="">Data Jemaat</h4>
        <p>Berikut adalah data jemaat :</p>
        <input class="form-control form-control-sm mb-3" type="text" id="cari_jmt" placeholder="Cari nama jemaat">
            <table id="jmt" class="display nowrap" style="width:100%">
                <thead>
                    <tr>
                      <th>#</th>
                      <th>Kode</th>
                      <th>Nama</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($jmt as $row) : ?>
                    <tr>
                        <td><?= $row['id_jmt']?></td>
                        <td><?= $row['kd_jmt']?></td>
                        <td><?= $row['nama_jmt']?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            <hr>
            <h4 class="mt-5">Data Keluarga</h4>
            <p>Berikut adalah data keluarga :</p>
            <input class="form-control form-control-sm mb-3" type="text" id="cari_kel" placeholder="Cari nama keluarga">
            <table id="kel" class="display nowrap" style="width:100%">
                <thead>
                    <tr>
                      <th>Kode</th>
                      <th>Nama</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($kel as $row) : ?>
                    <tr>
                        <td><?= $row['kd_kel']?></td>
                        <td><?= $row['nama_kel']?></td>
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