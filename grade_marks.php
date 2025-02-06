<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Program to classify Grades based on marks</title>
</head>
<body>
<h1 style="text-align: center" >Grades based on Marks</h1><br><br>
<form method="POST" action="">
<label for="grades">Enter your Marks(0-100)</label>
<input type="text" name="grades" id="grades" required><br><br>  
<button type="submit">Final Grades</button>
</form>
 
        <div class="result">
<?php
                if ($_SERVER["REQUEST_METHOD"] == "POST")
                {
                    $grades = $_POST["grades"];
                    if ($grades >=90)
                    {
                        echo"Your grade is A";
                    }
                    else if ($grades >= 80 && $grades <= 90)
                    {
                        echo "Your grade is B";
                    }
                    else if ($grades >= 70 && $grades <= 80)
                    {
                        echo "Your grade is C";
                    }
                    else if ($grades >= 60 && $grades <= 70)
                    {
                        echo "Your grade is D";
                    }
                    else if ($grades >= 50 && $grades <= 60)
                    {
                        echo "Your grade is D";
                    }
                    else 
                    {
                        echo "Your grade is F, you failed";
                    }
                }
            ?>
</div>
</body>
</html>