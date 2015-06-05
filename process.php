<?php
$servername = "localhost";
$username = "jcross86_public";
$password = "Potluck1";
$name = $_POST['name'];
$main = $_POST['main'];
$side = $_POST['side'];
$dessert = $_POST['dessert'];
$other = $_POST['other'];

// Create connection
$conn = new mysqli($servername, $username, $password, "jcross86_potluck-data");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "INSERT INTO potluck_table (name, main, side, dessert, other) VALUES ('$name', '$main', '$side', '$dessert', '$other')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
