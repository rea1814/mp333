<?
    session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head> 
<meta charset="utf-8">
<style>
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
   function check_id()
   {
     window.open("check_id.php?id=" + document.member_form.id.value,
         "IDcheck",
          "left=200,top=200,width=250,height=100,scrollbars=no,resizable=yes");
   }

   function check_nick()
   {
     window.open("check_nick.php?nick=" + document.member_form.nick.value,
         "NICKcheck",
          "left=200,top=200,width=250,height=100,scrollbars=no,resizable=yes");
   }

   function check_input()
   {
      if (!document.member_form.pass.value)
      {
          alert("��й�ȣ�� �Է��ϼ���");    
          document.member_form.pass.focus();
          return;
      }

      if (!document.member_form.pass_confirm.value)
      {
          alert("��й�ȣȮ���� �Է��ϼ���");    
          document.member_form.pass_confirm.focus();
          return;
      }

      if (!document.member_form.name.value)
      {
          alert("�̸��� �Է��ϼ���");    
          document.member_form.name.focus();
          return;
      }

      if (!document.member_form.nick.value)
      {
          alert("�г����� �Է��ϼ���");    
          document.member_form.nick.focus();
          return;
      }

      if (!document.member_form.hp2.value || !document.member_form.hp3.value )
      {
          alert("�޴��� ��ȣ�� �Է��ϼ���");    
          document.member_form.nick.focus();
          return;
      }

      if (document.member_form.pass.value != 
            document.member_form.pass_confirm.value)
      {
          alert("��й�ȣ�� ��ġ���� �ʽ��ϴ�.\n�ٽ� �Է����ּ���.");    
          document.member_form.pass.focus();
          document.member_form.pass.select();
          return;
      }

      document.member_form.submit();
   }

   function reset_form()
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
<?
    include "../lib/dbconn.php";

    $sql = "select * from member where id='$userid'";
    $result = mysql_query($sql, $connect);

    $row = mysql_fetch_array($result);

    $hp = explode("-", $row[hp]);
    $hp1 = $hp[0];
    $hp2 = $hp[1];
    $hp3 = $hp[2];

    $email = explode("@", $row[email]);
    $email1 = $email[0];
    $email2 = $email[1];

    mysql_close();
?>
<body>
	<div id="container border="0">
        <form  name="member_form" method="post" action="modify.php"> 
	<h1><legend><strong>MP3 ���� �Է¾��</strong></legend></h1>
			<strong>���̵�</strong><br>
			<?= $row[id] ?>

			<strong>��й�ȣ</strong><br>
			<input type="password" name="pass" value="<?= $row[pass] ?>">

			<strong>��й�ȣȮ��</strong><br>
			<input type="password" name="pass_confirm" value="<?= $row[pass] ?>">

			<strong>�̸�</strong><br>
			<input type="text" name="name" value="<?= $row[name] ?>">

			<strong>����</strong><br>
			<input type="text" name="nick" value="<?= $row[nick] ?>"><a href="#"><img src="../img/check_id.gif" onclick="check_nick()"></a>

			<strong>��ȭ��ȣ</strong><br>
			<input type="text" class="hp" name="hp1" value="<?= $hp1 ?>"> 
			 - <input type="text" class="hp" name="hp2" value="<?= $hp2 ?>"> - <input type="text" class="hp" name="hp3" value="<?= $hp3 ?>">

			<strong>�̸���</strong><br>
			<input type="text" id="email1" name="email1" value="<?= $email1 ?>"> @ <input type="text" name="email2" value="<?= $email2 ?>">
			</div>
			<div class="clear"></div>
			<div id="must"> * �� �ʼ� �Է��׸��Դϴ�.^^</div>
		</div>

		<div id="button"><a href="#"><img src="../img/button_save.gif"  onclick="check_input()"></a>&nbsp;&nbsp;
		                 <a href="#"><img src="../img/button_reset.gif" onclick="reset_form()"></a>
		</div>
	    </form>
</body>
</html>
