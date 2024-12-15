<?php
    include 'db_connect.php';

    $query = "SELECT transaksi.*, member.nama FROM transaksi LEFT JOIN member ON transaksi.member_id = member.id ORDER BY id desc";
    $result = mysqli_query($mysqli ,$query);
    $data = $result->fetch_all(MYSQLI_ASSOC);

    $query_b = "SELECT * FROM barang ORDER BY id desc";
    $result_b = mysqli_query($mysqli ,$query_b);
    $data_brg = $result_b->fetch_all(MYSQLI_ASSOC);

    $query_m = "SELECT * FROM member ORDER BY id desc";
    $result_m = mysqli_query($mysqli ,$query_m);
    $data_member = $result_m->fetch_all(MYSQLI_ASSOC);

    if(isset($_POST['submit'])) {
        $brg_1 = $_POST['brg_1'];
        $brg_2 = $_POST['brg_2'];
        $member_id = $_POST['member_id'];
        $harga = 0;

        $query_cb = "SELECT * FROM barang WHERE id = '$brg_1'";
        $result_cb = mysqli_query($mysqli, $query_cb);
        $hasil_cb = mysqli_fetch_assoc($result_cb);
        if($hasil_cb['stok'] < 1) {
            echo "<script type='text/javascript'>alert('Stok barang tidak mencukupi');window.location.href='transaksi.php';</script>";
        }

        $harga = $hasil_cb['harga'];

        if(!empty($brg_2)) {
            $query_cb2 = "SELECT * FROM barang WHERE id = '$brg_2'";
            $result_cb2 = mysqli_query($mysqli, $query_cb2);
            $hasil_cb2 = mysqli_fetch_assoc($result_cb2);
            if($hasil_cb2['stok'] < 1) {
                echo "<script type='text/javascript'>alert('Stok barang 2 tidak mencukupi');window.location.href='transaksi.php';</script>";
            }
            $harga = $harga + $hasil_cb2['harga'];
        }

        $query_cm = "SELECT * FROM member WHERE id = '$member_id'";
        $result_cm = mysqli_query($mysqli, $query_cm);
        $hasil_cm = mysqli_fetch_assoc($result_cm);
        if($hasil_cm['saldo'] <= $harga) {
            echo "<script type='text/javascript'>alert('Saldo member tidak mencukupi');window.location.href='transaksi.php';</script>";
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
        <h5>Data Barang</h5>
        <!-- <?= $harga ?> -->
        <a href="#formTambah" data-toggle="modal" class="btn btn-primary float-right mb-3">Transaksi</a>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Jumlah Nominal Transaksi</th>
                <th scope="col">Member</th>
                <th scope="col">Opsi</th>
            </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach($data as $val) { ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <th><?= $val['nominal_transaksi'] ?></th>
                        <td><?= $val['nama'] ?></td>
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
                            <label for="exampleInputEmail1">Barang 1</label>
                            <select name="brg_1" class="form-control" required>
                                <option value="" disabled selected>--Pilih--</option>
                                <?php foreach ($data_brg as $val_brg) { ?>
                                    <option value="<?= $val_brg['id'] ?>"><?= $val_brg['nama'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Barang 2</label>
                            <select name="brg_2" class="form-control">
                                <option value="" disabled selected>--Pilih--</option>
                                <?php foreach ($data_brg as $val_brg) { ?>
                                    <option value="<?= $val_brg['id'] ?>"><?= $val_brg['nama'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Member</label>
                            <select name="member_id" class="form-control" required>
                                <option value="" disabled selected>--Pilih--</option>
                                <?php foreach ($data_member as $val_member) { ?>
                                    <option value="<?= $val_member['id'] ?>"><?= $val_member['nama'] ?></option>
                                <?php } ?>
                            </select>
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
