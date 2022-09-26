<div class="modal fade" id="cetak-daftar-login-siswa" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Cetak Daftar Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="../proses/cetak/daftar_login_siswa.php" method="post">
        <div class="modal-body">
            <div class="form-group">
                <label for="">Kelas</label>
                <select name="kelas" class="form-control">
                    <option>Semua</option>
                    <?php
                        $class = mysqli_query($koneksi, "SELECT * FROM tb_kelas");
                        while($data = mysqli_fetch_object($class)){
                            ?>
                                <option><?= $data->nama_kelas; ?></option>
                            <?php
                        }
                    ?>
                </select>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="tmb tmb-primary">Cetak</button>
            <button type="button" class="tmb tmb-danger" data-dismiss="modal">Batal</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="cetak_daftar_login_gtk" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Cetak Daftar Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="../proses/cetak/daftar_login_gtk.php" method="post">
        <div class="modal-body">
            <div class="form-group">
                <label for="">Kepegawaian</label>
                <select name="kepegawaian" class="form-control">
                    <option>Semua</option>
                    <option>Guru</option>
                    <option>Tendik</option>
                </select>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="tmb tmb-primary">Cetak</button>
            <button type="button" class="tmb tmb-danger" data-dismiss="modal">Batal</button>
        </div>
      </form>
    </div>
  </div>
</div>