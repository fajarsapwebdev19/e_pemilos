<?php
  date_default_timezone_set('Asia/Jakarta');

  // koneksi ke database local
  $SERVER = 'localhost';
  $USERNAME = 'root';
  $PASSWORD = '';
  $DB = 'e_pemilos';

  //$SERVER = 'localhost';
  //$USERNAME = 'root';
  //$PASSWORD = '';
  //$DB = 'e-pemilos';

  $koneksi = mysqli_connect($SERVER,$USERNAME,$PASSWORD,$DB);
?>