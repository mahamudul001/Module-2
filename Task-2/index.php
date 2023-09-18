<?php
function printNumbersWithSkip(){
  for($i = 1; $i <= 50; $i++){
    if($i % 5 ===0){
      continue; //Skips multiples of 5 
    }
    echo $i . " ";
  }
}

printNumbersWithSkip();
?>