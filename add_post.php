<!DOCTYPE html>
<html>
<head>
    <title>Add New Post</title>
</head>
<body>
    <h1>Add New Post</h1>
    <form action="insert_post.php" method="POST">
        <label>Title:</label><br>
        <input type="text" name="title" required><br><br>

        <label>Content:</label><br>
        <textarea name="content" rows="5" cols="40" required></textarea><br><br>

        <input type="submit" value="Add Post">
    </form>
</body>
</html>