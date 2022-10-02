<?php
require '../../functions/MY_model.php';
$antrian = mysqli_query($conn, "SELECT * FROM antrian");
$count_antrian = mysqli_num_rows($antrian)+1;


$nama_pasien = $_POST['nama_pasien'];
$alamat = $_POST['alamat'];
$telephone = $_POST['telephone'];
$dokter_id = $_POST['dokter_id']; 
$created_at = date('Y-m-d H:i:s');
$created_by = '1';
$query = "INSERT INTO antrian VALUES('', '$nama_pasien','$alamat', '$telephone','$dokter_id', '$created_at', '', '', '$created_by', '', '')";
if (create($query) === 1) {
    echo "<script>alert('BOOKING BERHASIL NOMOR BOOKING ANDA ADALAH $count_antrian SCREENSHOOT BUKTI INI');</script>";
   echo "<script>location= '/klinik/landing';</script>";
} else {
  echo mysqli_error($conn);
}
