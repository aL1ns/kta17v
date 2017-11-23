<?php

# phpinfo(); - выводит информацию о установленной php
// comment
/*nachalo 
mitmel
real
konec*/

echo "Hello World!<br>";

// text (string, symbol)
$name = "Andrew";

// integer
$number = 15; # номер, но если: $number = "15"; -то это текст

// float
$number1 = 10.125;

// NULL
$var = NULL; # это пустота(он пустой)

// array
$myarr = array ('Klass A108',10,18,'I korrus',10.54);

$number2 = $number; # $number2 присваивает $number
$number3 = &$number;

$number = 10;

$sum = $number + $number1;
$sum2 = $number2 + $number1;
$sum3 = $number3 + $number1;
$sum4 = $number + $name;

echo "First sum is: ".$sum." and second sum is: ".$sum2." and third sum is ".$sum3."<br>";
echo "Text + number $sum4 <br>";

echo "My name is $name";
    
?>