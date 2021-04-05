<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Glowing Social Icons</title>
    <link rel="stylesheet" href="css.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<style>
		ol{
  display: flex;
  margin-left:215px;
  margin-top:50px;
  margin-bottom:60px;
  
}
ol li{
  position: relative;
  display: block;
  color: white;
  font-size: 30px;
  height: 60px;
  width: 60px;
  background: rgba(0, 0, 0, 0.3);
  line-height: 60px;
  border-radius: 50%;
  margin: 0 15px;
  cursor: pointer;
  transition: .5s;
  text-align:center;
}
ol li:before{
  position: absolute;
  content: '';
  top: 0;
  left: 0;
  height: inherit;
  width: inherit;
  /* background: #d35400; */
  border-radius: 50%;
  transform: scale(.9);
  z-index: -1;
  transition: .5s;
}
ol li:nth-child(1):before{
  background: #4267B2;
}
ol li:nth-child(2):before{
  background: #1DA1F2;
}
ol li:nth-child(3):before{
  background: #E1306C;
}
ol li:nth-child(4):before{
  background: #2867B2;
}
ol li:nth-child(5):before{
  background: #ff0000;
}
ol li:hover:before{
  filter: blur(3px);
  transform: scale(1.2);
  /* box-shadow: 0 0 15px #d35400; */
}
ol li:nth-child(1):hover:before{
  box-shadow: 0 0 15px #4267B2;
}
ol li:nth-child(2):hover:before{
  box-shadow: 0 0 15px #1DA1F2;
}
ol li:nth-child(3):hover:before{
  box-shadow: 0 0 15px #E1306C;
}
ol li:nth-child(4):hover:before{
  box-shadow: 0 0 15px #2867B2;
}
ol li:nth-child(5):hover:before{
  box-shadow: 0 0 15px #ff0000;
}
ol li:nth-child(1):hover{
  color: #456cba;
  box-shadow: 0 0 15px #4267B2;
  text-shadow: 0 0 15px #4267B2;
}
ol li:nth-child(2):hover{
  color: #26a4f2;
  box-shadow: 0 0 15px #1DA1F2;
  text-shadow: 0 0 15px #1DA1F2;
}
ol li:nth-child(3):hover{
  color: #e23670;
  box-shadow: 0 0 15px #E1306C;
  text-shadow: 0 0 15px #E1306C;
}
ol li:nth-child(4):hover{
  color: #2a6cbb;
  box-shadow: 0 0 15px #2867B2;
  text-shadow: 0 0 15px #2867B2;
}
ol li:nth-child(5):hover{
  color: #ff1a1a;
  box-shadow: 0 0 15px #ff0000;
  text-shadow: 0 0 15px #ff0000;
}
</style>
  </head>
  <body>
	<nav>
			<ul>			
					<li><a style="color=white" href="php.php">Home</a></li>
					<li><a style="color=white" href="about.php">About</a></li>
					<li><a style="color=white" href="contact.php">Contact</a></li>			
			</ul><br>
		</nav>
  <div id="wrap">
  <h1>Contact<h1>
		<ol>
				<li><a href="https://www.facebook.com/mugiwaranoswarangi/" target=_blank><i class="fab fa-facebook-f"></i></a></li>
				<li><a href="https://twitter.com/SwarangiPatil1"<i class="fab fa-twitter"></i></a></li>
				<li><a href="https://www.instagram.com/swaru203" target=_blank><i class="fab fa-instagram"></i></a></li>
				<li><a href="https://www.linkedin.com/in/swarangi-patil-b90538194/" target=_blank><i class="fab fa-linkedin-in"></i></a></li>
				<li><a href="https://l.instagram.com/?u=https%3A%2F%2Fwww.youtube.com%2Fchannel%2FUC-aGZPpTFf5uV9xufNzg2-Q&e=ATOGCY1jAwlIrDlqR6O3rI7oSH6mrVtuxZi0mJqCXlCVfI5OkTCMN1IHbUqiCWL6_TNy1eT4C_-POa0NKH1J5v-AUdRPlVwF&s=1" target=_blank><i class="fab fa-youtube"></i></a></li>
				</ol>
	</div>
	</body>
</html>
