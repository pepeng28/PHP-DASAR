<?php

$user = array(
  "id" => "el",
  "name" => "el coding",
  "age" => 21,
  "address" => array(
    "city" => "jakarta",
    "country" => "indonesia"
  )
);

var_dump($user);
var_dump($user["name"]);
var_dump($user["address"]["country"]);

$budi = [
  "id" => "budi",
  "name" => "budi nugraha",
  "age" => 32,
  "address" => [
    "city" => "jakarta",
    "country" => "indonesia"
  ]
];

var_dump($budi);
