<?php require('../loadingson.php');
$id=$_REQUEST["id"];
if ("save"==$_REQUEST["action"]){
	$fid=$_REQUEST["fid"];
	$title=$_REQUEST["title"];
mysql_query("update ".TABLEPRE."bumen set fid='$fid',title='$title' where id='$id'")or die(mysql_error());
echo '{"statusCode":"200", "message":"操作成功", "navTabId":"navNewsLi", "forwardUrl":"/work/renshi/bumen.php", "callbackType":"forward"}';
exit;
}
$sql="select * from ".TABLEPRE."bumen where id='$id'";
$result=mysql_query($sql);
if($rs=mysql_fetch_array($result))
{
	$fid=$rs['fid'];
	$title=$rs['title'];
}
?>
<h2 class="contentTitle">修改部门</h2>
  <form method="post" action="renshi/bumen_edit.php" class="pageForm required-validate" onsubmit="return validateCallback(this,navTabAjaxDone)">
 <div class="pageFormContent nowrap" layoutH="97">
   <p>
     <label>上级部门：</label>
     <label for="fid"></label>
     <select name="fid" id="fid">
<option value="0"<?php if (0==$fid){ ?> selected="selected"<?php }?>>公司</option>
<?php
$sql="select * from ".TABLEPRE."bumen";
$result=mysql_query($sql);
while($rs=mysql_fetch_array($result))
{?>
<option value="<?php echo $rs['id']; ?>"<?php if ($rs['id']==$fid){ ?> selected="selected"<?php }?>><?php echo $rs['title']; ?></option>
<?php }?>
</select>
</p>
<p>
	  <label>部门名称：</label>
	  <input name="title" type="text" class="required" id="title" value="<?php echo $title; ?>" size="30" maxlength="30">
	  <input name="action" type="hidden" id="action" value="save">
      <input name="id" type="hidden" id="id" value="<?php echo $id; ?>">
</p>
<div class="formBar">
<ul>
  <li><div class="buttonActive"><div class="buttonContent"><button type="submit">提交</button></div></div></li>
  <li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li>
</ul>
</div>
</div>
</form>