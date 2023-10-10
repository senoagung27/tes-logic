<?php 
function urutkan_angka($angka) {
    $n = count($angka);
  
    for ($i = 0; $i < $n; $i++) {
      for ($j = $i + 1; $j < $n; $j++) {
        if ($angka[$i] > $angka[$j]) {
          $temp = $angka[$i];
          $angka[$i] = $angka[$j];
          $angka[$j] = $temp;
        }
      }
    }
  
    return $angka;
  }
  
  $angka = [77, 11, 66, 75, 77, 1, 9, 3, 7, 58, 7, 69, 36, 9, 33, 33, 33, 31, 21, 98, 1];
  
  $hasil = urutkan_angka($angka);
  
  echo "Hasil pengurutan angka dari terkecil ke terbesar: ";
  foreach ($hasil as $nilai) {
    echo $nilai . " ";
  }
