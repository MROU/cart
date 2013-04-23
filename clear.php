
<?php 
require_once("begin.html");
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
<div style="border:dotted; width:300px; color:#F00;">
亲！选的物品不合适？我已经帮你清空！！
</div>
</body>
</html>