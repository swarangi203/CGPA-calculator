<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Swarangi's Website</title>
		<link rel="stylesheet" href="css.css">
	</head>
	<style>
		ol{
	background-color:rgba(0, 0, 0, 0.5);
	transition:0.5s;
	margin-top:30px;
	line-height:2em;
	margin-left:150px;
	margin-right:150px;
	transform: perspective(1000px) rotateX(-90deg);
}

ol li{
	list-style: none;
	border-bottom: solid rgba(0, 0, 0, 0.2);
	font-size: 18px;
}

ol li a{
	padding:2px;
	display: block;
	border-bottom: rgba(0, 0, 0, 1);
	transition: 0.5s;
}

ol li a:hover
{
	background-color: rgba(255,165,0, 0.4);
	
	
}
ol.active
{
	transform: perspective(1000px) rotateX(0deg);
	
}
	</style>
	<body>
		<nav>
			<ul>			
					<li><a style="color=white" href="php.php">Home</a></li>
					<li><a style="color=white" href="About.php">About</a></li>
					<li><a style="color=white" href="Contact.html">Contact</a></li>			
			</ul><br>
		</nav>
		<div id="wrap">
			<h1>Calculate your CGPA!</h1><br>
			
				<div id="info" class="branch">
					<button>Select your Year</button>
					<ol class="active">			
					<li><a style="color=white" href="it.php">Second Year</a></li>
					<li><a style="color=white" href="itty.php">Third Year</a></li>
					</ol><br>
				
				</div>
			
		</div>
		</div>
	</body>
</html>