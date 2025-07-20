<?php include 'config.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Mini Blog</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Mini Blog</h1>
    
    <?php
    $sql = "SELECT * FROM posts ORDER BY created_at DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<div class='post'>";
            echo "<h2>" . htmlspecialchars($row["title"]) . "</h2>";
            echo "<p>" . nl2br(htmlspecialchars($row["content"])) . "</p>";
            echo "<small>By " . htmlspecialchars($row["author"]) . " on " . $row["created_at"] . "</small>";
            echo "</div><hr>";
        }
    } else {
        echo "No posts yet.";
    }

    $conn->close();
    ?>
</body>
</html>