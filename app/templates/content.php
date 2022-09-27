<?php
if (isset($_GET['page'])) {

	switch ($_GET['page']) {
		case 'dokter':
			require 'app/dokter/views/index.php';
			break;
		case 'tambah-dokter':
			require 'app/dokter/views/create.php';
			break;
		case 'edit-dokter':
			require 'app/dokter/views/edit.php';
			break;
		case 'hapus-dokter':
			require 'app/dokter/proses/delete.php';
			break;
		case 'pasien':
			require 'app/pasien/views/index.php';
			break;
		case 'tambah-pasien':
			require 'app/pasien/views/create.php';
			break;
		case 'edit-pasien':
			require 'app/pasien/views/edit.php';
			break;
		case 'hapus-pasien':
			require 'app/pasien/proses/delete.php';
			break;
		case 'obat':
			require 'app/obat/views/index.php';
			break;
		case 'tambah-obat':
			require 'app/obat/views/create.php';
			break;
		case 'edit-obat':
			require 'app/obat/views/edit.php';
			break;
		case 'hapus-obat':
			require 'app/obat/proses/delete.php';
			break;
		case 'ruang':
			require 'app/ruang/views/index.php';
			break;
		case 'tambah-ruang':
			require 'app/ruang/views/create.php';
			break;
		case 'edit-ruang':
			require 'app/ruang/views/edit.php';
			break;
		case 'hapus-ruang':
			require 'app/ruang/proses/delete.php';
			break;
		case 'rekam-medis':
			require 'app/rekam-medis/views/index.php';
			break;
		case 'tambah-rekam-medis':
			require 'app/rekam-medis/views/create.php';
			break;
		case 'edit-rekam-medis':
			require 'app/rekam-medis/views/edit.php';
			break;
		case 'hapus-rekam-medis':
			require 'app/rekam-medis/proses/delete.php';
			break;
		case 'lap-rekam-medis':
			require 'app/laporan/views/rekam-medis.php';
			break;
	}
} else {
	require 'app/dashboard/views/index.php';
}
