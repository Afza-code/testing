<?php
    // cek tombol sublit sudah di tekan atau belum 
    if (isset($_POST["nama"])) {

        // cek username dan password
        if ( $_POST["nama"] == "akmal" && $_POST["password"] == "123" ){

            // jika benar ridirect ke halaman admin.php
            header("Location: admin.php?");   
            exit;
        } else {
            // jika salah menampilkan pesan error
            $error = true;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<?php if (isset($error)) : ?>
<h1 style="color : red">Username dan Password yang anda masukkan salah</h1>
<?php endif ?>

<ul>
    <form action="" method="post">
    <li>
        <label for="username">Username</label>
        <input type="text" name="nama" id="username">
    </li>
    <li>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
    </li>
    <li>
        <button name="submit">Submit</button>
    </li>
    </form>
</ul>
</body>
</html>