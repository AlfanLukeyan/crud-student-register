<!-- <?php include("../includes/config.php"); ?> -->

<!DOCTYPE html>
<html>

<head>
    <?= include("../templates/header.php") ?>
</head>

<body>
    <header>
        <h3>Siswa yang sudah mendaftar</h3>
    </header>

    <nav>
        <a href="form-daftar.php">Tambah Baru</a>
        <?php echo ' | '?>
        <a href="../index.php">Home</a>
    </nav>

    <br>

    <table class="table" style="text-align: center;">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Agama</th>
                <th scope="col">Sekolah Asal</th>
                <th scope="col">Tindakan</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $sql = "SELECT * FROM calon_siswa";
            $query = mysqli_query($conn, $sql);

            // Membuat nomor urut
            $no = 1;

            while ($siswa = mysqli_fetch_array($query)) {
                echo "<tr>";

                echo '<td>' . $no++ . "</td>";
                echo "<td>" . $siswa['nama'] . "</td>";
                echo "<td>" . $siswa['alamat'] . "</td>";
                echo "<td>" . $siswa['jenis_kelamin'] . "</td>";
                echo "<td>" . $siswa['agama'] . "</td>";
                echo "<td>" . $siswa['asal_sekolah'] . "</td>";

                echo "<td>";
                echo "<a class='btn btn-warning' href='form-edit.php?id=" . $siswa['id'] . "'>Edit</a>";
                echo " | ";
                echo "<a class='btn btn-danger' href='hapus.php?id=" . $siswa['id'] . "'>Hapus</a>";
                echo "</td>";

                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <span class="badge text-bg-danger">Total: <?php echo mysqli_num_rows($query) ?></span>

</body>

</html>