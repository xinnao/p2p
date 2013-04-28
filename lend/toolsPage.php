<?php
require("../loading.php");
$menuid=2;
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">


<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>
            
            工具箱 - 个人理财、个人投资理财，安全稳定高回报 - 人人贷
        </title>
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
    <div class="grid-2-2-8 clearfix">
        <div class="left">
            <div class="left_item">
                <div class="left_title">
                    <span>工具箱</span>
                </div>
                <div class="left_body">
                    <ul id="tools_1">
                        <li id="tools_calculate" onclick="getTools(this)">
                            <span id="calculatorSpan">利息计算器</span>
                        </li>
                        <li id="tools_contact" onclick="getTools(this)">
                            <span>借款协议范本</span>
                        </li>
                        <li id="tools_mobile" onclick="getTools(this)">
                            <span>手机号码查询</span>
                        </li>
                        <li id="tools_ip" onclick="getTools(this)">
                            <span>IP地址查询</span>
                        </li>
                        <!--
                        <li id="tools_blackList" onclick="getTools(this)">
                        <span>借入者黑名单</span>
                        </li>-->
                    </ul>
                </div>
                <div class="left_bottom">
                </div>
            </div>
        </div>
        <div class="right">
        </div>
    </div>
</div>
<input type="hidden" id="type" value=""/>
<script type="text/javascript">
    $(function(){
        var t = $("#type").attr("value");
        if (t == null || t == "") {
            getTools($("#tools_calculate")[0]);
        }
        else {
            getTools($("#" + t)[0]);
        }
        var url = window.location.href;
        if(url.indexOf("lend")!=-1){
        	$("#calculatorSpan").php("收益计算器");
        } else {
        	$("#calculatorSpan").php("利息计算器");
        }
    });
</script>

<div id="footer">
    <div class="footer_blue"></div>
    <div class="clearfix">
        <div id="footernav">
            <ul>
                <li class="p"><img src="/images/footer_k_03.gif"><ul><li><a href="/bbs/posts/list/1809.page">常见问题</a></li><li> <a href="/guarantee/aboutp2p.php?v=20130225"> 平台原理</a></li><li> <a href="/borrow/aboutBorrowPage.php"> 如何借款</a></li><li><a href="/lend/aboutFinancing.php">如何理财</a></li></ul></li>
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
