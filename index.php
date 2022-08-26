<?php 
require 'koneksi.php';
$ibadah = query("SELECT * FROM ibadah");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="penjadwalan, gereja, website gereja, gitj, gitj ngablak">
    <meta name="description" content="website gitj ngablak yang berisi tentang sistem penjawalan gereja dan pepathan dari gitj ngablak">
    <title>GITJ Ngablak - Gereja Injili di Tanah Jawa Induk Ngablak</title>

    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon-16x16.png">
    <link href="assets/css/mdb.min.css" rel="stylesheet">
    <link href="assets/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
  
    <style>
      #intro {
        margin-top: 58px;
      }
      * {
        font-family: 'poppins', sans-serif;
      }
      .desc {
        font-size : 13px;
      }
      @media (max-width: 992px) {
        #intro {
          margin-top: 45px;
        }
        p, .nav-item {
          font-size: 13px;

        }
        .logo {
          font-size: 15px
        }
      }
      @media (min-width: 350px) {

      }
    </style>
</head>
<body>

  <?php require 'header.php' ?>

  <div id="intro" class="p-5 text-center">
    <h1 class="mb-3 h2">Gereja Injili di Tanah Jawa</h1>
    <h1 class="mb-3 h2"><strong>INDUK NGABLAK</strong></h1>
    <p class="mb-3">Website penyedia kebutuhan penjadwalan & lainnya.</p>
    <a class="btn btn-sm btn-outline-dark btn-rounded m-2 text-capitalize" href="#!">Sejarah Gereja <i class="bi bi-search"></i></a>
    <a type="button" class="btn btn-sm btn-dark btn-rounded dropdown-toggle m-2 text-capitalize" data-mdb-toggle="dropdown" aria-expanded="false">
      Info Pepanthan
    </a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#!">GITJ Pepanthan Gerit</a></li>
      <li><a class="dropdown-item" href="#!">GITJ Pepanthan Giling</a></li>
      <li><a class="dropdown-item" href="#!">GITJ Pepanthan Jiwo</a></li>
    </ul>
  </div>

  <main class="my-5">
    <div class="container">

      <section>
        <h4 class="">Jadwal Ibadah</h4>
        <p class="ex">Pilih jadwal sesuai dengan kebutuhan</p>
        <div class="row">
        <?php foreach($ibadah as $row) : ?>
          <div class="col-lg-4 mb-4">
            <div class="card shadow-3 rounded-2">
              <div class="card-header rounded-2 py-2 fw-bold" style="<?= $row['warna']?>">
                <i class="bi bi-calendar me-2"></i><?= $row["nama_ibd"]?>
                <a
                tabindex="0"
                class="bi bi-info-circle-fill float-end text-dark"
                role="button"
                data-mdb-toggle="popover"
                data-mdb-trigger="focus"
                title="<?= $row["nama_ibd"]?>"
                data-mdb-content="<?= $row["info"]?>">
                </a>
              </div>
                <div class="card-body py-2">
                  <p class="card-title desc"><?= $row["deskripsi"]?></p>
                  <a href="<?= $row["link"]?>"><span class="btn btn-sm fw-bold shadow-0 text-capitalize" style="<?= $row['warna']?>">Detail <i class="bi bi-chevron-right"></i></span></a>
                </div>
            </div>
          </div>
        <?php endforeach; ?>
      </section>

    </div>
  </main>

<?php require 'footer.php' ?>
<script src="assets/js/mdb.min.js"></script> 
</body>
</html>