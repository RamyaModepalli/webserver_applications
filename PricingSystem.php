<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Ticket Price Calculator</title>
</head>
<body>
    <h2>Movie Ticket Price Calculator</h2>
    <form method="POST" action="">
        <label for="age">Enter your age:</label>
        <input type="number" name="age" id="age" min="0" required>
        <br>
        <label for="is_student">Are you a student?</label>
        <input type="checkbox" name="is_student" id="is_student">
        <br>
        <input type="submit" value="Calculate Price">
    </form>

    <?php
    // Checking if form is submitted or not
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $age = isset($_POST['age']) ? (int)$_POST['age'] : 0;
        $is_student = isset($_POST['is_student']) ? true : false;

        $base_price = 10;
        $discount = 0;

        if ($age < 12) {
            $discount = 0.50; // 50% off for children
        } elseif ($age >= 60) {
            $discount = 0.30; // 30% off for seniors
        } elseif ($is_student) {
            $discount = 0.20; // 20% off for students
        }

        $final_price = $base_price - ($base_price * $discount);
        echo "<p>Ticket Price: $" . number_format($final_price, 2) . "</p>";
    }
    ?>
</body>
</html>
