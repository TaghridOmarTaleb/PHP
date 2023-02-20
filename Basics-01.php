<!-- step 1 -->

"Hello world, Help me I am using PHP <br>"
<?php
?>

<!-- step 2 -->

<?php
echo "I am getting errors but I can't see the errors  <br>";
// echo "<br>";
print("Search on how to enable PHP Errors <br>");
?>

<!-- step 3 -->

<?php
$name = "taghrid";
$email = "taghrid@gmail.com";
echo "My name is $name and my email is $email<br><br>";
$height = 10;
$width = 20;
$area = $height * $width;
echo $area;
echo "<br>" ;echo "<br>"; echo "<br>";
?>

<!-- step 4 -->

<?php
$name = "taghrid";
$position = "blabla";
$github_url = "https://github.com/";

echo "Hello, I'm $name, I'm a $position please check my github link $github_url <br>";

echo  "Hello, Im  {$name}, Im a {$position} please check my github link {$github_url} <br>" ;

echo 'Hello, I\'m ' . $name . ', I\'m a ' . $position . ' please check my github link ' . $github_url . '<br><br><br>';

?>


<!-- step 5 -->

<?php
$course_name = "php";
$enrolled_students= 10;
$price= 2.45;
$on_discount= true;

echo "Course title: $course_name <br>
      Enrolled Students : $enrolled_students <br>
      Course price: $price $ USD <br>
      Course on discount: " . ($on_discount ? "yes" : "no") ;

      echo "<br>";
      echo "<br>"
?>


<!-- step 6 -->

<?php
function calculateArea($height, $width){
    $area = $height * $width;
    echo "Area is $area ";
}

calculateArea(5,3);

      echo "<br>";
      echo "<br>"
?>

<!-- step 7 -->

<?php
$birth_year= 2000;
$current_year=2023;
$difference = $current_year - $birth_year;

if ($difference > 18){
    echo "You can drive";
}
else {
    echo "You still a kid, go and play GTA";
}

      echo "<br>";
      echo "<br>"

?>

<!-- Step 8 - a -->

<?php
$grocery= array("Eggs", "Milk", "Cheese", "Water Pack", "Tissues","Watermelon");
echo "Hello Sir, do you have $grocery[0], $grocery[1], and $grocery[2]? 
      Also if you sell fruits can I find a $grocery[5]?  <br> <br>";

?>

<!-- Step 8 - b  -->

<?php

$grocery= array(
    array('egss','balade', 'mazere3'),
    array('milk','Fresh', 'Taanayel'),
    array('water-pack','Tanoureen', 'Reem')
);

echo "Hey Sir, Please I need 1 pack of "
 .$grocery[0][1]. " ".$grocery[0][0]. 
 " and 3 ".$grocery[2][2]. " ".$grocery[2][0].".<br> <br>";

?>

<!-- Step 9 -->
<?php
$name="taghrid";
var_dump($name);
$age=27;
var_dump($age);


?>