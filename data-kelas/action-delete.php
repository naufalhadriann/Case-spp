<?php
    include("../koneksi.php");
    $idKelas = $_GET['id_kelas'];
    $query_mysql =mysqli_query($koneksi,"DELETE FROM KELAS WHERE id_kelas=$idKelas");

    if ($query_mysql) {
      echo "<script>alert('Data Kelas berhasil dihapus'); window.location.href='read.php'</script>";
      header("location:read.php");
    } else{
      echo "<script>alert('Data Kelas gagal dihapus'); window.location.href='read.php'</script>";
    }
?>