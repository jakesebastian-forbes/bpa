<?php

// Function to generate OTP
function generateNumericOTP($n)
{
  // Taking a generator string that consists of
  // all the numeric digits
  $generator = "1357902468";

  // Iterating for n-times and pick a single character
  // from generator and append it to $result

  // Login for generating a random character from generator
  //     ---generate a random number
  //     ---take modulus of same with length of generator (say i)
  //     ---append the character at place (i) from generator to result

  $result = "";

  for ($i = 1; $i <= $n; $i++) {
    $result .= substr($generator, rand() % strlen($generator), 1);
  }

  // Returning the result
  return $result;
}

// Main program
// $n = 7;
// echo generateNumericOTP(7);
?>