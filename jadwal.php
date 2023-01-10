<?php
$isadmin = false;
session_start();
$name = $_SESSION["username"];
if($name == "admin"){$isadmin = true;}
$jadwal =  [
    ["Hari" => "Senin", "Slot_Waktu" => "07.30 - 08.20", "Dosen" => "Indra", "Ruang" => "AA302", "Mata_Kuliah" => "Sistem Operasi", "Tahun_Ajaran" => "2022/2023", "Semester" => "Semester 1"],
    ["Hari" => "Senin", "Slot_Waktu" => "08.20 - 09.10", "Dosen" => "Indra", "Ruang" => "AA302", "Mata_Kuliah" => "Sistem Operasi", "Tahun_Ajaran" => "2022/2023", "Semester" => "Semester 1"],
    ["Hari" => "Senin", "Slot_Waktu" => "09.10 - 10.00", "Dosen" => "Indra", "Ruang" => "AA302", "Mata_Kuliah" => "Sistem Operasi", "Tahun_Ajaran" => "2022/2023", "Semester" => "Semester 1"],
    ["Hari" => "Senin", "Slot_Waktu" => "10.00 - 11.05", "Dosen" => "Indra", "Ruang" => "AA302", "Mata_Kuliah" => "Sistem Operasi", "Tahun_Ajaran" => "2022/2023", "Semester" => "Semester 1"],
    ["Hari" => "Senin", "Slot_Waktu" => "11.05 - 11.55", "Dosen" => "Mera", "Ruang" => "AA302", "Mata_Kuliah" => "Pengantar TIK", "Tahun_Ajaran" => "2022/2023", "Semester" => "Semester 1"],
    ["Hari" => "Senin", "Slot_Waktu" => "12.45 - 13.35", "Dosen" => "Mera", "Ruang" => "AA302", "Mata_Kuliah" => "Pengantar TIK", "Tahun_Ajaran" => "2022/2023", "Semester" => "Semester 1"],
    ["Hari" => "Senin", "Slot_Waktu" => "13.35 - 14.25", "Dosen" => "Mera", "Ruang" => "AA302", "Mata_Kuliah" => "Pengantar TIK", "Tahun_Ajaran" => "2022/2023", "Semester" => "Semester 1"],
    ["Hari" => "Senin", "Slot_Waktu" => "14.25 - 15.15", "Dosen" => "Mera", "Ruang" => "AA302", "Mata_Kuliah" => "Pengantar TIK", "Tahun_Ajaran" => "2022/2023", "Semester" => "Semester 1"],
    ["Hari" =>    "Selasa", "Slot_Waktu" => "07.30 - 08.20",    "Dosen" =>    "Ayres",    "Ruang" =>    "GSG206",    "Mata_Kuliah" => "Pancasila",    "Tahun_Ajaran" => "2022/2023",    "Semester" =>    "Semester 1"],
    ["Hari" =>    "Selasa", "Slot_Waktu" => "08.20 - 09.10",    "Dosen" =>    "Ayres",    "Ruang" =>    "GSG206",    "Mata_Kuliah" => "Pancasila",    "Tahun_Ajaran" =>    "2022/2023",    "Semester" =>    "Semester 1"],
    ["Hari" =>    "Selasa", "Slot_Waktu" => "12.45 - 13.35",    "Dosen" =>    "Dewi K",    "Ruang" =>    "GSG202",    "Mata_Kuliah" =>    "Bahasa Inggris TIK 1",    "Tahun_Ajaran" =>    "2022/2023",    "Semester" =>    "Semester 1"],
    ["Hari" =>    "Selasa", "Slot_Waktu" => "13.35 - 14.25",    "Dosen" =>    "Dewi K",    "Ruang" =>    "GSG202",    "Mata_Kuliah" =>    "Bahasa Inggris TIK 1",    "Tahun_Ajaran" =>    "2022/2023",    "Semester" =>    "Semester 1"],
    ["Hari" =>    "Selasa", "Slot_Waktu" => "14.25 - 15.15",    "Dosen" =>    "Ratna",    "Ruang" =>    "GSG202",    "Mata_Kuliah" =>    "Bahasa Inggris TIK 1",    "Tahun_Ajaran" =>    "2022/2023",    "Semester" =>    "Semester 1"],
    ["Hari" =>    "Selasa", "Slot_Waktu" => "15.45 - 16.35",    "Dosen" =>    "Ratna",    "Ruang" =>    "GSG202",    "Mata_Kuliah" =>    "Bahasa Inggris TIK 1",    "Tahun_Ajaran" =>    "2022/2023",    "Semester" =>    "Semester 1"],
    ["Hari" =>    "Rabu",    "Slot_Waktu" =>    "07.30 - 08.20",    "Dosen" =>    "Irawati",    "Ruang" =>    "GSG210",    "Mata_Kuliah" =>    "Organisasi & Arsitektur Komputer",    "Tahun_Ajaran" =>    "2022/2023",    "Semester" =>    "Semester 1"],
    ["Hari" =>    "Rabu",    "Slot_Waktu" =>    "08.20 - 09.10",    "Dosen" =>    "Irawati",    "Ruang" =>    "GSG210",    "Mata_Kuliah" =>    "Organisasi & Arsitektur Komputer",    "Tahun_Ajaran" =>    "2022/2023",    "Semester" =>    "Semester 1"],
    ["Hari" =>    "Rabu",    "Slot_Waktu" =>    "09.10 - 10.00",    "Dosen" =>    "Irawati",    "Ruang" =>    "GSG210",    "Mata_Kuliah" =>    "Organisasi & Arsitektur Komputer",    "Tahun_Ajaran" =>    "2022/2023",    "Semester" =>    "Semester 1"],
    ["Hari" =>    "Rabu",    "Slot_Waktu" =>    "10.00 - 11.05",    "Dosen" =>    "Irawati",    "Ruang" =>    "GSG210",    "Mata_Kuliah" =>    "Organisasi & Arsitektur Komputer",    "Tahun_Ajaran" =>    "2022/2023",    "Semester" =>    "Semester 1"],
    ["Hari" =>    "Rabu",    "Slot_Waktu" =>    "11.05 - 11.55",    "Dosen" =>    "Euis",    "Ruang" =>    "GSG207",    "Mata_Kuliah" =>    "Matematika Diskrit",    "Tahun_Ajaran" =>    "2022/2023",    "Semester" =>    "Semester 1"],
    ["Hari" =>    "Rabu",    "Slot_Waktu" =>    "12.45 - 13.35",    "Dosen" =>    "Euis",    "Ruang" =>    "GSG207",    "Mata_Kuliah" =>    "Matematika Diskrit",    "Tahun_Ajaran" =>    "2022/2023",    "Semester" =>    "Semester 1"],
    ["Hari" =>    "Rabu",    "Slot_Waktu" =>    "13.35 - 14.25",    "Dosen" =>    "Euis",    "Ruang" =>    "GSG207",    "Mata_Kuliah" =>    "Matematika Diskrit",    "Tahun_Ajaran" =>    "2022/2023",    "Semester" =>    "Semester 1"],
    ["Hari" =>    "Rabu",    "Slot_Waktu" =>    "14.25 - 15.15",    "Dosen" =>    "Euis",    "Ruang" =>    "GSG207",    "Mata_Kuliah" =>    "Matematika Diskrit",    "Tahun_Ajaran" =>    "2022/2023",    "Semester" =>    "Semester 1"],
    ["Hari" =>    "Kamis",    "Slot_Waktu" =>    "07.30 - 08.20",    "Dosen" =>    "Adi",    "Ruang" =>    "GSG206",    "Mata_Kuliah" =>    "Pendidikan Agama",    "Tahun_Ajaran" =>    "2022/2023",    "Semester" =>    "Semester 1"],
    ["Hari" =>    "Kamis",    "Slot_Waktu" =>    "08.20 - 09.10",    "Dosen" =>    "Adi",    "Ruang" =>    "GSG206",    "Mata_Kuliah" =>    "Pendidikan Agama",    "Tahun_Ajaran" =>    "2022/2023",    "Semester" =>    "Semester 1"],
    ["Hari" =>    "Kamis",    "Slot_Waktu" =>    "09.10 - 10.00",    "Dosen" =>    "Yana",    "Ruang" =>    "GSG206",    "Mata_Kuliah" =>    "Bahasa Indonesia",    "Tahun_Ajaran" =>    "2022/2023",    "Semester" =>    "Semester 1"],
    ["Hari" =>    "Kamis",    "Slot_Waktu" =>    "10.00 - 11.05",    "Dosen" =>    "Yana",    "Ruang" =>    "GSG206",    "Mata_Kuliah" =>    "Bahasa Indonesia",    "Tahun_Ajaran" =>    "2022/2023",    "Semester" =>    "Semester 1"],
    ["Hari" =>    "Jumat",    "Slot_Waktu" =>    "08.20 - 09.10",    "Dosen" =>    "Rizkielisa",    "Ruang" =>    "AA304",    "Mata_Kuliah" =>    "Teknologi Multimedia",    "Tahun_Ajaran" =>    "2022/2023",    "Semester" =>    "Semester 1"],
    ["Hari" =>    "Jumat",    "Slot_Waktu" =>    "09.10 - 10.00",    "Dosen" =>    "Rizkielisa",    "Ruang" =>    "AA304",    "Mata_Kuliah" =>    "Teknologi Multimedia",    "Tahun_Ajaran" =>    "2022/2023",    "Semester" =>    "Semester 1"],
    ["Hari" =>    "Jumat",    "Slot_Waktu" =>    "10.00 - 11.05",    "Dosen" =>    "Heikal",    "Ruang" =>    "AA304",    "Mata_Kuliah" =>    "Teknologi Multimedia",    "Tahun_Ajaran" =>    "2022/2023",    "Semester" =>    "Semester 1"],
    ["Hari" =>    "Jumat",    "Slot_Waktu" =>    "11.05 - 11.55",    "Dosen" =>    "Heikal",    "Ruang" =>    "AA304",    "Mata_Kuliah" =>    "Teknologi Multimedia",    "Tahun_Ajaran" =>    "2022/2023",    "Semester" =>    "Semester 1"],
    ["Hari" =>    "Jumat",    "Slot_Waktu" =>    "12.45 - 13.35",    "Dosen" =>    "Mauldy",    "Ruang" =>    "AA303",    "Mata_Kuliah" =>    "Algoritma & Pemrograman",    "Tahun_Ajaran" =>    "2022/2023",    "Semester" =>    "Semester 1"],
    ["Hari" =>    "Jumat",    "Slot_Waktu" =>    "13.35 - 14.25",    "Dosen" =>    "Mauldy",    "Ruang" =>    "AA303",    "Mata_Kuliah" =>    "Algoritma & Pemrograman",    "Tahun_Ajaran" =>    "2022/2023",    "Semester" =>    "Semester 1"],
    ["Hari" =>    "Jumat",    "Slot_Waktu" =>    "14.25 - 15.15",    "Dosen" =>    "Mauldy",    "Ruang" =>    "AA303",    "Mata_Kuliah" =>    "Algoritma & Pemrograman",    "Tahun_Ajaran" =>    "2022/2023",    "Semester" =>    "Semester 1"],
    ["Hari" =>    "Jumat",    "Slot_Waktu" =>    "15.45 - 16.35",    "Dosen" =>    "Mauldy",    "Ruang" =>    "AA303",    "Mata_Kuliah" =>    "Algoritma & Pemrograman",    "Tahun_Ajaran" =>    "2022/2023",    "Semester" =>    "Semester 1"],
    ["Hari" =>    "Jumat",    "Slot_Waktu" =>    "16.35 - 17.25",    "Dosen" =>    "Mauldy",    "Ruang" =>    "AA303",    "Mata_Kuliah" =>    "Algoritma & Pemrograman",    "Tahun_Ajaran" =>    "2022/2023",    "Semester" =>    "Semester 1"],
    ["Hari" =>    "Senin",    "Slot_Waktu" =>    "11.05 - 11.55",    "Dosen" =>    "Irawati",    "Ruang" =>    "AA205",    "Mata_Kuliah" =>    "Organisasi & Arsitektur Komputer",    "Tahun_Ajaran" =>    "2022/2023",    "Semester" =>    "Semester 1"],
    ["Hari" =>    "Senin",    "Slot_Waktu" =>    "12.45 - 13.35",    "Dosen" =>    "Irawati",    "Ruang" =>    "AA205",    "Mata_Kuliah" =>    "Organisasi & Arsitektur Komputer",    "Tahun_Ajaran" =>    "2022/2023",    "Semester" =>    "Semester 1"],
    ["Hari" =>    "Senin",    "Slot_Waktu" =>    "13.35 - 14.25",    "Dosen" =>    "Irawati",    "Ruang" =>    "AA205",    "Mata_Kuliah" =>    "Organisasi & Arsitektur Komputer",    "Tahun_Ajaran" =>    "2022/2023",    "Semester" =>    "Semester 1"],
    ["Hari" =>    "Senin",    "Slot_Waktu" =>    "14.25 - 15.15",    "Dosen" =>    "Irawati",    "Ruang" =>    "AA205",    "Mata_Kuliah" =>    "Organisasi & Arsitektur Komputer",    "Tahun_Ajaran" =>    "2022/2023",    "Semester" =>    "Semester 1"],
    ["Hari" =>    "Selasa",    "Slot_Waktu" =>    "07.30 - 08.20",    "Dosen" =>    "Hata",    "Ruang" =>    "GSG209",    "Mata_Kuliah" =>    "Sistem Operasi",    "Tahun_Ajaran" =>    "2022/2023",    "Semester" =>    "Semester 1"],
    ["Hari" =>    "Selasa",    "Slot_Waktu" =>    "08.20 - 09.10",    "Dosen" =>    "Hata",    "Ruang" =>    "GSG209",    "Mata_Kuliah" =>    "Sistem Operasi",    "Tahun_Ajaran" =>    "2022/2023",    "Semester" =>    "Semester 1"],
    ["Hari" =>    "Selasa",    "Slot_Waktu" =>    "09.10 - 10.00",    "Dosen" =>    "Hata",    "Ruang" =>    "GSG209",    "Mata_Kuliah" =>    "Sistem Operasi",    "Tahun_Ajaran" =>    "2022/2023",    "Semester" =>    "Semester 1"],
    ["Hari" =>    "Selasa",    "Slot_Waktu" =>    "10.00 - 11.05",    "Dosen" =>    "Hata",    "Ruang" =>    "GSG209",    "Mata_Kuliah" =>    "Sistem Operasi",    "Tahun_Ajaran" =>    "2022/2023",    "Semester" =>    "Semester 1"],
    ["Hari" =>    "Selasa",    "Slot_Waktu" =>    "11.05 - 11.55",    "Dosen" =>    "Rizkielisa",    "Ruang" =>    "GSG210",    "Mata_Kuliah" =>    "Pengantar TIK",    "Tahun_Ajaran" =>    "2022/2023",    "Semester" =>    "Semester 1"],
    ["Hari" =>    "Selasa",    "Slot_Waktu" =>    "12.45 - 13.35",    "Dosen" =>    "Rizkielisa",    "Ruang" =>    "GSG210",    "Mata_Kuliah" =>    "Pengantar TIK",    "Tahun_Ajaran" =>    "2022/2023",    "Semester" =>    "Semester 1"],
    ["Hari" =>    "Selasa",    "Slot_Waktu" =>    "13.35 - 14.25",    "Dosen" =>    "Haekal",    "Ruang" =>    "GSG210",    "Mata_Kuliah" =>    "Pengantar TIK",    "Tahun_Ajaran" =>    "2022/2023",    "Semester" =>    "Semester 1"],
    ["Hari" =>    "Selasa",    "Slot_Waktu" =>    "14.25 - 15.15",    "Dosen" =>    "Haekal",    "Ruang" =>    "GSG210",    "Mata_Kuliah" =>    "Pengantar TIK",    "Tahun_Ajaran" =>    "2022/2023",    "Semester" =>    "Semester 1"],
    ["Hari" =>    "Rabu",    "Slot_Waktu" =>    "07.30 - 08.20",    "Dosen" =>    "Dewi K",    "Ruang" =>    "GSG211",    "Mata_Kuliah" =>    "Bahasa Inggris TIK 1",    "Tahun_Ajaran" =>    "2022/2023",    "Semester" =>    "Semester 1"],
    ["Hari" =>    "Rabu",    "Slot_Waktu" =>    "08.20 - 09.10",    "Dosen" =>    "Dewi K",    "Ruang" =>    "GSG211",    "Mata_Kuliah" =>    "Bahasa Inggris TIK 1",    "Tahun_Ajaran" =>    "2022/2023",    "Semester" =>    "Semester 1"],
    ["Hari" =>    "Rabu",    "Slot_Waktu" =>    "09.10 - 10.00",    "Dosen" =>    "Ratna",    "Ruang" =>    "GSG211",    "Mata_Kuliah" =>    "Bahasa Inggris TIK 1",    "Tahun_Ajaran" =>    "2022/2023",    "Semester" =>    "Semester 1"],
    ["Hari" =>    "Rabu",    "Slot_Waktu" =>    "10.00 - 11.05",    "Dosen" =>    "Ratna",    "Ruang" =>    "GSG211",    "Mata_Kuliah" =>    "Bahasa Inggris TIK 1",    "Tahun_Ajaran" =>    "2022/2023",    "Semester" =>    "Semester 1"],
    ["Hari" =>    "Rabu",    "Slot_Waktu" =>    "12.45 - 13.35",    "Dosen" =>    "Yusuf",    "Ruang" =>    "GSG206",    "Mata_Kuliah" =>    "Pendidikan Agama",    "Tahun_Ajaran" =>    "2022/2023",    "Semester" =>    "Semester 1"],
    ["Hari" =>    "Rabu",    "Slot_Waktu" =>    "13.35 - 14.25",    "Dosen" =>    "Yusuf",    "Ruang" =>    "GSG206",    "Mata_Kuliah" =>    "Pendidikan Agama",    "Tahun_Ajaran" =>    "2022/2023",    "Semester" =>    "Semester 1"],
    ["Hari" =>    "Kamis",    "Slot_Waktu" =>    "07.30 - 08.20",    "Dosen" =>    "Agus",    "Ruang" =>    "GSG212",    "Mata_Kuliah" =>    "Matematika Diskrit",    "Tahun_Ajaran" =>    "2022/2023",    "Semester" =>    "Semester 1"],
    ["Hari" =>    "Kamis",    "Slot_Waktu" =>    "08.20 - 09.10",    "Dosen" =>    "Agus",    "Ruang" =>    "GSG212",    "Mata_Kuliah" =>    "Matematika Diskrit",    "Tahun_Ajaran" =>    "2022/2023",    "Semester" =>    "Semester 1"],
    ["Hari" =>    "Kamis",    "Slot_Waktu" =>    "09.10 - 10.00",    "Dosen" =>    "Agus",    "Ruang" =>    "GSG212",    "Mata_Kuliah" =>    "Matematika Diskrit",    "Tahun_Ajaran" =>    "2022/2023",    "Semester" =>    "Semester 1"],
    ["Hari" =>    "Kamis",    "Slot_Waktu" =>    "10.00 - 11.05",    "Dosen" =>    "Agus",    "Ruang" =>    "GSG212",    "Mata_Kuliah" =>    "Matematika Diskrit",    "Tahun_Ajaran" =>    "2022/2023",    "Semester" =>    "Semester 1"],
    ["Hari" =>    "Kamis",    "Slot_Waktu" =>    "12.45 - 13.35",    "Dosen" =>    "Anggi",    "Ruang" =>    "AA303",    "Mata_Kuliah" =>    "Algoritma & Pemrograman",    "Tahun_Ajaran" =>    "2022/2023",    "Semester" =>    "Semester 1"],
    ["Hari" =>    "Kamis",    "Slot_Waktu" =>    "13.35 - 14.25",    "Dosen" =>    "Anggi",    "Ruang" =>    "AA303",    "Mata_Kuliah" =>    "Algoritma & Pemrograman",    "Tahun_Ajaran" =>    "2022/2023",    "Semester" =>    "Semester 1"],
    ["Hari" =>    "Kamis",    "Slot_Waktu" =>    "14.25 - 15.15",    "Dosen" =>    "Anggi",    "Ruang" =>    "AA303",    "Mata_Kuliah" =>    "Algoritma & Pemrograman",    "Tahun_Ajaran" =>    "2022/2023",    "Semester" =>    "Semester 1"],
    ["Hari" =>    "Kamis",    "Slot_Waktu" =>    "15.45 - 16.35",    "Dosen" =>    "Anggi",    "Ruang" =>    "AA303",    "Mata_Kuliah" =>    "Algoritma & Pemrograman",    "Tahun_Ajaran" =>    "2022/2023",    "Semester" =>    "Semester 1"],
    ["Hari" =>    "Kamis",    "Slot_Waktu" =>    "16.35 - 17.25",    "Dosen" =>    "Anggi",    "Ruang" =>    "AA303",    "Mata_Kuliah" =>    "Algoritma & Pemrograman",    "Tahun_Ajaran" =>    "2022/2023",    "Semester" =>    "Semester 1"],
    ["Hari" =>    "Jumat",    "Slot_Waktu" =>    "08.20 - 09.10",    "Dosen" =>    "Linda",    "Ruang" =>    "GSG210",    "Mata_Kuliah" =>    "Bahasa Indonesia",    "Tahun_Ajaran" =>    "2022/2023",    "Semester" =>    "Semester 1"],
    ["Hari" =>    "Jumat",    "Slot_Waktu" =>    "09.10 - 10.00",    "Dosen" =>    "Linda",    "Ruang" =>    "GSG210",    "Mata_Kuliah" =>    "Bahasa Indonesia",    "Tahun_Ajaran" =>    "2022/2023",    "Semester" =>    "Semester 1"],
    ["Hari" =>    "Jumat",    "Slot_Waktu" =>    "10.15 - 11.05",    "Dosen" =>    "Ayres",    "Ruang" =>    "GSG210",    "Mata_Kuliah" =>    "Pancasila",    "Tahun_Ajaran" =>    "2022/2023",    "Semester" =>    "Semester 1"],
    ["Hari" =>    "Jumat",    "Slot_Waktu" =>    "11.05 - 11.55",    "Dosen" =>    "Ayres",    "Ruang" =>    "GSG210",    "Mata_Kuliah" =>    "Pancasila",    "Tahun_Ajaran" =>    "2022/2023",    "Semester" =>    "Semester 1"],
    ["Hari" =>    "Jumat",    "Slot_Waktu" =>    "14.25 - 15.15",    "Dosen" =>    "Bambang",    "Ruang" =>    "GSG210",    "Mata_Kuliah" =>    "Teknologi Multimedia",    "Tahun_Ajaran" =>    "2022/2023",    "Semester" =>    "Semester 1"],
    ["Hari" =>    "Jumat",    "Slot_Waktu" =>    "15.45 - 16.35",    "Dosen" =>    "Bambang",    "Ruang" =>    "GSG210",    "Mata_Kuliah" =>    "Teknologi Multimedia",    "Tahun_Ajaran" =>    "2022/2023",    "Semester" =>    "Semester 1"],
    ["Hari" =>    "Jumat",    "Slot_Waktu" =>    "16.35 - 17.25",    "Dosen" =>    "Bambang",    "Ruang" =>    "GSG210",    "Mata_Kuliah" =>    "Teknologi Multimedia",    "Tahun_Ajaran" =>    "2022/2023",    "Semester" =>    "Semester 1"],
    ["Hari" =>    "Jumat",    "Slot_Waktu" =>    "17.25 - 18.15",    "Dosen" =>    "Bambang",    "Ruang" =>    "GSG210",    "Mata_Kuliah" =>    "Teknologi Multimedia",    "Tahun_Ajaran" =>    "2022/2023",    "Semester" =>    "Semester 1"],
    ["Hari" => "Senin", "Slot_Waktu" => "07.30 - 08.20", "Dosen" => "Euis", "Ruang" => "GSG202", "Mata_Kuliah" => "Metode Numerik", "Tahun_Ajaran" => "2022/2023", "Semester" => "Semester 3"],
    ["Hari" => "Senin", "Slot_Waktu" => "08.20 - 09.10", "Dosen" => "Euis", "Ruang" => "GSG202", "Mata_Kuliah" => "Metode Numerik", "Tahun_Ajaran" => "2022/2023", "Semester" => "Semester 3"],
    ["Hari" => "Senin", "Slot_Waktu" => "09.10 - 10.00", "Dosen" => "Euis", "Ruang" => "GSG202", "Mata_Kuliah" => "Metode Numerik", "Tahun_Ajaran" => "2022/2023", "Semester" => "Semester 3"],
    ["Hari" => "Senin", "Slot_Waktu" => "10.15 - 11.05", "Dosen" => "Anita", "Ruang" => "GSG202", "Mata_Kuliah" => "Analisis & Desain Sistem Informasi", "Tahun_Ajaran" => "2022/2023", "Semester" => "Semester 3"],
    ["Hari" => "Senin", "Slot_Waktu" => "11.05 - 11.55", "Dosen" => "Anita", "Ruang" => "GSG202", "Mata_Kuliah" => "Analisis & Desain Sistem Informasi", "Tahun_Ajaran" => "2022/2023", "Semester" => "Semester 3"],
    ["Hari" => "Senin", "Slot_Waktu" => "12.45 - 13.35", "Dosen" => "Anita", "Ruang" => "GSG202", "Mata_Kuliah" => "Analisis & Desain Sistem Informasi", "Tahun_Ajaran" => "2022/2023", "Semester" => "Semester 3"],
    ["Hari" => "Senin", "Slot_Waktu" => "13.35 - 14.25", "Dosen" => "Anita", "Ruang" => "GSG202", "Mata_Kuliah" => "Analisis & Desain Sistem Informasi", "Tahun_Ajaran" => "2022/2023", "Semester" => "Semester 3"],
    ["Hari" => "Selasa", "Slot_Waktu" => "07.30 - 08.20", "Dosen" => "Fachroni", "Ruang" => "GSG207", "Mata_Kuliah" => "Sistem Terdistribusi", "Tahun_Ajaran" => "2022/2023", "Semester" => "Semester 3"],
    ["Hari" => "Selasa", "Slot_Waktu" => "08.20 - 09.10", "Dosen" => "Fachroni", "Ruang" => "GSG207", "Mata_Kuliah" => "Sistem Terdistribusi", "Tahun_Ajaran" => "2022/2023", "Semester" => "Semester 3"],
    ["Hari" => "Selasa", "Slot_Waktu" => "09.10 - 10.00", "Dosen" => "Fachroni", "Ruang" => "GSG207", "Mata_Kuliah" => "Sistem Terdistribusi", "Tahun_Ajaran" => "2022/2023", "Semester" => "Semester 3"],
    ["Hari" => "Selasa", "Slot_Waktu" => "10.15 - 11.05", "Dosen" => "Fachroni", "Ruang" => "GSG207", "Mata_Kuliah" => "Sistem Terdistribusi", "Tahun_Ajaran" => "2022/2023", "Semester" => "Semester 3"],
    ["Hari" => "Selasa", "Slot_Waktu" => "11.05 - 12.45", "Dosen" => "Risna", "Ruang" => "AA301", "Mata_Kuliah" => "Pemrograman Basis Data", "Tahun_Ajaran" => "2022/2023", "Semester" => "Semester 3"],
    ["Hari" => "Selasa", "Slot_Waktu" => "12.45 - 13.35", "Dosen" => "Risna", "Ruang" => "AA301", "Mata_Kuliah" => "Pemrograman Basis Data", "Tahun_Ajaran" => "2022/2023", "Semester" => "Semester 3"],
    ["Hari" => "Selasa", "Slot_Waktu" => "13.35 - 14.25", "Dosen" => "Risna", "Ruang" => "AA301", "Mata_Kuliah" => "Pemrograman Basis Data", "Tahun_Ajaran" => "2022/2023", "Semester" => "Semester 3"],
    ["Hari" => "Selasa", "Slot_Waktu" => "14.25 - 15.15", "Dosen" => "Risna", "Ruang" => "AA301", "Mata_Kuliah" => "Pemrograman Basis Data", "Tahun_Ajaran" => "2022/2023", "Semester" => "Semester 3"],
    ["Hari" => "Rabu", "Slot_Waktu" => "07.30 - 08.20", "Dosen" => "Mauldy", "Ruang" => "GSG208", "Mata_Kuliah" => "Grafika Komputer", "Tahun_Ajaran" => "2022/2023", "Semester" => "Semester 3"],
    ["Hari" => "Rabu", "Slot_Waktu" => "08.20 - 09.10", "Dosen" => "Mauldy", "Ruang" => "GSG208", "Mata_Kuliah" => "Grafika Komputer", "Tahun_Ajaran" => "2022/2023", "Semester" => "Semester 3"],
    ["Hari" => "Rabu", "Slot_Waktu" => "09.10 - 10.00", "Dosen" => "Mauldy", "Ruang" => "GSG208", "Mata_Kuliah" => "Grafika Komputer", "Tahun_Ajaran" => "2022/2023", "Semester" => "Semester 3"],
    ["Hari" => "Rabu", "Slot_Waktu" => "10.15 - 11.05", "Dosen" => "Mauldy", "Ruang" => "GSG208", "Mata_Kuliah" => "Grafika Komputer", "Tahun_Ajaran" => "2022/2023", "Semester" => "Semester 3"],
    ["Hari" => "Rabu", "Slot_Waktu" => "11.05 - 11.55", "Dosen" => "Iwan", "Ruang" => "GSG208", "Mata_Kuliah" => "Desain UI/UX", "Tahun_Ajaran" => "2022/2023", "Semester" => "Semester 3"],
    ["Hari" => "Rabu", "Slot_Waktu" => "12.45 - 13.35", "Dosen" => "Iwan", "Ruang" => "GSG208", "Mata_Kuliah" => "Desain UI/UX", "Tahun_Ajaran" => "2022/2023", "Semester" => "Semester 3"],
    ["Hari" => "Rabu", "Slot_Waktu" => "13.35 - 14.25", "Dosen" => "Iwan", "Ruang" => "GSG208", "Mata_Kuliah" => "Desain UI/UX", "Tahun_Ajaran" => "2022/2023", "Semester" => "Semester 3"],
    ["Hari" => "Rabu", "Slot_Waktu" => "14.25 - 15.15", "Dosen" => "Iwan", "Ruang" => "GSG208", "Mata_Kuliah" => "Desain UI/UX", "Tahun_Ajaran" => "2022/2023", "Semester" => "Semester 3"],
    ["Hari" => "Kamis", "Slot_Waktu" => "07.30 - 08.20", "Dosen" => "Anggi", "Ruang" => "AA303", "Mata_Kuliah" => "Pemrograman Web Lanjut", "Tahun_Ajaran" => "2022/2023", "Semester" => "Semester 3"],
    ["Hari" => "Kamis", "Slot_Waktu" => "08.20 - 09.10", "Dosen" => "Anggi", "Ruang" => "AA303", "Mata_Kuliah" => "Pemrograman Web Lanjut", "Tahun_Ajaran" => "2022/2023", "Semester" => "Semester 3"],
    ["Hari" => "Kamis", "Slot_Waktu" => "09.10 - 10.00", "Dosen" => "Anggi", "Ruang" => "AA303", "Mata_Kuliah" => "Pemrograman Web Lanjut", "Tahun_Ajaran" => "2022/2023", "Semester" => "Semester 3"],
    ["Hari" => "Kamis", "Slot_Waktu" => "10.15 - 11.05", "Dosen" => "Anggi", "Ruang" => "AA303", "Mata_Kuliah" => "Pemrograman Web Lanjut", "Tahun_Ajaran" => "2022/2023", "Semester" => "Semester 3"],
    ["Hari" => "Kamis", "Slot_Waktu" => "12.45 - 13.35", "Dosen" => "Rizki Elisa", "Ruang" => "AA304", "Mata_Kuliah" => "Manajemen Proyek TIK", "Tahun_Ajaran" => "2022/2023", "Semester" => "Semester 3"],
    ["Hari" => "Kamis", "Slot_Waktu" => "13.35 - 14.25", "Dosen" => "Rizki Elisa", "Ruang" => "AA304", "Mata_Kuliah" => "Manajemen Proyek TIK", "Tahun_Ajaran" => "2022/2023", "Semester" => "Semester 3"],
    ["Hari" => "Kamis", "Slot_Waktu" => "14.25 - 15.15", "Dosen" => "Rizki Elisa", "Ruang" => "AA304", "Mata_Kuliah" => "Manajemen Proyek TIK", "Tahun_Ajaran" => "2022/2023", "Semester" => "Semester 3"],
    ["Hari" => "Kamis", "Slot_Waktu" => "15.45 - 16.35", "Dosen" => "Rizki Elisa", "Ruang" => "AA304", "Mata_Kuliah" => "Manajemen Proyek TIK", "Tahun_Ajaran" => "2022/2023", "Semester" => "Semester 3"],
    ["Hari" => "Jumat", "Slot_Waktu" => "07.30 - 08.20", "Dosen" => "Basam", "Ruang" => "AA301", "Mata_Kuliah" => "Pemrograman Visual", "Tahun_Ajaran" => "2022/2023", "Semester" => "Semester 3"],
    ["Hari" => "Jumat", "Slot_Waktu" => "08.20 - 09.10", "Dosen" => "Basam", "Ruang" => "AA301", "Mata_Kuliah" => "Pemrograman Visual", "Tahun_Ajaran" => "2022/2023", "Semester" => "Semester 3"],
    ["Hari" => "Jumat", "Slot_Waktu" => "09.10 - 10.00", "Dosen" => "Basam", "Ruang" => "AA301", "Mata_Kuliah" => "Pemrograman Visual", "Tahun_Ajaran" => "2022/2023", "Semester" => "Semester 3"],
    ["Hari" => "Jumat", "Slot_Waktu" => "10.15 - 11.05", "Dosen" => "Basam", "Ruang" => "AA301", "Mata_Kuliah" => "Pemrograman Visual", "Tahun_Ajaran" => "2022/2023", "Semester" => "Semester 3"],
    ["Hari" => "Jumat", "Slot_Waktu" => "12.45 - 13.35", "Dosen" => "Defiana", "Ruang" => "AA205", "Mata_Kuliah" => "Keamanan Informasi", "Tahun_Ajaran" => "2022/2023", "Semester" => "Semester 3"],
    ["Hari" => "Jumat", "Slot_Waktu" => "13.35 - 14.25", "Dosen" => "Defiana", "Ruang" => "AA205", "Mata_Kuliah" => "Keamanan Informasi", "Tahun_Ajaran" => "2022/2023", "Semester" => "Semester 3"],
    ["Hari" => "Jumat", "Slot_Waktu" => "14.25 - 15.15", "Dosen" => "Defiana", "Ruang" => "AA205", "Mata_Kuliah" => "Keamanan Informasi", "Tahun_Ajaran" => "2022/2023", "Semester" => "Semester 3"],
    ["Hari" => "Jumat", "Slot_Waktu" => "15.45 - 16.35", "Dosen" => "Defiana", "Ruang" => "AA205", "Mata_Kuliah" => "Keamanan Informasi", "Tahun_Ajaran" => "2022/2023", "Semester" => "Semester 3"]
];
?>
<?php
function displayTable($arr, $adminStatus)
{
    $no = 1;
    foreach ($arr as $value) {
        echo "<tr>";
        echo "<td>" . $no++ . "</td>";
        echo "<td>" . $value['Hari'] . "</td>";
        echo "<td>" . $value['Slot_Waktu'] . "</td>";
        echo "<td>" . $value['Dosen'] . "</td>";
        echo "<td>" . $value['Ruang'] . "</td>";
        echo "<td>" . $value['Mata_Kuliah'] . "</td>";
        echo "<td>" . $value['Tahun_Ajaran'] . "</td>";
        echo "<td>" . $value['Semester'] . "</td>";
        if($adminStatus){
            echo "<td> <a>Edit</a> | <a>Delete</a> </td>";
        }
        "</tr>";
    }
}
function searchTable($arr, $query)
{
    $no = 1;
    foreach ($arr as $value) {
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


                "</tr>";
                $no = $no + 1;
                break;
            }
        }
    }
}
?>
<?php

