<?php
$servername = "51.68.139.41";
$username = "chimera";
$password = "szkzj7muFrEizlg3";
$dbname = "chimera_";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully <br />";

$sql = "SELECT f_name FROM users LIMIT 5";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo 'First 5 names from users table <br />';
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["f_name"]. "<br>";
    }
} else {
    echo "0 results";
}


$conn->close();