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
        <h2>Apakah anda yakin untuk menghapus data ini?</h2>
        <form action="dofunction.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $data['id']?>">
            <button type="submit" name="deletebtn">Ya</button>
        </form>





</body>