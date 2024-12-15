<?php

include 'db_connect.php';

$title = 'Tambah';
$value_sumbit = 'tambah';
$nim_val = "";
$nama_val = "";
$alamat_val = "";
$no_telp_val = "";
$semester_val = "";
$jurusan_val = "";
$hidden = '';
if(!empty($_GET['nim'])) {
    $nim = $_GET['nim'];
    $title = 'Edit';
    $value_sumbit = 'edit';

    $query = "SELECT * FROM mahasiswa WHERE nim = '$nim'";
    $hasil_q = mysqli_query($mysqli, $query);
    $value = mysqli_fetch_assoc($hasil_q);
    $nim_val = $value['nim'];
    $nama_val = $value['nama'];
    $alamat_val = $value['alamat'];
    $no_telp_val = $value['no_telp'];
    $semester_val = $value['semester'];
    $jurusan_val = $value['jurusan'];
    $hidden = 'style="display:none"';
}


if(isset($_POST['simpan'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];
    $semester = $_POST['semester'];
    $jurusan = $_POST['jurusan'];

    if(empty($nim)) {
        $msg_error_nim = 'Nim wajib diisi';
    }

    if($_POST['simpan'] == 'tambah') {
        $query_insert = "INSERT INTO mahasiswa (nim, nama, alamat, no_telp, semester, jurusan) VALUES ('$nim', '$nama', '$alamat', '$no_telp', '$semester', '$jurusan')";
        $simpan = mysqli_query($mysqli, $query_insert);
        if($simpan) {
            echo "<script type='text/javascript'>alert('Berhasil simpan data mahasiswa');window.location.href='halaman_awal.php';</script>";
        } else {
            echo "<script type='text/javascript'>alert('Gagal simpan data');window.location.href='form_mahasiswa.php';</script>";
        }
    } else {
        $query_edit = "UPDATE mahasiswa SET nim = '$nim', nama = '$nama', alamat = '$alamat', no_telp = '$no_telp', semester = '$semester', jurusan = '$jurusan' WHERE nim = '$nim'";
        $update = mysqli_query($mysqli, $query_edit);
        if($update) {
            echo "<script type='text/javascript'>alert('Berhasil update data mahasiswa');window.location.href='halaman_awal.php';</script>";
        } else {
            echo "<script type='text/javascript'>alert('Gagal update data');window.location.href='form_mahasiswa.php?nim=".$_GET['nim']."';</script>";
        }
    }

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Belajar</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet" />
</head>

<body>
    <nav class="navbar">
        <h1>Webku</h1>
        <div class="menu-navbar">
            <a href="index.html">Home</a>
            <a href="about.html">About</a>
            <a href="login.html">Portfolio</a>
            <a href="blog.html">Blog</a>
            <a href="contact.html">Contact</a>
        </div>
        <div class="menu-navbar-mobile">
            <a href="#" id="nav-toggle"><i class="fas fa-bars"></i></a>
        </div>
    </nav>

    <div class="container" style="margin-top: 150px;">
        <div class="row">
            <div class="col-12">

                <h5>Form <?= $title ?> Mahasiswa</h5>
                <a href="halaman_awal.php" class="btn btn-primary float-right mb-3">Kembali</a>
            </div>
        </div>
        <form method="POST" action="">
            <div class="form-group" <?= $hidden ?>>
                <label for="exampleInputEmail1">NIM</label>
                <input type="text" class="form-control" name="nim" require id="exampleInputEmail1" value="<?php echo $nim_val ?>" aria-describedby="emailHelp">
                <span class="text-danger"><?php if(!empty($msg_error_nim)) {
                    echo $msg_error_nim;
                } ?></span>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Nama</label>
                <input type="text" class="form-control" name="nama" value="<?= $nama_val ?>" required id="exampleInputPassword1">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Alamat</label>
                <input type="text" class="form-control" name="alamat" value="<?= $alamat_val ?>" required id="exampleInputPassword1">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">No Telepon</label>
                <input type="number" class="form-control" name="no_telp" value="<?= $no_telp_val ?>" required id="exampleInputPassword1">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Semester</label>
                <input type="number" class="form-control" name="semester" value="<?= $semester_val ?>" required id="exampleInputPassword1">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Jurusan</label>
                <select class="form-control" name="jurusan" required>
                    <!-- <option selected disabled value="">--Pilih Jurusan--</option> -->
                    <option <?php if($jurusan_val == 'Teknologi Informasi') {
                        echo 'selected';
                    } ?> value="Teknologi Informasi">Teknologi Informasi</option>
                    <option <?php if($jurusan_val == 'Kesehatan') {
                        echo 'selected';
                    } ?> value="Kesehatan">Kesehatan</option>
                    <option <?php if($jurusan_val == 'Ekonomi') {
                        echo 'selected';
                    } ?> value="Ekonomi">Ekonomi</option>
                </select>
            </div>
            <button type="submit" name="simpan" value="<?= $value_sumbit ?>" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<!-- <script src="script.js"></script> -->

</html>