<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdb01";
$port =3307;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname, email, reg_date FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]." | " ."email: ". $row["email"] . " | " . " Reg_Date: ".$row["reg_date"] . "<br>";
	
	
  }
} else {
  echo "0 results";
}
$conn->close();
?>