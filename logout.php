<?php
	header("Content-Type:text/html;charset=utf-8");
	session_start();
	//清除session
	$_SESSION=array();
	session_destroy();
	//清除cookie
	setcookie("Uname",'',time()-1);
	setcookie("Ulogin",'',time()-1);
	setcookie("GroupID",'',time()-1);
	header("Location:index.php"); 
	//確保重定向後,後續程式碼不會被執行 
	exit;
?>