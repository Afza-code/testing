<?php
    // koneksi ke database

    $conn = mysqli_connect("localhost", "root", "", "php_dasar2");

    function query($query){

        global  $conn;
        $result = mysqli_query($conn, $query);

        $hasils = [];
        while( $hasil = mysqli_fetch_assoc($result)){
        $hasils[] = $hasil;
        }
        return $hasils;
    }

    function tambah($data){

        global $conn;

         // ambil data dari tiap elemen
        $nim = htmlspecialchars($data["nim"]);
        $nama = htmlspecialchars($data["nama"]);
        $prodi = htmlspecialchars($data["prodi"]);
        $email = htmlspecialchars($data["email"]);
        $gambar = htmlspecialchars($data["gambar"]);

        // query insert data ke database
        $query = "INSERT INTO lat_db1 
                    VALUES
                (NULL, '$nim', '$nama', '$prodi', '$email','$gambar')
                ";


        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function hapus($id){
        global $conn;

        mysqli_query($conn, "DELETE FROM lat_db1 WHERE id = $id");

        return mysqli_affected_rows($conn);
    }

    function ubah($data){
        global $conn;

         // ambil data dari tiap elemen
        $id = $data["id"];
        $nim = htmlspecialchars($data["nim"]);
        $nama = htmlspecialchars($data["nama"]);
        $prodi = htmlspecialchars($data["prodi"]);
        $email = htmlspecialchars($data["email"]);
        $gambar = htmlspecialchars($data["gambar"]);

        // query insert data ke database
        $query = "UPDATE lat_db1 SET
                nama = '$nama',
                nim = '$nim',
                prodi = '$prodi',
                email = '$email',
                gambar = '$gambar'
                WHERE id = $id
                ";


        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
?>