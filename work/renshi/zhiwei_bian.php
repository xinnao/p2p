<?php require('../loadingson.php');
$numPerPage=(int)$_REQUEST["numPerPage"];
if (0==$numPerPage){
$numPerPage=19;
}
$pageNum=$_REQUEST["pageNum"];
?>
<form id="pagerForm" method="post" action="/work/renshi/ren_list.php">
	<input type="hidden" name="status" value="${param.status}">
	<input type="hidden" name="keywords" value="${param.keywords}" />
	<input type="hidden" name="pageNum" value="<?php echo $pageNum; ?>" />
	<input type="hidden" name="numPerPage" value="<?php $numPerPage;?>" />
	<input type="hidden" name="orderField" value="${param.orderField}" />
</form>
<div class="pageHeader">
	<div class="searchBar">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="52" align="center">职位变动历史</td>
  </tr>
</table>
	</div>
</div>
<div class="pageContent">
<div class="panelBar">
		<ul class="toolBar">
<!--         <li><a class="add" href="renshi/ren_add.php" target="navTab" rel="page12"><span>员工录入</span></a></li>
            <li class="line">line</li>
			<li><a class="edit" href="renshi/ren_edit.php?id={sid_user}" target="navTab" rel="page12"><span>修改信息</span></a></li>-->
		</ul>
</div>
	<table class="table" width="100%" layoutH="138">
<thead align="center">
<th width="5%">姓名</th>
    <th width="5%">部门</th>
    <th width="5%">职位</th>
    <th width="5%">旧职位</th>
     <th width="3%">新职位</th>
    <th width="10%">变动时间</th>
</thead>
		<tbody>
<?php
$pageNum=isset($_POST['pageNum'])?intval($_POST['pageNum']):1;
$order='where jinzhi=5 order by jinzhi desc,uid desc';
$sql="select uid from ".TABLEPRE."member ".$order."";
$pagesize=$numPerPage;
$result=@mysql_query( $sql );
$totalCount=mysql_num_rows($result); 
if ($totalCount>0){
$count=ceil($totalCount/$pagesize);
if($pageNum<1) $pageNum=1;
if($pageNum>$count) $pageNum=$count;
$url=page($pageNum,$count,$key);
$re_sql="select * from ".TABLEPRE."member ".$order." LIMIT ".($pageNum-1)*$pagesize.",".$pagesize."";
$result=mysql_query( $re_sql );
while($row=mysql_fetch_array($result))
{
?>
<tr target="sid_user" rel="<?php echo $row["uid"];?>">
<td><?php if(1==$row["jinzhi"]){ echo $row["username"].'-允许';}?></td>
<td><?php echo $row["bumen"];?></td>
    <td><?php echo $row["zhiwei"];?></td>
    <td><?php echo $row["name"];?></td>
    <td><?php echo $row["sex"];?></td>
    <td><?php echo $row["phone"];?></td>
  </tr>
<?php
}?>
		</tbody>
	</table>
	<div class="panelBar">
		<div class="pages">
			<span>显示</span>
			<select class="combox" name="numPerPage" onchange="navTabPageBreak({numPerPage:this.value})">
				<option value="20">20</option>
				<option value="50">50</option>
				<option value="100">100</option>
				<option value="200">200</option>
			</select>
			<span>条，共<?php echo $totalCount; ?>条</span>
		</div>
<div class="pagination" targetType="navTab" totalCount="<?php echo $totalCount; ?>" numPerPage="<?php echo $numPerPage; ?>" pageNumShown="10" currentPage="<?php echo $pageNum; ?>"></div>
<?php }?>
	</div>
</div>