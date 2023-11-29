<!-- Koneksi ke config.php -->
<?php include("includes/config.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include("templates/header.php") ?>
</head>

<body>
  <div class="login-page">
    <div class="menu">
      <h1>Pendaftaran Siswa Baru</h1>
      <h2>SMA Coding</h2>
    </div>
    <div class="form mt-5">
      <h2>Menu</h2>
      <a href="pages/form-daftar.php">Daftar Baru</a>
      <a href="pages/list-siswa.php">Pendaftar</a>
    </div>

    <?php if (isset($_GET['status'])) : ?>
      <p>
        <?php
        if ($_GET['status'] == 'sukses') {
          
          echo '<div class="alert alert-success" role="alert">';
          echo "Pendaftaran siswa baru berhasil!";
          echo '</div>';
        } else {
          echo '<div class="alert alert-danger" role="alert">';
          echo "Pendaftaran gagal !!";
          echo '</div>';
        }
        ?>
      </p>
    <?php endif; ?>
  </div>
</body>

</html>