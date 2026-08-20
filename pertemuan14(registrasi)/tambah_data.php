<?php
    require 'functions.php';
    // cek apakah tombol submit sudah di tekan atau belum
    if(isset($_POST["submit"])) {

        // cek apakah data sudah masuk ke database
        if(tambah($_POST) > 0){
            echo("
            <script>
                alert('data berhasil di tembahkan!');
                document.location.href = 'index.php';
            </script>
            ");
        } else {
            echo("
            <script>
                alert('data belum berhasil di tambahkan!');
                document.location.href = 'index.php';
            </script>
            ");
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>

    <ul>
    <form action="" method="post" enctype="multipart/form-data">
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
        <input type="file" name="gambar" id="gambar" >
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