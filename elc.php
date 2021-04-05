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
			<form action="elcp.php" method="post" autocomplete="off" target="_blank">
				<div id="grade">
					<div class="row">
					<div class="column">
					<h2>Enter grade for theory marks</h2>
					<p>Enter in all caps(ex. AB)</p>
					<label for="PS" style="margin-left:50px">Probability and Statistics</label><br>
					<input type="text" name="PS" style="margin-left:50px"><br>
					<label for="DC" style="margin-left:50px">DC machines and Transformers</label><br>
					<input type="text" name="DC" style="margin-left:50px"><br>
					<label for="EC" style="margin-left:50px">Electrical Circuits</label><br>
					<input type="text" name="EC" style="margin-left:50px"><br>
					<label for="AD" style="margin-left:50px">Analog and Digital Circuits</label><br>
					<input type="text" name="AD" style="margin-left:50px"><br>
					<label for="EM" style="margin-left:50px">Electrical Measurements</label><br>
					<input type="text" name="EM" style="margin-left:50px"><br>
					<label for="I"style="margin-left:50px">Istrumentation</label><br>
					<input type="text" name="I" style="margin-left:50px"> <br>
					</div>
					
					<div class="column">
					<h2>Enter grade for Practical marks</h2>
					<p>Enter in all caps(ex. AB)</p>
					<label for="DCP" style="margin-left:50px">DC machines and Transformers</label><br>
					<input type="text" name="DCP" style="margin-left:50px"><br>
					<label for="EMP" style="margin-left:50px">Electrical Circuits and Measurements</label><br>
					<input type="text" name="EMP" style="margin-left:50px"><br>
					<label for="ADP"style="margin-left:50px">Analog and Digital Circuits</label><br>
					<input type="text" name="ADP" style="margin-left:50px"> <br>
					<input type="submit" name="submit" style="margin-left:140px; margin-top:20px;"><br>
					</div>
					
					</div>
					
					
				</div>
			</form>
			
			
			
			
			
		</body>
</html>