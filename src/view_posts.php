<?php
session_start();
require_once 'db.php';
require_once 'session_auth.php';

$user_id = $_SESSION['user_id'];
$username = $_SESSION['username'];

// Handle New Post Submission
if (isset($_POST['new_post'])) {
    $content = trim($_POST['content']);
    if (!empty($content)) {
        $stmt = $mysqli->prepare("INSERT INTO posts (user_id, username, content) VALUES (?, ?, ?)");
        $stmt->bind_param("iss", $user_id, $username, $content);
        $stmt->execute();
    }
}

// Handle New Comment Submission
if (isset($_POST['new_comment'])) {
    $comment_content = trim($_POST['comment_content']);
    $post_id = intval($_POST['post_id']);
    if (!empty($comment_content)) {
        $stmt = $mysqli->prepare("INSERT INTO comments (post_id, user_id, username, comment) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("iiss", $post_id, $user_id, $username, $comment_content);
        $stmt->execute();
    }
}

// Handle Edit Post
if (isset($_POST['edit_post'])) {
    $edited_content = trim($_POST['edited_content']);
    $post_id = intval($_POST['post_id']);
    if (!empty($edited_content)) {
        $stmt = $mysqli->prepare("UPDATE posts SET content = ? WHERE id = ? AND user_id = ?");
        $stmt->bind_param("sii", $edited_content, $post_id, $user_id);
        $stmt->execute();
    }
}

// Handle Delete Post
if (isset($_POST['delete_post'])) {
    $post_id = intval($_POST['post_id']);
    $stmt = $mysqli->prepare("DELETE FROM posts WHERE id = ? AND user_id = ?");
    $stmt->bind_param("ii", $post_id, $user_id);
    $stmt->execute();
}

// Fetch all posts and comments
$posts = $mysqli->query("SELECT * FROM posts ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Posts - miniFacebook</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include 'header.php'; ?>
<main class="container">
    <h2>Create a New Post</h2>
    <form method="POST">
        <textarea name="content" rows="3" cols="50" placeholder="What's on your mind?" required></textarea><br>
        <button type="submit" name="new_post">Post</button>
    </form>

    <h2>All Posts</h2>
    <?php while ($post = $posts->fetch_assoc()): ?>
        <div class="post-card">
            <p><strong><?= htmlspecialchars($post['username']) ?>:</strong> <?= nl2br(htmlspecialchars($post['content'])) ?></p>
            <small>Posted on <?= $post['created_at'] ?></small><br>

            <?php if ($post['user_id'] == $user_id): ?>
                <!-- Edit Post -->
                <form method="POST" style="display:inline;">
                    <input type="hidden" name="post_id" value="<?= $post['id'] ?>">
                    <textarea name="edited_content" rows="2" cols="30" required><?= htmlspecialchars($post['content']) ?></textarea><br>
                    <button type="submit" name="edit_post">Update</button>
                </form>

                <!-- Delete Post -->
                <form method="POST" style="display:inline;">
                    <input type="hidden" name="post_id" value="<?= $post['id'] ?>">
                    <button type="submit" name="delete_post" onclick="return confirm('Delete this post?');">Delete</button>
                </form>
            <?php endif; ?>

            <!-- Comment Form -->
            <form method="POST" style="margin-top:10px;">
                <input type="hidden" name="post_id" value="<?= $post['id'] ?>">
                <textarea name="comment_content" rows="2" cols="50" placeholder="Write a comment..." required></textarea><br>
                <button type="submit" name="new_comment">Comment</button>
            </form>

            <!-- Display Comments -->
            <?php
            $post_id = $post['id'];
            $comments = $mysqli->query("SELECT * FROM comments WHERE post_id=$post_id ORDER BY created_at ASC");
            ?>
            <div class="comment-section">
                <?php while ($comment = $comments->fetch_assoc()): ?>
                    <p><strong><?= htmlspecialchars($comment['username']) ?>:</strong> <?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
                <?php endwhile; ?>
            </div>

            <hr>
        </div>
    <?php endwhile; ?>
</main>

</body>
</html>

