<?php
$servername = "localhost";
$username = "admin";
$password = "admin";
$database="proyecto1";

// Create connection
$pepito = new mysqli($servername, $username, $password,$database);

// Check connection
if ($pepito->connect_error) {
  die("" . $pepito->connect_error);
}
echo "";
?>	