<?php
    session_start();
    $_SESSION['val'] = '<div class="alert alert-danger bg-danger text-white text-alert">Akun Anda Di Blokir Admin</div>';
    unset($_SESSION['login']);
    header('location: ../');
?>