<!DOCTYPE html>
<html>
	<head>
		<title> NatSafe </title>
	</head>
	
	<link rel="stylesheet" type="text/css" href="../CSS/MainScreen.css">
	<body class="mbody">
		<div class="menu">
			<nav>
				<ul>
					<li id="NatSafe"> 
						<span><font color=#fff> Nat </font></span> <span><font color=#FFA347>Safe</font></span>
					</li>
					<li id="login">
						<a href="../VIEW/LoginForm.php?wrong="> Login </a>
					</li>
				</ul>
			</nav>
		</div>
		<br>
		<div class="body">
			<div class="NatSafeDesc">
				<div>Nat<span>Safe</span><br><div>We Care We Help</div></div>
			</div>
			<div class="login">
				<form action="../PHP/LoginCounter.php" method="POST">
					<input name="usrname" placeholder="username" type="text">
					<input name="pwd" placeholder="password" type="password">
					<p class="button">
						<input name="submit" type="submit" value="Log in">
					</p>
				</form>
				<?php
					$wrong = $_GET["wrong"];
					if ($wrong=="yes") 
						echo "<p style='color:red'> Authentication Failed!</p>";
				?>
			</div>
		</div>
		<br>
		<div class="footer">
			<nav>
				<ul>
					<li>
						Disaster Management System
					</li>
					<li id="about">
						About
					</li>
				</ul>
			</nav>
		</div>
	</body>
	
</html>