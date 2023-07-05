<?php
if(empty($_GET['page'])) header("Location: index.php");

include "sambungkan.php";

if(isset($_POST['submit'])) {
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
        
        $query = "INSERT INTO databuku (gambar_buku, kode_buku, judul_buku, penulis_buku, penerbit_buku, tahun_penerbit, stok) 
                  VALUES ('$gambar_buku', '$kode_buku', '$judul_buku', '$penulis_buku', '$penerbit_buku', '$tahun_penerbit', '$stok')";
        
        if (mysqli_query($conn, $query)) {
            // Jika penyimpanan berhasil, alihkan ke halaman sukses atau halaman lain yang diinginkan
            header("Location: index.php?page=tabel_buku");
            exit();
        } else {
            // Jika terjadi kesalahan saat penyimpanan, tampilkan pesan error
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        // Jika gagal upload gambar, tampilkan pesan error
        echo "Error uploading file.";
    }

    // Tutup koneksi database
    mysqli_close($conn);
}
?>