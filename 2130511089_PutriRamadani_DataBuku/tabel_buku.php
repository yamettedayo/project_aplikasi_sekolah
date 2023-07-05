<?php
  if(empty($_GET['page'])) header("Location: index.php");  
  // KONEKSI KE HALAMAN LAIN
  include "sambungkan.php";

  // QUERY ISI TABEL databuku
  $result = mysqli_query($conn, "SELECT * FROM databuku");
  // var_dump($result);

  // UBAh DATA KEDALAM ARRAY
  // $row = mysqli_fetch_row($result); //array Numerik
  // $row = mysqli_fetch_assoc($result); //array associative
  // $row = mysqli_fetch_array($result); //array keduanya

  $row=[];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  // TAMPUNG KE VARIABEL databuku
  $databuku = $rows;
  // var_dump($rows);

?>


<div class="card">
  <div class="card-header">
    <h4 class="card-title">Tabel Data Buku</h4>
  </div>

  <div class="card-body">
    <a href="index.php?page=tambah_buku" class="btn btn-primary btn-md">
      <span class="fa fa-file-earmark-plus">T a m b a h  </span></a>
      
      <table class="table table-hover table-bordered" id="mytable" style="margin-top: 10px">
      <thead>
        <tr>
          <th>id Buku</th>
          <th>Gambar Buku</th>
          <th>Kode Buku</th>
          <th>Judul Buku</th>
          <th>Penulis Buku</th>
          <th>Penerbit Buku</th>
          <th>Tahun Terbit</th>
          <th>Stok</th> 
                                                              
          <th style="text-align: center;">Aksi</th>
        </tr>
      </thead>

      <tbody>
        <?php $id = 1;
        foreach($databuku as $buku) : ?>
        <tr>
          <td><?= $id++; ?></td>
          <td> <img src="img/<?= $buku['gambar_buku']; ?>" height="40"> </td>
          <td><?= $buku['kode_buku']; ?></td>
          <td><?= $buku['judul_buku']; ?></td>
          <td><?= $buku['penulis_buku']; ?></td>
          <td><?= $buku['penerbit_buku']; ?></td>
          <td><?= $buku['tahun_penerbit']; ?></td>
          <td><?= $buku['stok']; ?></td>
          <td style="text-align: center;">
            <a href="index.php?page=edit_buku" class="btn btn-success btn-md">
            <span class="fa fa-edit"></span></a>
            <a onclick="return confirm('Apakah yakin data akan di hapus?')" href="proses/crud.php?aksi=hapus&hapus id=<?php echo $isi['id_login'];?>" 
            class="btn btn-danger btn-md"><span class="fa fa-trash"></span></a>
          </td>
        </tr>
          <?php endforeach; ?>

        <tr class="align-bottom">
                                          
        </tr>
      </tbody>
    </table>
  </div>
</div>