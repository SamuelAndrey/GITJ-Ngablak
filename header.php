  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <div class="container-fluid">
      <!-- Navbar brand -->
      <a class="navbar-brand" href="#!">
        <span class="logo">GITJ NGABLAK</span>
      </a>
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
        <i class="bi bi-list"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarExample01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="index.php">Home</a>
          </li>
          <!-- dropdown jadwal ibadah -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
              Jadwal Ibadah
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li>
                <a class="dropdown-item" href="penjadwalan/ngm_home.php">Ibadah Minggu Ngablak</a>
              </li>
              <li>
                <a class="dropdown-item" href="penjadwalan/pm_home.php">Ibd Minggu Ngablak & Pepanthan</a>
              </li>
              <li>
                <a class="dropdown-item" href="penjadwalan/brn_home.php">Brayatan Ngablak</a>
              </li>
              <li>
                <a class="dropdown-item" href="penjadwalan/brp_home.php">Brayatan Pepanthan</a>
              </li>
              <li>
                <a class="dropdown-item" href="penjadwalan/pds_home.php">Persekutuan Doa Senin</a>
              </li>
            </ul>
          </li>
          <!-- dropdown jadwal ibadah -->
          <li class="nav-item">
            <a class="nav-link" href="#!">Template Musik</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#!">Foto Kegiatan</a>
          </li>
        </ul>

        <ul class="navbar-nav d-flex flex-row">
          <!--Login -->
          <li class="nav-item me-3 me-lg-0">
            <a class="btn btn-sm btn-dark btn-rounded shadow-0 text-capitalize" href="login.php">Login <i class="bi bi-person-fill"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->