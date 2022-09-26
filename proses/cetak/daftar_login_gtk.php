<?php
  session_start();

  if(empty($_SESSION['login']))
  {
        $_SESSION['val'] = '<div class="alert alert-danger bg-danger text-alert text-white">Not Allowed</div>';
        header('location: ../../');
  }elseif($_SESSION['status_akun'] == "N")
  {
        $_SESSION['val'] = '<div class="alert alert-danger bg-danger text-alert text-white">Not Allowed</div>';
        header('location: ../../');
  }
  require '../../dompdf/autoload.inc.php';
  require '../../koneksi/koneksi.php';
  ob_start();
  use Dompdf\Dompdf;
  $dompdf = new Dompdf();
  require '../../koneksi/koneksi.php';
  $no = 1;
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
                    <th>Kepegawaian</th>
                    <th>Username</th>
                    <th>Password</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $no = 1;
                    if(isset($_POST['kepegawaian']))
                    {
                        $kepegawaian = $_POST['kepegawaian'];

                        if($kepegawaian == "Semua")
                        {
                            $gtk = mysqli_query($koneksi, "SELECT * FROM gtk ORDER BY kepegawaian DESC, nama ASC");
                        }else{
                            $gtk = mysqli_query($koneksi, "SELECT * FROM gtk WHERE kepegawaian='$kepegawaian' ORDER BY kepegawaian DESC, nama ASC");
                        }
                    }
                    
                    while($data = mysqli_fetch_object($gtk)){
                        ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $data->nama; ?></td>
                                <td><?= $data->kepegawaian; ?></td>
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
if($kepegawaian == "Semua")
{
	$kp = "";
}else{
	$kp = $kepegawaian;
}
$title = "Daftar Login Siswa - ".$kp;
$date = date('Y');
$dompdf->stream($title.' Tahun '.$date.'.pdf', array("Attachment" => 0));
?>