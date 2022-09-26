<?php
  ob_start();
  require '../../dompdf/autoload.inc.php';
  use Dompdf\Dompdf;
  $dompdf = new Dompdf();
  require '../../koneksi/koneksi.php';
  $no = 1;
  $database_data = mysqli_query($koneksi, "SELECT * FROM siswa WHERE kehadiran='Tidak Hadir' UNION SELECT * FROM gtk WHERE kehadiran='Tidak Hadir' ORDER BY nama ASC");
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Daftar Tidak Hadir Peserta Pemilihan Ketua Osis Tahun <?= date('Y') ?></title>
  <link rel="stylesheet" href="../../bootstrap/bootstrap/css/bootstrap.min.css">
  <script src="../../bootstrap/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <div class="row">
    
    <div class="col-sm-12 col-md-12">
      <h4 class="text-center">Daftar Hadir Peserta Pemilihan Ketua Osis Tahun <?= date('Y') ?></h4>

      <table class="table table-bordered table-sm">
        <thead>
          <tr class="bg-dark text-white">
            <th class="text-center">No</th>
            <th class="text-center">NISN / NIK</th>
            <th class="text-center">Nama Peserta</th>
            <th class="text-center">JK</th>
            <th class="text-center">Kelas / Kepegawaian</th>
          </tr>
        </thead>
        <tbody>
          <?php
            
            while($data = mysqli_fetch_assoc($database_data)):
          ?>
            <tr>
              <td class="text-center"><?= $no++; ?></td>
              <td class="text-center"><?= $data['username'] ?></td>
              <td><?= $data['nama'] ?></td>
              <td class="text-center"><?= $data['jenis_kelamin']?></td>
              <td class="text-center">
                <?php
                  if($data['level'] == "Siswa")
                  {
                    echo $data['kelas'];
                  }elseif($data['level'] == "GTK")
                  {
                    echo "GTK";
                  }
                ?>
              </td>
            </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
<?php
$html = ob_get_contents();
ob_end_clean();
$dompdf->loadHtml($html);
$dompdf->setPaper('A4','potrait');
$dompdf->render();
$title = "Daftar Tidak Hadir Peserta Pemilihan Ketua Osis";
$date = date('Y');
$dompdf->stream($title.' Tahun '.$date.'.pdf');
?>



