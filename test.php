<?php

class UnictiveMediaGenerator {
    public function generateOutput($start, $end) {
        for ($i = $start; $i <= $end; $i++) {
            $output = $this->checkDivisibility($i);
            echo $output . PHP_EOL;
        }
    }

    private function checkDivisibility($number) {
        if ($number % 14 === 0 && $number % 4 === 0) {
            return 'Unictive Media';
        } elseif ($number % 4 === 0) {
            return 'Unictive';
        } else {
            return $number;
        }
    }
}

$generator = new UnictiveMediaGenerator();
$generator->generateOutput(1, 30);
