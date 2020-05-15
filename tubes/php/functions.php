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

function upload()
{
    $nama_file = $_FILES['foto']['name'];
    $tipe_file = $_FILES['foto']['type'];
    $ukuran_file = $_FILES['foto']['size'];
    $error = $_FILES['foto']['error'];
    $tmp_file = $_FILES['foto']['tmp_name'];

    if ($error == 4) {
        return 'banner.jpg';
    }

    $daftar_foto = ['jpg', 'jpeg', 'png'];
    $ekstensi_file = explode('.', $nama_file);
    $ekstensi_file = strtolower(end($ekstensi_file));
    if (!in_array($ekstensi_file, $daftar_foto)) {
        echo "<script>
              alert('Yang anda pilih bukan gambar!');
              </script>";
        return false;
    }

    if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
        echo "<script>
              alert('Yang anda pilih bukan gambar!');
              </script>";
        return false;
    }

    if ($ukuran_file > 5000000) {
        echo "<script>
              alert('Ukurannya terlalu besar!');
              </script>";
        return false;
    }


    $nama_file_baru = uniqid();
    $nama_file_baru .= '.';
    $nama_file_baru .= $ekstensi_file;

    move_uploaded_file($tmp_file, 'img/' . $nama_file_baru);
    return $nama_file_baru;
}

function tambah($data)
{
    $conn = koneksi();

    $foto = upload();
    if (!$foto) {
        return false;
    }

    $kode_barang = htmlspecialchars($data['kode_barang']);
    // $foto = htmlspecialchars($data['foto']);
    $nama = htmlspecialchars($data['nama']);
    $jenis_barang = htmlspecialchars($data['jenis_barang']);
    $harga = htmlspecialchars($data['harga']);

    $query = "INSERT INTO elektronik
                VALUES  
                (null, '$kode_barang', '$foto', '$nama', '$jenis_barang', '$harga')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();

    $elektro = query("SELECT * FROM elektronik WHERE id = $id");
    if ($elektro['foto'] != 'banner.jpg') {
        unlink('img/' . $elektro['foto']);
    }


    mysqli_query($conn, "DELETE FROM elektronik WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();

    $id = $data['id'];
    $kode_barang = htmlspecialchars($data['kode_barang']);
    $foto_lama = htmlspecialchars($data['foto_lama']);
    $nama = htmlspecialchars($data['nama']);
    $jenis_barang = htmlspecialchars($data['jenis_barang']);
    $harga = htmlspecialchars($data['harga']);


    $foto = upload();
    if (!$foto) {
        return false;
    }

    if ($foto == 'banner.jpg') {
        $foto = $foto_lama;
    }

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
