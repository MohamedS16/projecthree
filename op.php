<?php

class Person{
    public $name;
    private $age;
    public $email = 'm@gmail.com';
    public $address = 'Cairo';
    public function __construct($nn,$ag){
        $this->name = $nn;
        $this->age = $ag;
    }

    public function getage(){
        if($this->name == 'Ahmed'){
            return $this->age;
        }else{
            echo 'You are not allowed to see other users ages';
        }
    }

    public function setage($l){
        if($l < 18){
            echo 'THis is not allowd for people under 18';

        }else{
            $this->age = $l;
        }
    }



}

$firstperson = new Person('Ahmed',10);
$secondperson = new Person('Adel',20);


echo $firstperson->name;
echo $firstperson->getage();
$firstperson->setage(19);
echo $firstperson->getage();






