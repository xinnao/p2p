<?php
require('../loadingson.php');
if ("save"==$_REQUEST["action"]){
$username=$_POST['username'];
$pass=strtolower($_POST['pass']);
$salt =substr(uniqid(rand()), -6);
$pwd=md5(md5($pass).$salt);
$jinzhi=$_POST['jinzhi'];
$quanxian=$_POST['quanxian'];
$bmid=$_POST['org1_bmid'];
$bumen=$_POST['org1_bumen'];
$zhiwei=htmlspecialchars($_POST['zhiwei']);
$name=htmlspecialchars($_POST['name']);
$minzu=htmlspecialchars($_POST['minzu']);
$sex=htmlspecialchars($_POST['sex']);
$zhengjian=$_POST['zhengjian'];
$phone=htmlspecialchars($_POST['phone']);
$mail=htmlspecialchars($_POST['mail']);
$ruzhi=strtotime($_POST['ruzhi']);
$renjj=htmlspecialchars($_POST['renjj']);
$dianhuajj=htmlspecialchars($_POST['dianhuajj']);
$zhuzhi=htmlspecialchars($_POST['zhuzhi']);
$huji=htmlspecialchars($_POST['huji']);
$htkai=strtotime($_POST['htkai']);
$htjie=strtotime($_POST['htjie']);
$chusheng=strtotime($_POST['chusheng']);
$hunyin=htmlspecialchars($_POST['hunyin']);
$xueli=htmlspecialchars($_POST['xueli']);
$xuexiao=htmlspecialchars($_POST['xuexiao']);
$zhuanye=htmlspecialchars($_POST['zhuanye']);
$biye=strtotime($_POST['biye']);
$zhuangtai=htmlspecialchars($_POST['zhuangtai']);
$msg=htmlspecialchars($_POST['msg']);
if ($biye<$chusheng or $ruzhi<$chusheng){
echo "<script>alert('请认真选择时间!');history.back();</Script>";	
exit;
}
$sj=OSTIME;
$sql="select uid from ".TABLEPRE."member where name='$name'";
$result=@mysql_query( $sql ) or die("SQL语句执行错误！");
if( $row=mysql_fetch_array($result)){
  echo "<script>alert('相同姓名已经存在，请重新填写!');history.back();<".'/script>';	
  exit;
}
$sql="insert into ".TABLEPRE."member (username,password,salt,jinzhi,quanxian,bmid,bumen,zhiwei,name,minzu,sex,zhengjian,phone,mail,ruzhi,renjj,dianhuajj,zhuzhi,huji,htkai,htjie,chusheng,hunyin,xueli,xuexiao,zhuanye,biye,zhuangtai,msg,sj) values ('$username','$pwd','$salt','$jinzhi','$quanxian','$bmid','$bumen','$zhiwei','$name','$minzu','$sex','$zhengjian','$phone','$mail','$ruzhi','$renjj','$dianhuajj','$zhuzhi','$huji','$htkai','$htjie','$chusheng','$hunyin','$xueli','$xuexiao','$zhuanye','$biye','$zhuangtai','$msg','$sj')";
mysql_query($sql) or die(mysql_error());
echo '{"statusCode":"200", "message":"操作成功", "navTabId":"navNewsLi", "forwardUrl":"/work/renshi/ren_list.php", "callbackType":"forward"}';
exit;
}
?>
<h2 class="contentTitle">员工录入</h2>
<div class="pageContent">
  <form method="post" action="renshi/ren_add.php" class="pageForm required-validate" onsubmit="return validateCallback(this,navTabAjaxDone)">
    <div class="pageFormContent nowrap" layoutH="97">
     <p>
	  <label>账户：</label>
      <input name="username" type="text" id="username" size="20" maxlength="20">
    </p>
     <p>
	  <label>密码：</label>
      <input name="pass" type="password" id="pass" size="20" maxlength="20">
    </p>
     <p>
	  <label>登陆状态：</label>
	  <select name="jinzhi" id="jinzhi">
	    <option value="0">禁止</option>
	    <option value="1">允许</option>
      </select>
     </p>
     <p>
	  <label>所属权限组</label>
	  <select name="quanxian" id="quanxian">
	    <option value="0" selected="selected">请选择权限组</option>
        <?php 
