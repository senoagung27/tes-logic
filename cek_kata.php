<?php

function isPalindrome($word) {
  $length = count($word);
  for ($i = 0; $i < $length / 2; $i++) {
    if ($word[$i] != $word[$length - 1 - $i]) {
      return false;
    }
  }
  return true;
}

$word = 'malam';

if (isPalindrome($word)) {
  echo 'kata palindrom';
} else {
  echo 'bukan palindrom';
}

?>
