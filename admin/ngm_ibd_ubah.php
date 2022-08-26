<?php
require 'fungsi_admin.php';

$id = $_POST["id"];

$ngm = query("SELECT * FROM ngm WHERE id_ngm = $id")[0];
?>

<form action="" method="post">

<div class="row mb-3">
  <div class="col">
  <input type="hidden" name="id" value="<?= $ngm['id_ngm'] ?>">
    <label for="tanggal" class="form-label">Tanggal Ibadah</label>
    <input type="date" class="form-control" id="tanggal" placeholder="Tanggal ibadah" name="tanggal" value="<?= $ngm['tanggal'] ?>">
  </div>
  <div class="col">
    <label for="hari" class="form-label">Hari</label>
    <input type="text" class="form-control" id="hari" placeholder="Hari ibadah" name="hari" value="<?= $ngm['hari'] ?>">
  </div>
</div>

<div class="row mb-3">
  <div class="col">
    <label for="kd_ft" class="form-label">Firman Tuhan</label>
    <input type="text" class="form-control" id="kd_ft" placeholder="Kode FT" name="kd_ft" value="<?= $ngm['kd_ft'] ?>">
  </div>
  <div class="col">
    <label for="pambuka" class="form-label">Pambuka</label>
    <input type="text" class="form-control" id="pambuka" placeholder="Kode pambuka" name="pambuka" value="<?= $ngm['pambuka'] ?>">
  </div>
</div>

<div class="row mb-3">
  <div class="col">
    <label for="musik" class="form-label">Musik</label>
    <input type="text" class="form-control" id="musik" placeholder="Kode pelayan" name="musik" value="<?= $ngm['musik'] ?>">
  </div>
  <div class="col">
    <label for="wl" class="form-label">wl</label>
    <input type="text" class="form-control" id="wl" placeholder="Kode pelayan" name="wl" value="<?= $ngm['wl'] ?>">
  </div>
</div>

<div class="row mb-3">
  <div class="col">
    <label for="singer1" class="form-label">Singer 1</label>
    <input type="text" class="form-control" id="singer1" placeholder="Kode pelayan" name="singer1" value="<?= $ngm['singer1'] ?>">
  </div>
  <div class="col">
    <label for="singer2" class="form-label">Singer 2</label>
    <input type="text" class="form-control" id="singer2" placeholder="Kode pelayan" name="singer2" value="<?= $ngm['singer2'] ?>">
  </div>
  <div class="col">
    <label for="singer3" class="form-label">Singer 3</label>
    <input type="text" class="form-control" id="singer3" placeholder="Kode pelayan" name="singer3" value="<?= $ngm['singer3'] ?>">
  </div>
</div>

<div class="mb-3">
  <label for="perpujian" class="form-label">Perpujian</label>
  <input type="text" class="form-control" id="perpujian" placeholder="Perpujian" name="perpujian" value="<?= $ngm['perpujian'] ?>">
</div>

<div class="row mb-3">
  <div class="col">
    <label for="pnt1" class="form-label">PNT 1</label>
    <input type="text" class="form-control" id="pnt1" placeholder="Kode keluarga" name="pnt1" value="<?= $ngm['pnt1'] ?>">
  </div>
  <div class="col">
    <label for="pnt2" class="form-label">PNT 2</label>
    <input type="text" class="form-control" id="pnt2" placeholder="Kode keluarga" name="pnt2" value="<?= $ngm['pnt2'] ?>">
  </div>
</div>

<div class="mb-3">
  <label for="md" class="form-label">MD</label>
  <input type="text" class="form-control" id="md" placeholder="Nama Pelayan, bukan kode" name="md" value="<?= $ngm['md'] ?>">
</div>

<div class="row mb-3">
  <div class="col">
    <label for="gerit" class="form-label">Gerit</label>
    <input type="text" class="form-control" id="gerit" placeholder="Kode keluarga" name="gerit" value="<?= $ngm['gerit'] ?>">
  </div>
  <div class="col">
    <label for="giling" class="form-label">Giling</label>
    <input type="text" class="form-control" id="giling" placeholder="Kode keluarga" name="giling" value="<?= $ngm['giling'] ?>">
  </div>
</div>

<div class="mb-5">
  <label for="keterangan" class="form-label">Keterangan</label>
  <input type="text" class="form-control" id="keterangan" placeholder="keterangan" name="keterangan" value="<?= $ngm['keterangan'] ?>">
</div>

<div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
  <button type="submit" class="btn btn-primary" name="ubah">Save</button>
</div>

</form>