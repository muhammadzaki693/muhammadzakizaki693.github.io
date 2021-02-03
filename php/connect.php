<?php
$server = "localhost";
$name = "root"
$password = "root"
$conn = new mysqli($server, $name, $password)
if($conn->connect_error){
die("uncconected: $conn->connect_error"
}
echo "succes";
?>
