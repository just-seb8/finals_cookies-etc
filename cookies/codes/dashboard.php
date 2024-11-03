<?php
session_start();

// Check if the user is logged in, if not then redirect to login page
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Dashboard</title>
</head>
<body>
    <div class="container">
        <h2><span class="typing"></h2>
        <p>Welcome, <?php echo $_SESSION['username']; ?>!</p>
        <div class="team-content">
			<div class="box">
				<img src="imgs/mememe.jpeg">
				<h3>IAN REYNOSO</h3>
				<h5>Leader</h5>
				<div class="icons">
					<a href="https://github.com/just-seb8"><i class="ri-github-fill"></i></a>
					<a href="https://www.facebook.com/iaaaaanskie/"><i class="ri-facebook-box-fill"></i></a>
					
				</div>
			</div>

			<div class="box">
				<img src="imgs/cessy.jpeg">
				<h3>PRINCESS JOY REMANDIMAN</h3>
				<h5>Member</h5>
				<div class="icons">
					<a href="https://github.com/Princess0613"><i class="ri-github-fill"></i></a>
					<a href="https://www.facebook.com/profile.php?id=100009232409492"><i class="ri-facebook-box-fill"></i></a>
				
				</div>
			</div>

			<div class="box">
				<img src="imgs/angge.jpeg">
				<h3>ANGELICA RODRIGUEZ</h3>
				<h5>Member</h5>
				<div class="icons">
					<a href="https://github.com/angelicaarss"><i class="ri-github-fill"></i></a>
					<a href="https://www.facebook.com/co0lasf"><i class="ri-facebook-box-fill"></i></a>
				
				</div>
			</div>

			<div class="box">
				<img src="imgs/cheska.jpeg">
				<h3>MARIAH CHESKA BAUTISTA</h3>
				<h5>Member</h5>
				<div class="icons">
					<a href="https://github.com/cheskaa01"><i class="ri-github-fill"></i></a>
					<a href="https://www.facebook.com/mariahcheska.bautista"><i class="ri-facebook-box-fill"></i></a>
		
				</div>                  
			</div>
            <div class="box">
                <img src="imgs/eco.jpeg">
                <h3>JERICO FERNANDEZ</h3>
                <h5>Member</h5>
                <div class="icons">
                    <a href="https://github.com/JericoFernandez"><i class="ri-github-fill"></i></a>
                    <a href="https://www.facebook.com/eco.fernandez.75"><i class="ri-facebook-box-fill"></i></a>
               
                </div>
                </div>
		</div>
        <a href="logout.php">Logout</a>
    </div>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
	<script>
		var typed = new Typed(".typing",
    {
        strings : ["Dashboard"],
        typeSpeed : 150,
        backSpeed : 150,
        loop : true 
    });
	</script>

</body>
</html>
