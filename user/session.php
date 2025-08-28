<?php
if(!isset($_SESSION['user_id']))
{
	header('Location:'.$link.'/user/login.php');
	exit();
}

$sql_login = "SELECT * FROM user WHERE user_id = '".$_SESSION['user_id']."'";
if($result_login = $connect->query($sql_login))
{
	$rows_login = $result_login->fetch_array();
	if(!$total_login = $result_login->num_rows)
	{
		header('Location:'.$link.'/user/login.php');
		exit();
	}
}
else
{
	header('Location:'.$link.'/user/login.php');
	exit();
}
?>