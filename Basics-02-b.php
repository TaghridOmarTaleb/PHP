<!-- from step 7 till step 11 -->

<?php

//  step 7 

function replace($string){
  echo  str_replace("Python" ,"PHP", $string);
}

replace("Python is very popular");
replace("Python");
echo "<br>";echo "<br>";

// step 8
function isPowerOfTwo($num){
          $value = $num;
         while($value % 2 == 0 ) {$value /= 2 ; };
           if ($value ==1){
            echo "$num is power of two";
           }else{
            echo "$num is not power of two";
           }
}
isPowerOfTwo(9);
echo "<br>";echo "<br>";

// step 9

echo(sqrt(64));  echo "<br>";echo "<br>";

// step 10

function isPalindrome($string){
   if ($string == strrev($string)){
    echo "$string is palindrome";
   }else {
    echo "$string is not palindrome";
   }
}
isPalindrome("laravel");
echo "<br>";echo "<br>";

// step 11
function isPrime($num) {
    if($num < 2) {
        echo "$num is not prime";
        return false;
        
    }
    for($i = 2; $i <= sqrt($num); $i++) {
        if($num % $i == 0) {
            echo "$num is not prime";
            return false;
        }
    }
    echo "$num is prime";
    return true;
}

isPrime(8);
































?>