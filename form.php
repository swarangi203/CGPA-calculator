
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Swarangi's Website</title>
		<link rel="stylesheet" href="css.css">
	</head>
	<style>
		h2{
			text-align:center;
		}
	</style
	<body>
		<nav>
			<ul>			
					<li><a style="color=white" href="php.php">Home</a></li>
					<li><a style="color=white" href="About.php">About</a></li>
					<li><a style="color=white" href="Contact.html">Contact</a></li>			
			</ul><br>
		</nav>

				<div id="wrap">
				<?php
				include 'db.php';
				echo "<h1>Thankyou $name for the Feedback!</h1>";
				$sql = "INSERT INTO users(name, email, suggestions, rating) VALUES('$name', '$email', '$suggestions', '$star');";
				mysqli_query ($conn, $sql);
				?>
				<br><br><br><br>
				
				</div>
	</body>
</html>