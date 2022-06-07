<?php
include("connect.php");

if (isset($_POST['daftar'])) {

    $id_mahasiswa = $_POST['id_mahasiswa'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $prodi = $_POST['prodi'];

    mysqli_query($db, "INSERT INTO mahasiswa VALUES
    ('$id_mahasiswa', '$nama', '$alamat', '$telepon', '$prodi')");

    // mengalihkan halaman kembali ke index.php
    header("location:index.php");
}