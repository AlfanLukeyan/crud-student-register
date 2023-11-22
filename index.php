<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
    <link rel="stylesheet" href="css/lmao.css" />
  </head>
  <body>
    <div class="login-page">
    <div class="menu">
    <h1>Pendaftaran Siswa Baru</h1>
    <h1>SMA Coding</h1>
    </div>
      <div class="form">
        <h2>Menu</h2>
        <a href="form-daftar.php">Daftar Baru</a>
        <a href="list-siswa.php">Pendaftar</a>
        <?php if(isset($_GET['status'])): ?>
            <p>
                <?php
                    if($_GET['status'] == 'sukses'){
                        echo "Pendaftaran siswa baru berhasil!";
                    } else {
                        echo "Pendaftaran gagal!";
                    }
                ?>
            </p>
        <?php endif; ?>
      </div>
    </div>
  </body>
</html>
