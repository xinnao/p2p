<?php 
require("../ckeckonline.php");
$type=$_REQUEST["type"];
$menuid=4;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>
            
            最大、最安全的网络借贷平台，专注于小额贷款、网络贷款、个人理财，为您提供最安全专业的借款、理财服务-人人贷
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
            
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<div class="left_item">
    <div class="left_title">
        <span>我的人人贷</span>
    </div>
    <div class="left_body">
        <ul id="user_info_1">
            <li id="user_info_home" onclick="getInfo(this);">
                <span>我的主页</span>
            </li>
            <li id="user_info_account" onclick="getInfo(this)">
                <span>充值提现</span>
            </li>
            <li id="user_info_credit" onclick="getInfo(this)">
                <span>人人贷认证</span>
            </li>
            <li id="user_info_inbox" onclick="getInfo(this)">
                <span>消息</span>
            </li>
        </ul>
    </div>
    <div class="left_bottom">
    </div>
</div>
<div class="left_item">
    <div class="left_title">
        <span>贷款管理</span>
    </div>
    <div class="left_body">
        <ul id="user_info_2">
            <li id="user_info_refund" onclick="getInfo(this)">
                <span>偿还贷款</span>
            </li>
            <li id="user_info_borrowed" onclick="getInfo(this)">
                <span>已发布的贷款</span>
            </li>
            <li id="user_info_borrow_stat" onclick="getInfo(this)">
                <span>贷款统计</span>
            </li>
        </ul>
    </div>
    <div class="left_bottom">
    </div>
</div>
<div class="left_item">
    <div class="left_title">
        <span>投标管理</span>
    </div>
    <div class="left_body">
        <ul id="user_info_3">
            <li id="user_info_my_invest" onclick="getInfo(this)">
                <span>我的投资</span>
            </li>
            <li id="user_info_my_favorite" onclick="getInfo(this)">
                <span>我关注的标</span>
            </li>
            <li id="user_info_my_earnings" onclick="getInfo(this)">
                <span>理财统计</span>
            </li>
            <li id="user_info_auto_bid" onclick="getInfo(this)">
            	<span>自动投标</span>
            </li>
        </ul>
    </div>
    <div class="left_bottom">
    </div>
</div>
<div class="left_item">
    <div class="left_title">
        <span>理财计划管理</span>
    </div>
    <div class="left_body">
        <ul id="user_info_4">
            <li id="user_info_finance_plan" onclick="getInfo(this)">
                <span>我的理财计划</span>
            </li>
            <li id="user_info_finance_stat" onclick="getInfo(this)">
                <span>理财计划统计</span>
            </li>
        </ul>
        <input type="hidden" id="my_finance_detail"/>
    </div>
    <div class="left_bottom">
    </div>
</div>
<div class="left_item">
    <div class="left_title">
        <span>个人设置</span>
    </div>
    <div class="left_body">
        <ul id="user_info_6">
            <li id="user_info_info" onclick="getInfo(this);return false;">
                <span>修改个人信息</span>
            </li>
          <!--  <li id="user_info_reset_password" onclick="getInfo(this)" style="display: none">
                <span>修改密码</span>
            </li> -->
         <!--    <li id="user_info_mobile" onclick="getInfo(this)">
                <span>手机绑定</span>
            </li> -->
            <li id="user_info_security" onclick="getInfo(this)">
                <span>安全设置</span>
            </li>
            <li id="user_info_oauth" onclick="getInfo(this)">
                <span>第三方账号</span>
            </li>
            <li id="user_info_notification_setting" onclick="getInfo(this)">
                <span>通知设置</span>
            </li>
            
            <li id="findCashPassword" onclick="getInfo(this)" style="display: none">
                <span>修改密码</span>
            </li>
        </ul>
    </div>
    <div class="left_bottom">
    </div>
</div>

        </div> 
        <div class="right" id="right">
        </div>
    </div>
</div>
<input type="hidden" id="type" value="<?php echo $type; ?>"/>
<input type="hidden" id="li" value=""/>
<script type="text/javascript">
$(function(){
	var t = $("#type").attr("value");
        if (t == null || t == "") {
            getInfo($("#user_info_home")[0]);
        }
        else {
        	var innerMail= ('' != '' ? '' : '');
        	var msgType = '';
        	getInfo($("#" + t)[0],innerMail,msgType);
        }
    });
</script>

<?php require("../footer.php"); ?>

        </div>
    </body>
</html>
