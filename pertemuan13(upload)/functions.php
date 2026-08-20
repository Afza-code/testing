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
        
        
        // upload gambar
        $gambar = upload();
        
        if (!$gambar) {
            return false;
        }

        // query insert data ke database
        $query = "INSERT INTO lat_db1 
                    VALUES
                (NULL, '$nim', '$nama', '$prodi', '$email','$gambar')
                ";


        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function upload(){
       
        $namaFile = $_FILES['gambar']['name'];
        $ukuranFile = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];
        $tmpName = $_FILES['gambar']['tmp_name'];
        
        // cek apakah tidak ada gambar yang di upload
        if ( $error === 4 ) {
            echo 
            "<script>
            alert('Masukkan Gambar Terlebih Dahulu!');
            </script>";

            return false;
        } 

        // cek apakah yang di upload adalah gambar
        $ekstensiGambarValid = ['jpg', 'jpeg', 'png', 'svg'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));

        if ( !in_array($ekstensiGambar, $ekstensiGambarValid)){

            echo 
            "<script>
            alert('Yang anda Masukkan Bukan Gambar!');
            </script>";

            return false;
        }

        if ($ukuranFile > 1000000){

            echo 
            "<script>
            alert('Ukuran gambar terlalu besar!');
            </script>";

            return false;
        }

        // lolos pengecekan, gambar siap diupload
        // generate nama file gambar baru agar tidak tabrakan.
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.' ;
        $namaFileBaru .= $ekstensiGambar;

        move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
        

        return $namaFileBaru;
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
        $gambarLama = htmlspecialchars($data["gambarLama"]);
        
        // cek apakah user upload gambar bari
        if ($_FILES['gambar']['error'] === 4){
            $gambar = $gambarLama;
        } else {
            $gambar = upload();
        }


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

    function cari($keyword){

  
        $query = "SELECT * FROM lat_db1 
        WHERE 
        nama LIKE '%$keyword%' OR
        nim LIKE '%$keyword%' OR
        prodi LIKE '%$keyword%' OR
        email LIKE '%$keyword%'
        ";

        return query($query);
    }
?>