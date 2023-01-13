<?php
    foreach ($value as $data) {
        if (str_contains(strtolower($data), strtolower($query))) {
            echo "<tr>";
            echo "<td>" . $no . "</td>";
            echo "<td>" . $value['Hari'] . "</td>";
            echo "<td>" . $value['Slot_Waktu'] . "</td>";
            echo "<td>" . $value['Dosen'] . "</td>";
            echo "<td>" . $value['Ruang'] . "</td>";
            echo "<td>" . $value['Mata_Kuliah'] . "</td>";
            echo "<td>" . $value['Tahun_Ajaran'] . "</td>";
            echo "<td>" . $value['Semester'] . "</td>";
            if($adminStatus){
                echo "<td> <a href=./edit_table.php?id=".$value['id'].">Edit</a> | <a href=./delete_table.php?id=".$value['id'].">Delete</a> </td>";
            }
            "</tr>";
            $no = $no + 1;
            break;
        }
    }


?>