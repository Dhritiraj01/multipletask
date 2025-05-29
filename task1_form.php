<?php include 'db.php'; ?>
<form method="POST">
    Name: <input type="text" name="name"><br>
    Email: <input type="email" name="email"><br>
    Age: <input type="text" name="age"><br>
    <button type="submit" name="submit">Submit</button>
</form>
<?php
if (isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $age = trim($_POST['age']);

    $errors = [];
    if (!$name) $errors[] = "Name is required";
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Invalid email";
    if (!is_numeric($age)) $errors[] = "Age must be numeric";

    if (empty($errors)) {
        $stmt = $pdo->prepare("INSERT INTO users (name, email, age) VALUES (?, ?, ?)");
        $stmt->execute([$name, $email, $age]);
        echo "User added successfully.";
    } else {
        foreach ($errors as $e) echo "$e<br>";
    }
}
?>