<?php

function checkJawaban($nama, ...$arrJawaban) {
    $jawaban = ["A", "D", "C", "C", "B", "A", "E", "B", "A", "E"];
    $arrBenar = [];// untuk menyimpan hasil penilaian jawaban

    // foreach dikhususkan untuk variabel array
    // key == index, jawaban dari user
    // value jawaban aslinya
    foreach ($jawaban as $key => $value) {
        if ($arrJawaban[$key] == $value) {
            $arrBenar[$key] = 1;
        } else {
            $arrBenar[$key] = 0;
        }
    }

    // menampilkan hasil
    echo "Nama : $nama <br>";
    echo "Jumlah Jawaban Benar : <b>" . count(array_keys($arrBenar, 1)) . "</b></br>";
    echo "Jumlah Jawaban Salah : <b>" . count(array_keys($arrBenar, 0)) . "</b></br>";
    // count berfungsi untuk menghitung jumlah array
    // array_keys berfungsi 
}

checkJawaban("Putri", "A",  "D", "A", "C", "E", "B", "D", "A", "Z", "Z");