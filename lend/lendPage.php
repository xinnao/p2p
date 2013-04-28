<?php
require("../loading.php");
$menuid=2;
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">


<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>
            
            个人贷款 - 个人理财、个人投资理财，安全稳定高回报 - 人人贷
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
    <div class="grid-2-8-2 clearfix">
       <div id="searchBar">
          <div class='clearfix green_line' id="selectTab">
                <ul>
                    <li class="right_tab_select2" id="all_biao_list" onclick="allLoans(this)" style="float: left; cursor: pointer;">
                        全部借款列表
                    </li>
                    <li class="right_tab_unselect2" id="credit_biao_list" onclick="allLoans(this)" style="float: left; cursor: pointer;">
                        信用认证标
                    </li>
                    <li class="right_tab_unselect2" id="field_biao_list" onclick="allLoans(this)" style="float: left; cursor: pointer;">
                        实地认证标
                    </li>
                    <li class="right_tab_unselect2" id="guarantee_biao_list" onclick="allLoans(this)" style="float: left; cursor: pointer;">
                        机构担保标
                    </li>
                    <li class="right_tab_unselect2" id="smart_biao_list" onclick="allLoans(this)" style="float: left; cursor: pointer;">
                        智能理财标
                    </li>
                    <li class="right_tab_unselect2" id="success_biao_list" onclick="allLoans(this)" style="float: left; cursor: pointer;">
                        最近成功借款
                    </li>
                </ul>
            </div>
           
            <div class="search">
                <div id="searchDiv" style="display: block"><input type="text" name="search" class="input f_gray searchinput" id="search" onkeydown="enterEvent(event)" value="请输入您的搜索条件" onclick="clearSearch()">&nbsp;&nbsp;<input type="button" value="查询" onclick="searchLoans()" class="searchbtnew" ></div>
            </div>  
        </div>    
        <div class="left">
            <div id="b_content" style="min-height: 500px;">
            </div>
        </div>
        <div class="right">
            
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<a href="/financeplan/listPlan!listPlan.php?"><img src="/event/yxjh/yxjh_ad_lag.jpg" /></a>
<div class="clearfix">
    <div class="layout-box clearfix">
        <div class="gray_title clearfix">
            <div class="l">按条件搜索</div>
        </div>
        <div class="cont clearfix" id="search_condition" style="height: 175px; width: 169px;">
            <form action="" method="post" id="searchByConditionForm">
                <div class="l" style="padding-left: 25px; width: 150px;height: 35px;">
                    <span class="b">等级</span>
                    <span style="padding-left: 5px;">
                        <select name="level" style="width: 80px;" id="level">
                            <option value="all">不限</option>
                            <option value="B">B以上</option>
                            <option value="C">C以上</option>
                            <option value="D">D以上</option>
                            <option value="E">E以上</option>
                        </select>
                    </span>
                </div>
                <div class="l" style="padding-left: 25px; width: 150px;height: 35px;">
                    <span class="b">利率</span>
                    <span style="padding-left: 5px;">
                        <select name="interest"  id="interest" style="width: 80px;">
                            <option value="0">不限</option>
                            <option value="10">10%以上</option>
                            <option value="12">12%以上</option>
                            <option value="15">15%以上</option>
                            <option value="18">18%以上</option>
                        </select>
                    </span>
                </div>
                <input type="hidden" name="hasAssure" value="false">
                <div class="l" style="padding-left: 25px; width: 150px;height: 35px;">
                    <span class="b">期限</span>
                    <span style="padding-left: 5px;">
                        <select name="months" style="width: 80px;" id="months">
                            <option value="0">不限</option>
                            <option value="12">12个月以内</option>
                            <option value="18">18个月以上</option>
                        </select>
                    </span>
                </div>
                <div class="l" style="width: 150px;height: 35px;">
                    <span class="b">剩余时间</span>
                    <span style="padding-left: 5px;">
                        <select name="leftTime" style="width: 80px;" id="leftTime">
                            <option value="0">不限</option>
                            <option value="1">1天以内</option>
                            <option value="3">3天以内</option>
                        </select>
                    </span>
                </div>
                <div style="text-align:center; margin:5px 0;height:30px;width: 150px;">
                    <img src="../images/search.png" alt="" style="cursor: pointer;margin-left:45px" onclick="searchByCondition()"/>
                </div>
            </form>
        </div>
        <div class="top">
        </div>
    </div>
</div>

<div class="clearfix">
    <div class="layout-box clearfix">
        <div class="gray_title clearfix">
            <div class="l">收益计算器</div>
        </div>
        <div class="cont clearfix" id="calculate" style="width: 169px;">
            <div style="width: 160px;height: 35px;">
                <span class="b">投资金额</span>
                <span style="padding-left: 5px;">
                    <input type="text" name="amount" id="calculateAmount" style="width: 70px;"> 元
                </span>
            </div>
            <div style="padding-left: 12px; width: 160px;height: 35px;">
                <span class="b">年利率</span>
                <span style="padding-left: 5px;">
                    <input type="text" name="interest" id="calculateInterest" style="width: 70px;"> %
                </span>
            </div>
            <div style="width: 160px;height: 35px;">
                <span class="b">投资期限</span>
                <span style="padding-left: 5px;">
                    <input type="text" name="year" id="calculateMonth" style="width: 70px;"> 月
                </span>
            </div>
            <div style="width: 160px;height: 25px;">
                <span class="b">还款方式</span>
                <span style="padding-left: 5px;">
                    <select id="repayType">
                        <option value="DEBX">等额本息</option>
                        <option value="FXHB">付息还本</option>
                    </select>
                </span>
            </div>
            <div style="text-align:center; margin:7px 0;height:30px;width: 150px;">
                <img src="../images/calculate.png" alt="" style="cursor: pointer; margin-left:45px" onclick="calculate()"/>
            </div>
            <div style="border-top:1px solid #C4CDD3;padding-top:10px;height:30px">
            	<span>本息合计：</span><span id="benxi" style="float:right;color:red"></span>
            </div>
        </div>
        <div class="top">
        </div>
    </div>
