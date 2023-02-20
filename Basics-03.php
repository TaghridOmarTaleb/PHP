<?php

// While loop Ex1

$x1=1;
$y= "";
while ($x1<= 8){   
$y = $y . "*" ;
$x1=$x1 +1;
echo "$y <br>";
}

echo "<br>";echo "<br>";echo "<br>";

// Ex2

function factorial($num){
    $initialNb = $num;
    $value = 1;
    while ($num > 1){
        $value *= $num;
        $num--;
    }
    echo "The factorial of $initialNb is $value ";
}
factorial(5);

echo "<br>";echo "<br>";echo "<br>";

// Ex3

function nbOfTimes($word, $text) {
  $text_array = explode(" ", $text);
  $count = 0;
  $i = 0;
  while ($i < count($text_array)) {
    if ($text_array[$i] === $word) {
      $count++;
    }
    $i++;
  }
  echo "This word is repeated $count times";
}

nbOfTimes("loop", "The PHP for loop allows the user to put all the loop related statements ");
echo "<br>";echo "<br>";echo "<br>";

// For
// Ex1

function sumOfDigits($num){
         $value = (string) $num;
         $sum = 0;
         for($i =0; $i < strlen($value); $i++)
         $sum += (int) $value[$i];
         echo "The sum of the digits of $num is $sum";
          
}

sumOfDigits(123);
echo "<br>";echo "<br>";echo "<br>";

// Ex3

$x=1;
$y="";
$i=1;
$z="*";
for($x=1; $x <= 5; $x++){
    $y= $y . " *";
    echo "$y <br>";
    
for($i=1; $i <= 5; $i++){
    $z= $z . " *";
    echo "$z <br>"; 
    }

}












?>