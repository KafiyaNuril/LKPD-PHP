<?php
// tipe data integer
$pembelian = 130000;
/*l adalah formating untuk nama harinya, jika d (digit) hanya angka, semua digit bakal ke ambil contoh 03. jika j hanya 3*/
// tipe data date time
$hari = date("l");
$totalBelanja = 0 ;

// pengecekan nilai lebih besar dari 100.000
if ($pembelian > 100000) {
    if ($hari == "Tuesday") {
        #menghitung total bayar dengan diskon 7% dan tambahan diskon 5%
        $totalBelanja = ($pembelian - ($pembelian * 7 / 100));
        $totalBelanja = $pembelian * 5 / 100 ;
    } else {
        $totalBelanja = $pembelian; 
    }
}else {
    // Jika pembelian tidak melebihi 100.000 dan tidak di hari Selasa, tidak ada diskon
    $totalBelanja = $pembelian;
}

echo " Hari ini hari : " . $hari . "<br>";
echo "Total Pembelanjaan : " . $pembelian . "<br>"; 
echo "Total yang harus dibayar : " . $totalBelanja . "<br>";

?>