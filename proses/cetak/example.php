<?php
  require '../../mpdf/vendor/autoload.php';
  $mpdf = new \Mpdf\Mpdf();


  // book mark of pdf 

  $mpdf->Bookmark('Start of the document');
?>

<?php
$html  = '
    
    <html lang="en">
    <head>
        <title>MPDF</title>

        <!-- file css for style on report  -->
        <link rel="stylesheet" href="../../bootstrap/bootstrap/css/bootstrap.min.css">
    </head>
    <body>
        <div class="row justify-content-center">
          <div class="col-sm-10">
            <h5>Daftar Test</h5>
          </div>
        </div>
    </body>
    </html>
';

?>

<?php
  
  $mpdf->WriteHTML($html);
  $title = "Daftar Hadir Peserta Pemilihan Ketua Osis";
  $date = date('Y');
  $mpdf->Output();
?>