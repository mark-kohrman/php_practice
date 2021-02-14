<?php
# 1. Write a function that takes in a number and returns the number times two. Then run the function and print the result.

// function timesTwo($number)
// {
//   return $number * 2;
// }
// echo timesTwo(22);


# 2. Write a function that takes in a string and returns the string with all capital letters. Then run the function and print the result.
function capitalize($word)
{
  return strtoupper($word);
}

// echo capitalize("whats Up");

# 3. Write a function that takes in two numbers and returns the first number subtracted by the second. Then run the function and print the result.

# 4. Write a function that takes in a number and returns the number times itself. Then run the function and print the result.

function squared($number)
{
  return $number * $number;
}

// echo squared(9);

# 5. Write a function that takes in a string and returns the first letter of the string. Then run the function and print the result.
function firstLetter($string)
{
  return $string[0];
}
// echo firstLetter("pasta");

# 6. Write a function that takes in three strings and returns a string that combines all three strings with spaces in between. Then run the function and print the result.

# 7. Write a function that takes in a number and returns the number as a string. Then run the function and print the result.
function numberToString($number)
{
  return strval($number);
}
// echo numberToString(987324);

# 8. Write a function that takes in a string and returns the string repeated 5 times. Then run the function and print the result.

# 9. Write a function that takes in 3 numbers and returns the average (the sum divided by 3.0). Then run the function and print the result.
function average($number1, $number2, $number3)
{
  $mean = ($number1 + $number2 + $number3) / 3;
  return $mean;
}
echo average(45, 183, 78);

# 10. Write a function that takes in a number and returns the number times 10 plus 30. Then run the function and print the result.


# SOLUTIONS: https://gist.github.com/peterxjang/6a26d3c698c651dd6e9ccb168d32648c