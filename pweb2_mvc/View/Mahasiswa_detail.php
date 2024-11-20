<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Tambah Pengguna Baru</h2>
<form action="/user/store" method="POST">
    <label for="name">Nama:</label>
    <input type="text" name="name" id="name" required>
    <label for="nim">NIM:</label>
    <input type="nim" name="nim" id="nim" required> 
    <label for="prodi">Prodi:</label>
    <input type="prodi" name="prodi" id="prodi" required>
    <button type="submit">Simpan</button>
</form>

    <table>
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Prodi</th>
        </tr>
        <?php
        $data = array(
            array('nama' => 'Aditya Nugroho', 'nim' => '230302073', 'program_studi' => 'Teknik Informatika'),
        );
        foreach ($data as $row) {
            ?>
            <tr>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['nim']; ?></td>
                <td><?php echo $row['program_studi']; ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>