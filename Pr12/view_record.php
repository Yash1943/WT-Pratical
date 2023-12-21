<!DOCTYPE html>
<html>
<head>
    <title>View Record</title>
   <link rel="stylesheet" href="styles.css">
</head>
<body align="center">
    <h2>View Record</h2>
    <?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $records = [
            1 => ['Name' => 'Yash Joshi', 'Age' => 20],
            2 => ['Name' => 'Het Maheta', 'Age' => 20],
            3 => ['Name' => 'Nil Patel', 'Age' => 20],
            4 => ['Name' => 'Jaimin Patel', 'Age' => 20],
            5 => ['Name' => 'Happy Prajapati', 'Age' => 20],
        ];
        if (isset($records[$id])) {
            echo '<p>ID: ' . $id . '</p>';
            echo '<p>Name: ' . $records[$id]['Name'] . '</p>';
            echo '<p>Age: ' . $records[$id]['Age'] . '</p>';
        } else {
            echo '<p>Record not found.</p>';
        }
    } else {
        echo '<p>Invalid request.</p>';
    }
    ?>
    <p><a href="index.html">Back to Table</a></p>
</body>
</html>
