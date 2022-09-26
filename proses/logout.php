<?php
    session_start();
    $_SESSION['val'] = '<div class="alert alert-success bg-success text-white">Berhasil Logout !</div>';
    unset($_SESSION['login']);
    unset($_SESSION['username']);
    unset($_SESSION['login_user']);
    header('location: ../');
?>