<?php include 'db.php'; session_start();
if ($_SESSION['user']['role'] !== 'admin') die("Access denied.");

if (isset($_POST['create'])) {
    $stmt = $pdo->prepare("INSERT INTO users (name, email, password, role) VALUES (?, ?, ?, ?)");
    $stmt->execute([$_POST['name'], $_POST['email'], $_POST['pass'], $_POST['role']]);
    echo "User created<br>";
}

if (isset($_POST['delete'])) {
    $pdo->prepare("DELETE FROM users WHERE id = ?")->execute([$_POST['uid']]);
    echo "User deleted<br>";
}
?>
<form method="POST">
    Name: <input name="name"> Email: <input name="email"> Password: <input name="pass">
    Role: <select name="role"><option>user</option><option>admin</option></select>
    <button name="create">Create</button>
</form>

<form method="POST">
    User ID to delete: <input name="uid">
    <button name="delete">Delete</button>
</form>