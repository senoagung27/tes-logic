<?php 
// Deklarasi variabel
$angka = [77, 11, 66, 75, 77, 1, 9, 3, 7, 58, 7, 69, 36, 9, 33, 33, 33, 31, 21, 98, 1];
$ukuran = count($angka);

// Looping untuk mengurutkan angka
for ($i = 0; $i < $ukuran; $i++) {
    for ($j = 0; $j < $ukuran - $i - 1; $j++) {
        if ($angka[$j] < $angka[$j + 1]) {
            // Swap angka
            $temp = $angka[$j];
            $angka[$j] = $angka[$j + 1];
            $angka[$j + 1] = $temp;
        }
    }
}

// Cetak angka yang sudah diurutkan
print_r($angka);
