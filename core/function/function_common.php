<?php
include_once(DB_PATH."/core/class/class_db.php");
include_once(DB_PATH."/core/function/function_authcode.php");
include_once(DB_PATH."/core/function/function_check.php");
include_once(DB_PATH."/core/function/function_page.php");
include_once(DB_PATH."/core/function/function_sql.php");
include_once(DB_PATH."/core/function/function_ziduan.php");
include_once(DB_PATH."/core/function/function_time.php");
$db = new dbconn(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME,$pconnect = 0,DB_CHARSET);
$db -> select_db(DB_NAME);
?>