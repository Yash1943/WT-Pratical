<!DOCTYPE html>
<html>
<head>
    <title>Calculate Total Marks and Grade</title>
</head>
<body>
    <h2>Calculate Total Marks and Grade</h2>
    <form method="post">
        <label for="math">Math Marks:</label>
        <input type="number" id="math" name="math" required><br>
        <label for="science">Science Marks:</label>
        <input type="number" id="science" name="science" required><br>
        <label for="english">English Marks:</label>
        <input type="number" id="english" name="english" required><br>
        <input type="submit" value="Calculate">
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
        $mathMarks = $_POST["math"];
        $scienceMarks = $_POST["science"];
        $englishMarks = $_POST["english"];

       
        $totalMarks = $mathMarks + $scienceMarks + $englishMarks;

        
        if ($totalMarks >= 80) {
            $grade = 'A';
        } elseif ($totalMarks >= 60) {
            $grade = 'B';
        } elseif ($totalMarks >= 40) {
            $grade = 'C';
        } else {
            $grade = 'D';
        }

     
        echo "Total Marks: $totalMarks <br>";
        echo "Grade: $grade <br>";
    }
    ?>
</body>
</html>
