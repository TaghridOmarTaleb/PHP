<?php
//  from step1 to step 6
// Step 1

echo "Tomorrow I 'll learn PHP global variables.
This is a bad command: sudo rm -rf /";
echo "<br>";
echo "<br>";

// step 2 

function greaterFn($num){
    switch(true){
        case $num > 30:
            return "$num is greater than 30";
        case $num > 20:
            return "$num is greater than 20";
        case $num > 10:
            return "$num is greater than 10";
        case $num > 0:
            return "$num is less than 10";
        
    }
}

echo greaterFn(40);

echo "<br>";
echo "<br>";

// step 3

function swaping(&$num1, &$num2){
   
    $num3=$num1;
    $num1 = $num2;
    $num2=$num3;

    return $num1 . $num2;
    
}
$num1=30;
$num2=20;

swaping($num1, $num2);

echo "the new value of the first number is $num1 <br>";
echo "the new value of the second number is $num2 <br>";
echo "<br>";
echo "<br>";

// step 4

function isArmstrg($num){
        $numberToStr = (string) $num;
        $sum = 0;
        for ($i = 0; $i < strlen($numberToStr); $i++) {
          $char = (int) $numberToStr[$i];
          $sum += $char ** 3;
        }
        
        if ($sum == $num) {
          return true;
          
        } else {
          return false;
        }
      }
  
      if (isArmstrg($num)) {
        echo "$num is an Armstrg number.";
    } else {
        echo "$num is not an Armstrg number.";
    }

    isArmstrg(556);

    echo "<br>";
echo "<br>";

// step 5
// only 1 word

function convertToInt($word){
    switch($word){
        case $word == "zero";
        $word = 0;
        break;
        case $word == "one";
        $word = 1;
        break;
        case $word == "two";
        $word = 2;
        break;
        case $word == "three";
        $word = 3;
        break;
        case $word == "four";
        $word = 4;
        break;
        case $word == "five";
        $word = 5;
        break;
        case $word == "six";
        $word = 6;
        break;
        case $word == "seven";
        $word = 7;
        break;
        case $word == "Eight";
        $word = 8;
        break;
        case $word == "Nine";
        $word =9;
        break;
        case $word == "ten";
        $word = 10;
        break;
        case $word == "eleven";
        $word = 11;
        break;
        case $word == "twelve";
        $word = 12;
        break;
        case $word == "thirteen";
        $word = 13;
        break;
        case $word == "fourteen";
        $word = 14;
        break;
        case $word == "fiveteen";
        $word = 15;
        break;
        case $word == "sixteen";
        $word = 16;
        break;
        case $word == "seventeen";
        $word = 17;
        break;
        case $word == "eighteen";
        $word = 18;
        break;
        case $word == "nineteen";
        $word = 19;
        break;
        case $word == "twenty";
        $word = 20;
        break;
        case $word == "thirty";
        $word = 30;
        break;
        case $word == "forty";
        $word = 40;
        break;
        case $word == "fifty";
        $word = 50;
        break;
        case $word == "sixty";
        $word = 60;
        break;
        case $word == "seventy";
        $word = 70;
        break;
        case $word == "eighty";
        $word = 80;
        break;
        case $word == "ninety";
        $word = 90;
        break;
        default: 
        "this number is not in my liste!";
        
    }
    return $word;
    
    
}

echo convertToInt("ninety");

echo "<br>";
echo "<br>";

// step 6

function somme($num){
    $str = (string) $num;
    $sum = 0;
    for ($i=0; $i< strlen($str); $i++){
    $sum += (int) $str[$i];
   }
   return $sum;
}

echo somme(1111);



    
?>