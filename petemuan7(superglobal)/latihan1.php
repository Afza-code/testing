<?php
// Array numerik
// $mahasiswa = [
//     ["Akmallutfi Afza Gusty", 707012500064, "SIKC"],
//     ["Rajudin", 707012500014, "ILKOM"],
//     ["Dzaky", 707012500060, "TEKNIK"],
// ];

// Array Asosiatif
$mahasiswa = [
    [
    "Nama" => "Akmallutfi Afza Gusty",
    "NIM" => 707012500064,
    "Prodi" => "SIKC",
    "Angkatan" => 2025,
    "Gambar" => "akmal.jpg"
],
[
    "Nama" => "Muhammad Rajudin",
    "NIM" => 707012500123,
    "Prodi" => "ILKOM",
    "Angkatan" => 2025,
    "Gambar" => "komel2.jpg"
],
[
    "Nama" => "Muhammad Dzaky",
    "NIM" => 707012500011,
    "Prodi" => "TEKNIK",
    "Angkatan" => 2020,
    "Gambar" => "zakzong2.jpg"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>
<body>

    <h1>Daftar Mahasiswa di kampus telkom</h1>

    <?php foreach($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["Gambar"]  ?>">
            </li>
            <li>Nama : <?= $mhs["Nama"] ?></li>
            <li>NIM : <?= $mhs["NIM"] ?></li>
            <li>Prodi : <?= $mhs["Prodi"] ?></li>
            <li>Angkatan : <?= $mhs["Angkatan"] ?></li>
        </ul>
    <?php endforeach ?>
    

</body>
</html>