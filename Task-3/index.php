<?php
function printFirst10FibonacciNumbers()
{
  $num1 = 0;
  $num2 = 1;

  echo $num1 . " ";
  echo $num2 . " ";

  for ($i = 2; $i < 10; $i++) {
    $fibonacci = $num1 + $num2;

    if ($fibonacci > 100) {
      break; //Break the loop if the  number is greater than 100
    }
    echo $fibonacci . " ";

    //update numbers for the next iteration
    $num1 = $num2;
    $num2 = $fibonacci;
  }
}

printFirst10FibonacciNumbers();
