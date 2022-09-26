<?php
    if(empty($_GET['page']))
    {
        require 'page/home.php';
    }

    if(isset($_GET['page']))
    {
        $page = $_GET['page'];
    }
    else{
        $page = 1;
    }


    switch($page)
    {
        case 'account';
        require 'page/account.php';
        break;

        case 'data_kelas';
        require 'page/kelas.php';
        break;

        case 'data_siswa';
        require 'page/siswa.php';
        break;

        case 'data_gtk';
        require 'page/gtk.php';
        break;

        case 'data_kandidat';
        require 'page/kandidat.php';
        break;
        
        case 'kehadiran';
        require 'page/kehadiran.php';
        break;

        case 'pemilihan';
        require 'page/pemilihan.php';
        break;

        case 'suara';
        require 'page/suara.php';
        break;

        case 'profile';
        require 'page/profile.php';
        break;

        case 'update_password';
        require 'page/update_password.php';
        break;

        
    }
?>
