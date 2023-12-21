<!DOCTYPE html>
<html>
<head>
    <title>Data Table</title>
</head>
<body>

<?php
// Database connection parameters
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "sample"; 
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM data";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>Name</th><th>Age</th><th>City</th></tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Name"]. "</td><td>" . $row["Age"]. "</td><td>" . $row["City"]. "</td></tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>

</body>
</html>
