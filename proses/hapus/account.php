<?php
  session_start();
  require_once '../../koneksi/koneksi.php';

  if(isset($_POST['hapus']))
  {
    $id = mysqli_real_escape_string($koneksi, htmlspecialchars(trim($_POST['id'])));
    $username = mysqli_real_escape_string($koneksi, htmlspecialchars(trim($_POST['username'])));

    $select = mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$username'");
    $data = mysqli_fetch_assoc($select);

    $foto_lama = $data['foto'];

    unlink('../../assets/img/'.$foto_lama);

    $delete = mysqli_query($koneksi, "DELETE FROM admin WHERE id='$id'");
    $delete .= mysqli_query($koneksi, "DELETE FROM akses_menu WHERE username='$username'");

    if($delete)
    {
      $_SESSION['val'] = '<div class="alert alert-success text-white bg-success"><em class="fas fa-check"></em> Berhasil Hapus Akun !</div>';
      header('location: ../../admin/?page=account');
    }
  }
?>