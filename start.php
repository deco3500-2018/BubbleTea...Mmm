<?php
session_start();
$db = mysqli_connect("localhost", "root", "", "inthemoment");
// password is cyrgbC5tcxUUJR92

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 
?>