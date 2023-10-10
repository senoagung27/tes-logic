<?php 
// $str1 = 'print';

// if (isPalindrome($str1)) {
// echo $str1 . 'adalah palindrome';
// } else {
// echo $str1 . 'bukan palindrome';
// }
$input = "Print";
echo '<br> Input '. $input;
//reverse of input string - MADAM - using strrev
$reverse = strrev($input);
echo '<br> Output '. $reverse;
//condition to check if the input and the reverse of the string is equal or not
if($input == $reverse) {
echo '<br> '.$input.'  kata palindrom';
}
else {
echo '<br>'.$input.' bukan palindrom';
}

// if (isPalindrome($str2)) {
// echo $str2 . 'adalah palindrome';
// } else {
// echo $str2 .  'bukan palindrome';
// }

?>