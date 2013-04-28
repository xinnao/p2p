<?php
require('../loadingson.php');
$id=$_REQUEST["id"];
if ("save"==$_REQUEST["action"]){
$title=$_POST['title'];
$quanxian=implode(",",$_POST['quanxian']);
$sql="update ".TABLEPRE."quanxian set title='$title',quanxian='$quanxian' where id='$id'";
mysql_query($sql) or die(mysql_error());
echo '{"statusCode":"200", "message":"操作成功", "navTabId":"navNewsLi", "forwardUrl":"/work/xitong/quanxian.php", "callbackType":"forward"}';
exit;
}
function checked($value,$quanxian){
   $pos=strpos($quanxian,$value);   
  if ($pos) {   
 echo " checked=\"checked\"";
  }
} 
$sql2="select * from ".TABLEPRE."quanxian where id='$id'";
$result2=@mysql_query( $sql2 ) or die("SQL语句执行错误！");
if( $rs2=mysql_fetch_array($result2))
{
	$quanxian='SYSOFT,'.$rs2['quanxian'];
	$title=$rs2['title'];
}
?>
<h2 class="contentTitle">权限添加</h2>
<div class="pageContent">
  <form method="post" action="xitong/quanxian_edit.php" class="pageForm required-validate" onsubmit="return validateCallback(this,navTabAjaxDone)">
    <div class="pageFormContent nowrap" layoutH="97">
     <p>
	  <label>权限组名称：</label>
	  <input name="title" type="text" class="required" id="title" value="<?php echo $title; ?>" size="30" maxlength="30">
     </p>
   <div class="divider"></div>
    <p>
	  <label>装修咨询管理：</label>
	  <input type="checkbox"<?php checked('zhuangxiu',$quanxian);?> name="quanxian[]" value="zhuangxiu" /></p>
    <p>
    </p>
 <div class="divider"></div>
 <label><input type="checkbox"<?php checked('zhuang1',$quanxian);?> name="quanxian[]" value="zhuang1" />
      潜在客户录入</label>
		<label><input type="checkbox"<?php checked('zhuang2',$quanxian);?> name="quanxian[]" value="zhuang2" />
		潜在客户查询</label>
             <label><input type="checkbox"<?php checked('1zhuang2',$quanxian);?> name="quanxian[]" value="1zhuang2" />
		客户回访跟进</label>
        <label><input type="checkbox"<?php checked('2zhuang2',$quanxian);?> name="quanxian[]" value="2zhuang2" />
		修改信息</label>
        <label><input type="checkbox"<?php checked('3zhuang2',$quanxian);?> name="quanxian[]" value="3zhuang2" />
		更换设计师</label>
        <label><input type="checkbox"<?php checked('4zhuang2',$quanxian);?> name="quanxian[]" value="4zhuang2" />
		标记失败</label>
		<label><input type="checkbox"<?php checked('zhuang3',$quanxian);?> name="quanxian[]" value="zhuang3" />
		已交定金客户</label><label><input type="checkbox"<?php checked('1zhuang3',$quanxian);?> name="quanxian[]" value="1zhuang3" />
		签约合同</label>
		<label><input type="checkbox"<?php checked('zhuang4',$quanxian);?> name="quanxian[]" value="zhuang4" />
	  报价库</label>
		<label><input type="checkbox"<?php checked('zhuang5',$quanxian);?> name="quanxian[]" value="zhuang5" />
	  设计师</label>
		<label><input type="checkbox"<?php checked('zhuang7',$quanxian);?> name="quanxian[]" value="zhuang7" />
		正式签约客户
		</label>
		<label><input type="checkbox"<?php checked('zhuang8',$quanxian);?> name="quanxian[]" value="zhuang8" />
		失败客户</label>
   <div class="divider"></div>
    <p>
	  <label>主材款管理：</label>
	  <input type="checkbox"<?php checked('zhucai',$quanxian);?> name="quanxian[]" value="zhucai" /></p>
    <p>
    </p>
 <div class="divider"></div>
		<label><input type="checkbox"<?php checked('zhu2',$quanxian);?> name="quanxian[]" value="zhu2" />
		主材款收取记录</label>
		<label><input type="checkbox"<?php checked('zhu3',$quanxian);?> name="quanxian[]" value="zhu3" />
		主材合作品牌库</label>
           <div class="divider"></div>
    <p>
	  <label>工程信息管理：</label>
	  <input type="checkbox"<?php checked('gongcheng',$quanxian);?> name="quanxian[]" value="gongcheng" /></p>
    <p>
    </p>
 <div class="divider"></div>
		<label><input type="checkbox"<?php checked('gong2',$quanxian);?> name="quanxian[]" value="gong2" />
		开派工单</label>
		<label><input type="checkbox"<?php checked('gong3',$quanxian);?> name="quanxian[]" value="gong3" />
		工程进度管理</label>
                <label><input type="checkbox"<?php checked('1gong3',$quanxian);?> name="quanxian[]" value="1gong3" />
		更新进程</label>
        <label><input type="checkbox"<?php checked('2gong3',$quanxian);?> name="quanxian[]" value="2gong3" />
		增减项管理</label>
        <label><input type="checkbox"<?php checked('3gong3',$quanxian);?> name="quanxian[]" value="3gong3" />
		代金劵特殊审批</label>
        <label><input type="checkbox"<?php checked('4gong3',$quanxian);?> name="quanxian[]" value="4gong3" />
		工队支款</label>
		<label><input type="checkbox"<?php checked('gong5',$quanxian);?> name="quanxian[]" value="gong5" />
		工队管理</label>
           <div class="divider"></div>
    <p>
	  <label>辅材管理：</label>
	  <input type="checkbox"<?php checked('fucai',$quanxian);?> name="quanxian[]" value="fucai" /></p>
    <p>
    </p>
 <div class="divider"></div>
      <label><input type="checkbox"<?php checked('fu1',$quanxian);?> name="quanxian[]" value="fu1" />
      开代金劵</label>
		<label><input type="checkbox"<?php checked('fu2',$quanxian);?> name="quanxian[]" value="fu2" />
		辅材库
		</label><label></label>
           <div class="divider"></div>
    <p>
	  <label>投诉报修管理：</label>
	  <input type="checkbox"<?php checked('kefu',$quanxian);?> name="quanxian[]" value="kefu" /></p>
    <p>
    </p>
 <div class="divider"></div>
 	<label><input type="checkbox"<?php checked('ke6',$quanxian);?> name="quanxian[]" value="ke5" />
		图纸审核</label>
      <label><input type="checkbox"<?php checked('ke1',$quanxian);?> name="quanxian[]" value="ke1" />
      客户回访</label>
		<label><input type="checkbox"<?php checked('ke2',$quanxian);?> name="quanxian[]" value="ke2" />
		客户投诉</label>
		<label><input type="checkbox"<?php checked('ke3',$quanxian);?> name="quanxian[]" value="ke3" />
		保修期的工程</label>
		<label><input type="checkbox"<?php checked('ke4',$quanxian);?> name="quanxian[]" value="ke4" />
		客户报修</label>
		<label><input type="checkbox"<?php checked('ke5',$quanxian);?> name="quanxian[]" value="ke5" />
		完结的工程</label>
           <div class="divider"></div>
    <p>
	  <label>财务管理：</label>
	  <input type="checkbox"<?php checked('caiwu',$quanxian);?> name="quanxian[]" value="caiwu" /></p>
    <p>
    </p>
 <div class="divider"></div>
         <label><input type="checkbox"<?php checked('cai1',$quanxian);?> name="quanxian[]" value="cai1" />
      定金录入</label>
		<label><input type="checkbox"<?php checked('cai2',$quanxian);?> name="quanxian[]" value="cai2" />
	  款项录入</label>
		<label><input type="checkbox"<?php checked('cai3',$quanxian);?> name="quanxian[]" value="cai3" />
		工程款审核
	  </label>
        <label><input type="checkbox"<?php checked('cai4',$quanxian);?> name="quanxian[]" value="cai4" />
		主材款审核
		</label>
        <label><input type="checkbox"<?php checked('cai5',$quanxian);?> name="quanxian[]" value="cai5" />
		财务历史
		</label>
           <div class="divider"></div>
    <p>
	  <label>人事管理：</label>
	  <input type="checkbox"<?php checked('renshi',$quanxian);?> name="quanxian[]" value="renshi" /></p>
    <p>
    </p>
 <div class="divider"></div>
      <label><input type="checkbox"<?php checked('ren1',$quanxian);?> name="quanxian[]" value="ren1" />
      部门设置</label>
		<label><input type="checkbox"<?php checked('ren2',$quanxian);?> name="quanxian[]" value="ren2" />
		人员列表</label><label><input type="checkbox"<?php checked('ren3',$quanxian);?> name="quanxian[]" value="ren3" />
		职位变动</label><label><input type="checkbox"<?php checked('ren4',$quanxian);?> name="quanxian[]" value="ren4" />
		培训计划</label>
		<label><input type="checkbox"<?php checked('ren5',$quanxian);?> name="quanxian[]" value="ren5" />
		培训总结</label>
                   <div class="divider"></div>
    <p>
	  <label>系统配置：</label>
	  <input type="checkbox"<?php checked('xitong',$quanxian);?> name="quanxian[]" value="xitong" /></p>
    <p>
    </p>
 <div class="divider"></div>
     <label><input type="checkbox"<?php checked('xi1',$quanxian);?> name="quanxian[]" value="xi1" />
      修改密码</label><input type="checkbox"<?php checked('xi2',$quanxian);?> name="quanxian[]" value="xi2" />
	权限组管理</div>
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