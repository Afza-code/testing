<?php
// cek apakah ada data di $_GET
    if(!isset($_GET["nama"]) ||
        !isset($_GET["nim"]) ||
        !isset($_GET["prodi"]) ||
        !isset($_GET["angkatan"]) ||
        !isset($_GET["jenjang"])){
        // redirect
        header("Location: latihan_get.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Get 2</title>
</head>
<body>
    <h1>Data Lengkap Mahasiswa</h1>
    
   
        
        <?php if($_GET["gambar"] == true) { ?>
        <img src="img/<?= $_GET["gambar"] ?> ?>">
        <?php }else {?>
            <p>Foto Belum Ada</p>
        <?php }?>
    
    <ul>
            <li>Nama : <?= $_GET["nama"]; ?></li>
            <li>Nim : <?= $_GET["nim"] ?></li>
            <li>Prodi : <?= $_GET["prodi"] ?></li>
            <li>Jenjang : <?= $_GET["jenjang"] ?> <?= $_GET["tingkat"] ?></li>
            <li>angkatan : <?= $_GET["angkatan"] ?></li>
    </ul>

    <a href="latihan_get.php">Kembali ke halaman awal</a>
    
</body>
</html>
