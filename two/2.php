<?php
function task2($num) {
  if ($num < 123) return false;
  
  $digits = str_split($num);
  $seq = 1;
  
  for($i=1; $i<count($digits); $i++) {
    if ($digits[$i] == ($digits[$i - 1] + 1)) $seq++;
    else $seq = 1;
  }
  
  return $seq > 2;
}

$sum = 0;

for ($n=1; $n<=10000; $n++) {
  if (task2($n)) $sum += $n;
}

printf("Sum: %d", $sum);
?>