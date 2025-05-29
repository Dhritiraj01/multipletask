<?php session_start();
if (!isset($_SESSION['user'])) die("Access denied.");
$role = $_SESSION['user']['role'];
echo "Welcome, " . $_SESSION['user']['name'] . " ($role)<br>";
echo "<a href='task4_profile.php'>View Profile</a> | <a href='task4_logout.php'>Logout</a>";
if ($role === 'admin') echo " | <a href='task4_admin.php'>Admin Panel</a>";
?>