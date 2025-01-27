<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Person Voting Eligibilty</title>
</head>
<body>
<h1 style="text-align: center" color: #006400;>Are You Eligible To Vote?</h1><br><br>
<form method="POST" action="">
<label for="age">Enter your Age</label>
<input type="text" name="age" id="age" required><br><br>
<button type="submit">Check</button><br><br>
</form>
<div class="result">
<?php
            if($_SERVER["REQUEST_METHOD"] == "POST") 
            {
                $age = $_POST['age'];
                if ($age >= 18)
                {
                    echo"You are Eligible to vote";
                }
                else
                {
                    echo "You are not eligible to vote. You need to be at least 18 years old";
                }
            }
 
        ?>
</div>
</body>
</html>