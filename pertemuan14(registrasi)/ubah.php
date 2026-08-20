<?php
    require 'functions.php';

    // ambil data URL dari id
    $id = $_GET["id"];

    // mengambil semua data mahasiswa 
    $mhs = query("SELECT * FROM lat_db1 WHERE id = $id")[0];

    // cek apakah tombol submit sudah di tekan atau belum
    if(isset($_POST["submit"])) {

        // cek apakah data sudah masuk ke database
        if(ubah($_POST) > 0){
            echo("
            <script>
                alert('data berhasil di ubah!');
                document.location.href = 'index.php';
            </script>
            ");
        } elseif (ubah($_POST) == 0){
            echo("
            <script>
                alert('tidak ada data yang di ubah!');
                document.location.href = 'index.php';
            </script>
            ");
        }else {
            echo("
            <script>
                alert('data gagal di ubah!');
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
    <title>Ubah Data Mahasiswa</title>
</head>
<body>
    <h1>Ubah Data Mahasiswa</h1>

    <ul>
    <form action="" method="post" enctype="multipart/form-data">

    <input type="hidden" name="id" value="<?= $mhs["id"] ?>">
    <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"] ?>">
        <li>
        <label for="nama">Name</label>
        <input type="text" id="nama" name="nama"
        required value="<?= $mhs["nama"] ?>">
        </li>

        <br>
        <li>
        <label for="nim">NIM</label>
        <input type="integer" id="nim" name="nim"
        required value="<?= $mhs["nim"] ?>">
        </li>

        <br>
        <li>
        <label for="prodi">Prodi</label>
        <input type="text" id="prodi" name="prodi"
        required value="<?= $mhs["prodi"] ?>">
        </li>

        <br>
        <li>
        <label for="email">Email</label>
        <input type="text" id="email" name="email"
        required value="<?= $mhs["email"] ?>">
        </li>

        <br>
        <li>
        <label for="gambar">Gambar</label><br>
        <img src="img/<?= $mhs["gambar"]; ?>" style="width: 80px; height: 80px; object-fit :cover;"><br>
        <input type="file" name="gambar" id="gambar">
        </li>

        <br>
        <br>
        <button type="submit" name="submit">Perbarui</button>
    </form>
    </ul>

    <br>
    <a href="index.php">Kembali</a>
</body>
</html>