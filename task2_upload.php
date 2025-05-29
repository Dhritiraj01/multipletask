<?php include 'db.php'; ?>
<form method="POST" enctype="multipart/form-data">
    Name: <input type="text" name="name"><br>
    Picture: <input type="file" name="pic"><br>
    <button name="upload">Upload</button>
</form>
<?php
if (isset($_POST['upload'])) {
    $name = $_POST['name'];
    $file = $_FILES['pic'];

    $targetDir = "uploads/";
    $fileName = basename($file["name"]);
    $filePath = $targetDir . time() . "_" . $fileName;

    $ext = strtolower(pathinfo($filePath, PATHINFO_EXTENSION));
    if (in_array($ext, ['jpg', 'jpeg', 'png']) && $file["size"] <= 2000000) {
        move_uploaded_file($file["tmp_name"], $filePath);
        $stmt = $pdo->prepare("INSERT INTO users (name, profile_pic) VALUES (?, ?)");
        $stmt->execute([$name, $filePath]);
        echo "Uploaded and saved.";
    } else {
        echo "Invalid file.";
    }
}
?>