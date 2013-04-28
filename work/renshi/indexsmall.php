<?php
require('../loadingson.php');
$a=$_REQUEST["a"];
$b=$_REQUEST["b"];
$bmid=(int)$_REQUEST["bmid"];
$numPerPage=(int)$_REQUEST["numPerPage"];
if (0==$numPerPage){
$numPerPage=1000;
}
$pageNum=$_REQUEST["pageNum"];
?>
<form id="pagerForm" action="renshi/indexsmall.php">
	<input type="hidden" name="pageNum" value="<?php echo $pageNum; ?>" />
	<input type="hidden" name="numPerPage" value="<?php $numPerPage;?>" />
	<input type="hidden" name="orderField" value="${param.orderField}" />
	<input type="hidden" name="orderDirection" value="${param.orderDirection}" />
</form>
<div class="pageContent">
<div style="width:770px; height:360px;">
	<table class="table" targetType="dialog" width="100%">
		<thead>
			<tr>
				<th orderfield="orgName">部门名称</th>
				<th orderfield="orgNum">职位</th>
				<th orderfield="leader">姓名</th>
				<th orderfield="creator">电话</th>
				<th width="80">查找带回</th>
			</tr>
		</thead>
		<tbody>
<?php
$pageNum=isset($_POST['pageNum'])?intval($_POST['pageNum']):1;
if ($bmid>=1){
	if (7==$bmid){
$order="where bmid=7 or bmid=8 order by zhiwei desc,uid desc";
	}else{
$order="where bmid='$bmid' order by zhiwei desc,uid desc";		
		}
}else{
$order='order by bmid desc,zhiwei desc,jinzhi desc,uid desc';
	}
$sql="select uid from ".TABLEPRE."member ".$order."";
$result=@mysql_query( $sql );
$totalCount=mysql_num_rows($result); 
if ($totalCount>0){
$count=ceil($totalCount/$numPerPage);
if($pageNum<1) $pageNum=1;
if($pageNum>$count) $pageNum=$count;
$url=page($pageNum,$count,$key);
$re_sql="select * from ".TABLEPRE."member ".$order." LIMIT ".($pageNum-1)*$numPerPage.",".$numPerPage."";
$result=mysql_query( $re_sql );
while($row=mysql_fetch_array($result))
{
?>
			<tr>
				<td><?php echo $row["bumen"];?></td>
				<td><?php echo $row["zhiwei"];?></td>
				<td><?php echo $row["name"];?></td>
				<td><?php echo $row["phone"];?></td>
				<td>
				<a class="btnSelect" href="javascript:$.bringBack({<?php echo $a; ?>:'<?php echo $row["uid"];?>', <?php echo $b; ?>:'<?php echo $row["name"];?>'})" title="查找带回">选择</a>
				</td>
			</tr>
<?php }?>
		</tbody>
	</table>
	<!--<div class="panelBar">
		<div class="pages">
			<span>每页</span>
			<select name="numPerPage" onchange="dwzPageBreak({targetType:dialog, numPerPage:this.value})">
				<option value="10" selected="selected">10</option>
				<option value="20">20</option>
				<option value="50">50</option>
				<option value="300">300</option>
			</select>
			<span>条，共<?php echo $totalCount; ?>条</span>
		</div>
        <div class="pagination" targetType="dialog" totalCount="<?php echo $totalCount; ?>" numPerPage="<?php echo $numPerPage; ?>" pageNumShown="10" currentPage="<?php echo $pageNum; ?>"></div>
	</div>--><?php }?>
</div></div>