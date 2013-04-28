<?php
//判断商机是否存在
function shangjilook($sjid){
$sqlget="select sjid from ".TABLEPRE."shangji where sjid='$sjid'";
$resultget=@mysql_query( $sqlget ) or die("SQL语句执行错误！");
if( $row=mysql_fetch_array($resultget))
{
echo '<a href="zixun/shangji_look.php?sjid='.$row["sjid"].'" target="dialog" rel="dlg_page1" mask="true" title="客户信息" width="800" height="480">查看</a>';
}
}
//判断合同是否存在
function hetonglook($sjid){
$sqlget="select bianhao from ".TABLEPRE."hetong where sjid='$sjid'";
$resultget=@mysql_query( $sqlget ) or die("SQL语句执行错误！");
if( $row=mysql_fetch_array($resultget))
{
echo '<a href="zixun/hetong_look.php?sjid='.$sjid.'" target="dialog" rel="dlg_page1" mask="true" title="合同信息" width="800" height="480">'.$row["bianhao"].'</a>';
}
}
//潜在回访
function huifanglooksj($id){
	if (mysql_num_rows(mysql_query("select gjid from ".TABLEPRE."genjin where sjid='$id'"))>0){
echo '<a href="zixun/huifang_look.php?sjid='.$id.'" target="dialog" rel="dlg_page1" mask="true" title="回访信息" width="800" height="480">查看</a>';
	}
}
//合同回访
function huifanglookht($id){
	if (mysql_num_rows(mysql_query("select gjid from ".TABLEPRE."genjinhetong where sjid='$id'"))>0){
echo '<a href="kefu/huifang_look.php?sjid='.$id.'" target="dialog" rel="dlg_page1" mask="true" title="回访信息" width="800" height="480">查看</a>';
	}
}
//投诉
function tousulook($id){
	if (mysql_num_rows(mysql_query("select tsid from ".TABLEPRE."tousu where sjid='$id'"))>0){
echo '<a href="kefu/tousu_look.php?sjid='.$id.'" target="dialog" rel="dlg_page1" mask="true" title="投诉信息" width="800" height="480">查看</a>';	
	}
}
//报修
function baoxiulook($id){
	if (mysql_num_rows(mysql_query("select tsid from ".TABLEPRE."baoxiu where sjid='$id'"))>0){
echo '<a href="kefu/baoxiu_look.php?sjid='.$id.'" target="dialog" rel="dlg_page1" mask="true" title="投诉信息" width="800" height="480">查看</a>';
	}
}
function sjren($sjid){
$sqlget="select ren from ".TABLEPRE."shangji where sjid='$sjid'";
$resultget=@mysql_query( $sqlget ) or die("SQL语句执行错误！");
if( $row=mysql_fetch_array($resultget))
{
echo $row['ren'];
}
}
function sjdianhua($sjid){
$sqlget="select dianhua from ".TABLEPRE."shangji where sjid='$sjid'";
$resultget=@mysql_query( $sqlget ) or die("SQL语句执行错误！");
if( $row=mysql_fetch_array($resultget))
{
echo $row['dianhua'];
}
}
function sjdizhi($sjid){
$sqlget="select loupan from ".TABLEPRE."shangji where sjid='$sjid'";
$resultget=@mysql_query( $sqlget ) or die("SQL语句执行错误！");
if( $row=mysql_fetch_array($resultget))
{
echo $row['loupan'];
}
}
//获取会员姓名
function name($id){
$sqlget="select name from ".TABLEPRE."member where uid='$id'";
$resultget=@mysql_query( $sqlget ) or die("SQL语句执行错误！");
if( $row=mysql_fetch_array($resultget))
{
echo $row['name'];
}
}
//获取工队会员姓名
function namegd($id){
$sqlget="select ren from ".TABLEPRE."gongdui where gdid='$id'";
$resultget=@mysql_query( $sqlget ) or die("SQL语句执行错误！");
if( $row=mysql_fetch_array($resultget))
{
echo $row['ren'];
}
}
//获取工队会员姓名
function namephonegd($id){
$sqlget="select ren,dianhua from ".TABLEPRE."gongdui where gdid='$id'";
$resultget=@mysql_query( $sqlget ) or die("SQL语句执行错误！");
if( $row=mysql_fetch_array($resultget))
{
echo $row['ren'].'-'.$row['dianhua'];
}
}
//获取会员姓名
function namephone($id){
$sqlget="select name,phone from ".TABLEPRE."member where uid='$id'";
$resultget=@mysql_query( $sqlget ) or die("SQL语句执行错误！");
if( $rowget=mysql_fetch_array($resultget))
{
echo $rowget['name'].' '.$rowget['phone'];
}
}
//主材名
function zhucaiming($id){
	$sqlget="select title from ".TABLEPRE."zhucaiku where zckid='$id'";
	$resultget=@mysql_query( $sqlget ) or die("SQL语句执行错误！");
	if( $row=mysql_fetch_array($resultget))
	{
echo $row['title'];
	}
}
//查看主材
function zhucailook($sjid){
$sql="select zcmid from ".TABLEPRE."zhucaimsg where sjid='$sjid'";
$result=@mysql_query( $sql );
$totalCount=(int)mysql_num_rows($result);
if ($totalCount>=1){
echo '<a href="zhucai/zhucaimsglist.php?sjid='.$sjid.'" target="dialog" rel="dlg_page1" mask="true" title="主材信息" width="800" height="580">查看</a>';
}else{
	echo '<font color="#CCCCCC">未开</font>';
	}
}
//辅材名
function fucaiming($id){
	$sqlget="select title from ".TABLEPRE."fucaiku where fckid='$id'";
	$resultget=@mysql_query( $sqlget ) or die("SQL语句执行错误！");
	if( $row=mysql_fetch_array($resultget))
	{
echo $row['title'];
	}
}
//查看辅材
function fucailook($sjid){
$sql="select fcmid from ".TABLEPRE."fucaimsg where sjid='$sjid'";
$result=@mysql_query( $sql );
$totalCount=(int)mysql_num_rows($result);
if ($totalCount>=1){
echo '<a href="fucai/fucaimsglist.php?sjid='.$sjid.'" target="dialog" rel="dlg_page1" mask="true" title="辅材信息" width="800" height="580">查看</a>';
}else{
	echo '<font color="#CCCCCC">未开</font>';
	}
}

//获取权限组名称
function quanxian($id){
$sqlget="select title from ".TABLEPRE."quanxian where id='$id'";
$resultget=@mysql_query( $sqlget ) or die("SQL语句执行错误！");
if( $row=mysql_fetch_array($resultget))
{
echo $row['title'];
}
}
//回访次数
function cishuhuifang($id){
$cishu=mysql_num_rows(mysql_query("select gjid from ".TABLEPRE."genjin where sjid='$id'")); 
if ($cishu>0){
return $cishu;
}
}
//获取签单日期
function qiandansj($id){
$sqlget="select qianyue from ".TABLEPRE."hetong where sjid='$id'";
$resultget=@mysql_query( $sqlget ) or die("SQL语句执行错误！");
if( $row=mysql_fetch_array($resultget))
{
return $row['qianyue'];
}
}
?>