</div>

<div class="clearfix">
    <a href="../my/userInfoPage.php?type=user_info_auto_bid" target="_blank">
        <img src="../ad/autobid_ad.png" width="195px"/>
    </a>
</div>
<script type="text/javascript">
    $(function(){
        $.ajax({
            url:"../lend/topTips.php?",
            dataType:"html",
            timeout:10000,
            error: function(){
                $("#tip_list").php($("#loadingFail").php());
            },
            success: function(response){
                $("#tip_list").php(response);
            },
            beforeSend: function(){
                $("#tip_list").php($("#loading").php());
            }
        });
    });

    function searchByCondition(){
        clearTab("all_biao_list");
        $("#all_biao_list").removeClass();
        $("#all_biao_list").addClass("right_tab_select");
        $("#all_biao_list").show();
        $("#biao_list").show();
        $("#searchDiv").show();
        $.ajax({
            data: $("#searchByConditionForm").serialize(),
            url:"../lend/searchByCondition.php?",
            dataType:"html",
            timeout:10000,
            error: function(){
                $("#b_content").php($("#loadingFail").php());
            },
            success: function(response){
                $("#b_content").php(response);
            },
            beforeSend: function(){
                $("#b_content").php($("#loading").php());
            }
        });
    }

    function calculate(){
        
	var amount = $("#calculateAmount").val();
		var interest = $("#calculateInterest").val();
		var month = $("#calculateMonth").val();
		var inter;
		var amo;
		var mon;

		if ((amount.replace(/[ ]/g, "")) == ""
				|| (amount.replace(/[ ]/g, "")) == null || amount == ""
				|| amount == null) {
			alert("请输入初始投资");
			return;
		} else {
			amo = amount.Trim();
			if (/^(([1-9]{1}\d*)|([0]{1}))(\.(\d){1,2})?$/.test(amo) == false) {
				alert("初始投资只能为整数或者小数且最多只能有两位小数");
				return;
			} else {
				if (amo > 1000000) {
					alert("初始投资为100万以下");
					return;
				}
			}
		}
		if ((interest.replace(/[ ]/g, "")) == ""
				|| (interest.replace(/[ ]/g, "")) == null || interest == ""
				|| interest == null) {
			alert("请输入年利率");
			return;
		} else {
			inter = interest.Trim();
			if (/^(([1-9]{1}\d*)|([0]{1}))(\.(\d){1,2})?$/.test(inter) == false) {
				alert("年利率只能为整数或者小数且最多只能有两位小数");
				return;
			} else {
				if (inter >= 100) {
					alert("年利率必须在100%以下");
					return false;
				}
			}
		}
		if ((month.replace(/[ ]/g, "")) == ""
				|| (month.replace(/[ ]/g, "")) == null || month == ""
				|| month == null) {
			alert("请输入投资期限");
			return;
		} else {
			mon = month.Trim();
			if (/^(([1-9]{1}\d*)|([0]{1}))$/.test(mon) == false) {
				alert("投资期限只能整数个月");
				return;
			} else {
				if (mon > 100) {
					alert("投资期限为100个月以内");
					return;
				}
			}
		}
		var type = $("#repayType").val().trim();
		$.ajax({
			url : "../calculator.php?amount=" + amo + "&apr=" + inter
					+ "&repayTime=" + mon + "&type=" + type,
			type : "GET",
			dataType : 'json',
			timeout : 10000,
			error : function() {
				alert("服务器内部错误！");
			},
			success : function(data) {
				$("#benxi").php("￥" + formatNum(data.amountCount, 2));
			}
		});
	}

	String.prototype.Trim = function() {
		return this.replace(/(^\s*)|(\s*$)/g, "");
	}
</script>
        </div>
    </div>
</div>
<input id="type" value="" type="hidden">
<script type="text/javascript">
    $(function(){
        var id=$("#type").val().toString();
        if(id == null || id == ""){
            id="all_biao_list";
        }else{
            $("#all_biao_list").removeClass();
            $("#all_biao_list").addClass("right_tab_unselect2");
            $("#"+id).removeClass();
            $("#"+id).addClass("right_tab_select2");
        }
        $("#searchDiv").show();

        $.ajax({
            url: "../lend/loanList.php?id="+id+"&pageIndex=1&orderid=0",
            dataType: 'html',
            timeout: 10000,
            error: function(){
                $("#b_content").php($("#loadingFail").php());
            },
            success: function(response){
                $("#b_content").php(response);
            },
            beforeSend: function(){
                $("#b_content").php($("#loading").php());
            }
        });
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
    <script type="text/javascript" src="/theme/default/js/kefu.js"></script>
<script type="text/javascript">
    var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
    document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F71ce3105a964d0c3748e04584e5af0b9' type='text/javascript'%3E%3C/script%3E"));
</script>

<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-17841954-1']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
</script>
</html>
