<?php
require 'fungsi_admin.php';

$id = $_POST["id"];

$data = query("SELECT * FROM ngm_kel WHERE kd_kel = $id")[0];
?>

<form action="" method="post">
    <div class="mb-3">
        <input type="hidden" value="<?= $data['kd_kel'] ?>" name="id">
        <label for="kd_kel" class="form-label">Kode Keluarga</label>
        <input type="text" class="form-control" id="kd_kel" placeholder="Kode keluarga" name="kd_kel" value="<?= $data['kd_kel'] ?>">
    </div>

    <div class="mb-5">
        <label for="nama_kel" class="form-label">Nama Keluarga</label>
        <input type="text" class="form-control" id="nama_kel" placeholder="Nama Keluarga" name="nama_kel" value="<?= $data['nama_kel'] ?>">
    </div>
    <!-- button -->
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary" name="ubah">Save</button>
    </div>
</form>