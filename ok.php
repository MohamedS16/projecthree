<?php 
// class User{
//     private $name , $email ;
//     public function __construct($nn, $em){
//         $this->name = $nn;
//         $this->email = $em;
//     }
//     function getemail(){
//         return $this->email;
//     }
//     function setemail($ee){
//         if($ee == 'a@gmail.com'){
//             echo ' Email is already used';
//         }else{
//             $this->email = $ee;
//         }
//     }
// }
// $fuser = new User('Ahmed','a@gmail.com');
// $suser = new User('Mohamed','m@gmail.com');

// $suser->setemail('aaaaa@gmail.com');
// echo $suser->getemail() ;





// print_r($fuser);









// $fuser->username = 'Ahmed';

// echo $fuser->username . '<br>' ;
// echo $fuser->password . '<br>';






        // public function addfriend(){
    //     return "$this->username Added a New friend";
    // }



class Person{
    public $username, $email, $age;
    public function __construct(){
        echo 'This is Person class';
    }
}


class Employee extends Person{
    public function __construct(){
        echo 'This is Employee class';
    }
}

$empone = new Employee();



