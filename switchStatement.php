<?php

$nilai = "E";

switch ($nilai) {
  case "A":
    echo "anda lulus dengan sangat baik" . PHP_EOL;
    break;
  case "B":
  case "C":
    echo "anda lulus" . PHP_EOL; 
    break;
  case "D":
    echo "anda tidak lulus" . PHP_EOL;
    break;
  default:
    echo "mungkin anda salah jurusan" . PHP_EOL;
    break;
}

switch ($nilai) :
  case "A":
    echo "anda lulus dengan sangat baik" . PHP_EOL;
    break;
  case "B":
  case "C":
    echo "anda lulus" . PHP_EOL; 
    break;
  case "D":
    echo "anda tidak lulus" . PHP_EOL;
    break;
  default:
    echo "mungkin anda salah jurusan" . PHP_EOL;
    break;
endswitch;
