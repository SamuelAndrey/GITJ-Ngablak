<?php 
if(isset($_GET["id"])) {
  $id = $_GET["id"];
  require 'komponen/ngm_view.php';
  $tgl = tanggal(date($tanggal));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GITJ Ngablak - Ibadah Minggu</title>

    <link href="css/ngm.css" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/favicon-16x16.png">
    <link href="../assets/css/mdb.min.css" rel="stylesheet">
    <link href="../assets/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

    <style>
    @media (max-width: 992px) {
      table tr, span {
        font-size : 13px;
      }
    }
    </style>


</head>
<body  style="background-color: #fafafa;">
  <!--Main layout-->
<section>
  <div class="container py-3">
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5">

            <a href="ngm_home.php">
              <button class="btn btn-sm btn-dark btn-rounded"><i class="bi bi-arrow-left"></i> kembali</button>
            </a>

            <h4 class="mb-5 mt-4">Tanggal <?= $tgl ?></h4>

            <div class="mb-4">
              <p class="fw-bold mb-1">Firman Tuhan</p>
              <span><?= $ft?></span>
              <hr class="mt-1">
            </div>

            <div class="mb-4">
              <p class="fw-bold mb-1">Pambuka</p>
              <span><?= $pbk?></span>
              <hr class="mt-1">
            </div>

            <div class="mb-4">
              <p class="fw-bold mb-1">Musik</p>
              <span><?= $musik?></span>
              <hr class="mt-1">
            </div>

            <div class="mb-4">
              <p class="fw-bold mb-1">Worship Leader</p>
              <span><?= $wl?></span>
              <hr class="mt-1">
            </div>

            <div class="mb-4">
              <p class="fw-bold  mb-1">Singer</p> 
                <?php if(isset($s1)) : ?>
                  <span><?= "$s1 , $s2 , $s3"?></span>
                <?php else : ?>
                  <span>-</span>
                <?php endif; ?>
              <hr class="mt-1">
            </div>

            <div class="mb-4">
              <p class="fw-bold mb-1">MD</p>
              <span><?= $md?></span>
              <hr class="mt-1">
            </div>

            <div class="mb-4">
              <p class="fw-bold mb-1">Penerima Tamu</p>
              <span><?= "$pnt1 & $pnt2"?></span>
              <hr class="mt-1">
            </div>

            <div class="mb-4">
              <p class="fw-bold mb-1">Pendamping Gerit</p>
              <span><?= $gerit?></span>
              <hr class="mt-1">
            </div>

            <div class="mb-4">
              <p class="fw-bold mb-1">Pendamping Giling</p>
              <span><?= $giling?></span>
              <hr class="mt-1">
            </div>

            <div class="mb-4">
              <p class="fw-bold mb-1">Keterangan</p>
              <?php if($keterangan == "") : ?>
                <span>-</span>
              <?php else : ?>
                <span><?= $keterangan?></span>
              <?php endif; ?>
              <hr class="mt-1">
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

  <!--Main layout-->
<script src="../assets/js/mdb.min.js"></script> 
</body>
</html>

<?php } ?>