<?php 
session_start();
if(isset($_SESSION['login'])) :

require 'fungsi_admin.php';
$pm = query("SELECT * FROM pm");

if(isset($_POST["tambah"])) {
  if (tambah_pm($_POST) > 0){
      echo "<script>
              alert('Berhasil menambah data!');
              document.location.href = 'pm_ibd.php';
          </script>";
  } else {
      echo "<script>
              alert('Gagal menambah data!');
              document.location.href = 'pm_ibd.php';
          </script>";
  }
}

if(isset($_POST["ubah"])) {
  if (ubah_pm($_POST) > 0){
      echo "
          <script>
              alert('Berhasil merubah data!');
              document.location.href = 'pm_ibd.php';
          </script>";
  } else {
      echo "
          <script>
              alert('Gagal merubah data!');
              document.location.href = 'pm_ibd.php';
          </script>";
  }
}

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  if(hapus_pm($id) > 0) {
      echo "<script>
              alert('Berhasil menghapus data!');
              document.location.href = 'pm_ibd.php';
          </script>";
  } else {
      echo "<script>
              alert('Gagal menghapus data!');
              document.location.href = 'pm_ibd.php';
          </script>";
  }
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Dashboard Admin</title>

    <!-- Datatable -->
    <link href="assets/datatable/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="assets/datatable/css/responsive.dataTables.min.css" rel="stylesheet">
    <link href="assets/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

    <script src="assets/datatable/js/jquery-3.5.1.js"></script>
    <script src="assets/datatable/js/jquery.dataTables.min.js"></script>
    <script src="assets/datatable/js/dataTables.responsive.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon-16x16.png">
  
    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      * {font-family: 'Poppins', sans-serif;}

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <!-- Custom styles for this template -->
    <link href="assets/dist/css/dashboard.css" rel="stylesheet">
  </head>
  <body>
  
  <div class="container-fluid">
    <div class="row">
      <?php require 'komponen/header.php';?>
      <?php require 'komponen/navbar.php';?>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h4 class="h4">Minggu - Ngablak & Pepanthan</h4>
          <div class="btn-toolbar mb-2 mb-md-0">
            <button type="button" class="btn btn-sm btn-success"data-bs-toggle="modal" data-bs-target="#tambahdata">
              <i class="bi bi-plus"></i>
              Tambah data
            </button>
          </div>
        </div>

        <h2>Data Ibadah</h2>
        <nav aria-label="breadcrumb" class="mb-4">
          <ol class="breadcrumb fw-bold">
            <li class="breadcrumb-item">Minggu - Ngablak & Pepanthan</li>
            <li class="breadcrumb-item active" aria-current="page">Data Ibadah</li>
          </ol>
        </nav>

        <table id="tabel_ibd" class="display nowrap" style="width:100%">
          <thead>
              <tr>
                <th>Id</th>
                <th>Tanggal</th>
                <th>Hari</th>
                <th>Ngablak</th>
                <th>Jiwo</th>
                <th>Gerit</th>
                <th>Giling</th>
                <th>Materi</th>
                <th>Keterangan</th>
                <th>Aksi</th>
              </tr>
          </thead>
          <tbody>
          <?php foreach($pm as $row) : ?>
            <?php $tgl = tanggal(date($row['tanggal'])) ?>
              <tr>
                  <td><?= $row['id_pm']?></td>
                  <td><?= $tgl?></td>
                  <td><?= $row['hari']?></td>
                  <td><?= $row["ngablak"]?></td>
                  <td><?= $row["jiwo"]?></td>
                  <td><?= $row["gerit"]?></td>
                  <td><?= $row["giling"]?></td>
                  <td><?= $row['materi']?></td>
                  <td><?= $row['keterangan']?></td>
                  <td>
                    <a href="" type="button" class="btn btn-sm btn-primary"  data-bs-toggle="modal" data-bs-target="#ubahdata" onclick="dataId('<?= $row['id_pm'];?>')">Ubah</a>
                    <a href="?id=<?= $row["id_pm"]?>" type="button" class="btn btn-sm btn-secondary" onclick="return confirm('Konfirmasi penghapusan data');">Hapus</a>
                  </td>
              </tr>
          <?php endforeach; ?>
          </tbody>
        </table>

      </main>
    </div>
  </div>

  <!-- ====== MODAL DATA ====== -->
  <!-- Modal tambah -->
  <div class="modal fade" id="tambahdata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah data</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="" method="post">

            <div class="row mb-3">
              <div class="col">
                <label for="tanggal" class="form-label">Tanggal Ibadah</label>
                <input type="date" class="form-control" id="tanggal" placeholder="Tanggal ibadah" name="tanggal">
              </div>
              <div class="col">
                <label for="hari" class="form-label">Hari</label>
                <input type="text" class="form-control" id="hari" placeholder="Hari ibadah" name="hari">
              </div>
            </div>

            <div class="row mb-3">
              <div class="col">
                <label for="ngablak" class="form-label">Ngablak</label>
                <input type="text" class="form-control" id="ngablak" placeholder="Kode pelayan" name="ngablak">
              </div>
              <div class="col">
                <label for="jiwo" class="form-label">Jiwo</label>
                <input type="text" class="form-control" id="jiwo" placeholder="Kode pelayan" name="jiwo">
              </div>
              <div class="col">
                <label for="gerit" class="form-label">Gerit</label>
                <input type="text" class="form-control" id="gerit" placeholder="Kode pelayan" name="gerit">
              </div>
              <div class="col">
                <label for="giling" class="form-label">Giling</label>
                <input type="text" class="form-control" id="giling" placeholder="Kode pelayan" name="giling">
              </div>
            </div>

            <div class="mb-3">
              <label for="materi" class="form-label">Materi</label>
              <input type="text" class="form-control" id="materi" placeholder="Materi" name="materi">
            </div>

            <div class="mb-5">
              <label for="keterangan" class="form-label">Keterangan</label>
              <input type="text" class="form-control" id="keterangan" placeholder="keterangan" name="keterangan">
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" name="tambah">Save</button>
            </div>
            
          </form>
        </div>

      </div>
    </div>
  </div>

  <!-- Modal ubah -->
  <div class="modal fade" id="ubahdata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ubah data</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="data_id">

        </div>
      </div>
    </div>
  </div>

<script type="text/javascript">
  function dataId(a) {
      $.ajax({
          type: 'post',
          url: 'pm_ibd_ubah.php',
          data: {id:a},
          success: function (response) {
              $('#data_id').html(response);
          }
      });
  }

  $(document).ready(function() {
          var table = $('#tabel_ibd').DataTable( {
              order: [[0, 'desc']],
              responsive: true
          } );
  
      });
</script>
<script src="assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php 
else :
  header("Location: ../");
endif; ?>