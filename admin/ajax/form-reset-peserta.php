<?php
session_start();
require '../../koneksi/koneksi.php';
if (isset($_SESSION['val_reset']) && $_SESSION['val_reset'] != '') {
    echo $_SESSION['val_reset'];
    unset($_SESSION['val_reset']);
}
?>
Fitur ini akan me-reset akun/user yang digunakan oleh orang lain.
<form id="form-reset-peserta" autocomplete="off">
    <label for="user" class="mt-2">NIK / NISN</label>
    <input type="text" name="username" id="user" class="form-control">
    <div class="mt-3">
        <button type="button" id="reset" class="tmb tmb-danger"><em class="fas fa-user-times"></em> Reset User</button>
    </div>
</form>

<script>
    $('#reset').click(function(){
            
        var data_reset = $('#form-reset-peserta').serialize();

        $.ajax({
            type : 'POST',
            url: 'ajax/reset_peserta.php',
            data: data_reset,
            success:function(){
                form_reset()
            }
        });
    });

    window.setTimeout(function() {
        $("#auto-close").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove(); 
        });
    }, 5000);
</script>