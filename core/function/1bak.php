<?php
ob_start();
//@return String 加密或解密字符串  
//@param String $string 待加密或解密字符串  
//@param String $operation 操作类型定义 DECODE=解密 ENDODE=加密  
//@param String $key 加密算子
//*获取密码算子,如未指定，采取系统默认算子  
//*默认算子是论坛授权码和用户浏览器信息的md5散列值  
//*$GLOBALS['discuz_auth_key']----全局变量  
//*取值为:md5($_DCACHE['settings']['authkey'].$_SERVER['HTTP_USER_AGENT'])  
//*$_DCACHE['settings']['authkey']是论坛安装时生成的15位随机字符串  
function authcode($string, $operation = 'DECODE', $key = '', $expiry = 0) {
	$ckey_length = 4;
	$key = md5($key != '' ? $key : getglobal('authkey'));
	$keya = md5(substr($key, 0, 16));
	$keyb = md5(substr($key, 16, 16));
	$keyc = $ckey_length ? ($operation == 'DECODE' ? substr($string, 0, $ckey_length): substr(md5(microtime()), -$ckey_length)) : '';

	$cryptkey = $keya.md5($keya.$keyc);
	$key_length = strlen($cryptkey);

	$string = $operation == 'DECODE' ? base64_decode(substr($string, $ckey_length)) : sprintf('%010d', $expiry ? $expiry + time() : 0).substr(md5($string.$keyb), 0, 16).$string;
	$string_length = strlen($string);

	$result = '';
	$box = range(0, 255);

	$rndkey = array();
	for($i = 0; $i <= 255; $i++) {
		$rndkey[$i] = ord($cryptkey[$i % $key_length]);
	}

	for($j = $i = 0; $i < 256; $i++) {
		$j = ($j + $box[$i] + $rndkey[$i]) % 256;
		$tmp = $box[$i];
		$box[$i] = $box[$j];
		$box[$j] = $tmp;
	}

	for($a = $j = $i = 0; $i < $string_length; $i++) {
		$a = ($a + 1) % 256;
		$j = ($j + $box[$a]) % 256;
		$tmp = $box[$a];
		$box[$a] = $box[$j];
		$box[$j] = $tmp;
		$result .= chr(ord($string[$i]) ^ ($box[($box[$a] + $box[$j]) % 256]));
	}

	if($operation == 'DECODE') {
		if((substr($result, 0, 10) == 0 || substr($result, 0, 10) - time() > 0) && substr($result, 10, 16) == substr(md5(substr($result, 26).$keyb), 0, 16)) {
			return substr($result, 26);
		} else {
			return '';
		}
	} else {
		return $keyc.str_replace('=', '', base64_encode($result));
	}

}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
$authkey='e00acarr2ke11xoc';
$pass='ab379fcbdfb4c7df1ae640c59d53337312';
//pre_common_member 里面的password，这个地方的密码是一个随机密码，但是cookies里面的就是这个密码，如果登陆系统的话那么就要造假一个加密的字符替换这个地方或者是直接向数据库写一个字符串来代替
//$salt = substr(uniqid(rand()), -6);//uniqid() 函数基于以微秒计的当前时间，生成一个唯一的 ID。 $password = md5(md5($password).$salt);
$jiami='q2q2q2';
$uid=1;
$saltkey=random(8);//随机生成的8位,可以自己生成，就差pass了是如何声称的\
//$this->var['cookie']['saltkey'] = random(8);
//dsetcookie('saltkey', $this->var['cookie']['saltkey'], 86400 * 30, 1, 1);
//$this->var['authkey'] = md5($this->var['config']['security']['authkey'].$this->var['cookie']['saltkey']);

//$discuz_auth_key = md5($authkey.$_SERVER['HTTP_USER_AGENT']); 
//echo $_SERVER['HTTP_USER_AGENT'];
//echo md5(md5('111111').'c7c7ed');
$discuz_auth_key = md5($authkey.$saltkey); 
//echo $discuz_auth_key;
//echo $discuz_auth_key;
// DECODE=解密 ENCODE=加密
//$dd=authcode($uid, $operation = 'ENCODE', $discuz_auth_key, $expiry = 0);
//echo $dd.'<br />';
//echo $_COOKIE["wbOh_2132_auth"];
$cookietime=time()+60*60*4;
//设置cookies
$kuke=authcode("$pass\t$uid", 'ENCODE', $discuz_auth_key, $expiry = 0);
setcookie("wbOh_2132_auth",$kuke,$cookietime);
setcookie("wbOh_2132_saltkey",$saltkey,$cookietime);


//获取并且解密cookies

$ddc=$_COOKIE["wbOh_2132_auth"];
echo $ddc;
$auth_value=authcode($ddc, $operation = 'DECODE', $discuz_auth_key, $expiry = 0);
echo "auth_cookie_value: " . $auth_value . '<br>';
list($pwd,$uid ) = explode("\t", $auth_value);
echo "当前用户登录信息<br>";
echo 'UID:' . $uid." | 密码(md5):" . $pwd;
?>
</body>
</html>