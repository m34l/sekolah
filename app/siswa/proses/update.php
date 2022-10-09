<?php
session_start();
require '../../functions/MY_model.php';

$id = $_POST['id'];
$nama_siswa = $_POST['nama_siswa'];
$berat_siswa = $_POST['berat_siswa'];
$tinggi_siswa = $_POST['tinggi_siswa'];
$nomor_identitas = $_POST['nomor_identitas'];
$alamat = $_POST['alamat'];
$telephone = $_POST['telephone'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$updated_at = date('Y-m-d H:i:s');
$updated_by = $_SESSION['user']['id'];
$query = "UPDATE siswa SET nomor_identitas = '$nomor_identitas', nama_siswa = '$nama_siswa', berat_siswa = '$berat_siswa', tinggi_siswa = '$tinggi_siswa' ,alamat = '$alamat', telephone = '$telephone', jenis_kelamin = '$jenis_kelamin', updated_at = '$updated_at', updated_by = '$updated_by' WHERE id = '$id'";
if (create($query) === 1) {
  echo '<script>document.location.href="../../../?page=siswa";</script>';
} else {
  echo mysqli_error($conn);
}
