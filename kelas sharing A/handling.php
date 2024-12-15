<?php

  $data_mahasiswa = [
    [
      'nim' => 1000001,
      'nama' => 'Andi',
      'umur' => 20,
      'alamat' => 'Jakarta',
      'jurusan' => 'Teknologi Informasi',
    ],
    [
      'nim' => 1000002,
      'nama' => 'Budi',
      'umur' => 20,
      'alamat' => 'Surabaya',
      'jurusan' => 'Teknologi Informasi',
    ],
    [
      'nim' => 1000003,
      'nama' => 'Tania',
      'umur' => 20,
      'alamat' => 'Yogyakarta',
      'jurusan' => 'Kesehatan',
    ],
    [
      'nim' => 1000004,
      'nama' => 'Rina',
      'umur' => 20,
      'alamat' => 'Surabaya',
      'jurusan' => 'Teknologi Informasi',
    ],
    [
      'nim' => 1000005,
      'nama' => 'Rudi',
      'umur' => 20,
      'alamat' => 'Jakarta',
      'jurusan' => 'Teknologi Informasi',
    ],
  ];

  // $search = $_GET['cari'] ?? '';
  // if(isset($_GET['cari'])) {
  //   $search = $_GET['cari'];
  // } else {
  //   $search = '';
  // }
  // $search = isset($_GET['cari']) ? $_GET['cari'] : '';
  $search = isset($_POST['cari']) ? $_POST['cari'] : '';
  // var_dump($search);die;

  $nim = isset($_POST['nim']) ? $_POST['nim'] : '';
  $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
  $umur = isset($_POST['umur']) ? $_POST['umur'] : '';
  $alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
  $jurusan = isset($_POST['jurusan']) ? $_POST['jurusan'] : '';
  
  $data_mahasiswa_statis = [
    'nim' => $nim,
    'nama' => $nama,
    'umur' => $umur,
    'alamat' => $alamat,
    'jurusan' => $jurusan
  ];


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

    <div class="container" style="margin-top: 200px">
      <div class="row">
        <div class="col-12">
        <form method="POST" class="mb-3">
          <div class="row">
            <input type="text" id="search" name="cari" value="<?= $search ?>" class="form-control col-md-3" placeholder="Masukkan Kata Kunci" />
            <button class="btn btn-primary col-md-1 ml-2" type="submit">Cari</button>
            <a href="form.php" class="btn btn-primary col-md-1 ml-2 float-left">Form</a>
          </div>
        </form>
        </div>
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">No</th>
              <th scope="col">NIM</th>
              <th scope="col">Nama</th>
              <th scope="col">Umur</th>
              <th scope="col">Alamat</th>
              <th scope="col">Jurusan</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1; 
            foreach ($data_mahasiswa as $value) {
              if($value['nim'] == $search || $value['nama'] == $search || $value['alamat'] == $search) { 
            ?>
            <tr>
              <th><?= $no++; ?></th>
              <td><?= $value['nim'] ?></td>
              <td><?= $value['nama'] ?></td>
              <td><?= $value['umur'] ?></td>
              <td><?= $value['alamat'] ?></td>
              <td><?= $value['jurusan'] ?></td>
            </tr>
            <?php } else if($search == '') { ?>
              <tr>
                <th><?= $no++; ?></th>
                <td><?= $value['nim'] ?></td>
                <td><?= $value['nama'] ?></td>
                <td><?= $value['umur'] ?></td>
                <td><?= $value['alamat'] ?></td>
                <td><?= $value['jurusan'] ?></td>
              </tr>
              <tr>
            <?php } } if(!empty($data_mahasiswa_statis)) { ?>
              <tr>
                <th><?= $no++; ?></th>
                <td><?= $data_mahasiswa_statis['nim'] ?></td>
                <td><?= $data_mahasiswa_statis['nama'] ?></td>
                <td><?= $data_mahasiswa_statis['umur'] ?></td>
                <td><?= $data_mahasiswa_statis['alamat'] ?></td>
                <td><?= $data_mahasiswa_statis['jurusan'] ?></td>
              </tr>
            <?php } ?>
            </tbody>
        </table>
      </div>
    </div>
    <!-- <div class="form">
      <input type="number" id="angka1" class="angka1" placeholder="masukkan angka pertama" />
      <input type="number" id="angka2" class="angka2" placeholder="masukkan angka kedua" />
      <select id="operator" class="operator">
        <option selected disabled>--Pilih Operator--</option>
        <option value="tambah">Penjumlahan</option>
        <option value="kurang">Pengurangan</option>
        <option value="perkalian">Perkalian</option>
        <option value="pembagian">Pembagian</option>
      </select>
      <input type="number" id="hasil_perhitungan" class="hasil_perhitungan" readonly />
      <br>
      <button class="button" id="btn_tambah">Jumlahkan</button>
      <button class="button" id="btn-kurang">Kurangi</button>
      <button class="button" id="btn-perkalian">Kalikan</button>
      <button class="button" id="btn-pembagian">Bagi</button>
    </div> -->
    <!-- <div class="form-button">
      <button class="hide-form">Hilangkan Form</button>
      <button class="show-form">Tampilkan Form</button>
      <input type="text" id="search" class="search" placeholder="Masukkan Kata Kunci" />
    </div> -->
  </body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="app.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  <!-- <script src="script.js"></script> -->
</html>
