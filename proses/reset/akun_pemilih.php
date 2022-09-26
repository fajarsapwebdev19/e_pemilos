<?php
  session_start();
  require '../../koneksi/koneksi.php';

  if(isset($_POST['reset']))
  {
    $username = mysqli_real_escape_string($koneksi, htmlspecialchars(trim($_POST['username'])));

    $query_data = mysqli_query($koneksi, "SELECT * FROM siswa WHERE username='$username' UNION SELECT * FROM gtk WHERE username='$username'");
    $data = mysqli_fetch_assoc($query_data);
    $cek_data = mysqli_num_rows($query_data);

    if($cek_data > 0)
    {
      if($data['level'] == "GTK")
      {
        $res = mysqli_query($koneksi, "UPDATE gtk SET kehadiran='Tidak Hadir', status_memilih='Belum' WHERE username='$username'");
        $res .= mysqli_query($koneksi, "DELETE FROM view_pemilihan WHERE username='$username'");
      }
      elseif($data['level'] == "Siswa")
      {
        $res = mysqli_query($koneksi, "UPDATE siswa SET kehadiran='Tidak Hadir', status_memilih='Belum' WHERE username='$username'");
        $res .= mysqli_query($koneksi, "DELETE FROM view_pemilihan WHERE username='$username'");
      } 
    }
    else{
      $_SESSION['val_reset'] = '<div class="alert alert-error">Username Tidak Ditemukan !</div>';
      header('location: ../../admin/');
    }

    if($res)
    {
      $_SESSION['val_reset'] = '<div class="alert alert-success">Berhasil Reset Akun Pengguna !</div>';
      header('location: ../../admin/');
    }


  }
?>