<?php
require_once 'vendor/autoload.php';
require "config.php";

use \PhpOffice\PhpSpreadsheet\Spreadsheet;
use \PhpOffice\PhpSpreadsheet\Writer\Xlsx;


$allowed_ext = ['xls', 'csv', 'xlsx'];
$fileName = $_FILES['file']['name'];
$checking = explode(".", $fileName);
$file_ext = end($checking);

if (in_array($file_ext, $allowed_ext)) {
    $targetPath = $_FILES['file']['tmp_name'];
    $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($targetPath);
    $data = $spreadsheet->getActiveSheet()->toArray();
    $result1 = mysqli_query($conn, "TRUNCATE TABLE jadwal;");
    
    foreach ($data as $value) {
        $hari = $value['0'];
        $slotwaktu = $value['1'];
        $dosen = $value['2'];
        $ruang = $value['3'];
        $matakuliah = $value['4'];
        $tahunajaran = $value['5'];
        $semester = $value['6'];

        $query = "insert into jadwal(hari, slot_waktu, dosen, ruang, mata_kuliah, tahun_ajaran, semester) values(
           '$hari',
           '$slotwaktu',
           '$dosen',
           '$ruang',
           '$matakuliah',
           '$tahunajaran',
           '$semester')";
        $result = mysqli_query($conn, $query);
    }
    echo "Berhasil upload: $result1 $result";
} else {echo "File Not Allowed";}
?>