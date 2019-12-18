<?php $conn = new mysqli("localhost", "root", "", "apon_builders_ltd");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
