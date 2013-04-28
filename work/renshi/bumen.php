<?php require('../loadingson.php');
if ("del"==$_REQUEST["action"]){
$id=$_REQUEST["id"];
mysql_query("delete from ".TABLEPRE."bumen where id='$id'");
echo '{"statusCode":"200", "message":"操作成功", "navTabId":"navNewsLi", "forwardUrl":"/work/renshi/bumen.php", "callbackType":"forward"}';
exit;
}
function get_str($id = 0) { 
    global $str;
    $sql = "select id,title from ".TABLEPRE."bumen where fid= $id";  
    $result = mysql_query($sql);//查询pid的子类的分类 
    if($result && mysql_affected_rows()){//如果有子类 
        while ($row = mysql_fetch_array($result)) { //循环记录集 
           $str .= '<tr target="id" rel="'. $row['id'] .'"><td>' . $row['id'] . "--" . $row['title'].'</td></tr>'; 
		   get_str($row['id']);
		} 
    } 
    return $str;
}
?>
<!--<h2 class="contentTitle">部门管理</h2>-->
<div class="panelBar">
		<ul class="toolBar">
			<li><a class="add" href="renshi/bumen_add.php" target="navTab" rel="page12"><span>部门添加</span></a></li>
            <li class="line">line</li>
			<li><a class="edit" href="renshi/bumen_edit.php?id={id}" target="navTab" rel="page12"><span>修改信息</span></a></li>
                <li class="line">line</li>
			<li><a class="delete" href="renshi/bumen.php?id={id}&action=del" target="ajaxTodo" title="警告：删除后将从数据库彻底清空"><span>彻底删除</span></a></li>
		</ul>
</div>
<div id="resultBox"></div>
<table class="table" width="100%" layoutH="138">
<thead align="center">
    <th width="15%">部门名称</th>
</thead>
		<tbody>
        <?php echo get_str(0);?>
         </tbody>
	</table>
</div>