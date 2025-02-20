<?php
// Function to calculate the area of a rectangle
function calculateArea($length, $width) {
    return $length * $width; // Area = length * width
}

// Function to calculate the perimeter of a rectangle
function calculatePerimeter($length, $width) {
    return 2 * ($length + $width); // Perimeter = 2 * (length + width)
}

// Example values for length and width
$length = 20;
$width =30;

// Calculate area and perimeter
$area = calculateArea($length, $width);
$perimeter = calculatePerimeter($length, $width);

// Display results
echo "Length: " . $length . "<br>";
echo "Width: " . $width . "<br>";
echo "Area of the rectangle: " . $area . "<br>";
echo "Perimeter of the rectangle: " . $perimeter . "<br>";
?>
