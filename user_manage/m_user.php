<?php  
include("m_config.php");  
//echo md5("admin2".ALL_PS);  
if($_POST[submit]){
	$username=str_replace(" ","","$_POST[username]");
	$sql="select * from user_list where `username`='$username'";
    $query=mysql_query($sql);
	$us=is_array($row=mysql_fetch_array($query));
	//$ps=$us ? md5($_POST[password].ALL_PS)==$row[password] : FALSE;
	$ps=$us ? $_POST[password]==$row[password] : FALSE;
	if($ps){
		$_SESSION[uid]=$row[uid];
		//$_SESSION[user_shell]=md5($row[username].$row[password].ALL_PS);
		$_SESSION[user_shell]=$row[password];
		$_SESSION[times]=mktime();//ȡ�õ�¼ʱ���õ�ʱ��
		echo "��¼�ɹ�";
	}else{
		echo "�û������������";
		session_destroy();//�������ʱ�������е�session
		}
	}
?> 

<form action="" method="post">
  �û�����<input name="username" type="text" /><br />
  ��&nbsp;&nbsp;�룺<input name="password" type="password" /><br /> 
  ��֤�룺<input name="code" type="code" />5213<br /><br />
  <input name="submit" type="submit" value="��¼" />
</form> 
