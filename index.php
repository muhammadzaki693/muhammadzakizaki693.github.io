<?php
$servername = "localhost";
$name = "root";
$pwd = "root"
$conn = new mysqli($servername, $name, $pwd)
if($conn->connect_error){
die("uncconected: ".$conn->connect_error.) 
}
echo "connected guys";
?>
