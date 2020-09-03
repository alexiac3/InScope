<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>InScope</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<nav>
			<a href="#">
				<img src="img/gemini logo.png">
			</a>
				<!--<li><a href="">Home</a></li>-->
				<!--<li><a href="">Feed</a></li> -->
				<!--<li><a href="">Explore</a></li>-->
			<div class="header">
				<?php
					if (isset($_SESSION['userid'])) {
						echo '<form action="includes/logoutUsers.php" method="post">
							<button type="submit" name="logout-submit">Log Out</button>
						</form>';
					} else {
						echo '<form action="includes/loginUsers.php" method="post">
							<input type="text" name="emailuserid" placeholder="Username or email">
							<input type="password" name="pwd" placeholder="Password">
							<button type="submit" name="login-submit">Log In</button>
						</form>
						<a href="signup.php">Sign Up</a>';
					}
				?>
			</div>
		</nav>
	</header>
