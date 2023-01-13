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
        Edit data
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
                <option value="Senin" <?php $data['hari'] == "Senin" ? "selected" : "" ?>>Senin</option>
                <option value="Selasa" <?php $data['hari'] == "Selasa" ? "selected" : "" ?>>Selasa</option>
                <option value="Rabu" <?php $data['hari'] == "Rabu" ? "selected" : "" ?>>Rabu</option>
                <option value="Kamis" <?php $data['hari'] == "Kamis" ? "selected" : "" ?>>Kamis</option>
                <option value="Jumat" <?php $data['hari'] == "Jumat" ? "selected" : "" ?>>Jumat</option>
            </select>

            <label for="slotwaktu">Slot Waktu</label>
            <select name="slotwaktu">
                <option value="07.30 - 08.20" <?php $data['slot_waktu'] == "07.30 - 08.20" ? "selected" : "" ?>>07.30 - 08.20</option>
                <option value="08.20 - 09.10" <?php $data['slot_waktu'] == "08.20 - 09.10" ? "selected" : "" ?>>08.20 - 09.10</option>
                <option value="09.10 - 10.00" <?php $data['slot_waktu'] == "09.10 - 10.00" ? "selected" : "" ?>>09.10 - 10.00</option>
                <option value="10.15 - 11.05" <?php $data['slot_waktu'] == "10.15 - 11.05" ? "selected" : "" ?>>10.15 - 11.05</option>
                <option value="11.05 - 11.55" <?php $data['slot_waktu'] == "11.05 - 11.55" ? "selected" : "" ?>>11.05 - 11.55</option>
                <option value="12.45 - 13.35" <?php $data['slot_waktu'] == "12.45 - 13.35" ? "selected" : "" ?>>12.45 - 13.35</option>
                <option value="13.35 - 14.25" <?php $data['slot_waktu'] == "13.35 - 14.25" ? "selected" : "" ?>>13.35 - 14.25</option>
                <option value="14.25 - 15.15" <?php $data['slot_waktu'] == "14.25 - 15.15" ? "selected" : "" ?>>14.25 - 15.15</option>
                <option value="15.45 - 16.35" <?php $data['slot_waktu'] == "15.45 - 16.35" ? "selected" : "" ?>>15.45 - 16.35</option>
            </select>

            <label for="dosen">Dosen</label>
            <input type="text" name="dosen" value="<?php echo $data['dosen']; ?>">
            <label for="ruang">Ruang</label>
            <input type="text" name="ruang"value="<?php echo $data['ruang']; ?>">
            <label for="matakuliah">Matakuliah</label>
            <input type="text" name="matakuliah"value="<?php echo $data['mata_kuliah']; ?>">
            <label for="tahunajaran">Tahun Ajaran</label>
            <input type="text" name="tahunajaran" value="<?php echo $data['tahun_ajaran']; ?>">
            <label for="semester">Semester</label>
            <input type="text" name="semester" value="<?php echo $data['semester']; ?>">
            <input type="submit" name="updatebtn">
        </form>





</body>