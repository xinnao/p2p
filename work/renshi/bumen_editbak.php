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
            $str .= "<li><a href=w_panel.html>" . $row['id'] . "--" . $row['title'].'</a>'.get_str($row['id'])."</li>"; //构建字符串 
			
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
<h2 class="contentTitle">录入潜在客户</h2>
<div id="resultBox"></div>
<!--<div class="pageFormContent">-->
<?php echo get_str(0);?>
</div>