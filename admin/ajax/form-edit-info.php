<?php
session_start();
require '../../koneksi/koneksi.php';
$query_informasi = mysqli_query($koneksi, "SELECT * FROM tb_informasi");
$data_informasi = mysqli_fetch_assoc($query_informasi);

if (isset($_SESSION['success_save']) && $_SESSION['success_save'] != '') {
    echo $_SESSION['success_save'];
    unset($_SESSION['success_save']);
}
?>
<!-- end query data informasi -->
<form id="edit-info" autocomplete="off">
    <input type="text" name="id" value="<?= $data_informasi['id'] ?>" style="display: none;">
    <div class="form-group">
        <label class="mt-2">Tahun Pelajaran</label>
        <input type="text" name="tahun_ajaran" class="mt-2 form-control" value="<?= $data_informasi['tahun_ajaran'] ?>">
    </div>

    <div class="form-group">
        <label for="">Tanggal Pelaksanaan</label>
        <input type="text" name="tanggal_pelaksanaan" class="mt-2 form-control tanggal" value="<?= date('d-m-Y', strtotime($data_informasi['tanggal_pelaksanaan'])) ?>">
    </div>

    <div class="form-group">
        <label for="">Sampai</label>
        <input type="text" name="sampai" class="mt-2 form-control tanggal" value="<?= date('d-m-Y', strtotime($data_informasi['sampai'])) ?>">
    </div>


    <div class="mt-3">
        <button type="button" id="update_info" class="tmb tmb-success"><em class="fas fa-save"></em> Simpan
            Data</button>
    </div>
</form>

<script>
    $('#update_info').click(function() {
        var data = $('#edit-info').serialize();

        $.ajax({
            type: 'POST',
            url: 'ajax/update_info.php',
            data: data,
            success:function(){
                form_info()
            }
        })
    })

    window.setTimeout(function() {
        $("#auto-close").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove(); 
        });
    }, 5000);

    $('.tanggal').datepicker({
        autoHighlight: true,
        format: 'dd-mm-yyyy',
        todayHighlight: true,
        autoclose: true
    });
</script>