$sqlget="select * from ".TABLEPRE."quanxian order by id desc";
	$resultget=@mysql_query( $sqlget ) or die("SQL语句执行错误！");
	while( $row=mysql_fetch_array($resultget))
	{
?>
	    <option value="<?php echo $row['id']; ?>"><?php echo $row['title']; ?></option>
        <?php }?>
	    </select>
     </p>
   <div class="divider"></div>
    <p>
	  <label>部门：</label>
	  <input id="inputOrg1" name="org1.bmid" value="" type="hidden"/>
      <input class="required" name="org1.bumen" type="text" postField="keyword" lookupGroup="org1" readonly id="org1.bumen" />
      <a class="btnLook" href="renshi/bumencheck.php?a=bmid&b=bumen" lookupGroup="org1">查找</a></p>
    <p>
      <label>职位：</label>
      <input name="zhiwei" type="text" id="zhiwei" size="30" maxlength="30" class="required">
    </p>
    <p>
      <label>姓名：</label>
      <input name="name" type="text" id="name" size="20" maxlength="20" class="required">
    </p>
      <p>
      <label>民族：</label>
      <input name="minzu" type="text" id="minzu" size="20" maxlength="20" class="required">
    </p><p>
		<label>性别：</label>
		<label for="sex"></label>
		<select name="sex" id="sex">
		  <option>男</option>
		  <option>女</option>
	    </select>
    </p>
	  <p>
		<label>证件号码：</label>
		<input name="zhengjian" type="text" id="zhengjian" value="" size="40" maxlength="80">
	  </p>
	  <p>
	    <label>电话：</label>
	    <input name="phone" type="text" id="phone" size="30" maxlength="30" class="required">
	  </p>
	  <p>
		<label>邮箱：</label>
		    <input name="mail" type="text" id="mail" value="" size="40" maxlength="80">
	  </p>
	  <p>
		<label>入职时间：</label>
		<input name="ruzhi" type="text" class="date" id="ruzhi" value="<?php echo date('Y-m-d',strtotime(date('Y-m-d'))); ?>" readonly/>
	  </p>
      <div class="divider"></div>
      <p>
      <label>紧急联系人：</label>
      <input name="renjj" type="text" id="renjj" size="20" maxlength="20" class="required">
    </p>
      <p>
      <label>联系电话：</label>
      <input name="dianhuajj" type="text" id="dianhuajj" size="20" maxlength="20" class="required">
    </p>
      <p>
      <label>现住址：</label>
      <input name="zhuzhi" type="text" id="zhuzhi" size="40" maxlength="80" class="required">
    </p>
      <p>
      <label>户籍地址：</label>
      <input name="huji" type="text" id="huji" size="40" maxlength="80" class="required">
    </p>
      <p>
      <label>劳动合同开始：</label>
      <input name="htkai" type="text" class="date" id="htkai" value="<?php echo date('Y-m-d',strtotime(date('Y-m-d'))); ?>" readonly/>
      </p>
      <p>
      <label>合同结束：</label>
      <input name="htjie" type="text" class="date" id="htjie" value="<?php echo date('Y-m-d',strtotime(date('Y-m-d'))); ?>" readonly/>
      </p>
       <div class="divider"></div>
	  <p>
		<label>出生日期：</label>
		<input name="chusheng" type="text" class="date" id="chusheng" value="<?php echo date('Y-m-d',strtotime(date('Y-m-d'))); ?>" readonly/>
	  </p>
	  <p>
		<label>婚姻状况：</label>
		<select name="hunyin" id="hunyin">
		  <option>未婚</option>
		  <option>已婚</option>
        </select>
	  </p>
	  <p>
		<label>学历：</label>
			<select name="xueli" id="xueli">
	<option>小学</option>
	<option>初中</option>
	<option>高中</option>
	<option selected="selected">大专</option>
	<option>本科</option>
	<option>硕士</option>
	<option>博士</option>

</select></p>
	  <p>
		<label>毕业学校：</label>
		<input name="xuexiao" type="text" id="xuexiao" value="" size="40" maxlength="80">
	  </p>
	  <p>
		<label>专业：</label>
		<input name="zhuanye" type="text" id="zhuanye" value="" size="40" maxlength="80">
	  </p>
	  <p>
		<label>毕业时间：</label>
		<input name="biye" type="text" class="date" id="biye" value="<?php echo date('Y-m-d',strtotime(date('Y-m-d'))); ?>" readonly/>
      </p>
	  <p>
		<label>状态：</label>
		<select name="zhuangtai" id="zhuangtai">
		  <option>试用</option>
		  <option>正式</option>
		  <option>离职</option>
		  <option>退休</option>
        </select>
	  </p>
            <div class="divider"></div>
		<dl class="nowrap">
		  <dt>备注说明：</dt>
			<dd><textarea name="msg" cols="80" rows="3" id="msg"></textarea></dd>
	</dl></div>
<div class="formBar">
<ul>
  <li><div class="buttonActive"><div class="buttonContent"><button type="submit">提交</button>
    <input name="action" type="hidden" id="action" value="save">
  </div></div></li>
  <li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li>
</ul>
</div>
  </form>
</div>