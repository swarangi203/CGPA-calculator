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
			<form action="mechp.php" method="post" autocomplete="off" target="_blank">
				<div id="grade">
					<div class="row">
					<div class="column">
					<h2>Enter grade for theory marks</h2>
					<p>Enter in all caps(ex. AB)</p>
					<label for="PS" style="margin-left:50px">Probability and Statistics</label><br>
					<input type="text" name="PS" style="margin-left:50px"><br>
					<label for="T" style="margin-left:50px">Thermodynamics</label><br>
					<input type="text" name="T" style="margin-left:50px"><br>
					<label for="ME" style="margin-left:50px">Materials Engineering</label><br>
					<input type="text" name="ME" style="margin-left:50px"><br>
					<label for="SM" style="margin-left:50px">Strength of Materials</label><br>
					<input type="text" name="SM" style="margin-left:50px"><br>
					<label for="MP" style="margin-left:50px">Manufacturing Process</label><br>
					<input type="text" name="MP" style="margin-left:50px"><br>
					</div>
					
					<div class="column">
					<h2>Enter grade for Practical marks</h2>
					<p>Enter in all caps(ex. AB)</p>
					<label for="TP" style="margin-left:50px">Thermodynamics</label><br>
					<input type="text" name="TP" style="margin-left:50px"><br>
					<label for="MEP" style="margin-left:50px">Materials Engineering</label><br>
					<input type="text" name="MEP" style="margin-left:50px"><br>
					<label for="WP"style="margin-left:50px">Workshop-I</label><br>
					<input type="text" name="WP" style="margin-left:50px"> <br>
					<input type="submit" name="submit" style="margin-left:140px; margin-top:20px;"><br>
					</div>
					
					</div>
					
					
				</div>
			</form>
			
			
			
			
			
		</body>
</html>