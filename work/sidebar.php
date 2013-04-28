<?php
$sqlget="select quanxian from ".TABLEPRE."member where uid='$uid'";
$resultget=@mysql_query( $sqlget ) or die("SQL语句执行错误！");
if( $row=mysql_fetch_array($resultget))
{
$quanxianid=$row['quanxian'];
}
$sqlget="select quanxian from ".TABLEPRE."quanxian where id='$quanxianid'";
$resultget=@mysql_query( $sqlget ) or die("SQL语句执行错误！");
if( $row=mysql_fetch_array($resultget))
{
$quanxian='SYSOFT'.$row['quanxian'];
}
?>
<div id="sidebar">
<!--<div class="toggleCollapse"><h2></h2><div>收缩</div></div>-->
<div class="accordion" fillSpace="sidebar">
<div class="accordionHeader">
<h2><span>Folder</span>操作菜单</h2>
</div>
<div class="accordionContent">
<ul class="tree treeFolder">
<li><a>外贸部</a>
<ul>
<li><a href="waimaobu/kehu.php" target="navTab" rel="page12">客户管理</a></li>
<li><a href="waimaobu/dingdan.php" target="navTab" rel="page12">预算合同录入</a></li>
<li><a href="zixun/add.php" target="navTab" rel="page12">预算合同管理</a></li>
<li><a href="zixun/add.php" target="navTab" rel="page12">成本核算评审单</a></li>
<li><a href="zixun/add.php" target="navTab" rel="page12">发货通知单</a></li>
<li><a href="zixun/add.php" target="navTab" rel="page12">销售合同</a></li>
<li><a href="zixun/add.php" target="navTab" rel="page12">退税报关单</a></li>
<li><a href="zixun/add.php" target="navTab" rel="page12">收购合同</a></li>
</ul>
</li>
<li><a>外贸部工厂维护</a>
<ul>
<li><a href="zixun/add.php" target="navTab" rel="page12">供货工厂</a></li>
<li><a href="zixun/add.php" target="navTab" rel="page12">产品列表</a></li>
<li><a href="zixun/add.php" target="navTab" rel="page12">历史合同</a></li>
</ul>
</li>
<li><a>物流部</a>
<ul>
<li><a href="zixun/add.php" target="navTab" rel="page12">物流审核</a></li>
<li><a href="zixun/add.php" target="navTab" rel="page12">询价</a></li>
<li><a href="zixun/add.php" target="navTab" rel="page12">配载单</a></li>
<li><a href="zixun/add.php" target="navTab" rel="page12">发货通知</a></li>
<li><a href="zixun/add.php" target="navTab" rel="page12">装箱完毕</a></li>
<li><a href="zixun/add.php" target="navTab" rel="page12">二次修改委托单</a></li>
<li><a href="zixun/add.php" target="navTab" rel="page12">各种数据打印</a></li>
<li><a href="zixun/add.php" target="navTab" rel="page12">开船提单录入</a></li>
<li><a href="zixun/add.php" target="navTab" rel="page12">付运费</a></li>

</ul>
</li>
<li><a>自营进口业务</a>
<ul>
<li><a href="zixun/add.php" target="navTab" rel="page12">自营进口核算单</a></li>
<li><a href="zixun/add.php" target="navTab" rel="page12">代理进口核算单</a></li>
</ul>
</li>
<li><a>财务部</a>
<ul>
<li><a href="zixun/add.php" target="navTab" rel="page12">委托单审核</a></li>
<li><a href="zixun/add.php" target="navTab" rel="page12">运费审核</a></li>
</ul>
</li>
<li><a>外贸数据配置</a>
<ul>
<li><a href="zixun/add.php" target="navTab" rel="page12">海关编码</a></li>
<li><a href="zixun/add.php" target="navTab" rel="page12">国内港口</a></li>
<li><a href="zixun/add.php" target="navTab" rel="page12">船运公司</a></li>
<li><a href="zixun/add.php" target="navTab" rel="page12">承运公司</a></li>
<li><a href="zixun/add.php" target="navTab" rel="page12">国别</a></li>
<li><a href="zixun/add.php" target="navTab" rel="page12">国际港口</a></li>
<li><a href="zixun/add.php" target="navTab" rel="page12">银行费用扣除比</a></li>
</ul>
</li>
<li><a>公司数据统一</a>
<ul>
<li><a href="zixun/add.php" target="navTab" rel="page12">工厂名称统一</a></li>
<li><a href="zixun/add.php" target="navTab" rel="page12">产品统一</a></li>
<li><a href="zixun/add.php" target="navTab" rel="page12">工厂资质管理</a></li>
</ul>
</li>

<li><a>人事管理</a>
  <ul>
    <li><a href="renshi/bumen.php" target="navTab" rel="page51">部门设置</a></li>
    <li><a href="renshi/ren_list.php" target="navTab" rel="page53">人员列表</a></li>
    <li><a href="renshi/ren_lizhi.php" target="navTab" rel="page53">离职人员</a></li>
  </ul>
</li>
<li><a>系统配置</a>
  <ul>
    <li><a href="xitong/password.php" target="navTab" rel="chart">密码修改</a></li>
    <li><a href="xitong/quanxian.php" target="navTab" rel="chart">权限组</a></li>
  </ul>
</li>
</ul>
</div>
</div>
</div>