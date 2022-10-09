<?php
require 'app/functions/MY_model.php';

$id = $_GET['id'];

if (delete("DELETE FROM siswa WHERE id = '$id'") > 0) {
  echo "<script>alert('Data Berhasil Dihapus');</script>";
  echo "<script>location= '?page=siswa';</script>";
} else {
  echo "<script>alert('Data Gagal Dihapus');</script>";
  echo "<script>location= '?page=siswa';</script>";
}
