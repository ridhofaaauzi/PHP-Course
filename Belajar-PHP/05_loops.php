<?php

/** ============== For Lopp =============== */

/**
 * for loop syntax
 * for (initialize; condition; increment){
 *  code to be executed
 * }
 */

//  for ($i=0; $i <= 10; $i++) { 
//     echo "Number " . $i . "<br/>";
//  }

/** ============= while loop ================ */

/**
 * while loop syntax
 * while (condition){
 *  code to be executed
 * }
 */

//  $x = 1;

//  while ($x <= 10) {
//     echo "The number is: " . $x . "<br>";
//     $x++;
//  }


/** ============= do while loop ================ */

/**
 * do while loop syntax
 *  do  (condition){
 *  code to be executed
 * }while (condition);
 * )
 * 
 * do while loop will always execute the block of code once, even if the condition is false
 *  
 * 
 */

//  $x = 6;

//  do {
//     echo "number " . $x . "<br/>";
//     $x++;
//  }while ($x <= 5);


/** ============= foreach loop ================ */

/**
 * Foreach loop syntax
 * foreach ($array as $value){
 *  code to be executed
 * }
 */


//  $posts = ["first post", "second post", "third post"];

//  for ($x=0; $x < count($posts); $x++) { 
//     # code...
//     echo $posts[$x];
//  }

// foreach ($posts as $index => $post) {
//     # code...
//     echo $index . " - " . $post . "<br/>";
// }

$person = [
    "first_name" => "Brad",
    "last_name" => "traversy",
    "email" => "brad@example.com",
];

foreach ($person as $key => $value) {
    # code...
    echo "$key - $value<br/>";
}
