<?php
	$username = $_POST["usrname"];
	$password = $_POST["pwd"];
	echo $username;
	echo $password;
	
	if ($username=="wiraganteng" && $password=="cinta") {
		$file = fopen("counter.txt","r");
		$count = fread($file, filesize($file));
		fclose($file);
		//show result
		$url = '../VIEW/StakeholderScreen.html';
		header("Location: $url");
	}
	else {
		$file = fopen("counter.txt","r");
		$count = fread($file, 1);
		fclose($file);
		echo $count;
		if ($count<=3) {
			$file = fopen("counter.txt","w");
			fwrite($file,$count+1);
			fclose($file);
			$url = '../VIEW/LoginForm.php?wrong=yes';
		}
		else {
			$url = '../VIEW/RestrictedLogin.html';
		}
		header("Location: $url");
	}
?>