<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Home</title>
</head>
<body>
    <div class="container">
        <h2>Welcome</h2>
        <?php if (isset($_SESSION['username'])): ?>
            <p>Hello, <?php echo $_SESSION['username']; ?>!</p>
            <a href="logout.php">Logout</a>
        <?php else: ?>
            <p>Please <a href="login.php">login</a>.</p>
        <?php endif; ?>
    </div>
</body>
</html>
