<!DOCTYPE html>
<html lang="en">

<head>
  <?php include("../templates/header.php") ?>
</head>

<body>
  <div class="login-page">

  <h2>Formulir Pendaftaran Siswa Baru</h2>
    <div class="form">
      <form action="proses-pendaftaran.php" method="POST" class="login-form">
        <input type="text" placeholder="Nama Lengkap" name="nama" required/>
        <input type="text" placeholder="Alamat" name="alamat" required/>
        <h3>Jenis Kelamin</h3>
        <div>
          <label for="jenis_kelamin_laki-laki">
            <input type="radio" id="jenis_kelamin_laki-laki" name="jenis_kelamin" value="laki-laki"> Laki-laki
          </label>
        </div>
        <div>
          <label for="jenis_kelamin_perempuan">
            <input type="radio" id="jenis_kelamin_perempuan" name="jenis_kelamin" value="perempuan"> Perempuan
          </label>
        </div>
        <p>
        <h3 for="agama">Agama</h3>
        <select name="agama" required>
          <option>Islam</option>
          <option>Kristen</option>
          <option>Hindu</option>
          <option>Budha</option>
          <option>Atheis</option>
        </select>
        </p>
        <input type="text" placeholder="Sekolah Asal" name="asal_sekolah" required />
        <button class="mb-3" type="submit" value="Daftar" name="daftar">Daftar</button>
      </form>

      <a class="batal" href="../index.php" type="submit" value="Batal" name="batal">Batal</a>
    </div>
  </div>
</body>

</html>