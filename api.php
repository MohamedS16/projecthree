<?php 

$con = new PDO('mysql:host=127.0.0.1;dbname=week3','root','');



$quer = $con->query("SELECT * FROM `users`");
$j = $quer->fetchAll(PDO::FETCH_ASSOC);
$arr = [];

foreach($j as $q){
    array_push($arr,$q);
}

echo(json_encode($arr));
header("Content-Type: application/json");





// }







