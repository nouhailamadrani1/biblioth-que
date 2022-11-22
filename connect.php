<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "biblioth-que";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT book.id,book.title,book.img,book.quantity,book.Publisher,admine.firstname,admine.lastname
FROM book JOIN admine on admine.id=book.Publisher";
$result = mysqli_query($conn, $sql);