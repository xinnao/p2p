<?php
//商机状态
function jieduan($id){
	switch ($id)
	{
	case 0:
	  echo '失败';
	  break;  
	case 1:
	  echo '跟进中';
	  break;
	  case 2:
	  echo '签约';
	  break;
	default:
	  echo '';
	}
}
//判断是入款还是出款
function churukuan($id){
	switch ($id)
	{
	case 0:
	  echo '支出';
	  break;  
	case 1:
	  echo '入款';
	  break;
     case 3:
	  echo '<font color="#FF0000">退款</font>';
	  break;
	default:
	  echo '';
	}
}
//是否已经审核
function shenhe($id){
	switch ($id)
	{
	case 0:
	  echo '未审核';
	  break;  
	case 1:
	  echo '已审核';
	  break;
	default:
	  echo '';
	}
}
//财务的款项类型,不可修改
function caiwuleixing($id){
	switch ($id)
	{
	case 0:
	  echo '退款';
	  break;  
	case 1:
	  echo '定金';
	  break;
	case 2:
	  echo '首期款';
	  break;
	case 3:
	  echo '中期款';
	  break;
	case 4:
	  echo '尾款';
	  break;
	case 5:
	  echo '主材款';
	  break;
	  	case 6:
	  echo '工队支款';
	  break;
	 case 7:
	  echo '代金劵辅材款';
	  break;
	  case 8:
	  echo '主材代金劵';
	  break;
	   case 9:
	  echo '主材退款';
	  break;
	default:
	  echo '';
	}
}
//工程进程
function jincheng($id){
	switch ($id)
	{
	case 0:
	  echo '未开工';
	  break;
	case 1:
	  echo '店面交底';
	  break;
	case 2:
	  echo '成品保护';
	  break;
	case 3:
	  echo '现场交底';
	  break;
	case 4:
	  echo '材料进场';
	  break;
	case 5:
	  echo '隐蔽验收';
	  break;
	  	case 6:
	  echo '中期验收';
	  break;
	  	case 7:
	  echo '预验收';
	  break;
	  case 8:
	  echo '竣工验收';
	  break;
      case 100:
	  echo '停工';
	  break;
	}
}
function shifou($id){
	switch ($id)
	{
	case 0:
	  echo '×';
	  break;  
	case 1:
	  echo '<a class="btnSelect" title="ok">√</a>';
	  break;
	default:
	  echo '';
	}
}
//判断增减
function zengjian($id){
	switch ($id)
	{
	  case 1:
	  echo '+进场增项';
	  break;
	  	case 3:
	  echo '+中期前增项';
	  break;
	  	case 5:
	  echo '+中期后增项';
	  break;
	  	case 2:
	  echo '-进场减项';
	  break;
	  	case 4:
	  echo '-中期前减项';
	  break;
	  	case 6:
	  echo '-中期后减项';
	  break;
	  default:
	  echo '';
	}
}
//订购退款
function dingtui($id){
	switch ($id)
	{
	case 0:
	  echo '退';
	  break;  
	case 1:
	  echo '订';
	  break;
	default:
	  echo '';
	}
}
function checkpower($value,$str){
	$dd=0;
	$pos=strpos($str,$value);   
		if ($pos) {   
		$dd=1;
		return $dd;
		}else{
		return $dd;  
		}
}
//返回百分号
function baifenhao($id){
		if (""==$id) {   
		return '%';
		}else{
		return $id;  
		}
}
function cny($ns) { 
    static $cnums=array("零","壹","贰","叁","肆","伍","陆","柒","捌","玖"), 
        $cnyunits=array("圆","角","分"), 
        $grees=array("拾","佰","仟","万","拾","佰","仟","亿"); 
    list($ns1,$ns2)=explode(".",$ns,2); 
    $ns2=array_filter(array($ns2[1],$ns2[0])); 
    $ret=array_merge($ns2,array(implode("",_cny_map_unit(str_split($ns1),$grees)),"")); 
    $ret=implode("",array_reverse(_cny_map_unit($ret,$cnyunits))); 
    return str_replace(array_keys($cnums),$cnums,$ret); 
} 
function _cny_map_unit($list,$units) { 
    $ul=count($units); 
    $xs=array(); 
    foreach (array_reverse($list) as $x) { 
        $l=count($xs); 
        if ($x!="0" || !($l%4)) $n=($x=='0'?'':$x).($units[($l-1)%$ul]); 
        else $n=is_numeric($xs[0][0])?$x:''; 
        array_unshift($xs,$n); 
    } 
    return $xs; 
} 
function xiaoshudian($id){
$id=(float)number_format($id, 2, '.', '');
return $id;
}
?>