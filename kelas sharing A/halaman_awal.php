<?php
    //materi session
    // session_start();
    // $_SESSION['email'] = $_POST['email'];
    // $email = isset($_SESSION['email']) ? $_SESSION['email'] : ''; 

    // $cookie_name = 'email';
    // $cookie_value = $_POST['email'];

    // setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
    // $email = isset($_COOKIE[$cookie_name]) ? $_COOKIE[$cookie_name] : '';

    include 'db_connect.php';

    $query = "SELECT * FROM mahasiswa ORDER BY nim desc";
    $result_mahasiswa = mysqli_query($mysqli ,$query);
    $data_mahasiswa = $result_mahasiswa->fetch_all(MYSQLI_ASSOC);

    if(!empty($_GET['nim'])) {
      $nim = $_GET['nim'];
      $query_hapus = "DELETE from mahasiswa WHERE nim = '$nim'";
      $hapus = mysqli_query($mysqli, $query_hapus);
      if($hapus) {
        echo "<script type='text/javascript'>alert('Berhasil menghapus data mahasiswa');window.location.href='halaman_awal.php';</script>";
    } else {
        echo "<script type='text/javascript'>alert('Gagal menghapus data');window.location.href='halaman_awal.php';</script>";
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
      rel="stylesheet"
    />
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
        <h5>Data Mahasiswa</h5>
        <a href="form_mahasiswa.php" class="btn btn-primary float-right mb-3">Tambah Data</a>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">NIM</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">No Telepon</th>
                <th scope="col">Semester</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Opsi</th>
            </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach($data_mahasiswa as $val) { ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <th><?= $val['nim'] ?></th>
                        <td><?= $val['nama'] ?></td>
                        <td><?= $val['alamat'] ?></td>
                        <td><?= $val['no_telp'] ?></td>
                        <td><?= $val['semester'] ?></td>
                        <td><?= $val['jurusan'] ?></td>
                        <td>
                          <a href="form_mahasiswa.php?nim=<?= $val['nim'] ?>" class="btn btn-primary" title="edit"><i class="fa fa-pen-to-square"></i> </a>
                          <a href="halaman_awal.php?nim=<?= $val['nim'] ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" title="hapus"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
  </body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="app.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  <!-- <script src="script.js"></script> -->
</html>
