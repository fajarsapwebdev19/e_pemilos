<?php
  session_start();
  require '../../vendor/autoload.php';
  require '../../koneksi/koneksi.php';
  use PhpOffice\PhpSpreadsheet\Helper\Sample;
  use PhpOffice\PhpSpreadsheet\IOFactory;
  use PhpOffice\PhpSpreadsheet\Spreadsheet;
  use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

  $spreadsheet = new Spreadsheet();
  $sheet = $spreadsheet->getActiveSheet();

  

  // Buat sebuah variabel untuk menampung pengaturan style dari header tabel
  $style_col = [
    'alignment' => [
        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
        'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
     ]
    // 'borders' => [
    //     'top' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN], // Set border top dengan garis tipis
    //     'right' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN],  // Set border right dengan garis tipis
    //     'bottom' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN], // Set border bottom dengan garis tipis
    //     'left' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN] // Set border left dengan garis tipis
    // ]
  ];

  $style_left = [
    'alignment' => [
        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT, // Set text jadi ditengah secara horizontal (center)
        'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
     ]
    ];
 
  // Set document properties
  $spreadsheet->getProperties()->setCreator('E-PEMILOS')
  ->setLastModifiedBy('Aplication E-Pemilos by Fajar Saputra')
  ->setTitle('E-Pemilos Data GTK')
  ->setSubject('Data GTK')
  ->setDescription('Data GTK E-Pemilos')
  ->setKeywords('DTG')
  ->setCategory('Data GTK');

  //Font Color
  $spreadsheet->getActiveSheet()->getStyle('A1:E1')
      ->getFont()->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_WHITE);
  
  // Background color
      $spreadsheet->getActiveSheet()->getStyle('A1:E1')->getFill()
      ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
      ->getStartColor()->setARGB('0000CCFF');

  // Header Tabel
  $spreadsheet->setActiveSheetIndex(0)
  ->setCellValue('A1', 'Nama GTK')
  ->setCellValue('B1', 'Jenis Kelamin')
  ->setCellValue('C1', 'Kepegawaian')
  ->setCellValue('D1', 'Username')
  ->setCellValue('E1', 'Password');

  $spreadsheet->getActiveSheet()->getRowDimension('1')->setRowHeight(28);

  

  // Apply style header yang telah kita buat tadi ke masing-masing kolom header
  $sheet->getStyle('A1')->applyFromArray($style_left);
  $sheet->getStyle('B1')->applyFromArray($style_col);
  $sheet->getStyle('C1')->applyFromArray($style_col);
  $sheet->getStyle('D1')->applyFromArray($style_col);
  $sheet->getStyle('E1')->applyFromArray($style_col);
  $sheet->getStyle('B')->applyFromArray($style_col);
  $sheet->getStyle('D')->applyFromArray($style_left);
  $sheet->getStyle('E')->applyFromArray($style_left);


  $spreadsheet->getActiveSheet()->getStyle('D')->getNumberFormat()
->setFormatCode(\PhpOffice\PhpSpreadsheet\Style\NumberFormat::FORMAT_NUMBER);
  $spreadsheet->getActiveSheet()->getStyle('E')->getNumberFormat()
->setFormatCode(\PhpOffice\PhpSpreadsheet\Style\NumberFormat::FORMAT_NUMBER);
  $spreadsheet->getActiveSheet()->getStyle('D1')->getNumberFormat()
->setFormatCode(\PhpOffice\PhpSpreadsheet\Style\NumberFormat::FORMAT_NUMBER);
  $spreadsheet->getActiveSheet()->getStyle('E1')->getNumberFormat()
->setFormatCode(\PhpOffice\PhpSpreadsheet\Style\NumberFormat::FORMAT_NUMBER);

  // Set width kolom
  $sheet->getColumnDimension('A')->setWidth(50); // Set width kolom A
  $sheet->getColumnDimension('B')->setWidth(15); // Set width kolom B
  $sheet->getColumnDimension('C')->setWidth(30); // Set width kolom C
  $sheet->getColumnDimension('D')->setWidth(30); // Set width kolom D
  $sheet->getColumnDimension('E')->setWidth(30); // Set width kolom E

  
  $i=2; 
  $no=1; 
  $query = "SELECT * FROM gtk ORDER BY kepegawaian DESC,nama ASC";
  $dewan1 = $koneksi->prepare($query);
  $dewan1->execute();
  $res1 = $dewan1->get_result();
  while ($row = $res1->fetch_assoc()) {
    $spreadsheet->setActiveSheetIndex(0)
    ->setCellValue('A'.$i, $row['nama'])
    ->setCellValue('B'.$i, $row['jenis_kelamin'])
    ->setCellValue('C'.$i, $row['kepegawaian'])
    ->setCellValue('D'.$i, $row['username'])
    ->setCellValue('E'.$i, $row['password']);
    $i++;
  }
  
  
  // Rename worksheet
  $spreadsheet->getActiveSheet()->setTitle('Data GTK ');
  
  // Set active sheet index to the first sheet, so Excel opens this as the first sheet
  $spreadsheet->setActiveSheetIndex(0);
  
  // Redirect output to a client’s web browser (Xlsx)
  header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
  header('Content-Disposition: attachment;filename="Data Guru Dan Tenaga Pendidik E-Pemilos.xlsx"');
  header('Cache-Control: max-age=0');
  // If you're serving to IE 9, then the following may be needed
  header('Cache-Control: max-age=1');
  
  // If you're serving to IE over SSL, then the following may be needed
  header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
  header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
  header('Pragma: public'); // HTTP/1.0
  
  $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
  $writer->save('php://output');
  
?>