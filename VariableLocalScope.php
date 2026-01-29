<?php

function createName() {
  $name = "ell"; //loval scope 
}
createName();
echo $name . PHP_EOL;
