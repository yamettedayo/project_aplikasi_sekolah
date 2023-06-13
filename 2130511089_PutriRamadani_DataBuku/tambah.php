<?php  
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
  while ($row = mysqli_fetch_array($result)) {
    $rows[] = $row;
  }

  // TAMPUNG KE VARIABEL databuku
  
$databuku = $rows;

  // var_dump($rows);

?>



<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- CSS files -->
    <link href="../dist/css/tabler.min.css?1666304673" rel="stylesheet"/>
    <link href="../dist/css/tabler-flags.min.css?1666304673" rel="stylesheet"/>
    <link href="../dist/css/tabler-payments.min.css?1666304673" rel="stylesheet"/>
    <link href="../dist/css/tabler-vendors.min.css?1666304673" rel="stylesheet"/>
    <link href="../dist/css/demo.min.css?1666304673" rel="stylesheet"/>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../dist/solid.min.css">
    <style>
      @import url('https://rsms.me/inter/inter.css');
      :root {
      	--tblr-font-sans-serif: Inter, -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      }
    </style>
    </head>
    <body>
    <script src="../dist/js/demo-theme.min.js?1666304673"></script>
    
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
              <span class="navbar-brand mb-0 h1">Data Buku</span>
            </div>
          </nav>
          <div class="container">
          <h1 class="mt-5"> Perpustakaan</h1>
          <figure>
            <blockquote class="blockquote">
              <p>Tambahkan buku baru kedalam list buku di perpustakaan UMMI</p>
            </blockquote>
            <figcaption class="blockquote-footer">
              Pustakawan <cite title="Source Title">UMMI</cite>
            </figcaption>
          </figure>

          <a href="tambah.php"><button type="button" class="btn btn-primary">Tambahkan Buku</button></a>
          


        
          </div>
    </body>
    </html>