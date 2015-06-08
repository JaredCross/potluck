<?php
$servername = "localhost";
$username = "username";
$password = "password";
$id = $_POST['id'];

// Create connection
$conn = new mysqli($servername, $username, $password, "database");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "DELETE FROM potluck_table WHERE ID='$id'";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
