<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Days of the Week</title>
</head>
<body>
    <h2>Days of the Week</h2>
    <form method="POST" action="">
        <label for="number">Enter a number between 1 to 7:</label>
        <input type="number" name="number" id="number" min="1" max="7" required>
        <input type="submit" value="Submit">
    </form>

    <?php
    // Checking if form is submitted or not
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = isset($_POST['number']) ? (int)$_POST['number'] : 0;

        // Determines the day of the week based on the input number
        switch ($number) {
            case 1:
                $day = "Monday";
                break;
            case 2:
                $day = "Tuesday";
                break;
            case 3:
                $day = "Wednesday";
                break;
            case 4:
                $day = "Thursday";
                break;
            case 5:
                $day = "Friday";
                break;
            case 6:
                $day = "Saturday";
                break;
            case 7:
                $day = "Sunday";
                break;
            default:
                $day = "Invalid input! Please enter a number between 1 and 7.";
        }

        // Displaying the result
        echo "<p>$day</p>";
    }
    ?>
</body>
</html>
