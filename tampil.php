<?php
    include './koneksi.php';
    echo "<a href='form.php'>Tambah Data</a>";

    $sql = "SELECT * FROM buku ";
    $result = $conn->query($sql);
    $a = 1;

    while($baris = mysqli_fetch_array($result)){
        echo "<br>";
        echo "$a";
        echo "<br>";
        echo "Judul Buku :" . $baris[1] . "<br>";
        echo "Penulis :" . $baris[2] . "<br>";
        echo "Jenis Buku :" . $baris[3] . "<br>";
        echo "Gambar Buku :" . $baris[4] . "<br>";
        echo "<a href='ubahdata.php?id_buku=$baris[0]'>Ubah &nbsp</a>";
        echo "<a href='hapus.php?id_buku=$baris[0]'>Hapus &nbsp</a>";
        $a++;
    }
    $conn->close();

?>