<?php
session_start();
require '../../koneksi/koneksi.php';
if (isset($_SESSION['val']) && $_SESSION['val'] != '') {
    echo $_SESSION['val'];
    unset($_SESSION['val']);
}

$query_identitas = mysqli_query($koneksi, "SELECT * FROM identitas_sekolah");
$sekolah = mysqli_fetch_assoc($query_identitas);
?>
<form id="form-update-sekolah" autocomplete="off">
    <div class="row">
        <div class="col-sm-4">
            <div class="card-body">
                <input type="text" name="id" value="<?= $sekolah['id'] ?>" style="display:none;">
                <label class="mt-2">NPSN</label>
                <input type="text" name="npsn" id="" class="form-control mt-2" value="<?= $sekolah['npsn'] ?>">
                <label class="mt-2">Nama Sekolah</label>
                <input type="text" name="nama_sekolah" value="<?= $sekolah['nama_sekolah'] ?>" class="form-control mt-2">
                <label class="mt-2">Nama Kepala</label>
                <input type="text" name="nama_kepsek" id="" class="form-control mt-2" value="<?= $sekolah['nama_kepsek'] ?>">
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card-body">
                <label class="mt-2">NIP</label>
                <input type="text" name="nip" value="<?= $sekolah['nip'] ?>" class="form-control mt-2">
                <label class="mt-2">Alamat Jalan</label>
                <textarea class="form-control" name="alamat_sekolah" cols="30" rows="3"><?= $sekolah['alamat_sekolah'] ?></textarea>
                <label class="mt-2">Kelurahan</label>
                <input type="text" name="kelurahan" value="<?= $sekolah['kelurahan'] ?>" class="form-control mt-2">
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card-body">
                <label class="mt-2">Kecamatan</label>
                <input type="text" name="kecamatan" value="<?= $sekolah['kecamatan'] ?>" class="form-control mt-2">
                <label class="mt-2">Kab / Kota</label>
                <input type="text" name="kab_kota" id="" class="form-control mt-2" value="<?= $sekolah['kab_kota'] ?>">
                <label class="mt-2">Akreditasi</label>
                <input type="text" name="akreditasi" value="<?= $sekolah['akreditasi'] ?>" class="form-control mt-2">

                <div class="mt-3"></div>

                <button type="button" id="update_sekolah" class="tmb tmb-primary"><em class="fas fa-save"></em> Save
                    Data</button>
            </div>
        </div>
    </div>
</form>

<script>
     $('#update_sekolah').click(function(){
            var data = $('#form-update-sekolah').serialize();

            $.ajax({
                type : 'POST',
                url: 'ajax/update_sekolah.php',
                data: data,
                success:function(){
                    form_sekolah()
                }
            })
        })

        window.setTimeout(function() {
            $("#auto-close").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove(); 
            });
        }, 5000);
</script>