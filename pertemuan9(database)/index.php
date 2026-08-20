<?php
    require 'functios.php';

    // pemanggilan query
   $data = query("SELECT * FROM lat_db1");
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
<?php foreach ($data as $hasil) : ?>
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
<?php endforeach ?>

</table>
</body>
</html>