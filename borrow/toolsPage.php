<?php
require("../loading.php");
$menuid=3;
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">


<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>
            
            工具箱 - 提供小额贷款、信用贷款、无抵押贷款、购车贷款，更低的贷款利率 - 人人贷
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
<?php require("../header.php"); ?>
<div id="content" class="clearfix">
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
<?php require("../footer.php"); ?>
        </div>
    </body>
</html>