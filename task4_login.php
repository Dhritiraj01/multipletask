<?php include 'db.php'; session_start(); ?>
<form method="POST">
    Email: <input type="email" name="email"><br>
    Password: <input type="password" name="pass"><br>
    <button name="login">Login</button>
</form>
<?php
if (isset($_POST['login'])) {
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
    $stmt->execute([$_POST['email'], $_POST['pass']]);
    $user = $stmt->fetch();
    if ($user) {
        $_SESSION['user'] = $user;
        header("Location: task4_dashboard.php");
    } else {
        echo "Invalid credentials";
    }
}
?>