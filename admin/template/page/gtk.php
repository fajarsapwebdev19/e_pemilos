<div class="pcoded-content">
  <div class="page-header card">
    <div class="row align-items-end">
      <div class="col-md-12 col-xl-12">
        <h5>Data Guru Dan Tenaga Pendidik (Pemilih)</h5>
        <div class="mt-4">
          <?php
            if($akses['data_gtk'] == "Y")
            {
              ?>
                <div class="row">
                  <div class="col-md-8 col-sm-8">
                    <button class="tmb tmb-success mb-3" onclick="javascript: window.location.href='../proses/export/gtk.php'">
                      <em class="fas fa-file-excel"></em> Export Excel
                    </button>
                    <button class="tmb tmb-primary mb-3" data-target="#cetak_daftar_login_gtk" data-toggle="modal">
                      <em class="fas fa-print"></em> Cetak Daftar Login
                    </button>
                    <?php require 'btn/daftar_login.php'; ?>
                    <div class="card">
                      <div class="card-header bg-header">
                        Data Guru Dan Tenaga Pendidik (GTK)
                      </div>
                      <div class="card-body">
                        <div class="table-responsive">
                          <table id="example" class="table table-hover table-bordered table-sm nowrap">
                            <thead class="bg-header">
                              <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">NIK</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">JK</th>
                                <th class="text-center">Kepegawaian</th>
                                <th class="text-center">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                                $no = 1;
                                $query_gtk = mysqli_query($koneksi, "SELECT * FROM gtk ORDER BY nama ASC");
                                foreach ($query_gtk as $data) :
                              ?>
                                <tr>
                                  <td class="text-center"><?= $no++; ?></td>
                                  <td class="text-center"><?= $data['username'] ?></td>
                                  <td><?= $data['nama']; ?></td>
                                  <td><?= $data['jenis_kelamin']?></td>
                                  <td><?= $data['kepegawaian']?></td>
                                  <td class="text-center">
                                    <button data-id="<?= $data['id']?>" class="tmb tmb-sm tmb-primary edit-gtk"><em class="fas fa-edit"></em> Edit</button>
                                    <a href="#!" data-target="#hapus<?= $data['id'] ?>" data-toggle="modal">
                                      <button  class="tmb tmb-sm tmb-danger"><em class="fas fa-trash"></em> Delete</button> 
                                    </a> 
                                  </td>
                                </tr>
                                <?php require 'btn/gtk.php'; ?>
                              <?php endforeach; ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4">
                    <div class="card">
                      <div class="card-header bg-header">
                        Tambah GTK
                      </div>
                      <div class="card-body">
                        <?php
                          if (isset($_SESSION['val']) && $_SESSION['val'] != '') {
                            echo $_SESSION['val'];
                            unset($_SESSION['val']);
                          }
                        ?>


                        <form action="../proses/tambah/gtk.php" method="post" class="needs-validation" novalidate autocomplete="off">

                          <div class="form-group">
                            <label for="">NIK</label>
                            <input type="text" name="username" class="form-control" required>
                          </div>
                          <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" name="nama" class="form-control" required>
                          </div>
                          <div class="form-group">
                            <label for="">Jenis Kelamin</label>
                            <div class="mt-2"></div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio1" value="L" required>
                              <label class="form-check-label" for="inlineRadio1">L</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio2" value="P" required>
                              <label class="form-check-label" for="inlineRadio2">P</label>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="">Jenis Kepegawaian</label>
                            <div class="mt-2"></div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="kepegawaian" id="inlineRadio3" value="Guru" required>
                              <label class="form-check-label" for="inlineRadio3">Guru</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="kepegawaian" id="inlineRadio4" value="Tendik" required>
                              <label class="form-check-label" for="inlineRadio4">Tendik</label>
                            </div>
                          </div>
                          <div class="form-group">
                            <button type="submit" name="tambah" class="tmb tmb-primary">Tambah</button>
                          </div>
                          <hr>
                        </form>
                        <h5>Import Data</h5>
                          <form action="../proses/import/gtk.php" method="post" enctype="multipart/form-data">
                              <input type="file" name="file_excel" class="form-control">
                              <div class="form-group mt-4">
                                <button type="submit" class="tmb tmb-info" name="import"><em class="fas fa-upload"> </em>Import </button>
                                <button type="button" onclick="javascript:window.location.href='../assets/template-import-gtk.xlsx'" class="tmb tmb-warning"><em class="fas fa-download"></em> Download Template</button>
                              </div>
                          </form>
                      </div>
                    </div>
                  </div>
                </div>
              <?php
            }elseif($akses['data_gtk'] == "N")
            {
              ?>
                <div class="alert alert-warn"><em class="fas fa-info"></em> Anda Tidak Memiliki Akses Untuk Mengakses Halaman Ini !</div>
              <?php
            }
          ?>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="../assets/js/jquery.min.js"></script>
<script>
  $('.edit-gtk').click(function(){
    var id = $(this).data('id');

    $.ajax({
      url: 'ajax/edit-gtk.php',
      type: 'POST',
      data:{id:id},
      success:function(response){
        $('.form-edit-gtk').html(response);
        $('#edit-gtk').modal('show');
      }
    })
  })
</script>