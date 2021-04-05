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
			<form action="cvp.php" method="post" autocomplete="off" target="_blank">
				<div id="grade">
					<div class="row">
					<div class="column">
					<h2>Enter grade for theory marks</h2>
					<p>Enter in all caps(ex. AB)</p>
					<label for="PS" style="margin-left:50px">Probability and Statistics</label><br>
					<input type="text" name="PS" style="margin-left:50px"><br>
					<label for="FM" style="margin-left:50px">Fluid Mechanics</label><br>
					<input type="text" name="FM" style="margin-left:50px"><br>
					<label for="BM" style="margin-left:50px">Building Materials and Construction</label><br>
					<input type="text" name="BM" style="margin-left:50px"><br>
					<label for="EG" style="margin-left:50px">Engineering Geology</label><br>
					<input type="text" name="EG" style="margin-left:50px"><br>
					<label for="ES" style="margin-left:50px">Engineering Surveying</label><br>
					<input type="text" name="ES" style="margin-left:50px"><br>
					<label for="SM" style="margin-left:50px">Solid Mechanics</label><br>
					<input type="text" name="SM" style="margin-left:50px"> <br>
					</div>
					
					<div class="column">
					<h2>Enter grade for Practical marks</h2>
					<p>Enter in all caps(ex. AB)</p>
					<label for="FMP" style="margin-left:50px">Fluid Mechanics</label><br>
					<input type="text" name="FMP" style="margin-left:50px"><br>
					<label for="BMP" style="margin-left:50px">Building Materials and Construction</label><br>
					<input type="text" name="BMP" style="margin-left:50px"><br>
					<label for="EGP"style="margin-left:50px">Engineering Geology</label><br>
					<input type="text" name="EGP" style="margin-left:50px"> <br>
					<label for="ESP"style="margin-left:50px">Engineering Surveying</label><br>
					<input type="text" name="ESP" style="margin-left:50px"> <br>
					<input type="submit" name="submit" style="margin-left:140px; margin-top:20px;"><br>
					</div>
					
					</div>
					
					
				</div>
			</form>
			
			
			
			
			
		</body>
</html>