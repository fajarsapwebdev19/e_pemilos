<?php
  session_start();
  $_SESSION['val'] = '<div class="alert alert-warn"><em class="fas fa-info"></em>Pemilihan Sudah Di Tutup</div>';
  header('location: ../../user/');
?>