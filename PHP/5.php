<?php
$servername = "localhost";
$username = "root";
$password = "anshu@7";
$dbname = "B";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

echo "Connected successfully";
$sql = "UPDATE Persons SET lastname='setia' WHERE id=133";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}


$conn->close();
?>



