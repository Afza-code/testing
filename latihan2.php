<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
</head>
<body>
    <?php $mahasiswa = [["Akmallutfi", 707012500064, "Sistem informasi kota cerdas", 2025, "49-04", "akmallutfiafzagusty@studenttelkomuniversity.ac.id"], 
    ["Rajudin", 707012500021, "Ilmu Komunikasi", 2025, "49-05", "muhammadrajudin@studenttelkomuniversity.ac.id"]] ?>
    <?php $kelas = [["49-01"], ["49-02"], ["49-03"]] ?>

    <?php foreach ($mahasiswa as $m): ?>
        <ul>
        <li>Nama  : <?= $m[0] ?></li>
        <li>NIM   : <?= $m[1] ?></li>
        <li>Jurusan : <?= $m[2] ?></li>
        <li>Angkatan : <?= $m[3] ?></li>
        <li>Kelas : <?= $m[4] ?></li>
        <li>Email : <?= $m[5] ?></li>
    </ul>
    <?php endforeach ?>
</body>
</html>