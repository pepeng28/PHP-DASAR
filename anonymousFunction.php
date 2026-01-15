<?php

$sayHello = function (string $name) {
  echo "Hello $name" . PHP_EOL;
};

$sayHello("ell");
$sayHello("akmal");

function sayGoodBye(string $name , $filter) {
  $finalName = $filter($name);
  echo "good bye $finalName" . PHP_EOL;
}

sayGoodBye("ell" , function (string $name) : string {
  return strtoupper($name);
});


$filterGoodBye =  function (string $name) : string {
  return strtoupper($name);
};

sayGoodBye("ell" , $filterGoodBye);
