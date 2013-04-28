<?php
require("../../config.php"); 
include_once("../../core/class/class_db.php");
$db = new dbconn(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME,$pconnect = 0,DB_CHARSET);
$db -> select_db(DB_NAME);
$sql=str_ireplace("\\","",$sql);
function export_csv($filename,$data) { 
    header("Content-type:text/csv"); 
    header("Content-Disposition:attachment;filename=".$filename); 
    header('Cache-Control:must-revalidate,post-check=0,pre-check=0'); 
    header('Expires:0'); 
    header('Pragma:public'); 
    echo $data;
}
$str = "部门,姓名,民族,性别,证件,电话,住址,户籍,入职时间,出生时间,婚姻状况,学历,毕业学校,专业,毕业时间,紧急联系人,联系电话,合同开始时间,结束时间,备注信息\n"; 
$str = iconv('utf-8','gb2312',$str);
$sql="select * from ".TABLEPRE."member";
foreach ($db->fetch_all($sql) as $key=>$row)	
{
$bumen = iconv('utf-8','gb2312',$row['bumen']);
$name = iconv('utf-8','gb2312',$row['name']);
$zhiwei = iconv('utf-8','gb2312',$row['zhiwei']); 
$minzu = iconv('utf-8','gb2312',$row['minzu']); 
$sex = iconv('utf-8','gb2312',$row['sex']); 
$mail = iconv('utf-8','gb2312',$row['mail']);
$phone = iconv('utf-8','gb2312',$row['phone']);
$ruzhi = iconv('utf-8','gb2312',$row['ruzhi']); 
$zhengjian = iconv('utf-8','gb2312',$row['zhengjian']); 
$zhuzhi = iconv('utf-8','gb2312',$row['zhuzhi']); 
$renjj=iconv('utf-8','gb2312',$row['renjj']);
$dianhuajj=iconv('utf-8','gb2312',$row['dianhuajj']);
$zhuzhi=iconv('utf-8','gb2312',$row['zhuzhi']);
$huji=iconv('utf-8','gb2312',$row['huji']);
$htkai=iconv('utf-8','gb2312',$row['htkai']);
$htjie=iconv('utf-8','gb2312',$row['htjie']);
$chusheng=iconv('utf-8','gb2312',$row['chusheng']);
$hunyin=iconv('utf-8','gb2312',$row['hunyin']);
$xueli=iconv('utf-8','gb2312',$row['xueli']);
$xuexiao=iconv('utf-8','gb2312',$row['xuexiao']);
$zhuanye=iconv('utf-8','gb2312',$row['zhuanye']);
$biye=iconv('utf-8','gb2312',$row['biye']);
$zhuangtai=iconv('utf-8','gb2312',$row['zhuangtai']);
$msg=iconv('utf-8','gb2312',$row['msg']);
$str .= $bumen.",".$name.",".$minzu.",".$sex.",".$zhengjian.",".$phone.",".$zhuzhi.",".$huji.",".date("Y-m-d",$ruzhi).",".date("Y-m-d",$chusheng).",".$hunyin.",".$xueli.",".$xuexiao.",".$zhuanye.",".date("Y-m-d",$biye).",".$renjj.",".$dianhuajj.",".date("Y-m-d",$htkai).",".date("Y-m-d",$htjie).",".$msg."\n";
} 
$filename = 'yuangong.csv'; //设置文件名 
export_csv($filename,$str);
?>