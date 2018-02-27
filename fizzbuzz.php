<?php
/**
 * FizzBuzz implementation in PHP
 * Remember, you need to PHP and a web server running to execute this
 * 
 * Output 1 - 100, except any number divisible by 3, output 'Fizz'
 * and any number divisible by 5, output 'Buzz'
 * 
 * Adding output of 'FizzBuzz' for numbers divisible by both 3 and 5
 */
for ($count = 1; $count <=100; $count++){
    if($count % 3 == 0 && $count % 5 == 0) {
        print("FizzBuzz");
    } elseif($count % 3 == 0) {
        print("Fizz");
    } elseif($count % 5 == 0) {
        print("Buzz");
    } else {
        print($count);
    }
    print("<br />");
}
?>
