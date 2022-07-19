<?php
function bmi ($weight,$height){
    echo "Your height is ".$height."metres";
    echo "<br>";
    echo "Your weight is ".$weight."kgs";
    echo "<br>";
    $bmi=$weight/($height*$height);
    echo "Your bmi is ". $bmi;
}
bmi("20","4");


