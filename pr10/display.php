<!DOCTYPE html>
<html>
<head>
    <title>User Details</title>
</head>
<body align="center">
    <h2>User Details</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $gender = $_POST["gender"];
        $interests = isset($_POST["interests"]) ? implode(", ", $_POST["interests"]) : "";
        $country = $_POST["country"];

        echo "<p><strong>Name:</strong> {$name}</p>";
        echo "<p><strong>Email:</strong> {$email}</p>";
        echo "<p><strong>Gender:</strong> {$gender}</p>";
        echo "<p><strong>Interests:</strong> {$interests}</p>";
        echo "<p><strong>Country:</strong> {$country}</p>";
    }
    ?>
</body>
</html>
