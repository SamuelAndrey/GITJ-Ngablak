<?php
require 'fungsi_admin.php';

$id = $_POST["id"];

$data = query("SELECT * FROM admin WHERE id_admin = $id")[0];
?>

<form action="" method="post">
    <div class="mb-3">
        <input type="hidden" name="id" value="<?= $data['id_admin'] ?>">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" placeholder="username" name="username" value="<?= $data['username'] ?>">
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="text" class="form-control" id="password" placeholder="password" name="password" value="<?= $data['password'] ?>">
    </div>

    <div class="mb-3">
        <label for="role" class="form-label">Role</label>
        <input type="text" class="form-control" id="role" placeholder="role" name="role" value="<?= $data['role'] ?>">
    </div>
    <!-- button -->
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary" name="ubah">Save</button>
    </div>
</form>