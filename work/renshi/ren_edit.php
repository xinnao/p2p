<?php
require('../loadingson.php');
$id=$_REQUEST["id"];
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

//部门职位
$jbmid=$_POST['jbmid'];
$jbumen=$_POST['jbumen'];
$jiu=$_POST['jiu'];
$sj=OSTIME;
if ($bmid!=$jbmid or $zhiwei!=$jiu){
$sql="insert into ".TABLEPRE."huanzhiwei (uid,jiu,xin,bmid,bumen,xbmid,xbumen,sj) values ('$id','$jiu','$zhiwei','$jbmid','$jbumen','$bmid','$bumen','$sj')";
mysql_query($sql) or die(mysql_error());	
}

if ($biye<$chusheng or $ruzhi<$chusheng){
echo "<script>alert('请认真选择时间!');history.back();</Script>";	
exit;
}
if ('离职'==$zhuangtai or '退休'==$zhuangtai){
$jinzhi=0;
	}
if (strlen($pass)>=6){
$sql="update ".TABLEPRE."member set username='$username',password='$pwd',salt='$salt',jinzhi='$jinzhi',quanxian='$quanxian',bmid='$bmid',bumen='$bumen',zhiwei='$zhiwei',name='$name',minzu='$minzu',sex='$sex',zhengjian='$zhengjian',phone='$phone',mail='$mail',ruzhi='$ruzhi',renjj='$renjj',dianhuajj='$dianhuajj',zhuzhi='$zhuzhi',huji='$huji',htkai='$htkai',htjie='$htjie',chusheng='$chusheng',hunyin='$hunyin',xueli='$xueli',xuexiao='$xuexiao',zhuanye='$zhuanye',biye='$biye',zhuangtai='$zhuangtai',msg='$msg' where uid='$id'";
mysql_query($sql) or die(mysql_error());
}else{
$sql="update ".TABLEPRE."member set username='$username',jinzhi='$jinzhi',quanxian='$quanxian',bmid='$bmid',bumen='$bumen',zhiwei='$zhiwei',name='$name',minzu='$minzu',sex='$sex',zhengjian='$zhengjian',phone='$phone',mail='$mail',ruzhi='$ruzhi',renjj='$renjj',dianhuajj='$dianhuajj',zhuzhi='$zhuzhi',huji='$huji',htkai='$htkai',htjie='$htjie',chusheng='$chusheng',hunyin='$hunyin',xueli='$xueli',xuexiao='$xuexiao',zhuanye='$zhuanye',biye='$biye',zhuangtai='$zhuangtai',msg='$msg' where uid='$id'";
mysql_query($sql) or die(mysql_error());
}
echo '{"statusCode":"200", "message":"操作成功", "navTabId":"navNewsLi", "forwardUrl":"/work/renshi/ren_list.php", "callbackType":"forward"}';
exit;
}
?>
<h2 class="contentTitle">员工信息修改</h2>
<div class="pageContent">
  <form method="post" action="renshi/ren_edit.php" class="pageForm required-validate" onsubmit="return validateCallback(this,navTabAjaxDone)">
    <div class="pageFormContent nowrap" layoutH="97">
    <table width="98%" border="1" bordercolor="#000000" align="center" style="border-collapse:collapse" cellpadding="0" cellspacing="0">
  <tr>
    <td width="22%" height="25" align="center">旧部门</td>
    <td width="23%" align="center">新部门</td>
    <td width="24%" align="center">旧职位</td>
    <td width="18%" align="center">新职位</td>
    <td width="13%" align="center">操作时间</td>
    </tr>
  <?php
    $sqlget="select * from ".TABLEPRE."huanzhiwei where uid='$id'";
	$resultget=@mysql_query( $sqlget ) or die(mysql_error());
	while( $row=mysql_fetch_array($resultget))
	{?>
  <tr>
    <td height="25" align="center"><?php echo $row['bumen']; ?></td>
    <td height="25" align="center"><?php echo $row['xbumen']; ?></td>
    <td height="25" align="center"><?php echo $row['jiu']; ?></td>
    <td align="center"><?php echo $row['xin']; ?></td>
    <td align="center"><?php echo nyren($row['sj']); ?></td>
    </tr>
  <?php }?>
</table>
      <?php 
