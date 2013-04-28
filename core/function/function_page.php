<?php
function page($pageNum,$count,$key)
{
    $off_set=4;//偏移
    $page_pel=9;//面板容量
    //$count=ceil($pg_last/$pagesize);   //总页数
    if($count<=$page_pel){
        $minpage=1;                    //分页导航最小页值
        $maxpage=$count;               //分页导航最大页值
    }
    if($count>$page_pel){
        if(($pageNum-$off_set)>0){
            $minpage=$pageNum-$off_set;
        }else{
            $minpage=1;
        }
        if(($pageNum+$off_set)<=$count){
            $maxpage=$pageNum+$off_set;
        }else{
            $minpage=$count-$off_set*2;
            $maxpage=$count;
        }
        if(($pageNum+$off_set)<$page_pel){
            $minpage=1;
            $maxpage=$page_pel;
        }
    }
    $url='';
    $url.="<div id='page'>";
    if($pageNum==1){
        $url.="<span class='disabled'>首页</span>";
    }else{
        $url.="<a href='?pageNum=1&".$key."'>首页</a>";
    }
    if($pageNum>1){
        $url.="<a href='?pageNum=".($pageNum-1)."&".$key."'>上一页</a>";
    }else{
        $url.="<span class='disabled'>上一页</span>";
    }
    for($i=$minpage;$i<=$maxpage;$i++){
        if($i==$pageNum){
            $url.="<span class='current'>".$i."</span>";
        }else{
            $url.="<a href='?pageNum=".$i."&".$key."'>".$i."</a>";
        }
    }
    if($pageNum<$count){
        $url.="<a href='?pageNum=".($pageNum+1)."&".$key."'>下一页</a><a href='?pageNum=".$count."&".$key."'>尾页</a>";
    }else{
        $url.="<span class='disabled'>下一页</span><span class='disabled'>尾页</span>";
    }
    $url.="</div>";
    return $url;
}?>