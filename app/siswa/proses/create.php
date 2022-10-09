<?php
session_start();
require '../../functions/MY_model.php';
$nama_siswa = $_POST['nama_siswa'];
$berat_siswa = $_POST['berat_siswa'];
$tinggi_siswa = $_POST['tinggi_siswa'];
$nomor_identitas = $_POST['nomor_identitas'];
$alamat = $_POST['alamat'];
$telephone = $_POST['telephone'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$created_at = date('Y-m-d H:i:s');
$created_by = $_SESSION['user']['id'];
$query = "INSERT INTO siswa VALUES('', '$nomor_identitas', '$nama_siswa', '$berat_siswa', '$tinggi_siswa', '$jenis_kelamin',  '$alamat', '$telephone', '$created_at', '', '', '$created_by', '', '')";
if (create($query) === 1) {
  echo '<script>document.location.href="../../../?page=siswa";</script>';
} else {
  echo mysqli_error($conn);
}
