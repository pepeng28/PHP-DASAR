<?php


goto a;
echo "hello world" . PHP_EOL;

a:
echo "hello A" . PHP_EOL;


$counter = 1; 

while (true){
  echo "ini adalah do while loop ke-$counter" . PHP_EOL;
  $counter++;
  if ($counter > 10) {
    goto end;
  }
}

end:
echo "berhenti di goto" . PHP_EOL;
