<?php
// Function to double a value (pass by value)
function doubleValue($num) {
    return $num * 2; // Returns the doubled value
}

// Function to double a value (pass by reference)
function doubleReference(&$num) {
    $num *= 2; // Modify the original variable directly
}

// Demonstration
$originalValue = 20;

echo "Initial Value: " . $originalValue . "<br>";

// Passing by value
$doubledValue = doubleValue($originalValue);
echo "Original Value (after doubleValue): " . $originalValue . "<br>"; 
echo "Doubled Value (from doubleValue): " . $doubledValue . "<br>"; 

// Passing by reference
doubleReference($originalValue);
echo "Original Value (after doubleReference): " . $originalValue . "<br>"; 
?>
