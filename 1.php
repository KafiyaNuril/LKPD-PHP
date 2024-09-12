<?php
$teks = "Selamat ulang tahun yang ke-17!";

// mencari semua simbol (karakter yang bukan huruf atau angka)
// warna merah berfungsi untuk pemilihan
// pola pattern nama lainnya regular expression, nilai subjek (input), objek yang sudah dibuat
preg_match_all('/[^a-zA-Z0-9\s]/', $teks, $matches);

//fungsi count untuk menghitung jumlah elemen dalam array
// untuk menghitung berapa banyak simbol yang ditemukan
if (count($matches[0]) > 0) {
    // menghilangkan duplikasi simbol
    $uniqueSymbols = array_unique($matches[0]);
    echo "Karakter yang terdapat pada kalimat : ". implode(', ', $uniqueSymbols);
    // menggabungkan elemen elemen array menjadi sebuah string dengan pemisah tertentu
} else {
    echo "Tidak terdapat simbol pada kalimat";
}
?>