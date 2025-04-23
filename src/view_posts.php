<?php
include 'header.php';
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['post_content'])) {
    $content = trim($_POST['post_content']);
    $user_id = $_SESSION['user_id'];
    $username = $_SESSION['username'];

    if (!empty($content)) {
        $stmt = $mysqli->prepare("INSERT INTO posts (user_id, username, content) VALUES (?, ?, ?)");
        $stmt->bind_param("iss", $user_id, $username, $content);
        $stmt->execute();
    }
}

// Fetch posts
$result = $mysqli->query("SELECT username, content, created_at FROM posts ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Posts</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h2>Post Something</h2>
        <form method="POST" action="view_posts.php">
            <textarea name="post_content" rows="3" cols="50" required></textarea><br><br>
            <button type="submit">Post</button>
        </form>

        <hr>
        <h2>Recent Posts</h2>
        <?php while ($row = $result->fetch_assoc()): ?>
            <div class="post">
                <p><strong><?php echo htmlspecialchars($row['username']); ?>:</strong></p>
                <p><?php echo nl2br(htmlspecialchars($row['content'])); ?></p>
                <small>Posted on <?php echo $row['created_at']; ?></small>
                <hr>
            </div>
        <?php endwhile; ?>
    </div>
</body>
</html>
