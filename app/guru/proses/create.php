<?php
session_start();
require '../../functions/MY_model.php';
$nama_guru = $_POST['nama_guru'];
$alamat = $_POST['alamat'];
$telephone = $_POST['telephone'];
$mata_pelajaran = $_POST['mata_pelajaran'];
$jadwal = $_POST['jadwal'];
$created_at = date('Y-m-d H:i:s');
$created_by = $_SESSION['user']['id'];
$query = "INSERT INTO guru VALUES('', '$nama_guru', '$alamat', '$telephone', '$mata_pelajaran', '$jadwal', '$created_at', '', '', '$created_by', '', '')";
if (create($query) === 1) {
  echo '<script>document.location.href="../../../?page=guru";</script>';
} else {
  echo mysqli_error($conn);
}
