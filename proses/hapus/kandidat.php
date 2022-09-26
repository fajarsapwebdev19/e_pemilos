<?php
  session_start();
  require '../../koneksi/koneksi.php';

  if(isset($_POST['delete']))
  {
    $id = mysqli_real_escape_string($koneksi, htmlspecialchars(trim($_POST['id'])));

    $database_data = mysqli_query($koneksi, "SELECT * FROM tb_kandidat WHERE id='$id'");
    $data = mysqli_fetch_assoc($database_data);

    
    $nomor_kandidat = $data['nomor_kandidat'];

    $foto_clean = $data['foto_kandidat'];

    unlink('../../assets/upload/'.$foto_clean);
    $delete = mysqli_query($koneksi, "DELETE FROM tb_kandidat WHERE id='$id'");
    $delete .= mysqli_query($koneksi, "DELETE FROM view_pemilihan WHERE no_kandidat='$nomor_kandidat'");
    $delete .= mysqli_query($koneksi, "UPDATE siswa SET status_memilih='Belum', kehadiran='Tidak Hadir'");
    $delete .= mysqli_query($koneksi, "UPDATE gtk SET status_memilih='Belum', kehadiran='Tidak Hadir'");
    $delete .= mysqli_query($koneksi, "ALTER TABLE tb_kandidat AUTO_INCREMENT = 1");

    if($delete)
    {
      $_SESSION['val'] = '<div class="alert alert-success"><em class="fas fa-check"></em> Berhasil Hapus Data !</div>';
      header('location: ../../admin/?page=data_kandidat');
    }
  }
?>