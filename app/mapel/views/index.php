<?php
require 'app/functions/MY_model.php';
$mapels = get("SELECT * FROM mapel");

$no = 1;

?>

<!-- User Table -->
<section id="column-selectors">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Mata pelajaran</h4>
          <a href="?page=tambah-mapel" class="btn btn-primary round waves-effect waves-light">
            Tambah Mata pelajaran
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
                    <th>Keterangan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($mapels as $mapel) : ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $mapel['nama_mapel']; ?></td>
                      <td><?= $mapel['keterangan']; ?></td>
                      <td>
                        <a href="?page=edit-mapel&id=<?= $mapel['id']; ?>"><i class="m-1 feather icon-edit-2"></i></a>
                        <a href="?page=hapus-mapel&id=<?= $mapel['id']; ?>" class="btn-hapus"><i class="feather icon-trash"></i></a>
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
<?php $title = 'mapel'; ?>