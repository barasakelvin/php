<?php
//if statement
$num1=35;
if ($num1<100){
    echo "$num1 is less than 100";
}
echo "<br>";
echo "<br>";

$num2=20;
if ($num1>$num2){
    echo "$num1 is greater than $num2";
}
echo "<br>";
echo "<br>";
//if...else statement
if ($num1>95){
    echo "$num1 is less than 95";
    }else{
        echo "$num1 is not less than 95";
}
echo "<br>";
echo "<br>";
//if ...elseif...else statement
$marks=90;
if ($marks>0 && $marks<=40){
echo "Failed";
}elseif ($marks>40 && $marks<=60){
echo "Passed";
}elseif($marks>60 && $marks<=80){
    echo "Credit";
}elseif($marks>80 && $marks<=100){
    echo "Distinction";
}else{
    echo "Invalid marks";
}
echo "<br>";
echo "<br>";
//Trial run..
$day=6;
if($day>0 && $day<=1){
    echo "Monday";
}elseif($day>1 && $day<=2){
    echo "Tuesday";
}elseif($day>2 && $day<=3){
    echo "Wednesday";
}elseif($day>3 && $day<=4){
    echo "Thursday";
}elseif($day>4 && $day<=5){
    echo "Friday";
}elseif($day>5 && $day<=6){
    echo "Saturday";
}elseif($day>6 && $day<=7){
    echo "Sunday";
}else{
    echo "You must be crazy!!!";
}
echo "<br>";
echo "<br>";

