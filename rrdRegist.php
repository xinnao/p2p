<?php
require('loading.php');
if ("save"==$_REQUEST["action"]){
$username=$_POST['username'];
$pass=strtolower($_POST['password']);
$salt =substr(uniqid(rand()), -6);
$pwd=md5(md5($pass).$salt);
$sj=OSTIME;
if (strpos($username,'@')){
	//邮箱
$sql="insert into ".TABLEPRE."member (username,password,salt,mail,sj) values ('$username','$pwd','$salt','$username','$sj')";
mysql_query($sql) or die(mysql_error());
}else{
$sql="insert into ".TABLEPRE."member (username,password,salt,phone,sj) values ('$username','$pwd','$salt','$username','$sj')";
mysql_query($sql) or die(mysql_error());		
}
$saltkey=substr(uniqid(rand()), -8);
$suyi_auth_key = md5(AUTHKEY.$saltkey);
$sql="select uid,password,salt from ".TABLEPRE."member where username='$username'";
$result=mysql_query( $sql ) or die(mysql_error());
if( $rs=mysql_fetch_array($result))
{
	$uid=$rs['uid'];
	$pwd=$rs['password'];
	if ($pwd==md5(md5($pass).$rs['salt'])){
	$suyi_auth=authcode("$pwd\t$uid", 'ENCODE', $suyi_auth_key, $expiry = 0);
	setcookie("suyi_saltkey", $saltkey, time()+60*60*8,"/");
    setcookie("suyi_auth",$suyi_auth, time()+60*60*8,"/");
	echo '<meta http-equiv="refresh" content="0;URL=/work/">';
	exit();
	}else{
    echo "<script>alert('Error: password is error or disable');history.back();</Script>";					
	}
}
}
?>