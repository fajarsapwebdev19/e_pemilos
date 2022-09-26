<?php
    session_start();
    require '../koneksi/koneksi.php';

    if(isset($_POST['login']))
    {
        $username = mysqli_real_escape_string($koneksi, $_POST['username']);
        $password = mysqli_real_escape_string($koneksi, $_POST['password']);

        $login = mysqli_query($koneksi, "SELECT nama,username,password,level,status_akun FROM admin WHERE username='$username' AND password='$password' UNION SELECT nama,username,password,level,status_akun FROM gtk WHERE username='$username' AND password='$password' UNION SELECT nama,username,password,level,status_akun FROM siswa WHERE username='$username' AND password='$password'");

        $cek = mysqli_num_rows($login);

        $data = mysqli_fetch_object($login);

        if($cek > 0)
        {
            $_SESSION['level'] = $data->level;

            if($_SESSION['level'] == "Admin")
            {
                $_SESSION['username'] = $data->username;
                $_SESSION['status_akun'] = $data->status_akun;
                $_SESSION['login'] = "Oke";
                $_SESSION['login_success'] = "<div class='alert alert-success'>Selamat Datang {$data->nama} Di Aplikasi E-Pemilos Anda Login Sebagai {$data->level} </div>";
                header('location: ../admin/');
            }
            elseif($_SESSION['level'] == "GTK" || $_SESSION['level'] == "Siswa")
            {
                $_SESSION['username'] = $data->username;
                $_SESSION['login_user'] = "Oke";
                header('location: ../user/');
            }
        }else{
            $_SESSION['val'] = "<div class='alert alert-danger bg-danger text-white text-alert'>Username Atau Password Anda Salah</div>";
            header('location: ../');
        }
    }
?>