<?php

$dat = new DateTime();



$ok = $dat->format('Y-m-d H:i:s');
$tm = $dat->getTimezone();


print_r($tm);



echo '<pre>';
print_r(get_class_methods('DateTime'));
echo '</pre>';
?>