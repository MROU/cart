<?php require_once("begin.html"); ?>
<br>
<?php
  
  
	session_start();
	unset($_SESSION["cart"]);
	session_destroy();
	
	
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>

亲！已经清空！！
</body>
</html>