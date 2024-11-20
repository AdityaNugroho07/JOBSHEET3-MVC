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
    <table>
        <tr>
            <th>Prodi</th>
        </tr>
        <?php


        foreach ($data as $row) {
            ?>
            <tr>
                <td><?php echo $row['nama']; ?></td>
                <td><a href=""></a></td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>