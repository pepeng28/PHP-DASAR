<?php

function sayHello(string $name , callable $filter) {
  $finalName = call_user_func($filter , $name);
  echo "hello $finalName" . PHP_EOL;
}

sayHello("ell" , "strtoupper");
sayHello("ell" , "strtolower");
sayHello("ell" , function (string $name): string {
  return strtoupper($name);
});
sayHello("ell" , fn($name) => strtoupper($name));
