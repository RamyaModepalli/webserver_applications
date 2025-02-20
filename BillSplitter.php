<?php
// Function to calculate the amount each person should pay
function calculateSplitBill($totalBill, $numberOfPeople, $tipPercentage = 10) {
    // Calculating the total amount including the tip
    $tipAmount = ($totalBill * $tipPercentage) / 100;
    $totalAmount = $totalBill + $tipAmount;

    // Calculating the amount each person should pay
    $amountPerPerson = $totalAmount / $numberOfPeople;

    // Format the result to 2 decimal places
    return number_format($amountPerPerson, 2);
}

// Example input values
$totalBill = 120.0; // Total bill amount
$numberOfPeople = 4; // Number of people
$tipPercentage = 15; // Tip percentage

// Calculate and display the result
$eachPersonPays = calculateSplitBill($totalBill, $numberOfPeople, $tipPercentage);
echo "Total Bill: $" . $totalBill . "<br>";
echo "Number of People: " . $numberOfPeople . "<br>";
echo "Tip: " . $tipPercentage . "%<br>";
echo "Each person pays: $" . $eachPersonPays . "<br>";
?>
