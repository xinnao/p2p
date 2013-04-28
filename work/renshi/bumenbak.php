<?php require('../loadingson.php');
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
            $str .= '<li><a href="w_panel.html">' . $row['id'] . "--" . $row['title'].'</a>'.get_str($row['id'])."</li>"; 
			
		} 
		$str .= '</ul>';
    } 
    return $str;
} 
function get_array($id=0){ 
    $sql = "select id,title from ".TABLEPRE."bumen where fid= $id"; 
    $result = mysql_query($sql);//查询子类 
    $arr = array(); 
    if($result && mysql_affected_rows()){//如果有子类 
        while($rows=mysql_fetch_assoc($result)){ //循环记录集 
            $rows['list'] = get_array($rows['id']); //调用函数，传入参数，继续查询下级 
            $arr[] = $rows; //组合数组 
        } 
        return $arr; 
    } 
} 
?>
<!--<h2 class="contentTitle">部门管理</h2>-->
<div class="panelBar">
		<ul class="toolBar">
			<li><a class="add" href="renshi/bumen_add.php" target="navTab" rel="page12"><span>部门添加</span></a></li>
            <li class="line">line</li>
			<li><a class="edit" href="zixun/edit.php?sjid={sid_user}" target="navTab" rel="page12"><span>修改信息</span></a></li>
		</ul>
	</div>
<div id="resultBox"></div>
<table class="table" width="100%" layoutH="138">
<thead align="center">
    <th width="15%">部门名称</th>
</thead>
		<tbody>
        <?php echo get_str(0);?>
        <tr target="sid_user" rel="<?php echo $row["sjid"];?>">
         <td><?php echo $row["ren"];?></td>
         </tr>
         </tbody>
	</table>

</div>