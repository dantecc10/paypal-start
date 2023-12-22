<?php
// Connect with the database
$db = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Display error if failed to connect
if ($db->connect_error) {
    die("Connect failed: " . $db->connect_error);
}
?>