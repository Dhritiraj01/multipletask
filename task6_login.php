<?php session_start(); include 'db.php'; ?>
<form method="POST">
    Email: <input name="email"><br>
    Password: <input name="pass"><br>
    <button name="login">Login</button>
</form>
<?php
if (isset($_POST['login'])) {
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email=? AND password=?");
    $stmt->execute([$_POST['email'], $_POST['pass']]);
    if ($u = $stmt->fetch()) {
        $_SESSION['uid'] = $u['id'];
        header("Location: task6_protected.php");
    } else echo "Invalid login";
}
?>