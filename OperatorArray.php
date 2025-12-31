<?php

$first = [
  "first_name" => "el"
];

$last = [
  "first_name" => "budi",
  "last_name" => "coding"
];

$full = $last + $first;
var_dump($full);

$a = [
  "first_name" => "el",
  "last_name" => "coding"
];

$b = [
  "last_name" => "coding",   "first_name" => "el"
];

var_dump($a == $b);
var_dump($a === $b);
