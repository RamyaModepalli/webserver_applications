<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Form</title>
</head>
<body>
    <form method="POST" action="">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
        <br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <br>

        <label for="age">Age:</label>
        <input type="text" name="age" id="age">
        <br>

        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $age = trim($_POST['age']);

        $errors = [];

        // Validatng the Name
        if (empty($name)) {
            $errors[] = "Name is required.";
        } elseif (strlen($name) < 3) {
            $errors[] = "Name must be at least 3 characters long.";
        }

        // Validating Email
        if (empty($email)) {
            $errors[] = "Email is required.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Invalid email format.";
        }

        // Validating Age (optional)
        if (!empty($age) && !filter_var($age, FILTER_VALIDATE_INT)) {
            $errors[] = "Age must be a valid number.";
        }

        // Display results
        if (empty($errors)) {
            echo "<p style='color: green;'>Form submitted successfully!</p>";
        } else {
            foreach ($errors as $error) {
                echo "<p style='color: red;'>$error</p>";
            }
        }
    }
    ?>
</body>
</html>
