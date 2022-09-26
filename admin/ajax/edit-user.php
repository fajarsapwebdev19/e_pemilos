<?php
    require '../../koneksi/koneksi.php';

    $id = $_POST['id'];

    $user = mysqli_query($koneksi, "SELECT * FROM admin WHERE id='$id'");
    $data = mysqli_fetch_assoc($user);
?>
<div class="modal-body">
        <div class="form-group">
            <input type="text" name="id" value="<?= $data['id'] ?>" style="display: none;">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" value="<?= $data['nama'] ?>">
        </div>
        <div class="form-group">
            <label class="form-label">Username</label>
            <input type="text" name="username" class="form-control" value="<?= $data['username'] ?>">
        </div>
        <div class="form-group">
            <label class="form-label">Jenis Kelamin</label>
            <br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="jk1" value="Laki-Laki" required <?php if ($data['jenis_kelamin'] == "Laki-Laki") {
                                                                                                                                    echo 'checked';
                                                                                                                                } ?>>
                <label class="form-check-label" for="jk1">L</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="jk2" value="Perempuan" required <?php if ($data['jenis_kelamin'] == "Perempuan") {
                                                                                                                                    echo 'checked';
                                                                                                                                } ?>>
                <label class="form-check-label" for="jk2">P</label>
            </div>
        </div>
        <div class="form-group">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" value="<?= $data['password'] ?>">
            <input type="text" name="username_lama" value="<?= $data['username'] ?>" style="display: none;">
        </div>
        <div class="form-group">
            <label class="form-label">Status Akun</label>
            <br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status_akun" id="stsakn1" value="Y" required <?php if ($data['status_akun'] == "Y") {
                                                                                                                            echo 'checked';
                                                                                                                        } ?>>
                <label class="form-check-label" for="stsakn1">Aktif</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status_akun" id="stsakn2" value="N" required <?php if ($data['status_akun'] == "N") {
                                                                                                                            echo 'checked';
                                                                                                                        } ?>>
                <label class="form-check-label" for="stsakn2">Tidak Aktif</label>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" name="ubah" class="tmb tmb-info">Update</button>
            <button type="button" class="tmb tmb-danger" data-dismiss="modal">Batal</button>
        </div>
</div>

<script src="../assets/admindek-html/files/bower_components/bootstrap/js/bootstrap.min.js"></script>
