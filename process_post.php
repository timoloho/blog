<?php
//Kasutame connection.php faili, et luua andmebaasiga ühendus
require_once('connection.php');

//$_POST-iga võtan andmed vormist vastu
$title = $_POST['title'];
$content = $_POST['content'];
$datetime = $_POST['datetime'];

//Siin saadan andmed baasi SQL käsklusega.
$stmt = $pdo->prepare("INSERT INTO posts (title, content, datetime) VALUES (:title, :content, :datetime)");
$stmt->execute(['title' => $title, 'content' => $content, 'datetime' => $datetime]);

if ($stmt) {
    echo "Postitus oli edukas!";
} else {
    echo "Error adding post";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <br>
    <a href="index.php">Avaleht</a>
</body>
</html>