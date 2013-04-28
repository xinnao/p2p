<?php
session_start();
ob_start();
setcookie("suyi_saltkey", "", time()-60*60*4,"/");
setcookie("suyi_auth", "", time()-60*60*4,"/");
echo '<meta http-equiv="refresh" content="0;URL=/">';
?>