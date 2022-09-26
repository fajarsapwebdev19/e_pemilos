<div class="pcoded-content">
    <!-- [ breadcrumb ] start -->
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-xl-12 col-sm-12">
              <div class="mt-4">
                <div class="text-center">
                  
                </div>
                <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-7 col-sm-7">
                  <div class="mt-4"></div>
                  <?php
                    if(isset($_SESSION['val']) && $_SESSION['val'] !='')
                    {
                      echo $_SESSION['val'];
                      unset($_SESSION['val']);
                    }
                  ?>
                  <div class="text-center">
                    <?php
                      if(empty($data['foto']))
                      {
                        if($data['jenis_kelamin'] == "Laki-Laki")
                        {
                          ?>
                            <img src="../assets/img/male.jpg" alt="" width="180" height="200">
                          <?php
                        }
                        elseif($data['jenis_kelamin'] == "Perempuan")
                        {
                          ?>
                            <img src="../assets/img/female.jpg" alt="" width="180" height="200">
                          <?php
                        }
                      }else{
                        ?>
                          <img src="../assets/img/<?= $data['foto'] ?>" alt="" width="180" height="200">
                        <?php
                      }
                    ?>
                  </div>
                  <div class="mt-2"></div>
                  <table class="table table-striped justify-content-center table-xs table-responsive-sm">
                    <tr>
                      <th>Nama</th>
                      <td><?= $data['nama']?></td>
                    </tr>
                    <tr>
                      <th>Jenis Kelamin</th>
                      <td><?= $data['jenis_kelamin']?></td>
                    </tr>
                    <tr>
                      <th>Username</th>
                      <td><?= $data['username']?></td>
                      
                    </tr>
                    <tr>
                      <th>Status Akun</th>
                      <td><?php
                        if($data['status_akun'] == "Y")
                        {
                          echo 'Active';
                        }elseif($data['status_akun'] == "N")
                        {
                          echo "Non Active";
                        }
                      ?></td>
                    </tr>
                  </table>
                  </div>
                  <div class="col-md-4">
                    <div class="card">
                      <div class="card-body">
                        <form action="../proses/ubah/foto_profile.php" method="post" enctype="multipart/form-data">
                          <input type="text" name="username" value="<?= $data['username']?>" style="display: none;">
                          <div class="form-group">
                            <label for="">Foto</label>
                            <input type="file" name="foto_profile" class="form-control">
                            <div class="mt-4">
                              <button type="submit" name="update_foto" class="tmb tmb-info"><em class="fas fa-upload"></em> Update</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>