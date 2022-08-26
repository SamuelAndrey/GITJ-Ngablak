<?php 
require 'komponen/fungsi_ibadah.php';
$jmt = query("SELECT * FROM ngm_jmt");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GITJ Ngablak - Ibadah Minggu Ngablak & Pepanthan</title>

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
            [20, 45, 60, -1],
            ['-- Tampilan Jumlah Data --', 45, 60, 'Semua'],
            ],
            bLengthChange : true,
            info : false,
            responsive: true,
            "pagingType": "simple"
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
    <div class="container">
      <div class="mb-3">
        <p>
            <a
            tabindex="0"
            class="bi bi-info-circle-fill text-dark fst-italic"
            role="button"
            data-mdb-toggle="popover"
            data-mdb-trigger="focus"
            title="Data jemaat"
            data-mdb-content="
            Di halaman ini berisi data dari jemaat. Disediakan juga fitur pencarian nama jemaat."> Petunjuk pemakaian
            </a>
        </p>
      </div>
    </div>
    <a href="pm_home.php">
      <button class="btn btn-sm btn-dark btn-rounded text-capitalize">Kembali</button>
    </a>
  </div>
  <!-- Jumbotron -->
 
  <!--Main Navigation-->
  
  <!--Main layout-->
  <main class="my-2">
  
    <div class="container">
        
      <!--Section: Content-->
      <section class="mb-6">
        <h4>Data Jemaat</h4>
        <p>Berikut adalah data jemaat :</p>
          <input class="form-control form-control-sm mb-3" type="text" id="searchbox" placeholder="Cari nama jemaat">
          <table id="tabel_ibd" class="display nowrap" style="width:100%">
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
      </section>
      <!--Section: Content-->
    </div>

  </main>
  <!--Main layout-->

<script src="../assets/js/mdb.min.js"></script>
</body>
</html>