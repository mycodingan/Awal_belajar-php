<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.daftar_mahasiswa_1000</title>
</head>
<body>
    <h2>Daftar Absensi Mahasiswa</h2>
    <ul>
        <?php
        for($i=1; $i <= 1000; $i++){
            echo "<li>$i  Belum absen</li>";
        }
        ?>
    </ul>
</body>
</html>
<!-- ini untuk membuat loop di php -->