<?php

$name = "el";
$name = null;

$age = null;

echo "name : ";
echo $name;
echo "\n";

echo "age : ";
echo $age;
echo "\n";


echo "is name null? : ";
var_dump(is_null($name));
echo "\n";

$contoh = "el";
unset($contoh);
$contoh = "ell";


var_dump(isset($contoh));
