<?php
require 'fungsi_admin.php';

$id = $_POST["id"];

$data = query("SELECT * FROM ngm_jmt WHERE id_jmt = $id")[0];
?>

<form action="" method="post">
    <div class="mb-3">
        <input type="hidden" value="<?= $data['id_jmt'] ?>" name="id">
        <label for="kd_jmt" class="form-label">Kode Jemaat</label>
        <input type="text" class="form-control" id="kd_jmt" placeholder="Kode Jemaat" name="kd_jmt" value="<?= $data['kd_jmt'] ?>">
    </div>

    <div class="mb-5">
        <label for="nama_jmt" class="form-label">Nama Jemaat</label>
        <input type="text" class="form-control" id="nama_jmt" placeholder="Nama Jemaat" name="nama_jmt" value="<?= $data['nama_jmt'] ?>">
    </div>
    <!-- button -->
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary" name="ubah">Save</button>
    </div>
</form>