<?php
$servername = "localhost";
$username = "jcross86_public";
$password = "Potluck1";
$name = $_POST['name'];
$main = $_POST['main'];
$side = $_POST['side'];
$dessert = $_POST['dessert'];
$other = $_POST['other'];
$id = $_POST['id'];

// Create connection
$conn = new mysqli($servername, $username, $password, "jcross86_potluck-data");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "UPDATE potluck_table SET name='$name', main='$main', side='$side', dessert='$dessert', other='$other' WHERE ID='$id'";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
