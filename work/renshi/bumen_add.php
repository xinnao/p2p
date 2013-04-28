<?php require('../loadingson.php');
if ("save"==$_REQUEST["action"]){
	$fid=$_REQUEST["fid"];
	$title=$_REQUEST["title"];
mysql_query("insert into ".TABLEPRE."bumen (fid,title) values ('$fid','$title')")or die(mysql_error());
echo '{"statusCode":"200", "message":"操作成功", "navTabId":"navNewsLi", "forwardUrl":"/work/renshi/bumen.php", "callbackType":"forward"}';
exit;
}
?>
<h2 class="contentTitle">录入部门</h2>
  <form method="post" action="renshi/bumen_add.php" class="pageForm required-validate" onsubmit="return validateCallback(this,navTabAjaxDone)">
 <div class="pageFormContent nowrap" layoutH="97">
   <p>
     <label>上级部门：</label>
     <label for="fid"></label>
     <select name="fid" id="fid">
       <option value="0">公司</option>
<?php
$sql="select * from ".TABLEPRE."bumen";
$result=mysql_query($sql);
while($rs=mysql_fetch_array($result))
{?>
<option value="<?php echo $rs['id']; ?>"><?php echo $rs['title']; ?></option>
<?php }?>
     </select>
    </p>
    <p>
	  <label>部门名称：</label>
	  <input name="title" type="text" id="title" size="30" maxlength="30" class="required">
	  <input name="action" type="hidden" id="action" value="save">
   </p>
<div class="formBar">
<ul>
  <li><div class="buttonActive"><div class="buttonContent"><button type="submit">提交</button></div></div></li>
  <li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li>
</ul>
</div>
<?php
function get_str($id = 0) { 
    //global $str; 
    $sql = "select id,title from ".TABLEPRE."bumen where fid= $id";  
    $result = mysql_query($sql);//查询pid的子类的分类 
    if($result && mysql_affected_rows()){//如果有子类 
	if (0==$id){
		 $str .= '<ul class="tree">'; 
		}else{
		 $str .= '<ul>'; 	
		}
        while ($row = mysql_fetch_array($result)) { //循环记录集 
            $str .= "<li><a href=w_panel.html>" . $row['title'].'</a>'.get_str($row['id'])."</li>"; //构建字符串 
			
		} 
		$str .= '</ul>';
    } 
    return $str; 
} 
echo get_str(0);?>
</div>
</form>