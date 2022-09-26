<?php
  session_start();
  $_SESSION['val'] = '<div class="alert alert-danger bg-danger text-white text-alert"> Anda Belum Login! </div>';
  header('location: ../');
?>