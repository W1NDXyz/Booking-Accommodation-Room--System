<?php
include('../config.php');

unset($_SESSION['user_id']);
header('Location:'.$link.'/user/login.php');
exit();
?>