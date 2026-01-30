<?php

function increment() {
  static $counter = 1;
  echo "counter ke $counter" . PHP_EOL;
  $counter++;
}

increment();
increment();
increment();
increment();
increment();
increment();
