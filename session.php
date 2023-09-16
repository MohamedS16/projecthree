<?php 
class User {
    private $username;
    private $password;
    public function __construct(){
        echo 'Parent is here';
    }

    public function ok(){
        echo 'Welcome';
    }
}
class Employee extends User{
    public function __construct(){
        echo 'Employee is here';
    }

    // public function ok(){
    //     echo ' Employee';
    // }
}
$empone = new Employee();

// $empone->ok();

$name = 'Ahmed';


echo "welcome  $name";
