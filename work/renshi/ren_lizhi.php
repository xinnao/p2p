<?php require('../loadingson.php');
$numPerPage=(int)$_REQUEST["numPerPage"];
if (0==$numPerPage){
$numPerPage=18;
}
$pageNum=$_REQUEST["pageNum"];
if ('search'==$_POST["action"]){
$numPerPage=1000;
$key=$_POST["key"];
$word=$_POST["word"];
}
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
    <td height="52" align="center">离职人员列表</td>
        <td width="50" align="center"><a class="button" href="renshi/search.php?url=renshi/ren_lizhi.php" width="600" height="450" target="dialog" mask="true" title="搜索信息"><span>检索</span></a></td>
  </tr>
</table>
	</div>
</div>
<div class="pageContent">
<div class="panelBar">
</div>
	<table class="table" width="100%" layoutH="138">
<thead align="center">
<th width="2%">序号</th>
<th width="3%">登陆权限</th>
<th width="4%">权限组</th>
<th width="3%">部门</th>
<th width="3%">姓名</th>
<th width="7%">职位</th>
<th width="3%">民族</th>
<th width="2%">性别</th>
<th width="6%">入职时间</th>
<th width="6%">出生日期</th>  
<th width="3%">学历</th>
<th width="10%">身份证号</th> 
<th width="7%">联系方式</th> 
<th width="10%">现在住址</th>     
</thead>
		<tbody>
<?php
$hang=1;
$lizhi='离职';
$tuixiu='退休';
$pageNum=isset($_POST['pageNum'])?intval($_POST['pageNum']):1;
if ('search'==$_POST["action"]){
$order="where $key like '%$word%' and (zhuangtai like '$lizhi' or zhuangtai like '$tuixiu') order by bmid desc,zhiwei desc,jinzhi desc,uid desc";
}else{
$order="where zhuangtai like '$lizhi' or zhuangtai like '$tuixiu' order by bmid desc,zhiwei desc,jinzhi desc,uid desc";	
	}
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
<td><?php echo $hang;?></td>
<td><?php if(1==$row["jinzhi"]){ echo $row["username"].'-允许';}?></td>
<td><?php if(1==$row["jinzhi"]){ quanxian($row["quanxian"]); }?></td>
<td><?php echo $row["bumen"];?></td>
<td><?php echo $row["name"];?></td>
<td><?php echo $row["zhiwei"];?></td>
<td><?php echo $row["minzu"];?></td>
<td><?php echo $row["sex"];?></td>
<td><?php echo nyren($row["ruzhi"]);?></td>
<td><?php echo nyren($row["chusheng"]);?></td>  
<td><?php echo $row['xueli'];?></td>
<td><?php echo $row['zhengjian'];?></td> 
<td><?php echo $row["phone"];?></td> 
<td><?php echo $row['zhuzhi'];?></td>     
  </tr>
<?php
$hang=$hang+1;
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