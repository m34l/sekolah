<?php
session_start();
require '../../functions/MY_model.php';

$id = $_POST['id'];
$nama_guru = $_POST['nama_guru'];
$alamat = $_POST['alamat'];
$telephone = $_POST['telephone'];
$mata_pelajaran = $_POST['mata_pelajaran'];
$jadwal = $_POST['jadwal'];
$updated_at = date('Y-m-d H:i:s');
$updated_by = $_SESSION['user']['id'];
$query = "UPDATE guru SET nama_guru = '$nama_guru', alamat = '$alamat', telephone = '$telephone', mata_pelajaran = '$mata_pelajaran', jadwal = '$jadwal', updated_at = '$updated_at', updated_by = '$updated_by' WHERE id = '$id'";
if (create($query) === 1) {
  echo '<script>document.location.href="../../../?page=guru";</script>';
} else {
  echo mysqli_error($conn);
}
