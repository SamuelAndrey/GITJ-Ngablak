<?php 
session_start();
if(isset($_SESSION['login'])) :

require 'fungsi_admin.php';
$sql = query("SELECT * FROM ngm_jmt");

if(isset($_POST["tambah"])) {
    if (tambah_ngm_jmt($_POST) > 0){
        echo "<script>
                alert('Berhasil menambah data!');
                document.location.href = 'ngm_jmt.php';
            </script>";
    } else {
        echo "<script>
                alert('Gagal menambah data!');
                document.location.href = 'ngm_jmt.php';
            </script>";
    }
}

if(isset($_POST["ubah"])) {
    if (ubah_ngm_jmt($_POST) > 0){
        echo "
            <script>
                alert('Berhasil merubah data!');
                document.location.href = 'ngm_jmt.php';
            </script>";
    } else {
        echo "
            <script>
                alert('Gagal merubah data!');
                document.location.href = 'ngm_jmt.php';
            </script>";
    }
}

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    if(hapus_ngm_jmt($id) > 0) {
        echo "<script>
                alert('Berhasil menghapus data!');
                document.location.href = 'ngm_jmt.php';
            </script>";
    } else {
        echo "<script>
                alert('Gagal menghapus data!');
                document.location.href = 'ngm_jmt.php';
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
          <h4 class="h4">[Minggu - Ngablak] dan [Minggu - Ngablak & Pepanthan]</h4>
          <div class="btn-toolbar mb-2 mb-md-0">
            <button type="button" class="btn btn-sm btn-success"data-bs-toggle="modal" data-bs-target="#tambahdata">
              <i class="bi bi-plus"></i>
              Tambah data
            </button>
          </div>
        </div>

        <h2>Data Jemaat</h2>
        <nav aria-label="breadcrumb" class="mb-4">
          <ol class="breadcrumb fw-bold">
            <li class="breadcrumb-item">[Minggu - Ngablak] dan [Minggu - Ngablak & Pepanthan]</li>
            <li class="breadcrumb-item active" aria-current="page">Data Jemaat</li>
          </ol>
        </nav>
        <div class="alert alert-danger" role="alert">
          Data ini milik ibadah pada [Minggu - Ngablak] dan [Minggu - Ngablak & Pepanthan] (gabung). 
          <strong class="fw-bold">Jadi apapun proses modifikasi atau hapus akan berpengaruh ke dua data ibadah tersebut.</strong>
        </div>

        <table id="tabel_ibd" class="display nowrap" style="width:100%">
          <thead>
              <tr>
                <th>Nomor</th>
                <th>Kode Jemaat</th>
                <th>Nama jemaat</th>
                <th>Aksi</th>
              </tr>
          </thead>
          <tbody>
          <?php foreach($sql as $row) : ?>
              <tr>
                <td><?= $row['id_jmt']?></td>
                <td><?= $row['kd_jmt']?></td>
                <td><?= $row["nama_jmt"]?></td>
                <td>
                  <a href="" type="button" class="btn btn-sm btn-primary"  data-bs-toggle="modal" data-bs-target="#ubahdata" onclick="dataId('<?= $row['id_jmt'];?>')">Ubah</a>
                  <a href="?id=<?= $row["id_jmt"]?>" type="button" class="btn btn-sm btn-secondary" onclick="return confirm('Konfirmasi penghapusan data');">Hapus</a>
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

            <div class="mb-3">
              <label for="kd_jmt" class="form-label">Kode Jemaat</label>
              <input type="text" class="form-control" id="kd_jmt" placeholder="Kode Jemaat" name="kd_jmt">
            </div>

            <div class="mb-5">
              <label for="nama_jmt" class="form-label">Nama Jemaat</label>
              <input type="text" class="form-control" id="nama_jmt" placeholder="Nama Jemaat" name="nama_jmt">
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
          url: 'ngm_jmt_ubah.php',
          data: {id:a},
          success: function (response) {
              $('#data_id').html(response);
          }
      });
  }

  $(document).ready(function() {
          var table = $('#tabel_ibd').DataTable( {
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