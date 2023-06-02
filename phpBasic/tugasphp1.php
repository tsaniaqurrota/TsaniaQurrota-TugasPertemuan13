<!-- Tuliskan nama panggilan anda, 
apabila jumlah huruf nama anda sama dengan tanggal hari ini dikurangi 2, maka tampilkan pesan "berhasil", 
jika jumlah huruf nama anda lebih kecil dengan tanggal hari ini, maka, tampilkan pesan "sedikit lagi", 
jika tidak keduanya, tampilkan pesan "coba lagi". (Gunakan fungsi date()). -->

<?php
$name = "tsania";
$nameSum = strlen($callme);
$date = date("d");

if ($nameSum == ($date - 2)) {
    echo "Berhasil!";
} elseif ($nameSum < $date) {
    echo "Sedikit lagi!";
} else {
    echo "Coba lagi!";
}



