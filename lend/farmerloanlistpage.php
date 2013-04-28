<?php
require("../loading.php");
$menuid=2;
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">


<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>
            
            爱心助农 - 个人理财、个人投资理财，安全稳定高回报 - 人人贷
        </title>
        <meta name="google-site-verification" content="oQXrGa_mTgxg7joO0himE0QuFeqOVmm-SDC1H2dzT4c" />
        <script type="text/javascript" src="/theme/default/js/jquery-1.4.2.min.js"></script>
        <script type="text/javascript">
        if(!/msie 6/i.test(navigator.userAgent))document.write('\<script type=\"text/javascript\" src=\"/theme/default/js/jquery.alert.min.js\"\>\<\/script\>');
        </script>
        <script type="text/javascript" src="/theme/default/js/jquery.form.js"></script>
        <script type="text/javascript" src="/theme/default/js/jquery.validate.min.js"></script>
        <script type="text/javascript" src="/theme/default/js/jquery.pagebar.1.0.0.js"></script>
        <script type="text/javascript" src="/theme/default/js/jcrop/js/jquery.Jcrop.min.js"></script>
        <script type="text/javascript" src="/theme/default/js/nyroModal-1.6.2/js/jquery.nyroModal-1.6.2.pack.js"></script>
        <script type="text/javascript" src="/theme/default/js/main.js?v=20130219"></script>
        <script type="text/javascript" src="/theme/default/js/msgpush/init_push.js?v=20130131"></script>
        <link rel="stylesheet" href="/theme/default/js/nyroModal-1.6.2/styles/nyroModal.full.css" type="text/css" />
        <link rel="stylesheet" href="/theme/default/js/jcrop/css/jquery.Jcrop.min.css" type="text/css" />
        <link href="/theme/default/css/style.css?v=20130411" rel="stylesheet" type="text/css" media="screen"/>
</head>
<body>
<div id="page" class="session_invalid_tag">
<?php require("../header.php"); ?><div id="content" class="clearfix">
    <div style="margin: 5px 5px 0px auto;  position: relative;" >
        <span>
            <img src="../images/farmerloan/farmerloan_banner.png"  usemap="#Map" border="0" alt="爱心助农"/>
        </span>
        <!--        background: url('../images/aboutFinacing/play.png') no-repeat scroll 0pt 0pt transparent;-->
        <span style="display: block; height: 60px; width: 60px; position: absolute; cursor: pointer;  top: 80px; left: 750px;"><a target="_blank"  href="http://xlpan.com/224647533/file/ecbd9fe8-67b0-4b7b-b808-b1c671adae1d"><img alt=""  class="logo_hack" src="../images/aboutFinacing/play.png" /></a></span>
        <map name="Map" id="Map">
            <area shape="rect" coords="650,37,920,190" href="../lend/aboutFinancing.php?type=farmerloan">
        </map>
    </div>
    <div style="width: 890px; height:69px; background: url(../images/farmerloan/agency_intro.png); padding-left:70px; padding-top: 10px;" >
        <span style="font-size: 14px; font-weight: bold;">
            合作机构介绍
        </span><br/>
        湖南省湘西州民富鑫荣小额信贷服务中心是通过原UNDP项目改制，由商务部中国国际经济技术交流中心与湘西州共同发起成立的新型非盈利小额信贷机构，<br/>
        目的是通过向城乡的贫困、低收入人群和微型企业（个体工商户）提供可持续的小额信贷服务，帮助他们创收发展。
    </div>
    <div class="grid-2-2-8 clearfix" style="margin-top:5px;">
        <div class='clearfix'>
            <ul>
                <li class="right_tab_select" id="framer_loan_list" onclick="allFarmerLoans(this)" style="float: left; cursor: pointer; padding: 0px 1px;">
                    助农列表
                </li>
                <li class="right_tab_unselect" id="farmer_loan_closed_list" onclick="allFarmerLoans(this)" style="float: left; cursor: pointer; padding: 0px 1px;">
                    已还清列表
                </li>
            </ul>
        </div>
        <div class="tab_interval_green">
        </div>
        <div id="b_content"style="min-height:500px;">
        </div>
    </div>
</div>
<script type="text/javascript">
    $.ajax({
        url:"../lend/getfaramerloanbystatus.php?pageIndex=1&orderid=0&id=framer_loan_list",
        type:"POST",
        dataType: "html",
        error: function(){
            $("#b_content").php($("#loadingFail").php());
        },
        success: function(data){
            $("#b_content").php(data);
        },
        beforeSend: function(){
            $("#b_content").php($("#loading").php());
        }
    });
</script>
<div id="footer">
    <div class="footer_blue"></div>
    <div class="clearfix">
        <div id="footernav">
            <ul>
                <li class="p"><img src="/images/footer_k_03.gif"><ul><li><a href="/bbs/posts/list/1809.page">常见问题</a></li><li> <a href="/guarantee/aboutp2p.php?v=20130225"> 平台原理</a></li><li> <a href="/borrow/aboutBorrowPage.php?"> 如何借款</a></li><li><a href="/lend/aboutFinancing.php?">如何理财</a></li></ul></li>
                <li class="p"><img src="/images/footer_k_05.gif"><ul><li><a href="/guarantee/aboutUs.php#go_media">媒体报道</a></li><li><a href="/guarantee/aboutUs.php#go_contact">联系我们</a></li><li><a href="/guarantee/aboutUs.php#go_join_us">加入我们</a></li><li><a href="/guarantee/aboutUs.php#go_expert">专家顾问</a></li></ul></li>
                <li class="p"><img src="/images/footer_k_07.gif"><ul><li><a href="/guarantee/index.php">本金保障计划</a></li><li><a href="/guarantee/aboutlaws.php?v=20130225">政策法规</a></li><li><a href="/guarantee/details.php#go_zhb">隐私保护</a></li></ul></li>
                <li class="p" style="background:none"><img src="/images/footer_k_09.gif"><ul><li><a href="http://blog.sina.com.cn/u/1784647287">新浪博客</a></li><li><a href="http://t.sina.com.cn/edaitong365">新浪微博</a></li><li>手机客户端</li><li><a href="/guarantee/sitemap.php">网站地图</a></li></ul></li>
            </ul>
        </div>
    </div>
    <div class="h10"></div>
    <div id="copy">
        <p><span style="color:#e39538">联系我们：service@edaitong365.com</span><span style="color:#7D7E74; margin-left:20px;">人人贷商务顾问(北京)有限公司 </span><a style="margin-left:20px" href="/guarantee/icp.php">京ICP证 100953号</a></p>
        <p style="color:#7D7E74;">&copy; 2010 人人贷 All rights reserved</p>
    </div>
</div>

        </div>
    </body>
</html>
