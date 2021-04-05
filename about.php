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
					<li><a style="color=white" href="Contact.php">Contact</a></li>			
			</ul><br>
		</nav>

				<div id="wrap">
				<?php
				$name=$_POST["name"];
				echo "<h1>Hey $name!</h1>";
				?>
				<br><br>
				<p style="text-align:center; margin-right:100px;">This is a small web app which can calculate your cgpa for you! I have been experimenting various front end and back end languages which led me to create this website.</p>
				<p style="text-align:center; margin-right:100px;">Hope it was useful !<p>
				<p style="text-align:center; margin-right:100px;">Check out the contact page for more info<p>
				<br><br><br>
				</div>
	</body>
</html>