<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add a Post</title>
</head>
<body>
<h2>Lisa Postitus</h2>
<!--Siin on vorm millega saab ära täita kõik posts väljad:tiitli, postituse sisu ja siis kuupäeva koos kellaajaga. Vormi acionics on määratud process_post.php siis seal käib vormi saatmine baasi.!-->
<form action="process_post.php" method="post">
    <label for="title">Tiitel:</label><br>
    <input type="text" id="title" name="title"><br><br>
    
    <label for="content">Sisu:</label><br>
    <textarea id="content" name="content" rows="4" cols="50"></textarea><br><br>
    
    <label for="datetime">Kuupäev:</label><br>
    <input type="datetime-local" id="datetime" name="datetime"><br><br>
    
    <input type="submit" value="Lisa">
</form>
</body>
</html>
