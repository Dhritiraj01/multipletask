<?php session_start(); if (!isset($_SESSION['user'])) die("Access denied.");
$user = $_SESSION['user'];
echo "Name: {$user['name']}<br>Email: {$user['email']}<br>Role: {$user['role']}";
?>