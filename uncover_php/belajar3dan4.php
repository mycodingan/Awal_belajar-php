<!-- <!DOCTYPE html>
 <html lang="id">
 <head>
 <meta charset="UTF-8">
 <title>Belajar PHP</title>
 </head>
 <body>
 <h2>Daftar Nama Peserta</h2>
 <table border="1" cellspacing="0" cellpadding="4">
 <tr><th>No.</th><th>Nama Peserta</th></tr>
 <tr><td>1</td><td>Nama Peserta 1</td></tr>
<tr><td>2</td><td>Nama Peserta 2</td></tr>
 <tr><td>3</td><td>Nama Peserta 3</td></tr>
 <tr><td>4</td><td>Nama Peserta 4</td></tr>
 <tr><td>5</td><td>Nama Peserta 5</td></tr>
 <tr><td>6</td><td>Nama Peserta 6</td></tr>
 <tr><td>7</td><td>Nama Peserta 7</td></tr>
 <tr><td>8</td><td>Nama Peserta 8</td></tr>
 <tr><td>9</td><td>Nama Peserta 9</td></tr>
 <tr><td>10</td><td>Nama Peserta 10</td></tr>
 </table>
 </body>
 </html> -->

 
 <!-- File PHP yang telah kita buat (belajar.php) dapat menggambarkan bagaimana PHP diproses 
menjadi kode HTML. Tetapi kode itu hanya menampilkan sebuah teks yang sebenarnya bisa 
dibuat dengan lebih mudah tanpa menggunakan PHP sama sekali. Kali ini kita akan lihat 
bagaimana PHP dapat mempermudah pembuatan perintah HTML. -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coba</title>
</head>
<body>
    <h2>Daftar Nama peserta</h2>
    <table border="1" cellspacing="0" cellpadding="4">
    <tr> <th>no.</th><th>Nama peserta</th></tr>
    <?php
    for ($i=1;$i<=1000;$i++)
    {
        echo "<tr><td>$i</td><td>Nama Peserta $i</td></tr>";
    }
    ?>
    </table>
</body>
</html>
