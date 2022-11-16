<?php
$servername = "localhost";
$username = "root";
$password = "";
$database ="biblioth-que";


// Create connection
$conn = new mysqli($servername, $username, $password ,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql="SELECT book.id,book.title,book.quantity,book.description,book.Publisher 
FROM book JOIN admine on admine.id=book.Publisher";
$result = mysqli_query($conn, $sql);