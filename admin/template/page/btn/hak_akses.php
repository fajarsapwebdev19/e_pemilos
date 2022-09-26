<div class="modal fade" id="hak_akses<?= $data['id'] ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Atur Hak Akses</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="../proses/ubah/akses_menu.php" method="post">
            <?php
                $username = $data['username'];
                $query_akses = mysqli_query($koneksi, "SELECT * FROM akses_menu WHERE username='$username'");
                $data_akses = mysqli_fetch_assoc($query_akses);
            ?>
            <input type="hidden" name="username" value="<?= $username; ?>">
            <div class="form-group">
                <label for="">Manajemen Akun</label>
                <br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="manajemen_akun" id="inlineRadio1" value="Y" <?php if($data_akses['manajemen_akun'] == "Y"){ echo 'checked'; } ?>>
                    <label class="form-check-label" for="inlineRadio1">Ya</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="manajemen_akun" id="inlineRadio2" value="N" <?php if($data_akses['manajemen_akun'] == "N"){echo 'checked'; }?>>
                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                </div>
            </div>
            <div class="form-group">
                <label for="">Data Kelas</label>
                <br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="data_kelas" id="inlineRadio3" value="Y" <?php if($data_akses['data_kelas'] == "Y"){ echo 'checked'; } ?>>
                    <label class="form-check-label" for="inlineRadio3">Ya</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="data_kelas" id="inlineRadio4" value="N" <?php if($data_akses['data_kelas'] == "N"){echo 'checked'; }?>>
                    <label class="form-check-label" for="inlineRadio4">Tidak</label>
                </div>
            </div>
            <div class="form-group">
                <label for="">Data Siswa</label>
                <br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="data_siswa" id="inlineRadio5" value="Y" <?php if($data_akses['data_siswa'] == "Y"){ echo 'checked'; } ?>>
                    <label class="form-check-label" for="inlineRadio5">Ya</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="data_siswa" id="inlineRadio6" value="N" <?php if($data_akses['data_siswa'] == "N"){echo 'checked'; }?>>
                    <label class="form-check-label" for="inlineRadio6">Tidak</label>
                </div>
            </div>
            <div class="form-group">
                <label for="">Data GTK</label>
                <br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="data_gtk" id="inlineRadio7" value="Y" <?php if($data_akses['data_gtk'] == "Y"){ echo 'checked'; } ?>>
                    <label class="form-check-label" for="inlineRadio7">Ya</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="data_gtk" id="inlineRadio8" value="N" <?php if($data_akses['data_gtk'] == "N"){echo 'checked'; }?>>
                    <label class="form-check-label" for="inlineRadio8">Tidak</label>
                </div>
            </div>
            <div class="form-group">
                <label for="">Data Kandidat</label>
                <br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="data_kandidat" id="inlineRadio9" value="Y" <?php if($data_akses['data_kandidat'] == "Y"){ echo 'checked'; } ?>>
                    <label class="form-check-label" for="inlineRadio9">Ya</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="data_kandidat" id="inlineRadio10" value="N" <?php if($data_akses['data_kandidat'] == "N"){echo 'checked'; }?>>
                    <label class="form-check-label" for="inlineRadio10">Tidak</label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" name="save" class="tmb tmb-primary"><em class="fas fa-save"></em> Save</button>
                <button type="button" class="tmb tmb-danger" data-dismiss="modal"><em class="fas fa-times"></em> Cancel</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>