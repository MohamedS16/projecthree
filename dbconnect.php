<?php 

// $con = new mysqli('localhost','root','','week3');



















// print_r(pdo_drivers());
// print_r(get_class_) ;
// print_r($r);

$con = new PDO('mysql:host=127.0.0.1;dbname=week3','root','');


$quer = $con->query('SELECT * FROM `swr`');

$r = $quer->fetchAll(PDO::FETCH_OBJ);  

foreach ($r as $row) {
    echo $row->id;
}




?>