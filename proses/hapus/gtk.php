<?php
  session_start();
  require '../../koneksi/koneksi.php';

  if(isset($_POST['hapus']))
  {
    $id = mysqli_real_escape_string($koneksi, htmlspecialchars(trim($_POST['id'])));
    $username = mysqli_real_escape_string($koneksi, htmlspecialchars(trim($_POST['username'])));
    $username_tujuan = mysqli_real_escape_string($koneksi, htmlspecialchars(trim($_POST['username_tujuan'])));

    $query_gtk = mysqli_query($koneksi, "SELECT * FROM view_pemilihan WHERE username='$username_tujuan'");
    $cek_gtk = mysqli_num_rows($query_gtk);

    if($cek_gtk > 0)
    {
      $delete = mysqli_query($koneksi, "DELETE FROM gtk WHERE username='$username'");
      $delete .= mysqli_query($koneksi, "DELETE FROM view_pemilihan WHERE username='$username_tujuan'");
      $delete .= mysqli_query($koneksi, "ALTER TABLE gtk AUTO_INCREMENT = 1");
      $delete .= mysqli_query($koneksi, "ALTER TABLE view_pemilihan AUTO_INCREMENT = 1");
    }
    else
    {
      $delete = mysqli_query($koneksi, "DELETE FROM gtk WHERE username='$username'");
      $delete .= mysqli_query($koneksi, "ALTER TABLE gtk AUTO_INCREMENT = 1");
    }
    
    if($delete)
    {
      $_SESSION['val'] = '<div class="alert alert-success"><em class="fas fa-check"></em> Berhasil Hapus Data </div>';
      header('location: ../../admin/?page=data_gtk');
    }

  }
?>