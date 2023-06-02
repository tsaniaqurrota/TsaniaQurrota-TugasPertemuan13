<!-- Masukkan setiap huruf dalam nama depan anda ke sebuah array. 
Anda akan ditugaskan untuk KKN ke kota - kota yang tersebar di Indonesia.
Secara berurutan, setiap huruf yang terdapat dalam nama depan anda akan menentukan kota mana anda akan ditugaskan.
Aturan penempatan mahasiswa KKN:
Apabila huruf pertama sama dengan huruf pertama nama kota, maka, di kota itulah anda akan ditempatkan. 
Jika huruf pertama tidak ada yang sama dengan huruf pertama nama kota, maka lanjutkan pencarian berdasarkan huruf kedua nama anda, dan seterusnya. 
Jika sampai dengan huruf terakhir nama anda tidak menemukan provinsi tujuan, maka anda akan ditempatkan di "Jawa Timur".
List Kota:
Lampung
Riau
Jambi
Bengkulu
Makassar
Kendari
Gorontalo
Samarinda
Papua
Nusa Tenggara Barat -->

<?php
$nama = "Tsania";
$namaArray = str_split($nama);

$kota = [
    "Lampung",
    "Riau",
    "Jambi",
    "Bengkulu",
    "Makassar",
    "Kendari",
    "Gorontalo",
    "Samarinda",
    "Papua",
    "Nusa Tenggara Barat"
];

foreach ($namaArray as $huruf) {
    $huruf = strtoupper($huruf);
    $found = false;

    foreach ($kota as $k) {
        if (strtoupper($k[0]) === $huruf) {
            $penempatan = $k;
            $found = true;
            break;
        } else {
            $penempatan = "Jawa Timur";
        }
    }

    if ($found) {
        break;
    }
}

echo $nama . " ditugaskan di kota : " . $penempatan;
?>
