<?php
require 'app/functions/MY_model.php';
$siswas = get("SELECT * FROM siswa");

$no = 1;

$title = 'siswa';
?>

<!-- User Table -->
<section id="column-selectors">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Siswa</h4>
          <a href="?page=tambah-siswa" class="btn btn-primary round waves-effect waves-light">
            Tambah Siswa
          </a>
        </div>
        <div class="card-content">
          <div class="card-body card-dashboard">
            <div class="table-responsive">
              <table class="table table-striped dataex-html5-selectors">
                <thead>
                  <tr>
                    <th></th>
                    <th>Nama</th>
                    <th>Berat/Tinggi Badan</th>
                    <th>Alamat</th>
                    <th>Nomor Telepon</th>
                    <th>Jenis Kelamin</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($siswas as $siswa) : ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $siswa['nama_siswa']; ?></td>
                      <td><?= $siswa['berat_siswa']; ?>KG / <?= $siswa['tinggi_siswa']; ?> CM</td>
                      <td><?= $siswa['alamat']; ?></td>
                      <td><?= $siswa['telephone']; ?></td>
                      <td><?= ($siswa['jenis_kelamin'] == 'l' ? 'Laki-laki' : 'Perempuan'); ?></td>
                      <td>
                        <a href="?page=edit-siswa&id=<?= $siswa['id']; ?>"><i class="m-1 feather icon-edit-2"></i></a>
                        <a href="?page=hapus-siswa&id=<?= $siswa['id']; ?>" class="btn-hapus">
                          <i class="feather icon-trash"></i>
                        </a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- User Table -->
<?php $title = 'siswa'; ?>