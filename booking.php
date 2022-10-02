<?php
require 'app/functions/MY_model.php';
$dokters = get("SELECT * FROM dokter");
$antrian = mysqli_query($conn, "SELECT * FROM antrian");
$count_antrian = mysqli_num_rows($antrian);
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Vuesax admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
  <meta name="keywords" content="admin template, Vuesax admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="PIXINVENT">
  <title>SISTEM INFORMASI MANAJEMEN KLINIK | Admin</title>

  <link rel="stylesheet" type="text/css" href="assets/vendors/css/vendors.min.css">

  <?php if (isset($prepend_style)) : ?>
    <?php foreach ($prepend_style as $tag_style) : ?>
      <link rel="stylesheet" href="<?php echo $tag_style; ?>">
    <?php endforeach; ?>
  <?php endif; ?>

  <?php require 'app/templates/style.php'; ?>

  <?php if (isset($addon_style)) : ?>
    <?php foreach ($addon_style as $tag_style) : ?>
      <link rel="stylesheet" href="<?php echo $tag_style; ?>">
    <?php endforeach; ?>
  <?php endif; ?>
</head>
<div class="content-header row">

  <div class="content-header-right col-md-12">
    <a href="landing" class="btn btn-light float-right mb-2">HOME</a>
  </div>
</div>
<section id="basic-horizontal-layouts">
  <div class="row match-height">
    <div class="col-md-12 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Booking Online</h4>
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

                        <input type="text" placeholder="Nama Anda" class="form-control" name="nama_pasien" required>
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
                        <label>Dokter Poli</label>
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
                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Hari</label>
                      </div>
                      <div class="col-md-8">
                      <input type="date" class="form-control" name="tanggal">
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