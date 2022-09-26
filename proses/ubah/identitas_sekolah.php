<?php
  session_start();
  require_once('../../koneksi/koneksi.php');

  if(isset($_POST['save']))
  {
    if(isset($_POST['id']))
    {
      $id = mysqli_real_escape_string($koneksi, htmlspecialchars(trim($_POST['id'])));
      $npsn = mysqli_real_escape_string($koneksi, htmlspecialchars(trim($_POST['npsn'])));
      $nama_sekolah = mysqli_real_escape_string($koneksi, htmlspecialchars(trim($_POST['nama_sekolah'])));
      $nama_kepsek = mysqli_real_escape_string($koneksi, htmlspecialchars(trim($_POST['nama_kepsek'])));
      $nip = mysqli_real_escape_string($koneksi, htmlspecialchars(trim($_POST['nip'])));
      $alamat_sekolah = mysqli_real_escape_string($koneksi, htmlspecialchars(trim($_POST['alamat_sekolah'])));
      $kelurahan = mysqli_real_escape_string($koneksi, htmlspecialchars(trim($_POST['kelurahan'])));
      $kecamatan = mysqli_real_escape_string($koneksi, htmlspecialchars(trim($_POST['kecamatan'])));
      $kabkota = mysqli_real_escape_string($koneksi, htmlspecialchars(trim($_POST['kab_kota'])));
      $akreditasi = mysqli_real_escape_string($koneksi, htmlspecialchars(trim($_POST['akreditasi'])));

      $save = mysqli_query($koneksi, "UPDATE identitas_sekolah SET npsn='$npsn',nama_sekolah='$nama_sekolah',nama_kepsek='$nama_kepsek', nip='$nip',alamat_sekolah='$alamat_sekolah',kelurahan='$kelurahan', kecamatan='$kecamatan', kab_kota='$kabkota', akreditasi='$akreditasi' WHERE id='$id'");

      if($save)
      {
        $_SESSION['val'] = '<div class="alert alert-success bg-success text-white">Berhasil Simpan Data !</div>';
        header('location: ../../admin/');
      }
    }
  }
?>