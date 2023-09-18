<?php
//let's use a for loop 
function printEvenNumbers($start, $end, $step)
{
  if ($start % 2 !== 0) {
    $start++;  // Ensure start is even
  }

  for ($i = $start; $i <= $end; $i += $step) {
    echo $i . "\n";
  }
}
echo "Use for loop : ";

printEvenNumbers(2, 20, 2);
echo "<br>";
echo "<br>";

//let's use a while loop 
function printEvenNumbersWhile($start, $end, $step)
{
  if ($start % 2 !== 0) {
    $start++; //Ensure start is even 
  }

  $i = $start;
  while ($i <= $end) {
    echo $i . "\n";
    $i += $step;
  }
}
echo "Use While loop : ";
printEvenNumbersWhile(2, 20, 2);

echo "<br>";
echo "<br>";

//Let's use a do-while loop
function printEvenNumbersDoWhile($start, $end, $step)
{
  if ($start % 2 !== 0) {
    $start++; //Ensure start is even 

  }

  $i = $start;
  do {
    echo $i . " ";
    $i += $step;
  } while ($i <= $end);
}
echo "Use Do-While loop : ";
printEvenNumbersDoWhile(2, 20, 2);
