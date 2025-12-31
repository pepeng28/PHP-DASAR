<?php

$values = array( 90 , 5 ,10 , 6.7);
var_dump($values);

$names = ["el" , "akmal" , "budi"];
var_dump($names);

var_dump($names[0]);

$names[0] = "reno";
var_dump($names);

unset($names[1]);
var_dump($names);

$names[] = "joko";
var_dump($names);

var_dump(count($names));
