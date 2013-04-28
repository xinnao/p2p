<?php
require('loading.php');
$uname=$_POST['UserName'];
$upass=$_POST['Password'];
$saltkey=substr(uniqid(rand()), -8);
$suyi_auth_key = md5(AUTHKEY.$saltkey);
$sj=OSTIME;
$ip='255.255.255.255';
$sql="select uid,name,password,salt,jinzhi from ".TABLEPRE."member where username='$uname'";
$result=mysql_query( $sql ) or die(mysql_error());
if( $rs=mysql_fetch_array($result))
{
	$uid=$rs['uid'];
	$pwd=$rs['password'];
	if ($pwd==md5(md5($upass).$rs['salt']) and 1==$rs['jinzhi']){
	mysql_query("insert into ".TABLEPRE."log (uid,ip,sj) values ('$uid','$ip','$sj')");
	$suyi_auth=authcode("$pwd\t$uid", 'ENCODE', $suyi_auth_key, $expiry = 0);
	setcookie("suyi_saltkey", $saltkey, time()+60*60*8,"/");
    setcookie("suyi_auth",$suyi_auth, time()+60*60*8,"/");
	echo '<meta http-equiv="refresh" content="0;URL=/work/">';
	exit();
	}else{
    echo "<script>alert('Error: password is error or disable');history.back();</Script>";					
	}
}else{
echo "<script>alert('Error: username is error');history.back();</Script>";
}
?>
