<?php
function shijian($string){
$now = time ();
	$return_str = '';
	$poss_time = ($now - $string)/60;
	if ($poss_time < 60)
	{
		$return_str = ceil($poss_time)."分钟前";
	}
	elseif ($poss_time <= 60*24)
	{
		$return_str = ceil($poss_time/60)."小时前";
	}
	elseif ($poss_time <= 7*60*24)
	{
		$return_str = ceil($poss_time/(60*24))."天前";
	}
	else
	{
		$return_str = "更早";
	}
    echo $return_str;
}
function riqi(){
	echo date("Y-m-d");
	}
function nyrsf($string){
date("Y-m-d");
}
function nyren($string){
	if ($string>0){
	$return_str=date("Y-m-d",$string);
    echo $return_str;
	}
}
function nyrcn($string){
	if ($string>0){
	$return_str=date("Y年m月d日",$string);
    echo $return_str;
	}
}
function nyrsfjq($string){
	if ($string>0){
	$return_str=date("Y年m月d日 H时i分",$string);
    echo $return_str;
	}
}
function rsf($string){
	if ($string>0){
	$return_str=date("H:i:s",$string);
    echo $return_str;
	}
}
function sf($string){
	if ($string>0){
	$return_str=date("H点i分",$string);
    echo $return_str;
	}
}?>