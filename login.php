<?
           session_start();
?>
<meta charset="utf-8">
<?
   // ����ȭ�鿡�� �̸��� �Էµ��� �ʾ����� "�̸��� �Է��ϼ���"
   // �޽��� ���
   if(!$id) {
     echo("
           <script>
             window.alert('���̵� �Է��ϼ���.')
             history.go(-1)
           </script>
         ");
         exit;
   }

   if(!$pass) {
     echo("
           <script>
             window.alert('��й�ȣ�� �Է��ϼ���.')
             history.go(-1)
           </script>
         ");
         exit;
   }

   include "../lib/dbconn.php";

   $sql = "select * from member where id='$id'";
   $result = mysql_query($sql, $connect);

   $num_match = mysql_num_rows($result);

   if(!$num_match) 
   {
     echo("
           <script>
             window.alert('��ϵ��� ���� ���̵��Դϴ�.')
             history.go(-1)
           </script>
         ");
    }
    else
    {
        $row = mysql_fetch_array($result);

        $db_pass = $row[pass];

        if($pass != $db_pass)
        {
           echo("
              <script>
                window.alert('��й�ȣ�� Ʋ���ϴ�.')
                history.go(-1)
              </script>
           ");

           exit;
        }
        else
        {
           $userid = $row[id];
		   $username = $row[name];
		   $usernick = $row[nick];

           $_SESSION['userid'] = $userid;
           $_SESSION['username'] = $username;
           $_SESSION['usernick'] = $usernick;

           echo("
              <script>
                location.href = 'login_form.php';
              </script>
           ");
        }
   }          
?>