<?php
$kolom = $_POST['kolom'];
$cari = $_POST['cari'];
$link = mysqli_connecyt("localhost", "root", "", "db_buku");
$hasil = mysqli_query($link, "SELECT * FROM buku WHERE $kolom like '$cari'");
$jumlah = mysqli_num_rows($hasil);
echo "<br>";
echo "Ditemukan : $jumlah <br>";
while($baris = mysqli_fetch_array($hasil)) {
    echo "Judul buku";
    echo $baris[1];
    echo "Penulis";
    echo $baris[2];
    echo "Jenis Buku";
    echo $baris[3];
    echo "Gambar Buku";
    echo $baris[4];
    echo "<br>";
}