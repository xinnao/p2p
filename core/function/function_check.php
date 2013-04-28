<?php
//检测会员是否在线
function checkmember(){
  $suyi_auth=$_COOKIE["suyi_auth"];
  $saltkey=$_COOKIE["suyi_saltkey"];
  $suyi_auth_key = md5(AUTHKEY.$saltkey);
  $auth_value=authcode($suyi_auth, $operation = 'DECODE', $suyi_auth_key, $expiry = 0);
  list($pwd,$uid ) = explode("\t", $auth_value);
  if (0==(int)$uid){
	header("location: /loginPage.php");
  }else{
	 return $uid; 
  }
}
function checkuid(){
  $suyi_auth=$_COOKIE["suyi_auth"];
  $saltkey=$_COOKIE["suyi_saltkey"];
  $suyi_auth_key = md5(AUTHKEY.$saltkey);
  $auth_value=authcode($suyi_auth, $operation = 'DECODE', $suyi_auth_key, $expiry = 0);
  list($pwd,$uid ) = explode("\t", $auth_value);
  if ((int)$uid>=1){
	 return $uid; 
  }
}
?>