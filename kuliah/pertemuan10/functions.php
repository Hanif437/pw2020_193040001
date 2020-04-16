<?php
//functions untuk melakukan koneksi ke database
function koneksi(){
    $conn = mysqli_connect("localhost", "root", "") or die ("Koneksi ke DB gagal!");
    mysqli_select_db($conn, "pw_193040001") or die ("Database Salah!");

    return $conn;
}

//function untuk melakukan query ke database
function query ($sql){
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}
