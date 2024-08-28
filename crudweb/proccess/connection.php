<?php 
    
    $servername = "localhost";
    $username   = "user";
    $password   = "12345";
    $dbname     = "employee";

    // Buat koneksi
    $conn = new mysqli($servername, $username, $password, $dbname);
    // $conn = new mysqli("localhost", "root", "", "employee");

    // Cek koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    // }else{
    //     echo "Connection successfuly!";
    // 
    }
?>