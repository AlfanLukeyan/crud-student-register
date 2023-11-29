<?php
include("../includes/config.php");

if (!isset($_GET['id'])) {
    header('Location: list-siswa.php');
    exit();
}

$id = $_GET['id'];

$sql = "SELECT * FROM calon_siswa WHERE id=" . mysqli_real_escape_string($conn, $id);
$query = mysqli_query($conn, $sql);

if (mysqli_num_rows($query) < 1) {
    die("Data tidak ditemukan...");
}

$siswa = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html>

<head>
    <?php include("../templates/header.php"); ?>
</head>

<body>
    <header>
        <h3>Formulir Edit Siswa</h3>
    </header>

    <form action="proses-edit.php" method="POST">

        <input type="hidden" name="id" value="<?php echo htmlspecialchars($siswa['id']); ?>" />

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" placeholder="Nama lengkap" value="<?php echo htmlspecialchars($siswa['nama']); ?>" />
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Alamat</label>
            <input class="form-control" type="text" name="alamat" aria-describedby="alamatHelp" value="<?php echo htmlspecialchars($siswa['alamat']); ?>">
            <div id="alamatHelp" class="form-text">Masukkan Alamat Kamu.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($siswa['jenis_kelamin'] == 'laki-laki') ? "checked" : ""; ?>> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($siswa['jenis_kelamin'] == 'perempuan') ? "checked" : ""; ?>> Perempuan</label>
        </div>
        <div class="mb-3">
            <label for="agama" class="form-label">Agama</label>
            <select name="agama" class="form-select" aria-label="Default select example">
                <?php
                $agamaOptions = array('Islam', 'Kristen', 'Hindu', 'Budha', 'Atheis');
                foreach ($agamaOptions as $option) {
                    echo "<option " . (($siswa['agama'] == $option) ? "selected" : "") . ">" . $option . "</option>";
                }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="asal_sekolah" class="form-label">Sekolah Asal</label>
            <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" aria-describedby="scHelp" placeholder="Asal Sekolah" value="<?php echo htmlspecialchars($siswa['asal_sekolah']); ?>" required>
            <div id="scHelp" class="form-text">Masukkan Asal Sekolah Kamu.</div>
        </div>
        <button type="submit" class="btn btn-primary" value="Simpan" name="simpan">Simpan</button>
    </form>
</body>

</html>