<?php

$servername = "localhost";
$dbUsername = "username";
$dbPassword = "password";
$dbName = "phptest";

$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
  die("Connection failed: ".mysqli_connect_error());
}
