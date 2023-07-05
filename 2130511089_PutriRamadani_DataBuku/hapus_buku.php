<?php

if(empty($_GET['page'])) header("Location: index.php");  
// KONEKSI KE HALAMAN LAIN
include "sambungkan.php";

  //mengambil id dari url
  $id = $_GET['id'];

?>