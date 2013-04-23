<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php 

$uname=htmlspecialchars($_POST['username']);
$pass=htmlspecialchars($_POST['pass']);
$email=htmlspecialchars($_POST['email']);
if(isset($_POST['username'])&&isset($_POST['pass'])&&isset($_POST['email']))
{
  $uname=htmlspecialchars($_POST['username']);
  $pass=htmlspecialchars($_POST['pass']);
  $con=mysql_connect('localhost','root','');
  if($con)
  {
  	 
	echo "success!"; 
	if(mysql_select_db('login',$con) ) 
	{
	$sql=sprintf("insert into  users values('$uname','$pass','$email')");
	$res=mysql_query($sql);
	}
	else
	{
		die("failed".mysql_error());
	}
 }
else
{
   die("Could not connect to database");
}
}
?>
</body>
</html>