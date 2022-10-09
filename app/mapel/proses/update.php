<?php
session_start();
require '../../functions/MY_model.php';

$id = $_POST['id'];
$nama_mapel = $_POST['nama_mapel'];
$keterangan = $_POST['keterangan'];
$updated_at = date('Y-m-d H:i:s');
$updated_by = $_SESSION['user']['id'];
$query = "UPDATE mapel SET nama_mapel = '$nama_mapel', keterangan = '$keterangan', updated_at = '$updated_at', updated_by = '$updated_by' WHERE id = '$id'";
if (create($query) === 1) {
  echo '<script>document.location.href="../../../?page=mapel";</script>';
} else {
  echo mysqli_error($conn);
}
