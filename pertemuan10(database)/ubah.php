<?php
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Mahasiswa</title>
</head>
<body>
    <h1>Ubah Data Mahasiswa</h1>

    <ul>
    <form action="" method="post">
        <li>
        <label for="nama">Name</label>
        <input type="text" id="nama" name="nama"
        required>
        </li>

        <br>
        <li>
        <label for="nim">NIM</label>
        <input type="integer" id="nim" name="nim"
        required>
        </li>

        <br>
        <li>
        <label for="prodi">Prodi</label>
        <input type="text" id="prodi" name="prodi"
        required>
        </li>

        <br>
        <li>
        <label for="email">Email</label>
        <input type="text" id="email" name="email"
        required>
        </li>

        <br>
        <li>
        <label for="gambar">Gambar</label>
        <input type="text" id="gambar" name="gambar">
        </li>

        <br>
        <br>
        <button type="submit" name="submit">Submit</button>
    </form>
    </ul>

    <br>
    <a href="index.php">Kembali</a>
</body>
</html>