<?php require('../loadingson.php');
$a=$_REQUEST["a"];
$b=$_REQUEST["b"];
?>
<div class="panelBar">
		<ul class="toolBar">
		</ul>
</div>
<div id="resultBox"></div>
<table class="table" width="100%" layoutH="138">
<thead align="center">
    <th width="50%">部门名称</th>
    <th width="50%">查找带回</th>
</thead>
		<tbody>
<?php 
$re_sql="select * from ".TABLEPRE."bumen";
$result=mysql_query( $re_sql );
while($row=mysql_fetch_array($result))
{
?>
			<tr>
				<td><?php echo $row["title"];?></td>
				<td>
				<a class="btnSelect" href="javascript:$.bringBack({<?php echo $a; ?>:'<?php echo $row["id"];?>', <?php echo $b; ?>:'<?php echo $row["title"];?>'})" title="查找带回">选择</a>
				</td>
			</tr>
<?php }
?>
         </tbody>
	</table>
</div>