<!DOCTYPE html>
<html>
<head>
	<title>MP3</title>
	<link href="main_style.css" rel="stylesheet" type="text/css" media="all">
</head>
<body>
	<div id="hheader">
	<h1 style="font-color:skyblue">MP3</h1>
	</div>
	<div id="header">
		<h2><s2>��������Ʈ�� &nbsp; &nbsp; ������������</s2></h2>
	</div>
	<div id="nav">
		<h2>
		<p><s2>���ܼ�Ʈ��</s2></p>
		<br>
		</h2>
	<a href="https://ticket.melon.com/performance/index.htm?prodId=204506"><img src="����ȯ�ܼ�Ʈ.jpg" alt="����ȯ�ܼ�Ʈ" width="270"/></a>
	<p><b>����ȯ�ܼ�Ʈ</b></p>
	<p>12/14 �� ������</p>
	<p>12/15 �� �ټ���</p>
	<p>�ø��Ȱ��� �ø���Ȧ</p>

		<br><br><br>

	<a href="https://ticket.melon.com/performance/index.htm?prodId=204671"><img src="��Ƽ.jpg" alt="��Ƽ" width="270"/></a>
	<p><b>glo MIX MAX FESTIVAL</b></p>
	<p>12/27 KBS �Ʒ���</p>
	<p>����� LOOPY COOGIE ZION.T</p>
	<p>PENOMECO ���� NAFLA OWEN</p>

		<br><br><br>

	<a href="https://ticket.melon.com/performance/bridge.htm?brgId=100254"><img src="�Ź��ܼ�Ʈ.jpg" alt="�Ź��ܼ�Ʈ" width="270"/></a>
	<p><b>�Ź� �ܼ�Ʈ</b></p>
	<p>12/07 �泲���б� ����ȭȦ</p>
	<p>12/28 ���� ��ȭ����ȸ��</p>

		<br><br><br>

	<a href="https://ticket.melon.com/performance/bridge.htm?brgId=100255"><img src="�ܿ�Ҹ�.jpg" alt="�ܿ�Ҹ�" width="270"/></a>
	<p><b>�ܿ�Ҹ�</b></p>
	<p><LOVE U></p>
	<p>12/24-12/25 �質��</p>
	<p>�ڿ��� �����丮��</p>
		<br>
		</h2>
	</div>
	<div id="nav2">
	<h2>
	<p><s2>���Խ��Ǣ�</s2></p>
	<br>
	</h2>
		<form action="test.php" method="post">
		<select name="class" ="class">
		  <option value="0">��������</option>
		  <option value="1">�����Խ���</option>
		  </select><br><br>

		  ����<input type="text" name="title" ><br>
		  �۾���<input type="text" name="nickname"><br><br>
		  �۳���<br>

		<textarea name="content" id="content_text" rows="25" cols="43"></textarea><br><br>
		  <input type="submit" name="submit" value="�۾���" >
<div>
	<? include "write_form.php"; ?>
	<p><b>�����Խ���</b></p>
<?
	if($mode=="modify")
	{
?>
	<form  name="board_form" method="post" action="insert.php?mode=modify&num=<?=$num?>&page=<?=$page?>&table=<?=$table?>" enctype="multipart/form-data"> 
<?
	}
	else
	{
?>
	<form  name="board_form" method="post" action="insert.php?table=<?=$table?>" enctype="multipart/form-data"> 
<?
	}
?>
<?
	if( $userid && ($mode != "modify"))
	{
?>
	<input type="checkbox" name="html_ok" value="y"> HTML ����
<?
	}
?>			
	����<input type="text" name="subject" value="<?=$item_subject?>" ><br><br>
	����<br><textarea rows="25" cols="43" name="content"><?=$item_content?></textarea><br>
	�̹�������1<input type="file" name="upfile[]"><br>
<? 	if ($mode=="modify" && $item_file_0)
	{
?>
	<?=$item_file_0?> ������ ��ϵǾ� �ֽ��ϴ�. <input type="checkbox" name="del_file[]" value="0"> ����
<?
	}
?>
	�̹�������2<input type="file" name="upfile[]"><br><br>
<? 	if ($mode=="modify" && $item_file_1)
	{
?>
			<?=$item_file_1?> ������ ��ϵǾ� �ֽ��ϴ�. <input type="checkbox" name="del_file[]" value="1"> ����
<?
	}
?>
<a href="#"><img src="../img/ok.png" onclick="check_input()"></a>&nbsp;
<a href="list.php?table=<?=$table?>&page=<?=$page?>"><img src="../img/list.png"></a>
		</form>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	</form>
	</div>
	<div id="section">
		<h2>
<br>
		<s1><b>������Ʈ</b></s1>
<br><br><br>
	<music>
	<s2>1&nbsp; &nbsp; ���� &nbsp; &nbsp; &nbsp; <audio src="����.mp3"controls="controls"></audio></s2>
		<br><br>

	<s2>2&nbsp; &nbsp; �Ѿ�� &nbsp; &nbsp; &nbsp; <audio src="�Ѿ��.mp3" controls="controls"></audio></s2>
		<br><br>

	<s2>3&nbsp; &nbsp; fine &nbsp; &nbsp; &nbsp; <audio src="fine.mp3" controls="controls"></audio></s2>
		<br><br>

	<s2>4&nbsp; &nbsp; ������ ������ &nbsp; &nbsp; &nbsp; <audio src="������ ������.mp3" controls="controls"></audio></s2>
		<br><br>

	<s2>5&nbsp; &nbsp; �������� &nbsp; &nbsp; &nbsp; <audio src="��������.mp3" controls="controls"></audio></s2>
	</music>

		<br><br><br><br><br>

		<s1><b>��������</b></s1>
	<br><br><br>
		<p>�ҳ�ô�-�ٽø��� ����</p>
			<video width="500" height="380" controls="controls">
			<source src="�ҳ�ô�.mp4">
			</video>
	<br><br>
		<p>B1A4-OK</p>
			<video width="500" height="280" controls="controls">
			<source src="b1a4.mp4">
			</video>
	<br><br>
		<p>û��-snapping</p>
<video width="500" height="280" controls="controls">
			<source src="û��(CHUNG HA) - Snapping Official Music Video.mp4">
			</video>
	<br><br>
		</h2>	
	</div>
	<div id="footer">
		<h2>FOOTER</h2>
	</div>
		</h2>
	</div>
</body>
</html>