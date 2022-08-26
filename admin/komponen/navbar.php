<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">
              <i class="bi bi-speedometer2"></i>
              Dashboard
            </a>
          </li>
          <?php if($_SESSION['role'] == 'developer') : ?>
            <li class="nav-item">
              <a class="nav-link" href="admin.php">
                <i class="bi bi-person"></i>
                Admin
              </a>
          </li>
          <?php endif; ?>

          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-2 mb-1 text-muted">
            <span>Data Jadwal Ibadah</span>
          </h6>

          <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-journal-text"></i><span> Minggu - Ngablak </span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
              <li>
                <a href="ngm_ibd.php" class="nav-link">Data Ibadah</a>
              </li>
              <li>
                <a href="ngm_jmt.php" class="nav-link">Data Jemaat</a>
              </li>
              <li>
                <a href="ngm_kel.php" class="nav-link">Data Keluarga</a>
              </li>
            </ul>
          </li><!-- End Forms Minggu- Ngablak -->

          <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#form2" data-bs-toggle="collapse" href="#">
              <i class="bi bi-journal-text"></i><span> Minggu - Ngablak & Pepanthan </span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="form2" class="nav-content collapse " data-bs-parent="#sidebar-nav">
              <li>
                <a href="pm_ibd.php" class="nav-link">Data Ibadah</a>
              </li>
              <li>
                <a href="ngm_jmt.php" class="nav-link">Data Jemaat</a>
              </li>
            </ul>
          </li><!-- End Forms Minggu - Ngablak & Pepanthan -->
        </ul>
      </div>
    </nav>