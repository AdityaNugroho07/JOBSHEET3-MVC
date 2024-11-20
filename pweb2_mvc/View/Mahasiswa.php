<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>
<h2>Edit User</h2>
    <form action="/user/update/<?php echo $user['id']; ?>" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $user['name']; ?>" required>
        <br>
        <label for="nim">NIM:</label>
        <input type="nim" id="nim" name="nim" value="<?php echo $user['nim']; ?>" required>
        <label for="prodi">Prodi:</label>
        <input type="prodi" id="prodi" name="prodi" value="<?php echo $user['prodi']; ?>" required>
        <br>
        <button type="submit">Update</button>
    </form>
    <a href="/user/index">Back to List</a>
    <table>
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Prodi</th>
        </tr>
        <?php
        foreach ($data as $row) {
            ?>
            <tr>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['nim']; ?></td>
                <td><?php echo $row['program_studi']; ?></td>
                <td><a href=""></a></td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>