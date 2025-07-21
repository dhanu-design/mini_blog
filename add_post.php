<!DOCTYPE html>
<html>
<head>
    <title>Add New Post</title>
</head>
<body>
    <h1>Add New Post</h1>
    <form action="insert_post.php" method="POST">
  <label for="title">Title:</label><br>
  <input type="text" id="title" name="title" required><br><br>

  <label for="content">Content:</label><br>
  <textarea id="content" name="content" rows="5" cols="40" required></textarea><br><br>

  <input type="submit" value="Add Post">
</form>
</body>
</html>
