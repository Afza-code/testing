<?php
    // koneksi ke database melalui file function
    require 'functions.php';

    // jika tombol daftar di tekan

    if (isset($_POST['register'])){

        if ( registrasi ($_POST) > 0){
            echo 
            "<script>
            alert('Selamat! Anda Berhasil Terdaftar');
            </script>";
        } else {
            echo mysqli_error($conn);
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
</head>

<style>
    label  {
        display: block;
    }
</style>
<body>
    
<form action="" method="post">

<h1>Halaman Registrasi</h1>
<ul>
    <li>
        <label for="username">Name</label>
        <input type="text" id="username" name="username" width="60" autofocus>
    </li>
    <br>
    <li>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" width="60">
    </li>
    <br>
    <li>
        <label for="password2">Konfirmasi Password</label>
        <input type="password" name="password2" id="password2" width="60">
    </li>
    <br>
    
</ul>
 <br><br>
<button type="submit" name="register">Daftar</button>
</form>

</body>
</html>