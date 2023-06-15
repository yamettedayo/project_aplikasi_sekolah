<<?php 
if(empty($_GET['page'])) header("Location: index.php");  
 ?>


<div class="card">
          <div class="card-header">
            <h4 class="card-title">Tambah Data Buku</h4>
          </div>

          <div class="card-body">

            <div class="input-group mb-3">
              <input type="file" class="form-control" id="inputGroupFile02">
              <label class="input-group-text" for="inputGroupFile02">Upload</label>            
            </div>
                          
            <form>
              <div class="form-group">
                <label for="exampleInputEmail1">Kode Buku</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Kode Buku">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Judul Buku</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Judul Buku">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Penulis Buku</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Penulis Buku">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Penerbit Buku</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Penerbit Buku">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Tahun Terbit</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Tahun Terbit">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Stok</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Stok">
              </div>

              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
              </div>
              
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>

          </div>
</div>