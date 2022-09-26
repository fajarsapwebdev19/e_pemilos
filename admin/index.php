<?php
    session_start();
    if(empty($_SESSION['login']))
    {
        header('location: lost_session.php');
    }elseif($_SESSION['status_akun'] == "N")
    {
        header('location: lost_active.php');
    }
    
    require '../koneksi/koneksi.php'; 
    $username = $_SESSION['username'];

    // data user admin
    $query = mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$username'");
    $data = mysqli_fetch_assoc($query);

    // jika akun sudah di blok user masih dalam keadaan login
    if($data['status_akun'] == "N")
    {
        header('location: lost_active.php');
    }

    // hak akses admin
    $hak_akses_admin = mysqli_query($koneksi, "SELECT * FROM akses_menu WHERE username='$username'");
    $akses = mysqli_fetch_assoc($hak_akses_admin);
?>


<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>E-PEMILOS | <?= date('Y'); ?></title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Aplikasi E-PEMILOS" />
    <meta name="keywords" content="e-pemilos">
    <meta name="author" content="colorlib" />
    <link rel="shortcut icon" href="../assets/img/smk.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="../assets/admindek-html/files/bower_components/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fontawesome/css/all.css">
    <!-- feather icon -->
    <link rel="stylesheet" type="text/css" href="../assets/admindek-html/files/assets/icon/feather/css/feather.css">
    <!-- font-awesome-n -->
    <link rel="stylesheet" type="text/css" href="../assets/admindek-html/files/assets/css/font-awesome-n.min.css">
    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="../assets/admindek-html/files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/admindek-html/files/assets/pages/data-table/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/admindek-html/files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="../assets/admindek-html/files/assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/mystyle.css">
    <link rel="stylesheet" href="../assets/bootstrap-datepicker/css/bootstrap-datepicker.min.css">
    <style>
        .text-bold{
            font-weight: 700;
        }

        .table-bordered{
            border: 1px none #fff;
        }
    </style>
</head>

<body>
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>
    <!-- [ Pre-loader ] end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo justify-content-lg-center">
                        <a href="#!">
                            <b class="text-center">E-Pemilos <?= date('Y') ?></b>
                        </a>
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="feather icon-menu icon-toggle-right"></i>
                        </a>
                        <a class="mobile-options waves-effect waves-light">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li class="header-search mt-4">
                                <?php
                                    require 'template/day-id.php';
                                ?>
                                <h6><?=  $hari ?>, <?=date('d-m-Y')?></h5>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            
                            <li class="user-profile header-notification">

                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <?php
                                            if(empty($data['foto']))
                                            {
                                                if($data['jenis_kelamin'] == "Laki-Laki")
                                                {
                                                    ?>
                                                        <img src="../assets/img/male.jpg" class="img-radius" alt="User-Profile-Image">
                                                    <?php
                                                }elseif($data['jenis_kelamin'] == "Perempuan")
                                                {
                                                    ?>
                                                        <img src="../assets/img/female.jpg" class="img-radius" alt="User-Profile-Image">
                                                    <?php
                                                }
                                            }else{
                                                ?>
                                                    <img src="../assets/img/<?= $data['foto'] ?>" width="50" height="40" class="img-radius" alt="User-Profile-Image">
                                                <?php
                                            }
                                        ?>
                                        <span><?= $data['nama'] ?></span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <a href="?page=profile">
                                                <i class="feather icon-user"></i> Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="?page=update_password">
                                                <i class="fas fa-key"></i> Update Password

                                            </a>
                                        </li>
                                        <li>
                                            <a href="../proses/logout.php">
                                                <i class="feather icon-log-out"></i> Logout
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <!-- [ navigation menu ] start -->
                    <?php require 'template/sidebar.php'; ?>
                    <!-- [ navigation menu ] end -->
                    <?php require 'template/page.php'; ?>
                    </div>
                    <!-- [ style Customizer ] end -->
                </div> 
            </div>
    </div>
    
    <script type="text/javascript" src="../assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/admindek-html/files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="../assets/admindek-html/files/bower_components/popper.js/js/popper.min.js"></script>
    <script type="text/javascript" src="../assets/admindek-html/files/bower_components/bootstrap/js/bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="../assets/admindek-html/files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
    <!-- data-table js -->
    <script src="../assets/admindek-html/files/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../assets/admindek-html/files/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../assets/admindek-html/files/assets/pages/data-table/js/jszip.min.js"></script>
    <script src="../assets/admindek-html/files/assets/pages/data-table/js/pdfmake.min.js"></script>
    <script src="../assets/admindek-html/files/assets/pages/data-table/js/vfs_fonts.js"></script>
    <script src="../assets/admindek-html/files/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../assets/admindek-html/files/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../assets/admindek-html/files/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../assets/admindek-html/files/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../assets/admindek-html/files/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
    <script src="../assets/admindek-html/files/assets/js/pcoded.min.js"></script>
    <script src="../assets/admindek-html/files/assets/js/vertical/vertical-layout.min.js"></script>
    <script type="text/javascript" src="../assets/admindek-html/files/assets/pages/dashboard/custom-dashboard.min.js"></script>
    <script type="text/javascript" src="../assets/admindek-html/files/assets/js/script.min.js"></script>
    <script src="../assets/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

    <script>
        // validasi formulir
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
                });
            }, false);
        })();

        // ajax dan library yang lain
        $(document).ready( function () {
            $('#example').DataTable({
                "lengthMenu" : [ [5, 10, 25, 50, -1], [5,10, 25, 50, "All"] ]
            });
            $('#data-kehadiran').load('ajax/kehadiran.php');
            form_sekolah();
            form_reset();
            form_info();
        });

        function form_sekolah(){
            $.ajax({
                url: 'ajax/form-edit-sekolah.php',
                type: 'get',
                success: function(data){
                    $("#form-sekolah").html(data);
                }
            })
        }

        function form_reset(){
            $.ajax({
                url: 'ajax/form-reset-peserta.php',
                type: 'get',
                success: function(data){
                    $('#form-reset').html(data);
                }
            })
        }

        function form_info(){
            $.ajax({
                url: 'ajax/form-edit-info.php',
                type: 'get',
                success:function(data){
                    $('#form-info').html(data);
                }
            })
        }

        var realtime = setInterval(
            function(){
                $('#jumlah-suara').load('ajax/suara.php');
            },1000
        )
    </script>
    
</body>
</html>