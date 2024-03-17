<?php 

   /** ==================== type data====================== */

    /**
     * 1. string    : series of characters surrounded by quotes
     * 2. integer   : whole numbers
     * 3. float     : decimal numbers
     * 4. boolean   : true or false
     * 5. array     : speacial variable, which can hold more than one value
     * 6. object    : a class
     * 7. null      : exmpty variable
     * 8. resource  : special variable that holds a resource
     */

    /** ==================== variables ====================== */
    
    /**
     * 1. variables must prefixed with $
     * 2. variables must start with a letter or the underscore character
     * 3. variables can't start with a number
     * 4. variables can only contain alpha-numeric  characters and underscores (A-z, 0-9, and _)
     * 5. variables are case-sensitive ($name and $NAME are two different variables)
     */

    $name = "Brad"; // string
    $age = 21; // int
    $has_kids = true; // boolean
    $cash_on_hand = 20.75; // float

    // echo  $name;

    // echo $name . ' is ' . $age . ' years old';
    // echo "${name}  is ${age} years old.";
    
    $x = "5" + "5";
    // var_dump($x);
    // echo 10 - 5;
    // echo 5 * 6;
    // echo 10 / 2;
    // echo 10 % 3;

    define("HOST", "localhost");
    define("DB_NAME", "dev_db");

    echo HOST;
?>