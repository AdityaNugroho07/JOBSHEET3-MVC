<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
