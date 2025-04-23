<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>miniFacebook</title>
    <style>
        /* Base styles */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f6f9;
        }

        /* Header styles */
        header {
            background: linear-gradient(to right, #4b6cb7, #182848);
            color: white;
            padding: 20px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
        }

        .logo {
            font-size: 1.6rem;
            font-weight: 600;
            letter-spacing: 1px;
        }

        .nav-buttons a {
            text-decoration: none;
            margin-left: 15px;
        }

        .nav-buttons button {
            background-color: #ff4b5c;
            border: none;
            color: white;
            padding: 10px 18px;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 2px 4px rgba(0,0,0,0.2);
        }

        .nav-buttons button:hover {
            background-color: #e04352;
            transform: translateY(-2px);
        }

        .nav-buttons {
            display: flex;
            align-items: center;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">miniFacebook</div>
        <div class="nav-buttons">
            <?php if (basename($_SERVER['PHP_SELF']) !== 'profile.php'): ?>
                <a href="profile.php"><button>Back to Profile</button></a>
            <?php endif; ?>
            <a href="view_posts.php"><button>View Posts</button></a>
            <a href="logout.php"><button>Logout</button></a>
        </div>
    </header>
</body>
</html>