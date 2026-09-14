<?php
$host = "localhost";
$db_user = "josephine.allan";
$db_pass = "";
$db_name = "ecommerce_2026A_josephine_allan";
$conn = new mysqli($host, $db_user, $db_pass, $db_name);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
