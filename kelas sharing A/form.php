<?php

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
            <form method="POST" action="handling.php">
                <div class="form-group">
                    <label for="exampleInputEmail1"></label>
                    <input type="text" class="form-control" name="nim" required id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nama</label>
                    <input type="text" class="form-control" name="nama" id="exampleInputPassword1">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Usia</label>
                    <input type="number" class="form-control" name="umur" id="exampleInputPassword1">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    <input type="text" class="form-control" name="alamat" id="exampleInputPassword1">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Jurusan</label>
                    <select class="form-control" name="jurusan">
                        <option selected disabled>--Pilih Jurusan--</option>
                        <option value="Teknologi Informasi">Teknologi Informasi</option>
                        <option value="Kesehatan">Kesehatan</option>
                        <option value="Teknologi Industri">Ekonomi</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
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