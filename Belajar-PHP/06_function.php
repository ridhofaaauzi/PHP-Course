<?php

function registerUser($email)
{
    echo $email . " User Registered";
}


// registerUser('ridho');


function sum($n1 = 5, $n2 = 6)
{
    return $n1 + $n2;
}

$result = sum(2, 5);
// echo $result;

$subtract = function ($n1, $n2) {
    return $n1 - $n2;
};

$resultSubtract = $subtract(30, 8);
// echo $resultSubtract;


$multiply = fn ($n1, $n2) =>
$n1 * $n2;

// echo $multiply(10, 5);