<?php
    include 'db_connect.php';

    // var_dump('cccc');

    $query = "SELECT * FROM barang ORDER BY id desc";
    $result = mysqli_query($mysqli ,$query);
    $data = $result->fetch_all(MYSQLI_ASSOC);

    // if(!empty($_GET['nim'])) {
    //   $nim = $_GET['nim'];
    //   $query_hapus = "DELETE from mahasiswa WHERE nim = '$nim'";
    //   $hapus = mysqli_query($mysqli, $query_hapus);
    //   if($hapus) {
    //     echo "<script type='text/javascript'>alert('Berhasil menghapus data mahasiswa');window.location.href='halaman_awal.php';</script>";
    //     } else {
    //         echo "<script type='text/javascript'>alert('Gagal menghapus data');window.location.href='halaman_awal.php';</script>";
    //     }
    // }


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
        <h5>Data Barang</h5>
        <a href="#formTambah" data-toggle="modal" class="btn btn-primary float-right mb-3">Tambah Data</a>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Kode</th>
                <th scope="col">Nama</th>
                <th scope="col">Harga</th>
                <th scope="col">Stok</th>
                <th scope="col">Terjual</th>
                <th scope="col">Opsi</th>
            </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach($data as $val) { ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <th><?= $val['kode'] ?></th>
                        <td><?= $val['nama'] ?></td>
                        <td><?= $val['harga'] ?></td>
                        <td><?= $val['stok'] ?></td>
                        <td><?= $val['terjual'] ?></td>
                        <td>
                          <a href="form_mahasiswa.php?nim=<?= $val['id'] ?>" class="btn btn-primary" title="edit"><i class="fa fa-pen-to-square"></i> </a>
                          <a href="halaman_awal.php?nim=<?= $val['id'] ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" title="hapus"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <div class="modal fade" id="formTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Kode</label>
                            <input type="text" name="kode" class="form-control" id="exampleInputEmail1" required aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama</label>
                            <input type="text" name="nama" class="form-control" id="exampleInputEmail1" required aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Harga</label>
                            <input type="number" name="harga" class="form-control" id="exampleInputEmail1" required aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Stok</label>
                            <input type="number" name="stok" class="form-control" id="exampleInputEmail1" required aria-describedby="emailHelp">
                        </div>
                        <hr>
                        <div class="form-group mt-2">
                            <button type="submit" name="submit" value="tambah_data" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
  </body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="app.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  <!-- <script src="script.js"></script> -->
</html>
