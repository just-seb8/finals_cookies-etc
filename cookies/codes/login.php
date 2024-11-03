<?php
session_start();

// Dummy credentials for demonstration
$valid_username = 'user';
$valid_password = 'pass';

// Function to filter input
function filter_input_data($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = filter_input_data($_POST['username']);
    $password = filter_input_data($_POST['password']);

    // Validate credentials
    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['username'] = $username;
    
        // Set a cookie that lasts for 1 hour
        setcookie("user", $username, time() + 3600, "/");
        header("Location: dashboard.php"); // Redirect to the dashboard
        exit();
    }
}
?>    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
    <h1><span class="typing"></span></h1>
        <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
        <form method="POST" action="">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Login">
        </form>
    </div>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
	<script>
		var typed = new Typed(".typing",
    {
        strings : ["Login"],
        typeSpeed : 150,
        backSpeed : 150,
        loop : true 
    });
	</script>
</body>
</html>
