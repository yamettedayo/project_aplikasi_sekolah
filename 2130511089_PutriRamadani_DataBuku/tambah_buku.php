<?php 
if(empty($_GET['page'])) header("Location: index.php");  

include "sambungkan.php";

$result = mysqli_query($conn, "INSERT INTO * FROM databuku");


?>



<div class="card">
          <div class="card-header">
            <h4 class="card-title">Tambah Data Buku</h4>
          </div>

          <div class="card-body">
                          
            <form action="proses.php" method="POST" enctype="multipart/form-data">
                  <div class="mb-3 row">
                    <label for="gambar_buku" class="col-sm-2 col-form-label">Upload Gambar</label>
                    <div class="col-sm-10">
                      <input type="file" class="form-control" id="gambar_buku" name="gambar_buku" aria-describedby="gambar_bukuHelp" placeholder="Enter gambar buku" required>
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="kode_buku" class="col-sm-2 col-form-label">Kode Buku</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="kode_buku" name="kode_buku" aria-describedby="kode_bukuHelp" placeholder="Enter Kode Buku" required>
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="judul_buku" class="col-sm-2 col-form-label">Juduk Buku</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="judul_buku" name="judul_buku" aria-describedby="judul_bukuHelp" placeholder="Enter Judul Buku" required>
                    </div>
                  </div>
                  <div class="mb-3 row">
                  <label for="penulis_buku" class="col-sm-2 col-form-label">Penulis Buku</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="penulis_buku" name="penulis_buku" aria-describedby="penulis_bukuHelp" placeholder="Enter Penulis Buku" required>
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="penerbit_buku" class="col-sm-2 col-form-label">Penerbit Buku</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="penerbit_buku" name="penerbit_buku" aria-describedby="penerbit_bukuHelp" placeholder="Enter Penerbit Buku" required>
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="tahun_penerbit" class="col-sm-2 col-form-label">Tahun Terbit</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="tahun_penerbit" name="tahun_penerbit" aria-describedby="tahun_terbitHelp" placeholder="Enter Tahun Terbit" required>
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="stok" class="col-sm-2 col-form-label">Stok</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="stok" name="stok" aria-describedby="stoklHelp" placeholder="Enter Stok" required>
                    </div>
                  </div>

                  <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" name="check" ID="check"required>
                    <label class="form-check-label" for="check">Check me out</label>
                  </div>
                  
                  <button type="submit" class="btn btn-primary" id="submit" name="submit">Submit</button>
            </form>

          </div>
          
</div>

