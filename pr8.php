<!DOCTYPE html>
<html>
<head>
    <title>Arithmetic Operators</title>
</head>
<body>
    <h2>Arithmetic Operations</h2>
    <form method="post">
        Enter the first number: <input type="number" name="num1" required><br>
        Enter the second number: <input type="number" name="num2" required><br>
        <input type="submit" value="Calculate">
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

       
        $sum = $num1 + $num2;
        $difference = $num1 - $num2;
        $product = $num1 * $num2;
        $quotient = $num1 / $num2;
        $remainder = $num1 % $num2;

        
        echo "Sum: $num1 + $num2 = $sum <br>";
        echo "Difference: $num1 - $num2 = $difference <br>";
        echo "Product: $num1 * $num2 = $product <br>";
        echo "Quotient: $num1 / $num2 = $quotient <br>";
        echo "Modulus (remainder): $num1 % $num2 = $remainder <br>";
    }
    ?>
</body>
</html>
