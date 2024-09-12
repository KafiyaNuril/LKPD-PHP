<?php 

$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

// Fungsi array_merge() menggabungkan satu atau lebih array menjadi satu array.
$bilangan = array_merge($bil1, $bil2);

// Fungsi array_unique() menghapus nilai duplikat dari suatu array. Jika dua atau lebih nilai array sama, tampilan pertama akan dipertahankan dan yang lainnya akan dihapus.
$bilanganUnique = array_unique($bilangan);

arsort($bilanganUnique);

echo "Hasil : ";

echo implode(', ', $bilanganUnique);
?>