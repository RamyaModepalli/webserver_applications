<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Assignment: Mathematical Operations</title>
</head>
<body>
    <h2>PHP Assignment: Mathematical Operations</h2>
    <form method="post" action="">
        <label for="num1">Enter first number:</label>
        <input type="text" name="num1" id="num1" required>
        <br><br>

        <label for="num2">Enter second number:</label>
        <input type="text" name="num2" id="num2" required>
        <br><br>

        <label for="operation">Select operation:</label>
        <select name="operation" id="operation" required>
            <option value="+">Addition (+)</option>
            <option value="-">Subtraction (-)</option>
            <option value="*">Multiplication (*)</option>
            <option value="/">Division (/)</option>
        </select>
        <br><br>

        <input type="submit" name="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        $result = "";

        // Input validation
        if (is_numeric($num1) && is_numeric($num2)) {
            switch ($operation) {
                case '+':
                    $result = $num1 + $num2;
                    break;
                case '-':
                    $result = $num1 - $num2;
                    break;
                case '*':
                    $result = $num1 * $num2;
                    break;
                case '/':
                    if ($num2 == 0) {
                        $result = "Error: Division by zero is not allowed.";
                    } else {
                        $result = $num1 / $num2;
                    }
                    break;
                default:
                    $result = "Invalid operation selected.";
            }

            if (is_numeric($result)) {
                echo "<h3>Result: $num1 $operation $num2 = $result</h3>";
            } else {
                echo "<h3>$result</h3>";
            }
        } else {
            echo "<h3>Error: Please enter valid numbers.</h3>";
        }
    }
    ?>
</body>
</html>
