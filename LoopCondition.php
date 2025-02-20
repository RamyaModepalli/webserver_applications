<?php
for ($i = 1; $i <= 20; $i++) {
    // Checking divisibility and printing corresponding output
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz<br>"; // if it's divisible by both 3 and 5
    } elseif ($i % 3 == 0) {
        echo "Fizz<br>"; // if it's divisible by 3
    } elseif ($i % 5 == 0) {
        echo "Buzz<br>"; // if it's divisible by 5
    } else {
        echo $i . "<br>"; // Prints the number
    }
}
?>
