<!-- Pembagian tugas kerja kelompok: Anda diminta untuk membuat sebuah grup yang beranggotakan 5 orang, termasuk anda. 
Masing - masing anggota, diidentifikasi dengan Nama dan NIM. 
Ketika pembagian tugas kerja, anda berperan sebagai project manager. 
Sebagai seorang project manager, anda membagi peran anggota kelompok dengan aturan bahwa :
-anggota dengan NIM ganjil mendapat peran sebagai front-end developer, 
-anggota dengan NIM genap, mendapat peran sebagai back-end developer. 
Tampilkan nama anggota kelompok anda dengan peran yang sesuai. -->

<?php

$members = array
(
    array("Soobin",505200),
    array("Yeonjun",505199),
    array("Beomgyu",504201),
    array("Taehyun",504202),
    array("Hueningkai",502209)
);

foreach ($members as $m) {
    $nama = $m[0];
    $nim = $m[1];

    if ($nim % 2 == 0) {
        $peran = "Back-end Developer";
    } else {
        $peran = "Front-end Developer";
    }

    echo "$nama : $peran <br>";
}
?>