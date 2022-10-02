<?php
require 'app/functions/MY_model.php';
$antrians = get("SELECT * FROM antrian INNER JOIN dokter ON antrian.dokter_id = dokter.id");
$no = 1;

$title = 'pasien';
?>

<!-- User Table -->
<section id="column-selectors">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Antrian</h4>
        </div>
        <div class="card-content">
          <div class="card-body card-dashboard">
            <div class="table-responsive">
              <table class="table table-striped dataex-html5-selectors">
                <thead>
                  <tr>
                    <th></th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Nomor Telepon</th>
                    <th>Dokter</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($antrians as $antrian) : ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $antrian['nama_pasien']; ?></td>
                      <td><?= $antrian['alamat']; ?></td>
                      <td><?= $antrian['telephone']; ?></td>
                      <td><?= $antrian['nama_dokter']; ?></td>
                      <td>
                        <a href="?page=hapus-antrian&nama_pasien=<?= $antrian['nama_pasien']; ?>&dokter_id=<?= $antrian['dokter_id']; ?>" class="btn-hapus">
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
<?php $title = 'pasien'; ?>