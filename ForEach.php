<?php

$name = ["el", "coba", "coding"];

for ($i=0; $i < count($name); $i++) { 
  echo "Data ke $i = $name[$i]" . PHP_EOL;
}

foreach ($name as $key => $value){
  echo "Data $key = $value" . PHP_EOL;
}

foreach ($name as $name) {
  echo "Data $name" . PHP_EOL;
}


$person = [
  "first_name" => "el",
  "middle_name" => "coba",
  "last_name" => "coding"
];

foreach ($person as $key => $value) {
  echo "Data ke $key = $value" .PHP_EOL;
}
