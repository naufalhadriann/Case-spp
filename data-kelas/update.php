<?php
  session_start();
  if ($_SESSION['level']=="") {
    header("location:../auth-login-petugas.php?pesan=gagal");
  }
?>

<?php require('../template/header.php');?>

<?php require('../template/navbar.php');?>

<?php require('../template/sidebar.php');?>

<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Update Data Kelas</h1>
    </div>
    <div class="section-body">
      <div class="row d-flex justify-content-center">
        <div class="col-4">
          <div class="card w-auto">
            <div class="card-header">
              <p class="h3">Update Data Kelas</p>
            </div>
              <form action="action-update.php" method="POST">
                <div class="card-body">
                    <div class="form-group">
                      <label for="id_kelas" class="form-label">ID Kelas</label> <br>
                      <input type="text" class="form-control w-75" id="id_kelas" name="id_kelas" value="<?php echo $_GET['id_kelas']; ?>" readonly>
                    </div>
                    <div class="mb-3">
                      <label for="nama_kelas" class="form-label">Nama Kelas</label> <br>
                      <input type="text" class="form-control w-75" id="nama_kelas" name="nama_kelas" value="<?php echo $_GET['nama_kelas']; ?>">
                    </div>
                    <div class="mb-3">
                      <label for="kompetensi_keahlian" class="form-label">Kompetensi Keahlian</label> <br>
                      <select class="form-control w-75" aria-label="select" id="kompetensi_keahlian" name="kompetensi_keahlian">
                        <option selected value="<?php echo $_GET['keahlian']; ?>">
                        </option>
                        <option value="RPL">RPL</option>
                        <option value="TAV">TAV</option>
                        <option value="DPIB">DPIB</option>
                        <option value="TKR">TKR</option>
                        <option value="TBSM">TBSM</option>
                      </select>
                    </div>
                    <button type="submit" class="btn btn-primary w-75">Submit</button>
                </div>
              </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?php require('../template/footer.php');?>