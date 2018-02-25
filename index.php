<?php

echo "Simple FizzBuzz example\n\n";

// "Write a program that prints the numbers from 1 to 100.
// But for multiples of three print “Fizz” instead of the number and for the multiples of five print “Buzz”.
// For numbers which are multiples of both three and five print “FizzBuzz”."

for ($i = 1; $i <= 100; $i++) {
    $multiplyThree = $i % 3 === 0;
    $multiplyFive  = $i % 5 === 0;

    switch ($i) {
        case $multiplyThree && $multiplyFive:
            echo "FizzBuzz\n";
            break;
        case $multiplyThree:
            echo "Fizz\n";
            break;
        case $multiplyFive:
            echo "Buzz\n";
            break;
        default:
            echo "{$i}\n";
    }
}