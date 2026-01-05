<?php

function heyHello($firstName , $lastName = "") {
  echo "hey hello $firstName $lastName" . PHP_EOL;
}

heyHello("el");
heyHello("budi");
heyHello("akmal" , "samsudin");


function sum(int $first , int $last){
  $total = $first + $last;
  echo "total $first + $last = $total" .PHP_EOL;
}

sum(100 , 100);
sum("100" , "100");
sum(true , false);

