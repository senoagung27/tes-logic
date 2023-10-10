<?php

// Deklarasi variabel
// $antrian = [];
// $max_stack = 5;

// Fungsi untuk menambahkan data ke antrian
function enqueue($data) {
    $antrian = [];
    $max_stack = 5;
  // Cek apakah antrian penuh
  if (count($antrian) >= $max_stack) {
    // Antrian penuh, hapus data paling depan
    array_shift($antrian);
  }

  // Tambahkan data ke antrian
  array_push($antrian, $data);
}

// Fungsi untuk mengeluarkan data dari antrian
function dequeue() {
  // Cek apakah antrian kosong
  if (empty($antrian)) {
    // Antrian kosong, kembalikan nilai null
    return null;
  }

  // Keluarkan data paling depan
  return array_shift($antrian);
}

// Fungsi untuk menampilkan antrian
function print_queue() {
  // Cek apakah antrian kosong
  if (empty($antrian)) {
    // Antrian kosong, tampilkan pesan
    echo "Antrian kosong";
  } else {
    // Tampilkan data antrian
    foreach ($antrian as $data) {
      echo $data . " ";
    }
  }
}

// Input data
$data = [77, 11, 66, 75, 77, 1, 9, 3, 7, 58, 7, 69, 36, 9, 33, 33, 33, 31, 21, 98, 1];

// Proses data
foreach ($data as $item) {
  enqueue($item);
}

// Tampilkan antrian
print_queue();

?>