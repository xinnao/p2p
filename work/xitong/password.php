<?php
require('../loadingson.php');
if ("save"==$_REQUEST["action"]){
$jiu=strtolower($_POST['old']);
$pass=strtolower($_POST['pass']);
$salt =substr(uniqid(rand()), -6);
$pwd=md5(md5($pass).$salt);
	$sql="select password,salt from ".TABLEPRE."member where uid='$uid'";
	$result=mysql_query( $sql );
	if( $rs=mysql_fetch_array($result))
	{
		  if ($rs['password']==md5(md5($jiu).$rs['salt'])){
		  }else{
		  echo "<script>alert('Error: mi ma cuo wu');history.back();</Script>";
		  exit;
		  }
	}
$sql="update ".TABLEPRE."member set password='$pwd',salt='$salt' where uid='$uid'";
mysql_query($sql);
echo '{"statusCode":"200", "message":"操作成功", "navTabId":"navNewsLi", "forwardUrl":"/work/xitong/password.php", "callbackType":"forward"}';
exit;
}
?>
<h2 class="contentTitle">密码修改</h2>
<form method="post" action="/work/xitong/password.php" class="pageForm required-validate" onsubmit="return validateCallback(this,navTabAjaxDone)">
<div class="pageFormContent">
<table width="300" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72" align="center">旧密码</td>
    <td width="228" height="30"><input name="old" type="password" id="old" value="" size="20" maxlength="20" class="required"></td>
    </tr>
  <tr>
    <td height="30" align="center">新密码</td>
    <td><input name="pass" type="password" id="pass" value="" size="20" maxlength="20" class="required"></td>
  </tr>
  <tr>
    <td height="30" align="center">重复密码</td>
    <td><input name="pass2" type="password" id="pass2" value="" size="20" maxlength="20" class="required"></td>
  </tr>
  <tr>
    <td height="30" colspan="2" align="center"><input name="action" type="hidden" id="action" value="save" />      <input type="submit" name="button" id="button" value="提交"></td>
    </tr>
     </table></div></form>