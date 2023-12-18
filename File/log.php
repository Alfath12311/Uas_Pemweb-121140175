<?php

session_start();

$_SESSION['user_id'] = 1;
$_SESSION['username'] = 'User';
$_SESSION['is_logged_in'] = true;

$userID = $_SESSION['user_id'];
$username = $_SESSION['username'];
$isLoggedIn = $_SESSION['is_logged_in'];

echo "User ID: $userID<br>";
echo "Username: $username<br>";
echo "Is Logged In: " . ($isLoggedIn ? 'Yes' : 'No');
?>
