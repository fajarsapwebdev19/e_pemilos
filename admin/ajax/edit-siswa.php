<?php
    require '../../koneksi/koneksi.php';
    $id = $_POST['id'];
    $siswa = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id='$id'");
    $data = mysqli_fetch_assoc($siswa);
?>
<input type="text" name="id" value="<?= $data['id'] ?>" style="display: none;">
<input type="text" name="username_lama" value="<?= $data['username'] ?>" style="display: none;">
<div class="form-group">
    <label for="">NISN</label>
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
    <label for="">Kelas</label>
    <select name="kelas" class="form-control">
        <option value="">Pilih</option>
        <?php
        $selected = $data['kelas'];
        $query_kelas = mysqli_query($koneksi, "SELECT * FROM tb_kelas");
        foreach ($query_kelas as $data) :
        ?>
            <option <?php if ($data['nama_kelas'] == $selected) {
                        echo 'selected';
                    } ?>><?= $data['nama_kelas'] ?></option>
        <?php endforeach; ?>
    </select>
</div>
<div class="form-group">
    <button type="submit" name="ubah" class="tmb tmb-info"><em class="fas fa-edit"></em>Edit</button>
</div>
<hr>
