<?php

/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/

class User
{
    // properties are attributes that belong to a class
    // Properties are just variables that belong to a class.
    // Access Modifiers: public, private, protected
    // public - can be accessed from anywhere
    // private - can only be accessed from inside the class
    // protected - can only be accessed from inside the class and by inheriting classes
    public $name;
    public $email;
    public $password;

    // a constrcutor is a method that runs when an object is created
    public function __construct($name, $email, $password)
    {
        $this->name =  $name;
        $this->email =  $email;
        $this->password =  $password;
    }

    // method is a function that belongs to a class
    function setName($name)
    {
        $this->name = $name;
    }

    function getName()
    {
        return $this->name;
    }
}

// instatiate a user object
$user1 = new User('Brad', 'brad@gmail.com', '123');
$user2 = new User('John', 'john@gmail.com', '123ad');


// inheritance

class Employee extends User
{
    public function __construct($name, $email, $password, $title)
    {
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }
}

$employee1 = new Employee('Sara', 'sara@gmail.com', 'asqeq', 'Manager');
echo $employee1->getTitle();
