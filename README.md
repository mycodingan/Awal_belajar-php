1. Variabel $_SERVER
Variabel yang pertama dan utama adalah variabel $_SERVER. Ia adalah sebuah array asosiatif yang menyediakan berbagai macam informasi tentang request yang ditangkap oleh server. Data yang dimuat berupa headers, paths, lokasi skrip, dan sebagainya.
Nilai yang tersimpan pada variabel $_SERVER disediakan oleh web server, oleh karena itu tidak ada jaminan khusus bahwa setiap web server yang kita gunakan akan memberikan semua data-data standar yang ada.
Untuk bisa mengetahui nilai apa saja yang tersedia pada variabel $_SERVER, kita bisa mengeksekusi perintah berikut:
<?php

echo json_encode($_SERVER);
Berikut ini output yang saya dapatkan setelah menginstall ekstensi JSON View pada google chrome yang saya gunakan:
Sebagai penjelasan, pada tabel berikut ini adalah beberapa contoh data pada variabel $_SERVER yang mungkin akan sering anda butuhkan:
Tabel detail variabel $_SERVER
2. Variabel $_GET
Variabel $_GET adalah array asosiatif yang berisi nilai dari query string.
Misalkan kita memiliki file halo-dunia.php sebagaimana berikut:
<?php

$nama = @$_GET['nama']; # tanda @ agar tidak ada peringatan error ketika key-nya kosong
$usia = @$_GET['usia']; # tanda @ agar tidak ada peringatan error ketika key-nya kosong

echo "Halo {$nama}! Apakah benar anda berusia {$usia} tahun?";
Jika kita mengakses file tersebut dengan query string http://localhost/halo-dunia.php?nama=Budi&usia=20, maka output yang akan kita dapatkan adalah:
Halo Budi! Apakah benar anda berusia 20 tahun?
3. Variabel $_POST
Variabel $_POST mirip dengan variabel $_GET. Hanya saja data yang di-passing tidaklah melalui query string pada URL, akan tetapi pada body request. Dan request method yang dilakukan haruslah dengan metode POST. Insyaallah pembahasan tentang $_GET dan $_POST akan kita sendirikan pada pertemuan-pertemuan yang akan datang.
4. Variabel $_SESSION
Variabel $_SESSION merupakan array asosiatif yang menyimpan data sesi pengguna.
Variabel ini bisa kita gunakan untuk menyimpan user yang login pada satu sesi tertentu. Atau juga bisa digunakan untuk menyimpan data cart pada toko online.
Secara default, umur sesi pada PHP adalah 1440 detik atau 24 menit.
5. Variabel $_COOKIE
Mirip dengan $_SESSION, variabel $_COOKIE bisa kita gunakan untuk menyimpan suatu data yang berkaitan dengan user: misal informasi login, informasi cart pada toko online, dan sebagainya.
Bedanya, cookie adalah file berukuran kecil yang disimpan pada browser pengguna. File tersebut akan senantiasa dikirim setiap kali browser mengirimkan request ke server.
Umur cookie umumnya lebih panjang dari pada umur sesi.
6. Variabel $_REQUEST
Variabel $_REQUEST adalah array asosiatif yang menyimpan gabungan nilai dari variabel $_GET, $_POST, dan $_COOKIE yang kesemuanya berhubungan dengan data yang dikirim bersamaan dengan request user.
7. Variabel $_FILES
Variabel $_FILES adalah array asosiatif yang menyimpan data file yang diunggah pengguna dalam satu request dengan metode POST atau PUT.
8. Variabel $_ENV
Variabel $_ENV adalah array asosiatif yang berisi data tentang environment yang skrip PHP berjalan di atasnya. Variabel $_ENV disediakan oleh shell yang menjalankan skrip PHP, sehingga nilainya bisa bervariasi tergantung dengan sistem operasi yang digunakan.
Di dalam framework PHP modern seperti laravel, variabel $_ENV juga digunakan untuk menyimpan hal-hal yang berkaitan dengan environment seperti nama database, password database, dan nilai lainnya untuk melakukan konfigurasi framework.
9. Variabel $GLOBALS
Variabel $GLOBALS adalah array asosiatif yang menyimpan semua variabel global yang didefinisikan saat program dijalankan. Kita telah membahas tentang variabel ini dalam pembahasan ruang lingkup variabel.

