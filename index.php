<html>
<head>
  <title>Aplikasi CRUD Plus Upload Gambar dengan PHP</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <section class="title">
    <h1>Data Siswa</h1>
    <a href="form_simpan.php" class="button">Tambah Data</a>
  </section>
  <table border="1" width="100%">
  <thead>
    <tr>
      <th>Foto</th>
      <th>NIS</th>
      <th>Nama</th>
      <th>Jenis Kelamin</th>
      <th>Telepon</th>
      <th>Alamat</th>
      <th colspan="2">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php
  include "config.php";

  $sql = $pdo->prepare("SELECT * FROM siswa");
  $sql->execute(); 

  while($data = $sql->fetch()){ 
    echo "<tr>";
    echo "<td><img src='images/".$data['foto']."' width='100' height='100'></td>";
    echo "<td>".$data['nis']."</td>";
    echo "<td>".$data['nama']."</td>";
    echo "<td>".$data['jenis_kelamin']."</td>";
    echo "<td>".$data['telp']."</td>";
    echo "<td>".$data['alamat']."</td>";
    echo "<td><a href='form_ubah.php?id=".$data['id']."' class='button'>Ubah</a></td>";
    echo "<td><a href='proses_hapus.php?id=".$data['id']."' class='button'>Hapus</a></td>";
    echo "</tr>";
  }
  ?>
  </tbody>
  </table>
</body>
</html>