<?php
  session_start();
  require '../../koneksi/koneksi.php';

  if(isset($_POST['ubah']))
  {
    if(isset($_POST['id']))
    {
      $id = mysqli_real_escape_string($koneksi, htmlspecialchars(trim($_POST['id'])));
      $nama = mysqli_real_escape_string($koneksi, htmlspecialchars(trim($_POST['nama'])));
      $jenis_kelamin = mysqli_real_escape_string($koneksi, htmlspecialchars(trim($_POST['jenis_kelamin'])));
      $kepegawaian = mysqli_real_escape_string($koneksi, htmlspecialchars(trim($_POST['kepegawaian'])));
      $username = mysqli_real_escape_string($koneksi, htmlspecialchars(trim($_POST['username'])));
      $password = mysqli_real_escape_string($koneksi, htmlspecialchars(trim($_POST['username'])));
      $username_lama = mysqli_real_escape_string($koneksi, htmlspecialchars(trim($_POST['username_lama'])));

      $query_gtk = mysqli_query($koneksi, "SELECT * FROM view_pemilihan WHERE username='$username_lama'");
      $cek_gtk = mysqli_num_rows($query_gtk);

      if($cek_gtk > 0){
        $update = mysqli_query($koneksi, "UPDATE view_pemilihan SET username='$username' WHERE username='$username_lama'");
        $update .= mysqli_query($koneksi, "UPDATE gtk SET nama='$nama',jenis_kelamin='$jenis_kelamin',kepegawaian='$kepegawaian',username='$username',password='$password' WHERE id='$id'");
      }else{
        $update = mysqli_query($koneksi, "UPDATE gtk SET nama='$nama',jenis_kelamin='$jenis_kelamin',kepegawaian='$kepegawaian',username='$username',password='$password' WHERE id='$id'");
      }

      if($update)
      {
        $_SESSION['val'] = '<div class="alert alert-success"><em class="fas fa-check"></em> Berhasil Update Data </div>';
        header('location: ../../admin/?page=data_gtk');
      }
    }
  }
?>