$sqlget="select * from ".TABLEPRE."member where uid='$id'";
	$resultget=@mysql_query( $sqlget ) or die("SQL语句执行错误！");
	if( $row=mysql_fetch_array($resultget))
	{
?><p>
	  <label>账户：</label>
      <input name="username" type="text" id="username" value="<?php echo $row['username']; ?>" size="20" maxlength="20">
    </p>
     <p>
	  <label>密码：</label>
      <input name="pass" type="password" id="pass" size="20" maxlength="20">
    空则不修改密码</p>
     <p>
	  <label>登陆状态：</label>
	  <select name="jinzhi" id="jinzhi">
	    <option value="0"<?php if ($row['jinzhi']==0){ ?> selected<?php }?>>禁止</option>
	    <option value="1"<?php if ($row['jinzhi']==1){ ?> selected<?php }?>>允许</option>
      </select>
     </p>
     <p>
	  <label>所属权限组</label>
	  <select name="quanxian" id="quanxian">
	    <option value="0" selected="selected">请选择权限组</option>
        <?php 
		$quanxian=$row['quanxian'];
$sqlget="select * from ".TABLEPRE."quanxian order by id desc";
	$resultget=@mysql_query( $sqlget ) or die("SQL语句执行错误！");
	while( $row2=mysql_fetch_array($resultget))
	{
?>
	    <option value="<?php echo $row2['id']; ?>"<?php if ($row2['id']==$quanxian){ ?> selected<?php }?>><?php echo $row2['title']; ?></option>
        <?php }?>
	    </select>
     </p>
   <div class="divider"></div>
<p>
	  <label>部门：</label>
	  <input id="inputOrg1" name="org1.bmid" value="<?php echo $row['bmid']; ?>" type="hidden"/>
      <input name="org1.bumen" type="text" class="required" id="org1.bumen" value="<?php echo $row['bumen']; ?>" readonly postField="keyword" lookupGroup="org1" />
      <a class="btnLook" href="renshi/bumencheck.php?a=bmid&b=bumen" lookupGroup="org1">查找</a>
      <input name="jbmid" type="hidden" id="jbmid" value="<?php echo $row['bmid']; ?>">
      <input name="jbumen" type="hidden" id="jbumen" value="<?php echo $row['bumen']; ?>">
</p>
    <p>
      <label>职位：</label>
      <input name="zhiwei" type="text" class="required" id="zhiwei" value="<?php echo $row['zhiwei']; ?>" size="30" maxlength="30">
      <input name="jiu" type="hidden" id="jiu" value="<?php echo $row['zhiwei']; ?>">
    </p>
    <p>
      <label>姓名：</label>
      <input name="name" type="text" class="required" id="name" value="<?php echo $row['name']; ?>" size="20" maxlength="20">
    </p>
      <p>
      <label>民族：</label>
      <input name="minzu" type="text" class="required" id="minzu" value="<?php echo $row['minzu']; ?>" size="20" maxlength="20">
    </p>
    <p>
		<label>性别：</label>
		<label for="sex"></label>
		<select name="sex" id="sex">
		  <option<?php if ($row['sex']=="男"){ ?> selected<?php }?>>男</option>
		  <option<?php if ($row['sex']=="女"){ ?> selected<?php }?>>女</option>
	    </select>
    </p>
	  <p>
		<label>证件号码：</label>
		<input name="zhengjian" type="text" id="zhengjian" value="<?php echo $row['zhengjian']; ?>" size="40" maxlength="80">
	  </p>
	  <p>
	    <label>电话：</label>
	    <input name="phone" type="text" class="required" id="phone" value="<?php echo $row['phone']; ?>" size="30" maxlength="30">
	  </p>
	  <p>
		<label>邮箱：</label>
		    <input name="mail" type="text" id="mail" value="<?php echo $row['mail']; ?>" size="40" maxlength="80">
	  </p>
	  <p>
		<label>入职时间：</label>
		<input name="ruzhi" type="text" class="date" id="ruzhi" value="<?php echo date('Y-m-d',$row['ruzhi']); ?>" readonly/>
	  </p>
            <div class="divider"></div>
      <p>
      <label>紧急联系人：</label>
      <input name="renjj" type="text" class="required" id="renjj" value="<?php echo $row['renjj']; ?>" size="20" maxlength="20">
    </p>
      <p>
      <label>联系电话：</label>
      <input name="dianhuajj" type="text" class="required" id="dianhuajj" value="<?php echo $row['dianhuajj']; ?>" size="20" maxlength="20">
    </p>
      <p>
      <label>现住址：</label>
      <input name="zhuzhi" type="text" class="required" id="zhuzhi" value="<?php echo $row['zhuzhi']; ?>" size="40" maxlength="80">
    </p>
      <p>
      <label>户籍地址：</label>
      <input name="huji" type="text" class="required" id="huji" value="<?php echo $row['huji']; ?>" size="40" maxlength="80">
    </p>
      <p>
      <label>劳动合同开始：</label>
      <input name="htkai" type="text" class="date" id="htkai" value="<?php echo date('Y-m-d',$row['htkai']); ?>" readonly/>
      </p>
      <p>
      <label>合同结束：</label>
      <input name="htjie" type="text" class="date" id="htjie" value="<?php echo date('Y-m-d',$row['htjie']); ?>" readonly/>
      </p>
      <div class="divider"></div>
      
	  <p>
		<label>出生日期：</label>
		<input name="chusheng" type="text" class="date" id="chusheng" value="<?php echo date('Y-m-d',$row['chusheng']); ?>" readonly/>
	  </p>
	  <p>
		<label>婚姻状况：</label>
		<select name="hunyin" id="hunyin">
		  <option<?php if ($row['hunyin']=="未婚"){ ?> selected<?php }?>>未婚</option>
		  <option<?php if ($row['hunyin']=="已婚"){ ?> selected<?php }?>>已婚</option>
        </select>
	  </p>
	  <p>
		<label>学历：</label>
			<select name="xueli" id="xueli">
	<option<?php if ($row['xueli']=="小学"){ ?> selected<?php }?>>小学</option>
	<option<?php if ($row['xueli']=="初中"){ ?> selected<?php }?>>初中</option>
	<option<?php if ($row['xueli']=="高中"){ ?> selected<?php }?>>高中</option>
	<option<?php if ($row['xueli']=="大专"){ ?> selected<?php }?>>大专</option>
	<option<?php if ($row['xueli']=="本科"){ ?> selected<?php }?>>本科</option>
	<option<?php if ($row['xueli']=="硕士"){ ?> selected<?php }?>>硕士</option>
	<option<?php if ($row['xueli']=="博士"){ ?> selected<?php }?>>博士</option>

</select></p>
	  <p>
		<label>毕业学校：</label>
		<input name="xuexiao" type="text" id="xuexiao" value="<?php echo $row['xuexiao']; ?>" size="40" maxlength="80">
	  </p>
	  <p>
		<label>专业：</label>
		<input name="zhuanye" type="text" id="zhuanye" value="<?php echo $row['zhuanye']; ?>" size="40" maxlength="80">
	  </p>
	  <p>
		<label>毕业时间：</label>
		<input name="biye" type="text" class="date" id="biye" value="<?php echo date('Y-m-d',$row['biye']); ?>" readonly/>
      </p>
	  <p>
		<label>状态：</label>
		<select name="zhuangtai" id="zhuangtai">
		  <option<?php if ($row['zhuangtai']=="试用"){ ?> selected<?php }?>>试用</option>
		  <option<?php if ($row['zhuangtai']=="正式"){ ?> selected<?php }?>>正式</option>
		  <option<?php if ($row['zhuangtai']=="离职"){ ?> selected<?php }?>>离职</option>
		  <option<?php if ($row['zhuangtai']=="退休"){ ?> selected<?php }?>>退休</option>
        </select>
	  </p>
            <div class="divider"></div>
		<dl class="nowrap">
		  <dt>备注说明：</dt>
			<dd><textarea name="msg" cols="80" rows="3" id="msg"><?php echo $row['msg']; ?></textarea></dd>
	</dl></div><?php }?>
<div class="formBar">
<ul>
  <li><div class="buttonActive"><div class="buttonContent"><button type="submit">提交</button>
    <input name="action" type="hidden" id="action" value="save">
    <input name="id" type="hidden" id="id" value="<?php echo $id; ?>">
  </div></div></li>
  <li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li>
</ul>
</div>
  </form>
</div>