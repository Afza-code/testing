<?php
    // koneksi ke database (syntax mysqli_connect di simpan dalam variabel agar mudah untuk penulisan)
    $conn = mysqli_connect("localhost", "root", "", "php_dasar"); 

    // mau ambil apa dari database / query apa yang diambil (syntax mysqli_query di simpan dalam variabel agar mudah untuk penulisan)
    $result = mysqli_query($conn, "SELECT * FROM lat_db1");

    // mengecek apakah data berhasil diambil dari database

    if (!$result) {
        echo mysqli_error($conn);
    }

    // mengambil data yang ada di dalam $result (fetch)
    // mysqli_fetch_row() => mengembalikan array numeric/angka
    // mysqli_fetch_assoc() => mengembalikan array assosiatif/string
    // mysqli_fetch_array() => mengembalikan array keduanya numeric dan assosiatif
    // mysqli_fetch_object() 

    // while ($hasil = mysqli_fetch_assoc($result)){

    // var_dump($hasil["nama"],["nim"],["email"]);

    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    
<h1>Daftar Mahasiswa</h1>
<table border="1" cellpadding="10" cellspacing="0">

<tr>
    <th>No.</th>
    <th>Aksi</th>
    <th>Gambar</th>
    <th>NIM</th>
    <th>Nama</th>
    <th>Email</th>
    <th>Prodi</th>
</tr>

<?php $i = 1; ?>
<?php while ($hasil = mysqli_fetch_assoc($result)) : ?>
<tr>
    <td>
            <p><?= $i; ?></p>
    </td>
    <td>
        <a href="">Ubah</a> |
        <a href="">Hapus</a>
    </td>
    <td>
        <img src="img/<?= $hasil["gambar"]; ?>" width="50" height="50">
    </td>
    <td><?= $hasil["nim"] ?></td>
    <td><?= $hasil["nama"] ?></td>
    <td><?= $hasil["email"] ?></td>
    <td><?= $hasil["prodi"] ?></td>
    
</tr>
<?php $i++; ?>
<?php endwhile ?>

</table>
</body>
</html>