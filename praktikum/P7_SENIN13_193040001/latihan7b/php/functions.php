<?php
//functions untuk melakukan koneksi ke database
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "") or die("Koneksi ke DB gagal!");
    mysqli_select_db($conn, "tubes_193040001") or die("Database Salah!");

    return $conn;
}

//function untuk melakukan query ke database
function query($query)
{
    $conn = koneksi();
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        return mysqli_fetch_assoc($result);
    }

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
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

function hapus($id)
{
    $conn = koneksi();

    mysqli_query($conn, "DELETE FROM elektronik WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();

    $id = $data['id'];
    $kode_barang = htmlspecialchars($data['kode_barang']);
    $foto = htmlspecialchars($data['foto']);
    $nama = htmlspecialchars($data['nama']);
    $jenis_barang = htmlspecialchars($data['jenis_barang']);
    $harga = htmlspecialchars($data['harga']);

    $query = "UPDATE elektronik SET
                kode_barang = '$kode_barang',
                foto = '$foto',
                nama = '$nama',
                jenis_barang = '$jenis_barang',
                harga = '$harga'
                WHERE id = '$id'
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $conn = koneksi();

    $query = "SELECT * FROM elektronik
                WHERE kode_barang LIKE '%$keyword%'
                OR nama LIKE '%$keyword%'
                OR jenis_barang LIKE '%$keyword%'
                OR harga LIKE '%$keyword%'";
    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data['username']));
    $password = mysqli_real_escape_string($conn, $data['password']);

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
             alert ('Username Sudah Digunakan!')
             </script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    $query_tambah = "INSERT INTO user VALUES ('', '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}
