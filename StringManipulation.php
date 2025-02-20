<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputString = $_POST['inputString'];

    // Checking if the string contains the word "PHP"
    if (strpos($inputString, 'PHP') !== false) {
        echo "The string contains the word 'PHP'.\n";
    } else {
        echo "The string does not contain the word 'PHP'.\n";
    }

    // Replacing all spaces with underscores
    $modifiedString = str_replace(' ', '_', $inputString);

    // Converting the string to uppercase
    $modifiedString = strtoupper($modifiedString);

    // Printing the modified string
    echo "Modified string: $modifiedString\n";
}
?>
