<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Program to detect Leap Year</title>
</head>
<body>
<h1 style="text-align: center">Leap Year Detector</h1>
<form method="POST" action="">
<label for="year">Enter a Year</label>
<input type="text" name="year" id="year" required><br><br>
<button type="submit">Detect</button>
</form>
 
        <div class="result">
<?php
                if($_SERVER["REQUEST_METHOD"] == "POST")
                {
                    $year = $_POST["year"];
 
                    if(($year % 4 == 0) && ($year % 100 !=0 || $year % 400 == 0))
                    {
                        echo "".$year. " is a Leap Year";
                    }
                    else
                    {
                        echo "".$year. " is Not a Leap Year";
                    }
                }
 
            ?>
</div>
</body>
</html>