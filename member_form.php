<? 
	session_start(); //세션함수를 만든다.
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head> 
<meta charset="utf-8">
<title>joinus</title>
<style> //서식지정
	* {margin:0; padding:0;}
	body {background:skyblue}

	#container {
		width:300; height:400;
		background:skyblue;
		position:absolute;
		left:50%; top:50%;
		margin-left:-200px;
		margin-top:-200px;
		}
	#container {text-align:left;}

</style>
<script>
   function check_id() //id 확인함수
   {
     window.open("check_id.php?id=" + document.member_form.id.value,
         "IDcheck",
          "left=200,top=200,width=200,height=60,scrollbars=no,resizable=yes");
   }

   function check_nick() //별명 확인함수
   {
     window.open("check_nick.php?nick=" + document.member_form.nick.value,
         "NICKcheck",
          "left=200,top=200,width=200,height=60,scrollbars=no,resizable=yes");
   }

   function check_input() //입력 확인함수
   {
      if (!document.member_form.id.value) //id를 입력하지 않았을때
      {
          alert("아이디를 입력하세요");    
          document.member_form.id.focus();
          return;
      }

      if (!document.member_form.pass.value) //비밀번호를 입력하지 않았을때
      {
          alert("비밀번호를 입력하세요");    
          document.member_form.pass.focus();
          return;
      }

      if (!document.member_form.pass_confirm.value) //비밀번호 확인을 입력하지 않았을때
      {
          alert("비밀번호확인을 입력하세요");    
          document.member_form.pass_confirm.focus();
          return;
      }

      if (!document.member_form.name.value)  //이름을 입력하지 않았을때
      {
          alert("이름을 입력하세요");    
          document.member_form.name.focus();
          return;
      }

      if (!document.member_form.nick.value) //닉네임을 입력하지 않았을때
      {
          alert("닉네임을 입력하세요");    
          document.member_form.nick.focus();
          return;
      }


      if (!document.member_form.hp2.value || !document.member_form.hp3.value ) //휴대폰번호를 입력하지 않았을때
      {
          alert("휴대폰 번호를 입력하세요");    
          document.member_form.nick.focus();
          return;
      }

      if (document.member_form.pass.value != 
            document.member_form.pass_confirm.value) //비밀번호가 일치하지 않을때
      {
          alert("비밀번호가 일치하지 않습니다.\n다시 입력해주세요.");    
          document.member_form.pass.focus();
          document.member_form.pass.select();
          return;
      }

      document.member_form.submit();
   }

   function reset_form() //reset버튼을 눌렀을때
   {
      document.member_form.id.value = "";
      document.member_form.pass.value = "";
      document.member_form.pass_confirm.value = "";
      document.member_form.name.value = "";
      document.member_form.nick.value = "";
      document.member_form.hp1.value = "010";
      document.member_form.hp2.value = "";
      document.member_form.hp3.value = "";
      document.member_form.email1.value = "";
      document.member_form.email2.value = "";
	  
      document.member_form.id.focus();

      return;
   }
</script>
</head>

<body>
		<div id="container" border="0">

		<h1><legend><strong>join MP3!</strong></legend></h1>
		<br>
			<strong>name</strong><br>
			<input type="text" name="name">
		<br>
			<strong>id</strong><br>
			<input type="text" name="id">
		<br>
			<strong>pwd</strong><br>
			<input type="password" name="pass">
		<br>
			<strong>pwd confirm</strong><br>
			<input type="password" name="pass_confirm">
		<br>
			<strong>nickname</strong><br>
			<input type="text" name="nick">
		<br>
			<strong>hp</strong><br>
			<select class="hp" name="hp1">
	<option value='010'>010</option>
	<option value='011'>011</option>
	<option value='016'>016</option>
	<option value='017'>017</option>
	<option value='018'>018</option>
	<option value='019'>019</option>
			</select>  - <input type="text" class="hp" name="hp2"> - <input type="text" class="hp" name="hp3">
		<br>
			<strong>email</strong><br>
			<input type="text" id="email1" name="email1"> @ <input type="text" name="email2">
		<br><br>
		<div id="button"><a href="login_form.php"><img src="../img/button_save.gif"  onclick="check_input()"></a>&nbsp;&nbsp;
		                 <a href="member_form.php"><img src="../img/button_reset.gif" onclick="reset_form()"></a>
	</div>

		</div> <!--화면에뜨는입력양식>
</body>
</html>
