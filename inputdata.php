<!-- Nama : Fairuzia Meyla Fatinah | Nim : 102022300147 | Kelas : SI4708 -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbdatabase = "datateman";

$conn = new mysqli($servername, $username, $password, $dbdatabase);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>