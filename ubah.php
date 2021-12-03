<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
   include './koneksi.php';
   $id_buku = $_POST['id_buku'];
   $judul_buku = $_POST['judul_buku'];
   $penulis = $_POST['penulis'];
   $jenis_buku = $_POST['jenis_buku'];
   $gambar_buku = $_POST['gambar_buku'];

   $sql = "UPDATE buku SET  judul_buku='$judul_buku', penulis='$penulis', jenis_buku='$jenis_buku', gambar_buku='$gambar_buku' WHERE id_buku='$id_buku'";
   if($conn->query($sql) === TRUE){
       echo "ubah data berhasil <br>";
       echo "<a href='tampil.php'>Kembali</a><br>";
   }else{
       echo "Error: " . $sql . "<br>" . $conn->error;
   }

   $conn->close();

   ?>