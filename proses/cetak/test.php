<?php
  require '../../dompdf/autoload.inc.php';
  require '../../koneksi/koneksi.php';
  ob_start();
  use Dompdf\Dompdf;
  $dompdf = new Dompdf();
  require '../../koneksi/koneksi.php';
  $no = 1;
  $database_data = mysqli_query($koneksi, "SELECT * FROM tb_kandidat");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Username Dan Password Login E-PEMILOS</title>
    <link rel="stylesheet" href="../../bootstrap/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="mt-4">
        <table border="1" class="table table-striped table-sm">
            <thead class="bg-dark text-white">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Username</th>
                    <th>Password</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $no = 1;
                    if(isset($_POST['kelas']))
                    {
                        $kelas = $_POST['kelas'];

                        if($kelas == "Semua")
                        {
                            $siswa = mysqli_query($koneksi, "SELECT * FROM siswa");
                        }else{
                            $siswa = mysqli_query($koneksi, "SELECT * FROM siswa WHERE kelas='$kelas'");
                        }
                    }
                    
                    while($data = mysqli_fetch_object($siswa)){
                        ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $data->nama; ?></td>
                                <td><?= $data->kelas; ?></td>
                                <td><?= $data->username; ?></td>
                                <td><?= $data->password; ?></td>
                            </tr>
                        <?php
                    } 
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
<?php
$html = ob_get_contents();
ob_end_clean();

$dompdf->loadHtml($html);
$dompdf->setPaper('A4','potrait');
$dompdf->render();
$title = "Hasil Suara Pemilihan Ketua Osis Dan Wakil Ketua Osis Tahun";
$date = date('Y');
$dompdf->stream($title.' Tahun '.$date.'.pdf', array("Attachment" => 0));
?>