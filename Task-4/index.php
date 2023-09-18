<?php
function printFibonacciSeries($count)
{
  $num1 = 0;
  $num2 = 1;

  echo $num1 . " ";
  echo $num2 . " ";

  for ($i = 0; $i < $count; $i++) {
    $fibonacci = $num1 + $num2;

    echo $fibonacci . " ";

    //update numbers for the next iteration
    $num1 = $num2;
    $num2 = $fibonacci;
  }
}

printFibonacciSeries(15);
