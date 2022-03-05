<?php
  for ($fizzBuzz = 1; $fizzBuzz <= 100; $fizzBuzz++) {
    if ($fizzBuzz % 3 === 0 && $fizzBuzz % 5 === 0) {
      echo 'FizzBuzz'."\n";
    } elseif ($fizzBuzz % 3 === 0) {
      echo 'Fizz'."\n";
    } elseif ($fizzBuzz % 5 === 0) {
      echo 'Buzz'."\n";
    } else {
      echo $fizzBuzz."\n";
    }
  }
?>