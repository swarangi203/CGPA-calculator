<?php
				$name=$_POST["name"];
				$email=$_POST["email"];
				$suggestions=$_POST["suggestions"];
				$star=$_POST["star"];
				$name=stripcslashes($name);
				$email=stripcslashes($email);
				$suggestions=stripcslashes($suggestions);
				$star=stripcslashes($star);
				$conn = mysqli_connect("sql313.epizy.com", "epiz_27245090","ROyET6pxq1GtrX7", "epiz_27245090_pointer");
	
	
?>