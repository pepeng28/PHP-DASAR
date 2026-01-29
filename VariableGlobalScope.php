<?php

$name = "ell"; //global scope  

function sayHello() {
  global $name; //global keyword 
  echo "hallo $name" . PHP_EOL;

  echo $GLOBALS["name"] . PHP_EOL;
}

sayHello();
