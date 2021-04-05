<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Swarangi's Website</title>
		<link rel="stylesheet" href="css.css">
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	</head>
		<body>
			<nav>
				<ul>			
					<li><a style="color=white" href="php.php">Home</a></li>
					<li><a style="color=white" href="About.php">About</a></li>
					<li><a style="color=white" href="Contact.php">Contact</a></li>			
				</ul><br>
			</nav>
			<form action="tronicsp.php" method="post" autocomplete="off" target="_blank">
				<div id="grade">
					<div class="row">
					<div class="column">
					<h2>Enter grade for theory marks</h2>
					<p>Enter in all caps(ex. AB)</p>
					<label for="PS" style="margin-left:50px">Probability and Statistics</label><br>
					<input type="text" name="PS" style="margin-left:50px"><br>
					<label for="ECA" style="margin-left:50px">Electronic Circuits Analysis and Design-I</label><br>
					<input type="text" name="ECA" style="margin-left:50px"><br>
					<label for="CT" style="margin-left:50px">Circuit Theory</label><br>
					<input type="text" name="CT" style="margin-left:50px"><br>
					<label for="DE" style="margin-left:50px">Digital Electronics</label><br>
					<input type="text" name="DE" style="margin-left:50px"><br>
					<label for="DSA" style="margin-left:50px">Data Structures and Algorithms</label><br>
					<input type="text" name="DSA" style="margin-left:50px"><br>
					<label for="SA" style="margin-left:50px">Sensors and Actuators</label><br>
					<input type="text" name="SA" style="margin-left:50px"> <br>
					</div>
					
					<div class="column">
					<h2>Enter grade for Practical marks</h2>
					<p>Enter in all caps(ex. AB)</p>
					<label for="EAP" style="margin-left:50px">Electronic Circuits Analysis and Design-I</label><br>
					<input type="text" name="EAP" style="margin-left:50px"><br>
					<label for="ST" style="margin-left:50px">Simulation Tools</label><br>
					<input type="text" name="ST" style="margin-left:50px"><br>
					<label for="DEP"style="margin-left:50px">Digital Electronics</label><br>
					<input type="text" name="DEP" style="margin-left:50px"> <br>
					<label for="DSAP"style="margin-left:50px">Data Structures and Algorithms</label><br>
					<input type="text" name="DSAP" style="margin-left:50px"> <br>
					<input type="submit" name="submit" style="margin-left:140px; margin-top:20px;"><br>
					</div>
					
					</div>
					
					
				</div>
			</form>
			
			
			
			
			
		</body>
</html>