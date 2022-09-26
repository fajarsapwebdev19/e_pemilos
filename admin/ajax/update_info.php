<?php
    session_start();
    require_once '../../koneksi/koneksi.php';

    
    $id = mysqli_real_escape_string($koneksi, htmlspecialchars(trim($_POST['id'])));
    $tahun_ajaran = mysqli_real_escape_string($koneksi, htmlspecialchars(trim($_POST['tahun_ajaran'])));
    $tanggal_pelaksanaan = mysqli_real_escape_string($koneksi, htmlspecialchars(trim(date('Y-m-d', strtotime($_POST['tanggal_pelaksanaan'])))));
    $sampai = mysqli_real_escape_string($koneksi, htmlspecialchars(trim(date('Y-m-d', strtotime($_POST['sampai'])))));

    $save = mysqli_query($koneksi, "UPDATE tb_informasi SET tahun_ajaran='$tahun_ajaran', tanggal_pelaksanaan='$tanggal_pelaksanaan', sampai='$sampai' WHERE id='$id'");

    if($save)
    {
        $_SESSION['success_save'] = '<div id="auto-close" class="alert alert-success text-white bg-success">Berhasil Simpan Data</div>';
                // header('location: ../../admin/');
    }
?>