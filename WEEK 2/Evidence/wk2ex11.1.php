<?php
// Module array
$mymarks['CO501'] = 71;
$mymarks['CO502'] = 63;
$mymarks['CO503'] = 81;
$mymarks['CO504'] = 95;
$mymarks['CO505'] = 13;
$mymarks['CO506'] = 99;
// variable
$total = 0;


foreach( $mymarks as $index => $value)
{
    echo "For module $index I received $value marks out of 100<br>";
    
    $total = $total + $mymarks[$index];
    
}

$average = $total / 6;

echo "My average score was $average !";




