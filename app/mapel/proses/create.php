<?php
session_start();
require '../../functions/MY_model.php';
$nama_mapel = $_POST['nama_mapel'];
$keterangan = $_POST['keterangan'];
$created_at = date('Y-m-d H:i:s');
$created_by = $_SESSION['user']['id'];
$query = "INSERT INTO mapel VALUES('', '$nama_mapel', '$keterangan', '$created_at', '', '', '$created_by', '', '')";
if (create($query) === 1) {
  echo '<script>document.location.href="../../../?page=mapel";</script>';
} else {
  echo mysqli_error($conn);
}
