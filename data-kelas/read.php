<?php 
session_start();
if($_SESSION['level']==""){
    header("location:auth-login-petugas.php?pesan=gagal");
}

?>


<?php require('../template/header.php')?>

<?php require('../template/navbar.php')?>

<?php require('../template/sidebar.php')?>

<div class="main-content">
    <section class="section">
        <div class="section-header">

        <div class="row">
            <div class="col">
<div class="section-header">
    <h1>Data Kelas</h1>
</div>
<div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="create.php" class="btn btn-success">Tambah Data Kelas</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                    <tr>
                                        <th>#</th>
                                        <th>ID Kelas</th>
                                        <th>Nama Kelas</th>
                                        <th>Kompetensi Keahlian</th>
                                        <th>Action</th>
                                    </tr>
                                    <?php 
                                    include "../koneksi.php";
                                    $query_mysql = mysqli_query($koneksi, "SELECT * FROM kelas");
                                    $nomor = 1;
                                    while($data = mysqli_fetch_array($query_mysql)) { ?>
                                    <tr>
                                        <td><?php echo $nomor++; ?></td>
                                        <td><?php echo $data['id_kelas']; ?></td>
                                        <td><?php echo $data['nama_kelas']; ?></td>
                                        <td><?php echo $data['kompetensi_keahlian']; ?></td>
                                        <td style="width: 20%;">
                                          <a href="update.php?id_kelas=<?php echo $data['id_kelas']; ?>&nama_kelas=<?= $data['nama_kelas'] ?>&keahlian=<?= $data['kompetensi_keahlian']?>"
                                             class="btn btn-warning my-1">Update </a>
                                          <a href="action-delete.php?id_kelas=<?php echo $data['id_kelas'];?>" class="btn btn-danger my-1">Delete</a>
                                          <a href="#" class="btn btn-secondary my-1">Detail </a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                    <tr>
                                        <td>1</td>
                                        <td>11001</td>
                                        <td>XI RPL </td>
                                        <td>
                                            Rekayasa Perangkat Lunak
                                        </td>
                                        <td style="width: 20%;">
                                            <a href="#" class="btn btn-warning my-1">Update</a>
                                            <a href="#" class="btn btn-danger my-1">Delete</a>
                                            <a href="#" class="btn btn-secondary my-1">Detail</a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <nav class="d-inline-block">
                                <ul class="pagination mb-0">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1"><i
                                                class="fas fa-chevron-left"></i></a>
                                    </li>
                                    <li class="page-item active">
                                        <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            </div>


<?php  require('../template/footer.php')  ?>