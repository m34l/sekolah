<?php
require 'app/functions/MY_model.php';

$nama_pasien = $_GET['nama_pasien'];
$dokter_id = $_GET['dokter_id'];
if (delete("DELETE FROM antrian WHERE nama_pasien = '$nama_pasien' AND dokter_id='$dokter_id'") > 0) {
  echo "<script>alert('Antrian Berhasil Dihapus');</script>";
  echo "<script>location= '?page=antrian';</script>";
} else {
  echo "<script>alert('Antrian Gagal Dihapus');</script>";
  echo "<script>location= '?page=antrian';</script>";
}
