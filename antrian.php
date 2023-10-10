<?php

// Definisikan konstanta untuk jumlah stack maksimal
define('MAX_STACK', 5);

// Definisikan struktur data antrian
class Antrian {
    private $data = [];
    private $top = 0;

    public function push($data) {
        if ($this->top < MAX_STACK) {
            $this->data[] = $data;
            $this->top++;
        } else {
            echo "Antrian penuh";
        }
    }

    public function pop() {
        if ($this->top > 0) {
            $data = $this->data[$this->top - 1];
            array_splice($this->data, $this->top - 1, 1);
            $this->top--;
            return $data;
        } else {
            echo "Antrian kosong";
        }
    }

    public function isEmpty() {
        return $this->top === 0;
    }

    public function isFull() {
        return $this->top === MAX_STACK;
    }

    public function getData() {
        return $this->data;
    }
}

// Buat objek antrian
$antrian = new Antrian();

// Input data ke antrian
$data = [77, 11, 66, 75, 77, 1, 9, 3, 7, 58, 7, 69, 36, 9, 33, 33, 33, 31, 21, 98, 1];
foreach ($data as $d) {
    $antrian->push($d);
}

// Cetak data antrian
echo "Data antrian: " . implode(", ", $antrian->getData()) . "\n";

// Hapus data antrian
while (!$antrian->isEmpty()) {
    echo "Data terdepan: " . $antrian->pop() . "\n";
}
