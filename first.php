<? session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
	<title>MP3</title>
	<style> //서식지정
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
	#container {text-align:center;} //가운데 정렬
	</style>
</head>
<body>
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
	<a href="main.php">login</a>
	</p>
	<p>
	<a href="member_form.php">join</a>
	</p>
	</div>
</form>
</body>
</html>