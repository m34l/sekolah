<?php
require 'app/functions/MY_model.php';

$id = $_GET['id'];
$guru = get_where("SELECT * FROM guru WHERE id = '$id' ");

?>
<div class="content-header row">

  <div class="content-header-right col-md-12">
    <a href="?page=guru" class="btn btn-light float-right mb-2">Kembali</a>
  </div>
</div>
<section id="basic-horizontal-layouts">
  <div class="row match-height">
    <div class="col-md-12 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Edit Guru</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <form action="app/guru/proses/update.php" method="post">
              <input type="hidden" name="id" value="<?= $guru['id']; ?>">
              <div class="form-body">
                <div class="row">
                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Nama </label>
                      </div>
                      <div class="col-md-8">
                        <input type="text" placeholder="Nama" class="form-control" name="nama_guru" value="<?= $guru['nama_guru']; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Nomor Hp</label>
                      </div>
                      <div class="col-md-8">
                        <input type="text" placeholder="Nomor Hp" class="form-control" name="telephone" value="<?= $guru['telephone']; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Alamat</label>
                      </div>
                      <div class="col-md-8">
                        <textarea class="form-control" id="basicTextarea" rows="3" placeholder="Alamat" name="alamat"><?= $guru['alamat']; ?></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Mata Pelajaran</label>
                      </div>
                      <div class="col-md-8">
                        <input type="text" placeholder="mata_pelajaran" class="form-control" name="mata_pelajaran" value="<?= $guru['mata_pelajaran']; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Jadwal</label>
                      </div>
                      <div class="col-md-8">
                      <textarea class="form-control" id="basicTextarea" rows="3" placeholder="Jadwal" name="jadwal"><?= $guru['jadwal']; ?></textarea>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-8 offset-md-4">
                    <button type="submit" name="save" class="btn btn-primary">Save</button>
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