<?php
require 'app/functions/MY_model.php';
$dokters = get("SELECT * FROM dokter");
?>
<div class="content-header row">

  <div class="content-header-right col-md-12">
    <a href="?page=pasien" class="btn btn-light float-right mb-2">Kembali</a>
  </div>
</div>
<section id="basic-horizontal-layouts">
  <div class="row match-height">
    <div class="col-md-12 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Booking Onlen</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <form action="app/antrian/proses/create.php" method="post">
              <div class="form-body">
                <div class="row">
                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Nama</label>
                      </div>
                      <div class="col-md-8">

                        <input type="text" placeholder="Nama Pasien" class="form-control" name="nama_pasien" required>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Nomor Hp</label>
                      </div>
                      <div class="col-md-8">
                        <input type="text" placeholder="Nomor Hp" class="form-control" name="telephone">
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Alamat</label>
                      </div>
                      <div class="col-md-8">
                        <textarea class="form-control" id="basicTextarea" rows="3" placeholder="Alamat" name="alamat" required></textarea>
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Dokter</label>
                      </div>
                      <div class="col-md-8">
                        <select class="select2 form-control" name="dokter_id" required>
                          <?php foreach ($dokters as $dokter) : ?>
                            <option value="<?= $dokter['id']; ?>"><?= $dokter['nama_dokter']; ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-danger">BOOKING SEKARANG</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>