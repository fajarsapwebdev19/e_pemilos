<?php
    require '../../koneksi/koneksi.php';

    $id = $_POST['id'];
    $gtk = mysqli_query($koneksi, "SELECT * FROM gtk WHERE id='$id'");
    $data = mysqli_fetch_assoc($gtk);
?>
<input type="text" name="id" value="<?= $data['id'] ?>" style="display: none;">
<input type="text" name="username_lama" value="<?= $data['username'] ?>" style="display: none;">
<div class="form-group">
    <label for="">NIK</label>
    <input type="text" name="username" class="form-control" value="<?= $data['username'] ?>">
</div>
<div class="form-group">
    <label for="">Nama Siswa</label>
    <input type="text" name="nama" class="form-control" value="<?= $data['nama'] ?>">
</div>
<div class="form-group">
    <label for="">Jenis Kelamin</label>
    <div class="mt-2"></div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio1" value="L" <?php if ($data['jenis_kelamin'] == "L") {
                                                                                                            echo 'checked';
                                                                                                        } ?>>
        <label class="form-check-label" for="inlineRadio1">L</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio2" value="P" <?php if ($data['jenis_kelamin'] == "P") {
                                                                                                            echo 'checked';
                                                                                                        } ?>>
        <label class="form-check-label" for="inlineRadio2">P</label>
    </div>
</div>
<div class="form-group">
    <label for="">Jenis Kepegawaian</label>
    <div class="mt-2"></div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="kepegawaian" id="inlineRadio3" value="Guru" <?php if ($data['kepegawaian'] == "Guru") {
                                                                                                            echo 'checked';
                                                                                                        } ?>>
        <label class="form-check-label" for="inlineRadio3">Guru</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="kepegawaian" id="inlineRadio4" value="Tendik" <?php if ($data['kepegawaian'] == "Tendik") {
                                                                                                                echo 'checked';
                                                                                                            } ?>>
        <label class="form-check-label" for="inlineRadio4">Tendik</label>
    </div>
</div>
<input type="text" name="username_lama" value="<?= $data['username'] ?>" style="display: none;">
<div class="form-group">
    <button type="submit" name="ubah" class="tmb tmb-info"><em class="fas fa-edit"></em>Edit</button>
</div>
<hr>