<?php
require('../loadingson.php');
if ("save"==$_REQUEST["action"]){
$title=htmlspecialchars($_POST['title']);
$zhujiang=htmlspecialchars($_POST['zhujiang']);
$sj=strtotime($_POST['sj']);
$renyuan=htmlspecialchars($_POST['renyuan']);
$sql="insert into ".TABLEPRE."peixun (title,zhujiang,sj,renyuan) values ('$title','$zhujiang','$sj','$renyuan')";
mysql_query($sql) or die(mysql_error());
echo '{"statusCode":"200", "message":"操作成功", "navTabId":"navNewsLi", "forwardUrl":"/work/renshi/peixun.php", "callbackType":"forward"}';
exit;
}
?>
<h2 class="contentTitle">培训录入</h2>
<div class="pageContent">
  <form method="post" action="renshi/peixun_add.php" class="pageForm required-validate" onsubmit="return validateCallback(this,navTabAjaxDone)">
    <div class="pageFormContent nowrap" layoutH="97">
    <p>
      <label>标题：</label>
      <input name="title" type="text" id="title" size="40" maxlength="80" class="required">
    </p>
	  <p>
		<label>主讲人：</label>
		<input name="zhujiang" type="text" id="zhujiang" value="" size="20" maxlength="20">
	  </p>
	  <p>
		<label>时间：</label>
		<input name="sj" type="text" class="date" id="sj" value="<?php echo date('Y-m-d',strtotime(date('Y-m-d'))); ?>" readonly/>
	  </p>
      <p>
      <label>参加人员：</label>
      <input name="renyuan" type="text" id="renyuan" size="40" maxlength="200" class="required">
    </p>
     </div>
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