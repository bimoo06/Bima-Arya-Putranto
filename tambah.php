<!DOCTYPE html>
<html>

<head>
    <title>Belajar PHP | Tambah Data Identitas</title>
</head>

<body>
    <header>
        <h3>Tambah Identitas</h3>
    </header>
    <form action="proses-tambah.php" method="POST">
        <fieldset>
            <p>
                <label for="id_mahasiswa">id_mahasiswa: </label>
                <input type="text" name="id_mahasiswa" placeholder="id_mahasiswa" />
            <p>
                <label for="nama">nama: </label>
                <input type="text" name="nama" placeholder="nama lengkap" />
            </p>
            <p>
                <label for="alamat">alamat: </label>
                <textarea name="alamat"></textarea>
            </p>
            <p>
                <label for="telepon">telepon: </label>
                <textarea name="telepon"></textarea>
            </p>
            <p>
                <label for="prodi">prodi: </label>
                <textarea name="prodi"></textarea>
            </p>
            <p>
                <input type="submit" value="Daftar" name="daftar" />
            </p>
        </fieldset>
    </form>
</body>
</html>