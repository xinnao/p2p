<?php
session_start();
ob_start();
	setcookie("name", "", time()-60*60*4,"/");
	//setcookie("uid", "", time()-60*60*4,"/");
	unset($_SESSION['uid']);
echo '<meta http-equiv="refresh" content="0;URL=/">';
?>