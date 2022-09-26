<nav class="pcoded-navbar">
    <div class="nav-list">
        <div class="pcoded-inner-navbar main-menu">
            <div class="pcoded-navigation-label">Admin</div>
            <ul class="pcoded-item pcoded-left-item">
                <li>
                    <a href="./" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                        <span class="pcoded-mtext">Dashboard</span>
                    </a>
                </li>

                <?php
                    $username = $_SESSION['username'];
                    $query_akses = mysqli_query($koneksi, "SELECT * FROM akses_menu WHERE username='$username'");
                    $hak_akses = mysqli_fetch_assoc($query_akses);
                ?>

                <li>
                    <a href="?page=account" class="waves-effect waves-dark" style="display: <?php if($hak_akses['manajemen_akun'] == "N"){ echo 'none;'; } ?>">
                        <span class="pcoded-micon">
                            <i class="fas fa-user icon-menu"></i>
                        </span>
                        <span class="pcoded-mtext">Manajemen Akun</span>
                    </a>
                </li>
                <li class="pcoded-hasmenu active pcoded-trigger">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="feather icon-layers"></i>
                        </span>
                        <span class="pcoded-mtext">Referensi</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li>
                            <a href="?page=data_kelas" class="waves-effect waves-dark" style="display: <?php if($hak_akses['data_kelas'] == "N"){ echo 'none;'; } ?>">
                                <span class="pcoded-mtext">Data Kelas</span>
                            </a>
                        </li>
                        <li>
                            <a href="?page=data_siswa" class="waves-effect waves-dark" style="display: <?php if($hak_akses['data_siswa'] == "N"){ echo 'none;'; } ?>">
                                <span class="pcoded-mtext">Data Siswa</span>
                            </a>
                        </li>
                        <li>
                            <a href="?page=data_gtk" class="waves-effect waves-dark" style="display: <?php if($hak_akses['data_gtk'] == "N"){ echo 'none;'; } ?>">
                                <span class="pcoded-mtext">Data GTK</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="?page=data_kandidat" class="waves-effect waves-dark" style="display: <?php if($hak_akses['data_kandidat'] == "N"){ echo 'none;'; } ?>">
                                <span class="pcoded-mtext">Data Kandidat</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="fas fa-file"></i>
                        </span>
                        <span class="pcoded-mtext">Rekap Data</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="?page=kehadiran" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Kehadiran</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="?page=pemilihan" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Pemilihan</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="?page=suara" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Suara / Hasil Vote</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>