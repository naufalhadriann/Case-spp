<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">SMKN 88 Saturn</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>

          <?php if($_SESSION['level'] == "admin") { ?>
            <li class="menu-header">Pengelolaan Data </li>
            <li><a class="nav-link" href="../data-petugas/read.php"><i class="far fa-circle"></i><span>Data Petugas</span></a></li>
            <li><a class="nav-link" href="../data-kelas/read.php"><i class="far fa-circle"></i><span>Data Kelas</span></a></li>
            <li><a class="nav-link" href="../data-siswa/read.php"><i class="far fa-circle"></i><span>Data Siswa</span></a></li>
            <li><a class="nav-link" href="../data-spp/read.php"><i class="far fa-circle"></i><span>Data SPP</span></a></li>
            <li class="menu-header">Transaksi</li>
            <li><a class="nav-link" href="../pembayaran/read.php"><i class="far fa-circle"></i><span>Transaksi Pembayaran</span></a></li>
            <li><a class="nav-link" href="blank.html"><i class="far fa-circle"></i><span>History Pembayaran</span></a></li>
            <?php  } elseif($_SESSION['level'] == "petugas") { ?>
            <li class="menu-header">Transaksi</li>
            <li><a class="nav-link" href="../Pembayaran/read.php"><i class="far fa-circle"></i><span>Transaksi Pembayaran</span></li>
            <li><a class="nav-link" href="blank.html"><i class="far fa-circle"></i><span>History Pembayaran</span></a></li>
            <?php } else { ?>
              <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i><span>History Pembayaran</span></a></li>
            <?php } ?>

          <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="../logout.php" class="btn btn-primary btn-lg btn-block btn-icon-split">
              <i class="fas fa-rocket"></i> Logout
            </a>
          </div>        </aside>
      </div>