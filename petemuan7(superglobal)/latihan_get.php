<?php
// variabel super global (variabel yang disediakan PHP)
// adalah array assosiatif

// $_GET
// $_POST
// $_REQUEST 
// $_SESSION 
// $_COOKIE 
// $_SERVER
// $_ENV


$mahasiswa = [
    [
    "nama" => "Akmallutfi Afza Gusty",
    "nim" => 707012500064,
    "jenjang" => "Sarjana Terapan",
    "tingkat" => 1,
    "prodi" => "Sistem Informasi Kota Cerdas",
    "angkatan" => 2025,
    "gambar" => "akmal.jpg"
],
[
    "nama" => "Muhammad Rajudin",
    "nim" => 707012500123,
    "jenjang" => "Sarjana",
    "tingkat" => 1,
    "prodi" => "Ilmu Komunikasi",
    "angkatan" => 2025,
    "gambar" => "komel2.jpg"
],
[
    "nama" => "Muhammad Dzaky",
    "nim" => 707012500011,
    "jenjang" => "Sarjana",
    "tingkat" => 1,
    "prodi" => "Teknik Agama",
    "angkatan" => 2020,
    "gambar" => "zakzong2.jpg"
],  
[
    "nama" => "Muhammad Ali Ar-Rahman",
    "nim" => 7123557709,
    "jenjang" => "Sarjana",
    "tingkat" => 1,
    "prodi" => "Teknik Dirgantara",
    "angkatan" => 2020,
    "gambar" => ""
],
[
    "nama" => "Muamar Dzaky",
    "nim" => 712355712334,
    "jenjang" => "Diploma",
    "tingkat" => 4,
    "prodi" => "Perhotelan",
    "angkatan" => 2020,
    "gambar" => ""
]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Get</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <p>Nama - nama mahasiswa yang ada di kampus bandung</p>

    <ul>
    <?php foreach($mahasiswa as $mhs) : ?>
        <li>
            <a href="latihan_get2.php?nama=<?= $mhs["nama"] ?>&nim=<?= $mhs["nim"] ?>&prodi=<?= $mhs["prodi"] ?>&gambar=<?= $mhs["gambar"] ?>&angkatan=<?= $mhs["angkatan"] ?>&jenjang=<?= $mhs["jenjang"] ?>&tingkat=<?= $mhs["tingkat"] ?>"><?= $mhs["nama"] ?></a>
        </li>

    <?php endforeach ?>
    </ul>

    
</body>
</html>
