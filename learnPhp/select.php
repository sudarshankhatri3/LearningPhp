<?php
$serverName = "localhost";
$userName   = "root";
$password   = "Root@1234";
$myDb       = "userData";

$conn = new mysqli($serverName, $userName, $password, $myDb);

if ($conn->connect_error) {
    die("Error: " . $conn->connect_error);
}

$sql = "SELECT * FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

        echo "Id: " . $row["id"] .
             " FirstName: " . $row["firstName"] .
             " LastName: " . $row["lastName"] .
             " Email: " . $row["email"] .
             "<br>";
    }

} else {
    echo "No data found";
}

$conn->close();
?>