<?php
//arithmetic operator
$num1=35;
$num2="60";
$num3=-20;
echo $num1+$num2; //additional operator
echo "<br>";
echo $num1-$num2; //subtractional operator
echo "<br>";
echo $num1*$num2; //multiplicatin operator
echo "<br>";
echo $num1/$num2; //divisional operator
echo "<br>";
echo $num1%$num2; //modulus operator
echo "<br>";
echo "<br>";

//comparison
var_dump($num1===$num2);//identical to (three =),equal to (two=)
echo "<br>";
var_dump($num1>$num2);//greater than
echo "<br>";
var_dump($num1<$num2);//less than
echo "<br>";
var_dump($num1>=$num2);//greater than or equal to
echo "<br>";
var_dump($num1!=$num2);//not equal to
echo "<br>";
var_dump($num1<>$num2);//not equal to
echo "<br>";
echo "<br>";
//logical operator
var_dump($num1==$num2 or $num2 > $num3 );//or
echo "<br>";
var_dump($num1==$num2 || $num2 > $num3 );//or
echo "<br>";
var_dump($num1===$num2 and $num2 > $num3 );//and
echo "<br>";
var_dump($num1 < $num2 && $num2 > $num3 );//and
echo "<br>";
echo "<br>";
$first_name="Kelvin";
$sec_name="Barasa";

echo $first_name.$sec_name;
echo "<br>";
echo "<br>";
var_dump(++$num1);
echo "<br>";
var_dump($num1++);
echo "<br>";
var_dump($num1--);



