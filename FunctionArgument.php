<?php

function heyHello($firsName , $lastName = "") {
  echo "hey hello $firsName $lastName" . PHP_EOL;
}

heyHello("el");
heyHello("budi");
heyHello("akmal" , "samsudin");
