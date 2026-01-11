<?php

function foo() {
  echo "Foo" . PHP_EOL;
}

function bar() {
  echo "Bar" . PHP_EOL;
}

$functionYgAkanDiPanggil = "foo";
$functionYgAkanDiPanggil();

$functionYgAkanDiPanggil = "bar";
$functionYgAkanDiPanggil();

function sayHello(string $name, $filter) {
  $finalName = $filter($name);
  echo "Hello $finalName" . PHP_EOL;
}

function sampleFunction(string $name): string{
  return "sample $name";
}

sayHello("Ell" , "sampleFunction");
sayHello("Ell" , "strtoupper");
sayHello("Ell" , "strtolower");

