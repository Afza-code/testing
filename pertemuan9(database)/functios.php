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


?>