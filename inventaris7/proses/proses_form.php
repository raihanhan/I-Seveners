<?php
session_start();
require_once '../config/koneksi.php';

if (!isset($_SESSION['id'])) {
    header('location:../index');
}
$nama = $conn->real_escape_string($_POST['nama']);
$kelas = $conn->real_escape_string($_POST['kelas']);
$nis = $conn->real_escape_string($_POST['nis']);
$barang_tempat = $conn->real_escape_string($_POST['barang_tempat']);
$keterangan = $conn->real_escape_string($_POST['keterangan']);
$waktu = $conn->real_escape_string($_POST['waktu']);

if (!isset($nama, $kelas, $nis, $barang_tempat, $keterangan, $waktu)) {
    header('location:../data-barang');
}
$q="INSERT INTO detail_piinjaman VALUES ('','$nama','$kelas','$nis','$barang_tempat','$keterangan','$waktu')";
$query= $conn->query($q);
if($query){
    header('location: ../form.php');
    $_SESSION['pesan']= "formulir sudah diajukan";
}