<?php
require 'app/functions/MY_model.php';
$gurus = get("SELECT * FROM guru");

$no = 1;

?>

<!-- User Table -->
<section id="column-selectors">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Guru</h4>
          <a href="?page=tambah-guru" class="btn btn-primary round waves-effect waves-light">
            Tambah Guru
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
                    <th>Mata Pelajaran</th>
                    <th>Jadwal</th>
                    <th>Alamat</th>
                    <th>Nomor Telepon</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($gurus as $guru) : ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $guru['nama_guru']; ?></td>
                      <td><?= $guru['mata_pelajaran']; ?></td>
                      <td><?= $guru['jadwal']; ?></td>
                      <td><?= $guru['alamat']; ?></td>
                      <td><?= $guru['telephone']; ?></td>
                      <td>
                        <a href="?page=edit-guru&id=<?= $guru['id']; ?>"><i class="m-1 feather icon-edit-2"></i></a>
                        <a href="?page=hapus-guru&id=<?= $guru['id']; ?>" class="btn-hapus">
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