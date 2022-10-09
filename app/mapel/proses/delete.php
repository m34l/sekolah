<?php
require 'app/functions/MY_model.php';

$id = $_GET['id'];

if (delete("DELETE FROM mapel WHERE id = '$id'") > 0) {
  echo "<script>alert('Data Berhasil Dihapus');</script>";
  echo "<script>location= '?page=mapel';</script>";
} else {
  echo "<script>alert('Data Gagal Dihapus');</script>";
  echo "<script>location= '?page=mapel';</script>";
}
