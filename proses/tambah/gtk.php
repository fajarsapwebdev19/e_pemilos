<?php
  session_start();
  require_once('../../koneksi/koneksi.php');

  if(isset($_POST['tambah']))
  {
    $nama = mysqli_real_escape_string($koneksi, htmlspecialchars(trim($_POST['nama'])));
    $jenis_kelamin = mysqli_real_escape_string($koneksi, htmlspecialchars(trim($_POST['jenis_kelamin'])));
    $kepegawaian = mysqli_real_escape_string($koneksi, htmlspecialchars(trim($_POST['kepegawaian'])));
    $username = mysqli_real_escape_string($koneksi, htmlspecialchars(trim($_POST['username'])));
    $password = mysqli_real_escape_string($koneksi, htmlspecialchars(trim($_POST['username'])));
    $kehadiran = "Tidak Hadir";
    $status_memilih = "Belum";
    $status_akun = "Y";
    $level = "GTK";

    $add = mysqli_query($koneksi, "INSERT INTO gtk VALUES(NULL, '$nama','$jenis_kelamin','$kepegawaian','$username','$password','$kehadiran','$status_memilih','$status_akun','$level')");

    if($add)
    {
      $_SESSION['val'] = '<div class="alert alert-success"><em class="fas fa-check"></em> Berhasil Tambah Data !</div>';
      header('location: ../../admin/?page=data_gtk');
    }

  }
?>