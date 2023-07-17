<?php 
if(empty($_GET['page'])) header("Location: index.php");  

include "sambungkan.php";

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT id_buku, gambar_buku, kode_buku, judul_buku, penulis_buku, penerbit_buku, tahun_penerbit, stok FROM databuku WHERE id_buku = $id");

$data=mysqli_fetch_array($result);
// $gambar_buku=$data['gambar_buku'];


?>



<div class="card">
          <div class="card-header">
            <h4 class="card-title">Edit Data Buku</h4>
          </div>

          <div class="card-body">
          <input type="hidden" class="form-control" id="id_buku" name="id_buku"  required value="<?= $data['id_buku']; ?>">             
            <form action="" method="POST" enctype="multipart/form-data">
                  <div class="mb-3 row">
                    <label for="gambar_buku" class="col-sm-2 col-form-label">Upload Gambar</label>
                    <div class="col-sm-10">
                      <input type="file" class="form-control" id="gambar_buku" name="gambar_buku" aria-describedby="gambar_bukuHelp" placeholder="Enter gambar buku" required value=" <?= $data['gambar_buku']; ?>">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="kode_buku" class="col-sm-2 col-form-label">Kode Buku</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="kode_buku" name="kode_buku" aria-describedby="kode_bukuHelp" placeholder="Enter Kode Buku" required value="<?= $data['kode_buku']; ?>">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="judul_buku" class="col-sm-2 col-form-label">Juduk Buku</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="judul_buku" name="judul_buku" aria-describedby="judul_bukuHelp" placeholder="Enter Judul Buku" required value="<?= $data['judul_buku']; ?>">
                    </div>
                  </div>
                  <div class="mb-3 row">
                  <label for="penulis_buku" class="col-sm-2 col-form-label">Penulis Buku</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="penulis_buku" name="penulis_buku" aria-describedby="penulis_bukuHelp" placeholder="Enter Penulis Buku" required value="<?= $data['penulis_buku']; ?>">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="penerbit_buku" class="col-sm-2 col-form-label">Penerbit Buku</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="penerbit_buku" name="penerbit_buku" aria-describedby="penerbit_bukuHelp" placeholder="Enter Penerbit Buku" required value="<?= $data['penerbit_buku']; ?>">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="tahun_penerbit" class="col-sm-2 col-form-label">Tahun Terbit</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="tahun_penerbit" name="tahun_penerbit" aria-describedby="tahun_terbitHelp" placeholder="Enter Tahun Terbit" required value="<?= $data['tahun_penerbit']; ?>">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="stok" class="col-sm-2 col-form-label">Stok</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="stok" name="stok" aria-describedby="stoklHelp" placeholder="Enter Stok" required value="<?= $data['stok']; ?>">
                    </div>
                  </div>

                  <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" name="check" ID="check"required>
                    <label class="form-check-label" for="check">Check me out</label>
                  </div>
                  
                  <button type="submit" class="btn btn-primary" id="submit" name="submit">Update</button>
            </form>

          </div>

</div>

<?php 
  if($_POST) {
    $gambar_buku = $_FILES['gambar_buku']['name'];
    $kode_buku = $_POST['kode_buku'];
    $judul_buku = $_POST['judul_buku'];
    $penulis_buku = $_POST['penulis_buku'];
    $penerbit_buku = $_POST['penerbit_buku'];
    $tahun_penerbit = $_POST['tahun_penerbit'];
    $stok = $_POST['stok'];

    
    
    // Proses upload gambar
    $target_directory = "img/";
    $target_file = $target_directory . basename($gambar_buku);
    $upload_ok = move_uploaded_file($_FILES["gambar_buku"]["tmp_name"], $target_file);


    if ($upload_ok) {
      // Query untuk menyimpan data buku ke tabel databuku
      $sql="UPDATE databuku SET gambar_buku='$gambar_buku', kode_buku='$kode_buku', judul_buku='$judul_buku', penulis_buku='$penulis_buku',penerbit_buku='$penerbit_buku', tahun_penerbit='$tahun_penerbit', stok ='$stok' WHERE id_buku ='$id'"; 
      $query=  mysqli_query($conn, $sql) or die ("SQL Edit MHS Error". mysqli_error($conn));
      
      if ($query){
        echo "<script>window.location.assign('index.php?page=tabel_buku');</script>";
      }else{
        echo "<script>alert('Edit Data Gagal');<script>";
      }

  } else {
      // Jika gagal upload gambar, tampilkan pesan error
      echo "Error uploading file.";
  }

  }
?>


