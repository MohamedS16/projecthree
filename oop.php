<?php 
class User{
    public $username = 'Mohamed';
    private $password = 'mohamed@gmail.com';
    public function __construct($un,$pass){
        $this->username = $un;
        $this->password = $pass;
    }
    public function addfriend(){
        return "$this->username Added a New friend";
    }
}

$fuser = new User('Okay','admin');

$fuser->username = 'Ahmed';

echo $fuser->username . '<br>' ;
// echo $fuser->password . '<br>';
echo $fuser->addfriend();

// class User {
//     private $username;
//     private $password;

    // public function __construct($un,$pass){
    //     $this->username = $un;
    //     $this->password = $pass;
    // }

//     public function getter(){
//         return [$this->username,$this->password];
//     }
// }

// class Admin extends User{

// }

// $ok = new Admin('Ahmed','ahmed@gmail.com');

// echo $ok->getter()[0] . '   ' . $ok->getter()[1];

