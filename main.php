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
		<h2><s2>◀음악차트▶ &nbsp; &nbsp; ◀뮤직비디오▶</s2></h2>
	</div>
	<div id="nav">
		<h2>
		<p><s2>◀콘서트▶</s2></p>
		<br>
		</h2>
	<a href="https://ticket.melon.com/performance/index.htm?prodId=204506"><img src="정승환콘서트.jpg" alt="정승환콘서트" width="270"/></a>
	<p><b>정승환콘서트</b></p>
	<p>12/14 토 여섯시</p>
	<p>12/15 일 다섯시</p>
	<p>올림픽공원 올림픽홀</p>

		<br><br><br>

	<a href="https://ticket.melon.com/performance/index.htm?prodId=204671"><img src="파티.jpg" alt="파티" width="270"/></a>
	<p><b>glo MIX MAX FESTIVAL</b></p>
	<p>12/27 KBS 아레나</p>
	<p>박재범 LOOPY COOGIE ZION.T</p>
	<p>PENOMECO 염따 NAFLA OWEN</p>

		<br><br><br>

	<a href="https://ticket.melon.com/performance/bridge.htm?brgId=100254"><img src="거미콘서트.jpg" alt="거미콘서트" width="270"/></a>
	<p><b>거미 콘서트</b></p>
	<p>12/07 충남대학교 정심화홀</p>
	<p>12/28 광주 문화예술회관</p>

		<br><br><br>

	<a href="https://ticket.melon.com/performance/bridge.htm?brgId=100255"><img src="겨울소리.jpg" alt="겨울소리" width="270"/></a>
	<p><b>겨울소리</b></p>
	<p><LOVE U></p>
	<p>12/24-12/25 김나영</p>
	<p>코엑스 오디토리움</p>
		<br>
		</h2>
	</div>
	<div id="nav2">
	<h2>
	<p><s2>◀게시판▶</s2></p>
	<br>
	</h2>
		<form action="test.php" method="post">
		<select name="class" ="class">
		  <option value="0">공지사항</option>
		  <option value="1">자유게시판</option>
		  </select><br><br>

		  제목<input type="text" name="title" ><br>
		  글쓴이<input type="text" name="nickname"><br><br>
		  글내용<br>

		<textarea name="content" id="content_text" rows="25" cols="43"></textarea><br><br>
		  <input type="submit" name="submit" value="글쓰기" >
<div>
	<? include "write_form.php"; ?>
	<p><b>자유게시판</b></p>
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
	<input type="checkbox" name="html_ok" value="y"> HTML 쓰기
<?
	}
?>			
	제목<input type="text" name="subject" value="<?=$item_subject?>" ><br><br>
	내용<br><textarea rows="25" cols="43" name="content"><?=$item_content?></textarea><br>
	이미지파일1<input type="file" name="upfile[]"><br>
<? 	if ($mode=="modify" && $item_file_0)
	{
?>
	<?=$item_file_0?> 파일이 등록되어 있습니다. <input type="checkbox" name="del_file[]" value="0"> 삭제
<?
	}
?>
	이미지파일2<input type="file" name="upfile[]"><br><br>
<? 	if ($mode=="modify" && $item_file_1)
	{
?>
			<?=$item_file_1?> 파일이 등록되어 있습니다. <input type="checkbox" name="del_file[]" value="1"> 삭제
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
		<s1><b>음악차트</b></s1>
<br><br><br>
	<music>
	<s2>1&nbsp; &nbsp; 마음 &nbsp; &nbsp; &nbsp; <audio src="마음.mp3"controls="controls"></audio></s2>
		<br><br>

	<s2>2&nbsp; &nbsp; 넘어와 &nbsp; &nbsp; &nbsp; <audio src="넘어와.mp3" controls="controls"></audio></s2>
		<br><br>

	<s2>3&nbsp; &nbsp; fine &nbsp; &nbsp; &nbsp; <audio src="fine.mp3" controls="controls"></audio></s2>
		<br><br>

	<s2>4&nbsp; &nbsp; 가을밤 떠난너 &nbsp; &nbsp; &nbsp; <audio src="가을밤 떠난너.mp3" controls="controls"></audio></s2>
		<br><br>

	<s2>5&nbsp; &nbsp; 위잉위잉 &nbsp; &nbsp; &nbsp; <audio src="위잉위잉.mp3" controls="controls"></audio></s2>
	</music>

		<br><br><br><br><br>

		<s1><b>뮤직비디오</b></s1>
	<br><br><br>
		<p>소녀시대-다시만난 세계</p>
			<video width="500" height="380" controls="controls">
			<source src="소녀시대.mp4">
			</video>
	<br><br>
		<p>B1A4-OK</p>
			<video width="500" height="280" controls="controls">
			<source src="b1a4.mp4">
			</video>
	<br><br>
		<p>청하-snapping</p>
<video width="500" height="280" controls="controls">
			<source src="청하(CHUNG HA) - Snapping Official Music Video.mp4">
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