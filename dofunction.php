<?php
    require "jadwal_array.php";
    if(isset($_POST["updatebtn"])){
        $update = updateDB($_POST["id"], $_POST["hari"],$_POST["slotwaktu"], $_POST["dosen"], $_POST["ruang"],$_POST["matakuliah"],
        $_POST["tahunajaran"], $_POST["semester"]);
        if($update == "true"){
            header("Location: jadwal.php");
        } else{
            echo $update;
        }

    }
    if(isset($_POST["addbtn"])){
        $add = addDB($_POST["hari"],$_POST["slotwaktu"], $_POST["dosen"], $_POST["ruang"],$_POST["matakuliah"],
        $_POST["tahunajaran"], $_POST["semester"]);
        if($add == "true"){
            header("Location: jadwal.php");
        } else{
            echo $add;
        }

    }
    if(isset($_POST["deletebtn"])){
        $del = deleteDB($_POST["id"]);
        if($del == "true"){
            header("Location: jadwal.php");
        } else{
            echo $del;
        }

    }


?>