?>

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
    
    <?php
    if (isset($_POST['uname'])) {
        $name = $_POST['uname'];
    }
    echo "<h1>Selamat Datang $name!</h1> <br>";
    if (isset($_POST['adminlogin'])) {
        echo $_POST['adminlogin'];
        if ($_POST['adminlogin'] == true) {
            $isadmin = true;
            echo '
            <form action="upload.php" method="post" enctype="multipart/form-data" align="center">
            Select File:
            <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
            </form>';
        }
    }
    ?>

    <form method="post" align="center">
        <input type="text" name="inputan" placeholder="search...">
        <input type="submit" name="search" value="search" class="palebtn1">
        <input type="hidden" name="adminlogin" value="<?php echo $isadmin; ?>">
        <input type="hidden" name="uname" value="<?php echo $name; ?>">
    </form>
    <div class="tabel">
        <table border="2" align="center" id="tabeljadwal">
            <th onclick="sortTable(0)">No</th>
            <th onclick="sortTable(1)">Hari</th>
            <th onclick="sortTable(2)">Slot Waktu</th>
            <th onclick="sortTable(3)">Dosen</th>
            <th onclick="sortTable(4)">Ruang</th>
            <th onclick="sortTable(5)">Mata Kuliah</th>
            <th onclick="sortTable(6)">Tahun Ajaran</th>
            <th onclick="sortTable(7)">Semester</th>
            <?php if($isadmin){echo "<th>Controls</th>";}
            if (isset($_POST['search'])) {
                searchTable($jadwal, $_POST['inputan']);
            } else {
                displayTable($jadwal, $isadmin);
            }
            ?>
        </table>
    </div>





    <script>
        function hasClass(el, className) {
            if (el.classList)
                return el.classList.contains(className);
            return !!el.className.match(new RegExp('(\\s|^)' + className + '(\\s|$)'));
        }

        function addClass(el, className) {
            if (el.classList)
                el.classList.add(className)
            else if (!hasClass(el, className))
                el.className += " " + className;
        }

        function removeClass(el, className) {
            if (el.classList)
                el.classList.remove(className)
            else if (hasClass(el, className)) {
                var reg = new RegExp('(\\s|^)' + className + '(\\s|$)');
                el.className = el.className.replace(reg, ' ');
            }
        }

        function sortTable(n) {
            //Sort
            var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
            table = document.getElementById("tabeljadwal");
            switching = true;
            dir = "asc";

            while (switching) {
                switching = false;
                rows = table.rows;
                for (i = 1; i < (rows.length - 1); i++) {
                    shouldSwitch = false;
                    x = rows[i].getElementsByTagName("TD")[n];
                    y = rows[i + 1].getElementsByTagName("TD")[n];
                    if (dir == "asc") {
                        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                            shouldSwitch = true;
                            break;
                        }
                    } else if (dir == "desc") {
                        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                            shouldSwitch = true;
                            break;
                        }
                    }
                }
                if (shouldSwitch) {
                    rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                    switching = true;
                    switchcount++;
                } else {
                    if (switchcount == 0 && dir == "asc") {
                        dir = "desc";
                        switching = true;
                    }
                }
            }
            //Tambahan: Teksnya
            headers = table.getElementsByTagName("th");
            for (i = 0; i < headers.length; i++) {
                removeClass(headers[i], "headerSortUp");
                removeClass(headers[i], "headerSortDown");
            }
            console.log(headers[n].innerHTML);
            if (dir == "asc") {
                if (addClass(headers[n], "headerSortUp"));
            } else {
                if (addClass(headers[n], "headerSortDown"));
            }

        }
    </script>
</body>

</html>