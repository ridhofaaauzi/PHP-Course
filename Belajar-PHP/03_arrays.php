<?php 
// simple array
$numbers = [1,44,55,22];
$fruits = array("apple", "orange", "pear");

// var_dump($numbers);
// echo $fruits[1];

// Associative array
$colors = [
    1 => "red",
    4 => "blue",
    6 => "green",
];

// echo $colors[4]

$hex = [
    "red" => "#f00",
    "blue" => "#00f",
    "green" => "#080",
];

// echo $hex["green"]; 


$person = [
    "first_name" => "Brad",
    "last_name" => "traversy",
    "email" => "brad@example.com",
];

// echo $person["first_name"]

$people = [
    [
        "first_name" => "Brad",
        "last_name" => "traversy",
        "email" => "brad@example.com",
    ],
    [
        "first_name" => "Jonh",
        "last_name" => "Doe",
        "email" => "jonhdoe@example.com",
    ],
    [   
        "first_name" => "Jessica",
        "last_name" => "Van",
        "email" => "jessicajess@example.com",
    ],
];

// echo $people[1]["email"];
var_dump(json_encode($people));

?>