<?php  
include("m_config.php");
$arr=user_shell($_SESSION[uid],$_SESSION[user_shell],1);//���ø�ҳ��ֻ��Ȩ��Ϊ1ʱ�����Ȩ�޵Ĳ��ܷ���     
user_mktime($_SESSION[times]);//�ж��Ƿ�ʱ10��     
//echo $_SESSION[times]."<br>";//��¼ʱ�õ�ʱ��  
//echo mktime()."<br>";//��ǰ����  
//echo $arr[username]."<br>";  
//echo $arr[uid]."<br>";    
?> 
