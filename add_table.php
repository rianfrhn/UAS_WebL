<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="webstyle.css">
    <title>Jadwal</title>
</head>
<body>
    <h1>
        Tambah Data
    </h1>
    <?php
        $id = 0;
        if(isset($_GET['id'])){
            $id = $_GET['id'];
        }
        require "jadwal_array.php";
        $data = searchDbbyID($id);
        ?>
        <form action="dofunction.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $data['id']?>">
            <label for="hari">Hari</label>
            <select name="hari">
                <option value="Senin">Senin</option>
                <option value="Selasa">Selasa</option>
                <option value="Rabu">Rabu</option>
                <option value="Kamis">Kamis</option>
                <option value="Jumat">Jumat</option>
            </select>

            <label for="slotwaktu">Slot Waktu</label>
            <select name="slotwaktu">
                <option value="07.30 - 08.20" >07.30 - 08.20</option>
                <option value="08.20 - 09.10">08.20 - 09.10</option>
                <option value="09.10 - 10.00">09.10 - 10.00</option>
                <option value="10.15 - 11.05">10.15 - 11.05</option>
                <option value="11.05 - 11.55">11.05 - 11.55</option>
                <option value="12.45 - 13.35">12.45 - 13.35</option>
                <option value="13.35 - 14.25">13.35 - 14.25</option>
                <option value="14.25 - 15.15">14.25 - 15.15</option>
                <option value="15.45 - 16.35">15.45 - 16.35</option>
            </select>

            <label for="dosen">Dosen</label>
            <input type="text" name="dosen">
            <label for="ruang">Ruang</label>
            <input type="text" name="ruang">
            <label for="matakuliah">Matakuliah</label>
            <input type="text" name="matakuliah">
            <label for="tahunajaran">Tahun Ajaran</label>
            <input type="text" name="tahunajaran">
            <label for="semester">Semester</label>
            <input type="text" name="semester">
            <input type="submit" name="addbtn">
        </form>





</body>