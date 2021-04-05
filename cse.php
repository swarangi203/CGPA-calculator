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
			<form action="csep.php" method="post" autocomplete="off" target="_blank">
				<div id="grade">
					<div class="row">
					<div class="column">
					<h2>Enter grade for theory marks</h2>
					<p>Enter in all caps(ex. AB)</p>
					<label for="PS" style="margin-left:50px">Probability and Statistics</label><br>
					<input type="text" name="PS" style="margin-left:50px"><br>
					<label for="DM" style="margin-left:50px">Discrete maths</label><br>
					<input type="text" name="DM" style="margin-left:50px"><br>
					<label for="DS" style="margin-left:50px">Data Structure</label><br>
					<input type="text" name="DS" style="margin-left:50px"><br>
					<label for="COA" style="margin-left:50px">Computer Organisation and Architecture</label><br>
					<input type="text" name="COA" style="margin-left:50px"><br>
					<label for="DC" style="margin-left:50px">Data communication</label><br>
					<input type="text" name="DC" style="margin-left:50px"><br>
					<label for="SE" style="margin-left:50px">Software engineering</label><br>
					<input type="text" name="SE" style="margin-left:50px"> <br>
					</div>
					
					<div class="column">
					<h2>Enter grade for Practical marks</h2>
					<p>Enter in all caps(ex. AB)</p>
					<label for="DSP" style="margin-left:50px">Data Structure</label><br>
					<input type="text" name="DSP" style="margin-left:50px"><br>
					<label for="PL" style="margin-left:50px">Programming Lab 1</label><br>
					<input type="text" name="PL" style="margin-left:50px"><br>
					<label for="COAP"style="margin-left:50px">Computer Organisation and Architecture</label><br>
					<input type="text" name="COAP" style="margin-left:50px"> <br>
					<input type="submit" name="submit" style="margin-left:140px; margin-top:20px;"><br>
					</div>
					
					</div>
					
					
				</div>
			</form>
			
			
			
			
			
		</body>
</html>