<?php
//functions untuk melakukan koneksi ke database
function koneksi(){
    $conn = mysqli_connect("localhost", "root", "") or die ("Koneksi ke DB gagal!");
    mysqli_select_db($conn, "tubes_193040001") or die ("Database Salah!");

    return $conn;
}

//function untuk melakukan query ke database
function query ($query){
    $conn = koneksi();
    $result = mysqli_query($conn, "$query");

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    $conn = koneksi();

    $kode_barang = htmlspecialchars($data['kode_barang']);
    $foto = htmlspecialchars($data['foto']);
    $nama = htmlspecialchars($data['nama']);
    $jenis_barang = htmlspecialchars($data['jenis_barang']);
    $harga = htmlspecialchars($data['harga']);

    $query = "INSERT INTO elektronik
                VALUES  
                ('', '$kode_barang', '$foto', '$nama', '$jenis_barang', '$harga')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
