<div class="pcoded-content">
    <!-- [ breadcrumb ] start -->
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-12">
                <div class="mt-4">
                    <?php
                        if(isset($_SESSION['login_success']) && $_SESSION['login_success'] !='')
                        {
                            echo $_SESSION['login_success'];
                            unset($_SESSION['login_success']);
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <!-- [ breadcrumb ] end -->
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <!-- [ page content ] start -->
                    <div class="row">

                        <!-- query data -->
                        <?php
                            $query_identitas = mysqli_query($koneksi, "SELECT * FROM identitas_sekolah");
                            $sekolah = mysqli_fetch_assoc($query_identitas);
                        ?>
                        <!-- end query data -->

                        <!-- sale revenue card start -->
                        <div class="col-md-12 col-xl-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Identitas Sekolah</h5>
                                </div>
                                <div class="card-block">
                                    <div id="form-sekolah">
                                       
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- sale revenue card end -->


                        <!-- sale 2 card start -->
                        <div class="col-md-12 col-xl-4">
                            <div class="card">
                                <div class="card-header bg-dark text-white">
                                    Pengaturan Informasi Kegiatan
                                </div>
                                <div class="card-block">
                                    <div id="form-info">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-12">
                            <div class="card">
                                <div class="card-header bg-dark text-white">
                                    Reset Akun Peserta Pemilihan
                                </div>
                                <div class="card-body">
                                    <div id="form-reset">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="card">
                                <div class="card-header bg-dark text-white">
                                    Reset Data Pemilih
                                </div>
                                <div class="card-body">
                                    <p class="text-bold">Fitur Hapus Semua Data</p>
                                    <p>Fitur ini digunakan apabila telah selesai melakukan pemilihan dan telah mengunduh
                                        Daftar Hadir dan Laporan Pemilihan dan ingin melakukan pemilihan di tahun
                                        berikutnya.</p>
                                    <button type="button" data-toggle="modal" data-target="#reset_all" class="tmb tmb-danger"><em class="fas fa-trash-alt"></em> Reset Semua Data</button>

                                    <!-- modal reset -->
                                    <div class="modal fade" id="reset_all" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Konfirmasi Hapus Semua Data Pemilihan</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Apakah Anda Yakin Ingin Menghapus Semua Data Termasuk ? </p>
                                                <p>1. Data Siswa</p>
                                                <p>2. Data GTK</p>
                                                <p>3. Data Kandidat</p>
                                                <p>4. Hasil Suara</p>
                                                <p>5. Data Kelas</p>
                                                <form action="../proses/reset/all_data.php" method="post">
                                                <div class="text-center">
                                                    <button type="submit" name="reset" class="tmb tmb-success">Ya</button>
                                                    <button type="button" class="tmb tmb-danger" data-dismiss="modal">Tidak</button>
                                                </div>
                                                </form>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- modal reset -->
                                </div>
                            </div>
                        </div>
                        <!-- sale 2 card end -->
                    </div>
                    <!-- [ page content ] end -->
                </div>
            </div>
        </div>
    </div>
</div>