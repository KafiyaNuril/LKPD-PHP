<?php

// parameter Variadik karena dia bisa menampung banyak argumen
function createArray(...$jurusan){
    // pembuatan array assosiatif
    $arr = [];
    foreach ($jurusan as $value) {
        #strtoupper mengubah ke kapital
        //if tersebut memeriksa apakah elemen yang sudah dikonversi menjadi huruf kapital sudah ada di dalam array $arr. Jika elemen tersebut belum ada (== false), maka proses berikutnya adalah menambahkannya ke array $arr.
        // in_array memeriksa apakah nilainya sudah ada di array apa tidak
        if (in_array(strtoupper($value), $arr) == false) {
            array_push($arr, strtoupper($value)); //digunakan untuk menambahkan element baru di akhir array
        }
    }
    return $arr;
}

print_r(createArray("PPLG", "HTL", "KLN", "PMN", "pplg", "htl"));