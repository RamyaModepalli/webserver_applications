<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Checking if number is Even or Odd</title>
</head>
<body>
<h1 style="text-align: center">Number is Even or Odd?</h1>
<form method="POST" action="">
<label for="number">Enter a Number</label>
<input type="text" id="number" name="number" required><br><br>
<button type="submit">Check</button>
</form>
<div class="result">
<?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") 
            {
                $number = $_POST['number'];
 
                if ($number % 2 == 0) 
                {
                    echo "The number you entered ".$number. " is Even";
                }
 
                else 
                {
                    echo "The number you entered " .$number. " is Odd";
                }
            }
        ?>
</div>
</body>
</html>