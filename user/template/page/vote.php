<div class="pcoded-content">
    <!-- [ breadcrumb ] start -->
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                  <div class="col-md-12 col-sm-12 col-xl-12">
                    <div class="card">
                      <div class="card-header bg-header">
                        <h6 class="text-center">PEMILIHAN CALON KETUA OSIS DAN WAKIL KETUA OSIS</h6>
                        <h3 class="text-center">
                          <?php
                            $d_s = mysqli_query($koneksi, "SELECT * FROM identitas_sekolah");
                            $i = mysqli_fetch_assoc($d_s);

                            echo $i['nama_sekolah'];
                          ?>
                        </h3>
                        <h4 class="text-center">TH <?= date('Y')?></h4>
                      </div>
                      <div class="card-body">
                        <?php
                          if(isset($_SESSION['val']) && $_SESSION['val'] !='')
                          {
                            echo $_SESSION['val'];
                            unset($_SESSION['val']);
                          }
                        ?>
                        <div class="row">
                          <?php
                            $data_kandidat = mysqli_query($koneksi, "SELECT * FROM tb_kandidat ORDER BY nomor_kandidat ASC");
                            while($data_k = mysqli_fetch_assoc($data_kandidat)):
                          ?>
                          <div class="col-md-4 col-sm-4">
                            <div class="card">
                              <div class="card-header bg-header">
                                <b class="text-bold text-small text-center" style="font-size: 12px;"><?= $data_k['nomor_kandidat']?> <?= $data_k['nama_ketua'] ?> Dan <?= $data_k['nama_wakil']?></b>
                              </div>
                              <div class="card-body">
                                <img src="../assets/upload/<?= $data_k['foto_kandidat']?>" class="card-img" width="230" height="160">
                                <div class="mt-2">
                                  <p class="text-bold">Visi</p>
                                  <p><?= $data_k['visi']?></p>
                                  <p class="text-bold">Misi</p>
                                  <p><?= $data_k['misi']?></p>
                                </div>
                                <!-- statement -->
                                <?php
                                  $info_db = mysqli_query($koneksi, "SELECT * FROM tb_informasi");
                                  $info = mysqli_fetch_assoc($info_db);
                                  $batas = $info['sampai'];
                                  $date = date('Y-m-d');
                                  
                                  if($date >= $batas)
                                  {
                                    ?>
                                      <form action="../proses/vote/cutoff.php" method="post">
                                        <button class="btn btn-block btn-primary"><em class="fas fa-pencil"></em> Pilih Kandidat</button>
                                      </form>
                                    <?php
                                  }else{
                                    
                                    $username = $data['username'];
                                    $data_user = mysqli_query($koneksi, "SELECT * FROM siswa WHERE username='$username' UNION SELECT * FROM gtk WHERE username='$username'");
                                    $status = mysqli_fetch_assoc($data_user);

                                    if($status['status_memilih'] == "Belum")
                                    {
                                      ?>
                                        <form action="../proses/vote/kirim_suara.php" method="post">
                                          <input type="hidden" name="no_kandidat" value="<?= $data_k['nomor_kandidat']; ?>">
                                          <input type="hidden" name="nama_kandidat" value="<?= $data_k['nama_ketua'] ?> Dan <?= $data_k['nama_wakil']?>">
                                          <input type="hidden" name="username" value="<?= $_SESSION['username'] ?>">
                                          <button type="submit" name="kirim_vote" class="btn btn-block btn-primary"><em class="fas fa-pencil"></em> Pilih Kandidat</button>
                                        </form>
                                      <?php
                                    }elseif($status['status_memilih'] == "Sudah")
                                    {
                                      ?>
                                        <form action="../proses/vote/kirim_suara.php" method="post">
                                          <button type="submit" name="sudah_vote" class="btn btn-block btn-primary"><em class="fas fa-pencil"></em> Pilih Kandidat</button>
                                        </form>
                                      <?php
                                    }
                                  }
                                 
                                ?>
                                
                              </div>
                            </div>
                          </div>
                          <?php endwhile; ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>