<?php

$myname = "Philipp";
$mySurname = "Zammit";

echo $myname;
echo $mySurname;

// The . is used for concatenation
echo "<p>My name is" . $myname . "</p>";

// Variable interpolation
echo "<p>My Surname is $mySurname</p>";

$shortStory = <<<STORY
<p>There once was a man from Peru, who dreamt
he was eating his shoe.</p>
<p>He woke up one night, in quite a fright
to find that his dream came true!</p>
STORY;
echo $shortStory;

$anInt = 42;
echo "<p>The Value is $anInt, type is " . gettype($anInt) ."</p";

$aFloat = 42.21;
echo "<p>The Value is $aFloat, type is " . gettype($aFloat) ."</p>";

$country = "Malta";
echo "<p>The value is $country, type is " . gettype($country) ."</p>";

$isRaining = false;
echo "<p>The value is $isRaining, type is " . gettype($isRaining) ."</p>";

//Using Arrays
$names = ["Valentino", "Olga", "Warren", "Daniel"];
echo "<p>Names of Students:</p>";
print_r($names);

$company = ["CEO"=>"Alice Anderson", "CTO"=>"Bob Barker"];
echo "<p>Company Executives:</p>";
print_r($company);

//Type coercion
$val1 = 89;
$val2 = "42";
$val3 = $val1 + $val2;
echo "<p>The Result is $val3</p>";

// Type Casting
$val4 = "29";
$val5 = 42.82;
$val6 = (int) $val4 + (int) $val5;
echo "<p>The next result is $val6</p>";

//Constant
define("PI", 3.4151);
echo "<Approximate value of PI is" .PI. "</p>";

const L = 6.0e223;
echo "<p> Approximated Avogadro constant: " . L . "<p>";

//Function
function greetuser($name)
{
    return"Hello There, $name!";
}

echo "<p>" . greetuser("Alessia") . "<p/>";

// Using printf
$animal = "Fox";
printf("%s Did you know that the quick brown %s jumps over the lazy %s", greetuser("Alessia"), $animal, "dog");

$cartTotal = 69.420;
printf("<p>Total in your Cart is: €%.2f</p>", $cartTotal);