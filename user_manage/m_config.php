<?php
session_start();
 //���ݿ�����  
 $conn=mysql_connect('localhost','root','radia'); 
mysql_select_db('test',$conn); 
//���峣��  
define(ALL_ps,"test100");
//�鿴��¼״̬��Ȩ��  
function user_shell($uid,$shell,$m_id){
    $sql="select * from user_list where `uid`='$uid'";
	$query=mysql_query($sql);
    $us=is_array($row=mysql_fetch_array($query));
    //$shell=$us ? $shell==md5($row[username].$row[password].ALL_PS):FALSE;
	$shell=$us ? $shell==$row[password]:FALSE;
    if($shell){
		if($row[m_id]<=$m_id){//$row[m_id]ԽСȨ��Խ�ߣ�Ϊ1ʱȨ�����
        return $row;
		}
		else{
			echo "���Ȩ�޲���,���ܲ鿴��ҳ��";
			exit();
		}
	}else{
		echo "��¼����ܲ鿴��ҳ";
		exit();
		}
} 
 //���õ�¼��ʱ
function user_mktime($onlinetime){
	$new_time=mktime();
	echo $new_time-$onlinetime."��δ������ҳ��"."<br>";
	if($new_time-$onlinetime>'10'){//���ó�ʱʱ��Ϊ10�룬������
		echo "��¼��ʱ,�����µ�¼";
		exit();
		session_destroy();
	}else{
		$_SESSION[times]=mktime();
	}
}
?>