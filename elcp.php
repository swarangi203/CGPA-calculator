<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Swarangi's Website</title>
		<link rel="stylesheet" href="css.css">
		<link rel="stylesheet" href="rating.css">
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
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
				<h1>Thankyou for using this Website!</h1><br><br>
				
				<?php
				
				$grades = array("AA"=>10, "AB"=>9, "BB"=>8, "BC"=>7, "CC"=>6, "CD"=>5, "DD"=>4);
				$sub1=($grades[$_POST["PS"]]*2);
				$sub2=($grades[$_POST["DC"]]*3);
				$sub3=($grades[$_POST["EC"]]*3);
				$sub4=($grades[$_POST["AD"]]*3);
				$sub5=($grades[$_POST["EM"]]*3);
				$sub6=($grades[$_POST["I"]]*3);
				$sub7=($grades[$_POST["DCP"]]*1);   
				$sub8=($grades[$_POST["EMP"]]*1);
				$sub9=($grades[$_POST["ADP"]]*1);
				$total=$sub1+$sub2+$sub3+$sub4+$sub5+$sub6+$sub7+$sub8+$sub9;
				$gtotal=$total/20;
				echo "<h2>Your CGPA is : $gtotal</h2> !";
				?>
				<br>
					<form action="form.php" method="post" autocomplete="off" target="_blank">
				<section>
				<label for="name" style="margin-left:50px; margin-bottom:30px;">Name:</label>
				<input type="text" name="name" style="margin-left:50px; margin-bottom:30px;" placeholder="Enter your Name"><br>
				
				<label for="email" style="margin-left:50px; margin-bottom:30px;">Email:</label>
				<input type="email" name="email" style="margin-left:50px; margin-bottom:30px;" placeholder="Enter your Email"><br>
				
				<label for="suggestions" style="margin-left: 100px; margin-bottom:30px; padding-right:10px;">Any Suggestions?(Optional)</label>
				<input type="text" name="suggestions" style="margin-right:150px; margin-bottom:30px;" placeholder="Suggestions here..."><br>
				
				<div class="stars">
				<input class="star star-5" id="star-5" type="radio" name="star" value="5"/>
				<label class="star star-5" for="star-5"></label>
				<input class="star star-4" id="star-4" type="radio" name="star" value="4"/>
				<label class="star star-4" for="star-4"></label>
				<input class="star star-3" id="star-3" type="radio" name="star" value="3"/>
				<label class="star star-3" for="star-3"></label>
				<input class="star star-2" id="star-2" type="radio" name="star" value="2"/>
				<label class="star star-2" for="star-2"></label>
				<input class="star star-1" id="star-1" type="radio" name="star" value="1"/>
				<label class="star star-1" for="star-1"></label><br>
				
				<input type="submit" name="submit" value="submit"><br>
				
				</div>
				</section>
				</form>	
				</div>
				
				
				
				
				
				
				
				
	</body>
</html>