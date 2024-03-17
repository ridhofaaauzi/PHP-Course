<?php 

/**
 * < less than
 * > greater than
 * <== less than or equal to
 * >== greater than or equal to
 * == equal to
 * === identical to
 * != not equal to
 * !== not identical to
 * 
 */

/** ============= if statements =============== */

/**
 * if stament syntax
 * if (conditional){
 *  // code to be executed if condition is true
 * }
 */

 $age = 21;

//  if($age >= 18){
//     echo "You are old enough to vote";
//  }else {
//     echo "Sorry, you are too young";
//  }

$t = date("H");

// if($t < 12){
//     echo "good morning";
// }elseif($t < 17) {
//     echo "good afternoon";
// }else {
//     echo "good evening";
// }

$posts = [];

// if(!empty($posts)) {
//     echo $posts[0];
// }else {
//     echo "no posts";
// }


// echo !empty($posts) ? $posts[0] : "No  Posts Yet!";

// $firstPost = !empty($posts) ? $posts[0] : "No  Posts Yet!";
// $firstPost = !empty($posts) ? $posts[0] : null;

// $firstPost = $posts[0] ?? null;

// echo $firstPost;

$favColor = "red";

switch($favColor){
    case "red" : 
        echo "Your favorite color is red";
        break;
    case "blue":
        echo "Your favorite color is blue";
        break;
    case "green":
        echo "Your favorite color is green";
        break;
        default:
        echo "Your favorite color is not red,  blue, green";
   }
?>