<?
session_start();
?>
<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>MP3</title>
	<style>
	* {margin:0; padding:0;}

	body {background:skyblue}
	#container {
		width:500; height:250;
		background:skyblue;
		position:absolute;
		left:50%; top:50%;
		margin-left:-150px;
		margin-top:-150px;
		}
	#container {text-align:center;}
	</style>
</head>

<body>
<form  name="member_form" method="post" action="login.php"> 
	<div id="container">
	<h1>MP3</h1>
<br><br>
	<p>
	<strong>id</strong>
	<input type="text" name="name" class="login_input">
	</p>
<div class="clear"></div>
	<p>
	<strong>pw</strong>
	<input type="password" name="pass" class="login_input">
	</p>
<div class="clear"></div>
<br>
	<p>
	<input type="image" src="../img/login_button.gif">
	</p>
	<p>
	<input type="image" src="../img/join_button.gif"></a>
	</p>
	</div>
</body>
</html>