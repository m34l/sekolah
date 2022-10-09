<?php
require 'app/functions/MY_model.php';

$id = $_GET['id'];
$siswa = get_where("SELECT * FROM siswa WHERE id = '$id' ");

?>
<div class="content-header row">

  <div class="content-header-right col-md-12">
    <a href="?page=siswa" class="btn btn-light float-right mb-2">Kembali</a>
  </div>
</div>
<section id="basic-horizontal-layouts">
  <div class="row match-height">
    <div class="col-md-12 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Edit Siswa</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <form action="app/siswa/proses/update.php" method="post">
              <input type="hidden" name="id" value="<?= $siswa['id']; ?>">
              <div class="form-body">
                <div class="row">

                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Nomor Identitas</label>
                      </div>
                      <div class="col-md-8">

                        <input type="text" placeholder="Nomor Identitas" class="form-control" name="nomor_identitas" value="<?= $siswa['nomor_identitas']; ?>">
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Nama </label>
                      </div>
                      <div class="col-md-8">
                        <input type="text" placeholder="Nama siswa" class="form-control" name="nama_siswa" value="<?= $siswa['nama_siswa']; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Berat & Tinggi Badan</label>
                      </div>
                      <div class="col-md-8">
                  <div class="input-group">
                  <span class="input-group-text">BB/TB</span>
                  <input type="text" name="berat_siswa" aria-label="Berat Badan" value="<?= $siswa['berat_siswa']; ?>" class="form-control">
                  <input type="text" name="tinggi_siswa" aria-label="Tinggi" value="<?= $siswa['tinggi_siswa']; ?>" class="form-control">
                </div>
                </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Nomor Hp</label>
                      </div>
                      <div class="col-md-8">
                        <input type="text" placeholder="Nomor Hp" class="form-control" name="telephone" value="<?= $siswa['telephone']; ?>">
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Alamat</label>
                      </div>
                      <div class="col-md-8">
                        <textarea class="form-control" id="basicTextarea" rows="3" placeholder="Alamat" name="alamat"><?= $siswa['alamat']; ?></textarea>
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Jenis Kelamin</label>
                      </div>
                      <div class="col-md-8">
                        <ul class="list-unstyled mb-0">
                          <li class="d-inline-block mr-2">
                            <fieldset>
                              <div class="vs-radio-con">
                                <input type="radio" <?= ($siswa['jenis_kelamin'] == 'l' ? 'checked' : ''); ?> name="jenis_kelamin" value="l">
                                <span class="vs-radio">
                                  <span class="vs-radio--border"></span>
                                  <span class="vs-radio--circle"></span>
                                </span>
                                <span class="">Laki-laki</span>
                              </div>
                            </fieldset>
                          </li>
                          <li class="d-inline-block mr-2">
                            <fieldset>
                              <div class="vs-radio-con">
                                <input type="radio" name="jenis_kelamin" <?= ($siswa['jenis_kelamin'] == 'p' ? 'checked' : ''); ?> value="p">
                                <span class="vs-radio">
                                  <span class="vs-radio--border"></span>
                                  <span class="vs-radio--circle"></span>
                                </span>
                                <span class="">Perempuan</span>
                              </div>
                            </fieldset>
                          </li>
                        </ul>
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