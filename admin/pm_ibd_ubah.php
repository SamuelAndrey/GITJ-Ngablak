<?php
require 'fungsi_admin.php';

$id = $_POST["id"];

$pm = query("SELECT * FROM pm WHERE id_pm = $id")[0];
?>

<form action="" method="post">
    <!-- hari dan tanggal -->
    <div class="row mb-3">
    <div class="col">
        <input type="hidden" name="id" value="<?= $pm['id_pm'] ?>">
        <label for="tanggal" class="form-label">Tanggal Ibadah</label>
        <input type="date" class="form-control" id="tanggal" placeholder="Tanggal ibadah" name="tanggal" value="<?= $pm['tanggal'] ?>">
    </div>
    <div class="col">
        <label for="hari" class="form-label">Hari</label>
        <input type="text" class="form-control" id="hari" placeholder="Hari ibadah" name="hari" value="<?= $pm['hari'] ?>">
    </div>
    </div>

    <!-- jadwal gereja -->
    <div class="row mb-3">
    <div class="col">
        <label for="ngablak" class="form-label">Ngablak</label>
        <input type="text" class="form-control" id="ngablak" placeholder="Kode pelayan" name="ngablak" value="<?= $pm['ngablak'] ?>">
    </div>
    <div class="col">
        <label for="jiwo" class="form-label">Jiwo</label>
        <input type="text" class="form-control" id="jiwo" placeholder="Kode pelayan" name="jiwo" value="<?= $pm['jiwo'] ?>">
    </div>
    <div class="col">
        <label for="gerit" class="form-label">Gerit</label>
        <input type="text" class="form-control" id="gerit" placeholder="Kode pelayan" name="gerit" value="<?= $pm['gerit'] ?>">
    </div>
    <div class="col">
        <label for="giling" class="form-label">Giling</label>
        <input type="text" class="form-control" id="giling" placeholder="Kode pelayan" name="giling" value="<?= $pm['giling'] ?>">
    </div>
    </div>

    <!-- materi -->
    <div class="mb-3">
    <label for="materi" class="form-label">Materi</label>
    <input type="text" class="form-control" id="materi" placeholder="Materi" name="materi" value="<?= $pm['materi'] ?>">
    </div>

    <!-- keterangan -->
    <div class="mb-5">
    <label for="keterangan" class="form-label">Keterangan</label>
    <input type="text" class="form-control" id="keterangan" placeholder="keterangan" name="keterangan" value="<?= $pm['keterangan'] ?>">
    </div>

    <!-- button -->
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary" name="ubah">Save</button>
    </div>
</form>