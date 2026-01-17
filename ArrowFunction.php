<?php

$firstName = "ell";
$lastName = "coding";

$anonymouseFunction = function () use ($firstName , $lastName): string {
  return "hello $firstName $lastName" . PHP_EOL;
};

$arrowFunction = fn () => "hello $firstName $lastName" . PHP_EOL;

echo $anonymouseFunction();
echo $arrowFunction();
