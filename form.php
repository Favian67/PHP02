<head>
    <title>Formulir</title>
</head>

<body id="bg-login">
    <h1>
        Pendaftaran
    </h1>   
    <div class="blog-login">
    <form action="simpan.php" method="post">
        <table>
            <tr>
                <td>Judul Buku</td>
                <td> : </td>
                <td><input type="text" name="judul_buku" placeholder="Masukkan Judul"></td>
            </tr>

            <tr>
                <td>Penulis</td>
                <td> : </td>
                <td><input type="text" name="penulis" placeholder="Masukkan nama Penulis"></td>
            </tr>

            <tr>
                <td>Jenis Buku</td>
                <td> : </td>
                <td><input type="text" name="jenis_buku" placeholder="Masukkan jenis buku"></td>
            </tr>   

            <tr>
                <td>Gambar Buku</td>
                <td> : </td>
                <td><input type="text" name="gambar_buku" placeholder="Masukkan Gambar"></td>
            </tr>

        </table>
        <input type="submit" name="simpan" value="simpan">
    </form>
</body>     