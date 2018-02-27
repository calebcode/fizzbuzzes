<?php
/**
 * FizzBuzz implementation in PHP
 * Remember, you need to PHP and a web server running to execute this
 */
for ($count = 1; $count <=100; $count++) {
    if($count % 3 == 0) {
        print("Fizz");
    } elseif($count % 5 == 0) {
        print("Buzz");
    } else {
        print($count);
    }
    print("<br />");
}
?>
