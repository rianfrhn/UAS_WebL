<?php
    function getArray(){
        require "config.php";
        $result = mysqli_query($conn, "select * from jadwal");
        $arr=[];
        $i=0;
        foreach($result as $row){
            $arr[$i] = [
                "id" => $row["id"],
                "Hari" => $row["hari"],
                "Slot_Waktu" => $row["slot_waktu"],
                "Dosen" => $row["dosen"], 
                "Ruang" => $row["ruang"], 
                "Mata_Kuliah" => $row["mata_kuliah"], 
                "Tahun_Ajaran" => $row["tahun_ajaran"], 
                "Semester" => $row["semester"]
            ];
            $i++;

        }
        return $arr;
    }
    function searchDbbyID($id){
        require "config.php";
        $result = mysqli_query($conn, "select * from jadwal where id=$id");
        $arr = mysqli_fetch_array($result);
        return $arr;

    }
    function updateDB($id, $hari, $slotwaktu, $dosen, $ruang, $matakuliah, $tahunajaran, $semester){
        require "config.php";
        $query = "update jadwal set
            hari = '$hari',
            slot_waktu = '$slotwaktu',
            dosen = '$dosen',
            ruang= '$ruang',
            mata_kuliah = '$matakuliah',
            tahun_ajaran = '$tahunajaran',
            semester = '$semester'
            where id = $id";
        
        if(mysqli_query($conn, $query)){
            return "true";
        } else{
            return mysqli_error($conn);
        }

    }
    function deleteDB($id){
        require "config.php";
        $query = "delete from jadwal where id = $id";
        
        if(mysqli_query($conn, $query)){
            return "true";
        } else{
            return mysqli_error($conn);
        }


    }
    function addDB($hari, $slotwaktu, $dosen, $ruang, $matakuliah, $tahunajaran, $semester){
        require "config.php";
        $query = "insert into jadwal(hari, slot_waktu, dosen, ruang, mata_kuliah, tahun_ajaran, semester) values(
            '$hari',
            '$slotwaktu',
            '$dosen',
            '$ruang',
            '$matakuliah',
            '$tahunajaran',
            '$semester')";
        
        if(mysqli_query($conn, $query)){
            return "true";
        } else{
            return mysqli_error($conn);
        }
    }
?>