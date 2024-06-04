<?php

//Connection.php faili kasutan selleks, et andmebaasiga ühendust luua.
require_once 'connection.php';
//Kasutan PDO-d, et teha päring andmebaasi mis fetchib mulle kõik väljad mis on siestatud posts-i.
$stmt = $pdo->query('SELECT * FROM posts');
$posts = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Blog Posts</title>
</head>
<body>
    <h2>Postitused</h2>
    <!--Viib uue postituse tegemis lehele.!-->
    <a href="blogpost.php">Uus Postitus</a>
    <!--Siin ma visualiseerin andmebaasist välja korjatud postitused.!-->
    <?php foreach ($posts as $post) : ?>
        <div>
            <h3><?php echo $post['title']; ?></h3>
            <p><?php echo $post['content']; ?></p>
            <p>Date: <?php echo $post['datetime']; ?></p>
        </div>
        <hr>
    <?php endforeach; ?>
</body>
</html>
