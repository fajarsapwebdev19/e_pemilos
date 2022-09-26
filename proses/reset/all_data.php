<?php
  session_start();
  require '../../koneksi/koneksi.php';

  if(isset($_POST['reset']))
  {
    $select = mysqli_query($koneksi, "SELECT * FROM tb_kandidat");
    
    while($data = mysqli_fetch_assoc($select)){
      $foto_lama = $data['foto_kandidat'];
      unlink('../../assets/upload/'.$foto_lama);
    }
    
    $reset = mysqli_query($koneksi, "TRUNCATE siswa");
    $reset .= mysqli_query($koneksi, "TRUNCATE gtk");
    $reset .= mysqli_query($koneksi, "TRUNCATE tb_kandidat");
    $reset .= mysqli_query($koneksi, "TRUNCATE view_pemilihan");
    $reset .= mysqli_query($koneksi, "TRUNCATE tb_kelas");

    if($reset)
    {
      $_SESSION['val'] = '<div class="alert alert-success"><em class="fas fa-check"></em> Berhasil Reset Semua Data Pemilih !</div>';
      header('location: ../../admin/');
    }
  }
?>