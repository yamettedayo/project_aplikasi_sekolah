<?php
$servername = "localhost";
$database = "sekolah";
$username = "root";
$password = "";

// untuk tulisan bercetak tebal silakan sesuaikan dengan detail database Anda
// membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);
// mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
//echo "Koneksi berhasil";
//mysqli_close($conn);

mysqli_select_db($conn, $database);



// function query($query) 
// {
//     $conn = mysqli_connect();
//     $result = mysqli_query($conn, $query);

//     //jika hasilnya hanya 1 data
//     if(mysqli_num_rows($result) == 1) {
//         return mysqli_fetch_assoc($result);
//     }
    
//     $rows = [];
//     while ($row = mysqli_fetch_assoc($result)) {
//         $rows[] = $row;
//     }

//     return $rows;

// }


// function tambah($data)
// {
//     $conn = mysqli_connect();

//     // $id_buku = htmlspecialchars($data['id_buku']);
//     // $gambar_buku = ($data['gambar_buku']);
//     $kode_buku = htmlspecialchars($data['kode_buku']);
//     $judul_buku = htmlspecialchars($data['judul_buku']);
//     $penulis_buku = htmlspecialchars($data['penulis_buku']);
//     $penerbit_buku = htmlspecialchars($data['penerbit_buku']);
//     $tahun_penerbit = htmlspecialchars($data['tahun_penerbit']);
//     $stok = htmlspecialchars($data['stok']);

//     $query = "INSERT INTO
//                 databuku
//             VALUES
//                 (null, '', '$kode_buku', '$judul_buku', '$penulis_buku', '$penerbit_buku', '$tahun_penerbit', '$stok')
//             ";
//     mysqli_query($conn, $query) or die(mysqli_error($conn));
//     return mysqli_affected_rows($conn);
// }



?>