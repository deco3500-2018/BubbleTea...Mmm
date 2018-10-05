<?php
session_start();
$db = mysqli_connect("localhost", "root", "", "inthemoment");
// password is ba3575fdcf1d671d

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 
?>