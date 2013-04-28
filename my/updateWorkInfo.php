<?php
if ("userInfo"==$_POST["fromType"]){
$danwei=$_POST["office"];
$zhiye=$_POST["jobType"];
$sheng=$_POST["province"];
$shi=$_POST["city"];
$leibie=$_POST["officeType"];
$hangye=$_POST["officeDomain"];
$guimo=$_POST["officeScale"];
$zhiwei=$_POST["position"];
$shouru=$_POST["salary"];
$nian=$_POST["workYears"];
$qu=$_POST["workquphone"];
$hao=$_POST["worknumphone"];
$gzmail=$_POST["workEmail"];
$dizhi=$_POST["officeAddress"];
$zxren=$_POST["urgentContact"];
$zxx=$_POST["urgentRelation"];
$zxm=$_POST["urgentMobile"];
$qtren=$_POST["urgentContact2"];
$qtx=$_POST["urgentRelation2"];
$qtm=$_POST["urgentMobile2"];
$sql="update ".TABLEPRE."member set danwei,zhiye,sheng,shi,leibie,hangye,guimo,zhiwei,shouru,nian,qu,hao,gzmail,dizhi,zxren,zxx,zxm,qtren,qtx,qtm where uid='$uid'";
mysql_query($sql) or die(mysql_error());
	echo '恭喜已经完成信息更新';
	exit;
	}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">


<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>
            
            成为借入者 - 提供小额贷款、信用贷款、无抵押贷款、购车贷款，更低的贷款利率 - 人人贷
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
        <link rel="shortcut icon" href="/favicon.ico">
     
     
        <meta name="description" content="人人贷-提供小额贷款、短期贷款、无抵押贷款、信用贷款、购车贷款，淘宝卖家贷款，网商贷款、享受更低的贷款利率，更便捷的借款流程" />
     
        <meta name="keywords" content="网络借贷，网络贷款，借贷 网络平台，民间借贷，小额贷款，无抵押贷款，信用贷款，投资理财，人人贷"/>
    </head>
    <body>
        <div id="loading" style="display:none">
            <br/>
            <br/>
            <div align='center' class="clearfix"><img width="32" height="32" src='/images/loading.gif' style="vertical-align:middle;" alt="正在加载数据中" title="正在加载数据中"/>正在加载数据中...</div>
            <br/>
            <br/>
        </div>
        <div id="loadingFail" style="display:none">
            <br/>
            <br/>
            <div align='center' class="clearfix"><img width="16" height="16" src='/images/answer_error.jpg' style="vertical-align:middle;" alt="数据加载失败，请稍后重试" title="数据加载失败，请稍后重试"/>数据加载失败，请稍后重试。</div>
            <br/>
            <br/>
        </div>
        <div id="page" class="session_invalid_tag">
<?php require("../header.php"); ?>
 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">


<div class="layout-box">
    <div class="top">
        <b class="cor-l"></b>
        <b class="cor-r"></b>
    </div>
    <div class="cont">
			
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<script type="text/javascript" src="../theme/default/js/city.js"></script>
<script type="text/javascript" src="../theme/default/js/info.js"></script>
<script type="text/javascript" src="../theme/default/js/jquery.ui.datepicker.min.js"></script>
<link rel="stylesheet" href="../theme/default/css/jquery.ui.core.css" type="text/css"/>
<link rel="stylesheet" href="../theme/default/css/jquery.ui.theme.css" type="text/css"/>
<link rel="stylesheet" href="../theme/default/css/jquery.ui.datepicker.css" type="text/css"/>
<style>
.confirmBox {
    background: none repeat scroll 0 0 #FFFFFF;
    border: none;
    font-size: 14px;
    height: 335px;
    left: 240px;
    position: absolute;
    top: 180px;
    width: 467px;
    z-index: 9999;
	background:url('../theme/default/images/fromqudao_bg.png') no-repeat;
}
.confirmBoxText{ padding:40px 38px;}
.confirmBoxText p{ text-indent:30px;}
.confirmBoxBts{ padding:10px 40px;}
.confirmBoxBt{ width:159px; height:34px; line-height:34px; text-align:center; cursor:pointer; margin-left:26px;background:url('../theme/default/images/fromqudao_bt.png') no-repeat; font-weight:bold; display:inline;}
#callkefu{ width:139px; padding-left:20px;}
#callcancel{ background-position:right 0; color:#fff;}
</style>
<script type="text/javascript">
function openBox(){
	document.getElementById('page').style.position="relative";
    var overLay = document.createElement('div');
    overLay.setAttribute('id', 'mask');
    overLay.style.display = 'block';
    overLay.style.position = 'fixed';
    overLay.style.top = '0';
    overLay.style.left = '0';
    overLay.style.background = '#5c5c5c';
    overLay.style.zIndex = '100';
    overLay.style.width = '100%';
    overLay.style.height = '100%';
    if ($.browser.msie) {
        overLay.style.filter = 'Alpha(Opacity=60)';
    }
    else {
        overLay.style.opacity = '0.6';
    }
    if ($.browser.version < 7) {
        overLay.style.position = 'absolute';
		overLay.style.zIndex = '100';
        var w = 960 + 'px';
        var h = Math.max(document.body.scrollHeight, document.documentElement.clientHeight)+100 + 'px';
        overLay.style.width = w;
        overLay.style.height = h;
        overLay.innerHTML = '<iframe style="width:100%;height:100%;background:#5c5c5c;opacity:0.6;filter:Alpha(Opacity=0.6);" frameborder="0"></iframe>';
    }
   
    $("#page").append(overLay);
	$(".confirmBox").show();
	
}

function confirmBox(type){
	if(type=="yes"){
		window.open('http://b.qq.com/webc.htm?new=0&sid=4000278080&eid=218808P8z8p8R8y8q8y8Q&o=www.edaitong365.com&q=7&ref='+document.location, '_blank', 'height=544, width=644,toolbar=no,scrollbars=no,menubar=no,status=no');
		$(".confirmBox").remove();
		$("#mask").remove();
	}else{
		$(".confirmBox").remove();
		$("#mask").remove();
	}
}

$(function() {
	$('.disable').each(function(){
		var value=$(this).val();
		var name=$(this).attr('name');
		var hidden="<input type='hidden' name='"+name+"' value='"+value+"' />";
		if($(this).attr('type')=='radio'&&!$(this)[0].checked){
			 $(this).attr("disabled","disabled").removeAttr('name');
		}else{
			 $(this).attr("disabled","disabled").removeAttr('name').after(hidden); 
		} 
	});
	var partner = '';
	if(null != partner && partner != ''){
		openBox();
	}
});
</script>
<script type="text/javascript">	$(function() {
		//tab选则
		var whichtab = "loan";
		if(whichtab == null || whichtab == ""){
			return;
		}else if(whichtab == 'loan'){
			//alert("进入标填写页面");
			$("#user_asset_info").click();
			$('#user_advance_info,#user_company_info,#user_asset_info').show();
			$('#user_financial_info').hide();
		}else if(whichtab == 'detailMessage'){
			//alert("进入用户详细信息录入页面");
			$('#user_advance_info').show();
			$('#user_company_info,#user_asset_info,#user_financial_info').hide();
			$("#user_advance_info").click();
		}else if(whichtab == "workMessage"){
			//alert("进入用户工作信息录入页面");
			$('#user_advance_info,#user_company_info').show();
			$('#user_asset_info,#user_financial_info').hide();
			$("#user_company_info").click();
			
		}else{
			window.location.href="/index.php";
		}
	});
</script>
 <div class="confirmBox" style="display:none;">
    <div class="confirmBoxText">
      <p style="text-indent:0">亲爱的用户：</p>
      <p>非常感谢您能注册人人贷，请等待客服人员联系您，保证您的手机畅通。若您已经了解，可直接点击下一步，进行资料的上传。</p>
      <p>信用财富，人人享有。感谢您对人人贷的支持。</p>
    </div>
    <div class="confirmBoxBts clearfix">
     <!--  <div class="confirmBoxBt l" id="callkefu" onclick="confirmBox('yes')">联系客服</div> -->
      <div class="confirmBoxBt l" id="callcancel" onclick="confirmBox('no')">下一步</div>
    </div>
  </div>
<div class="clearfix" id="content">
	<div class="layout-box">
		<div class="toptitle">申请贷款</div>
		<div class="line950"></div>
		<div class="clearfix">
			<div class="leftlendstep">
				<div class="leftlendstepbox vstep1">
					<ul>
						<li>申请贷款</li>
						<li>上传材料</li>
						<li>筹集借款</li>
						<li>获得贷款</li>
					</ul>
				</div>
			</div>
			<div class="rightlendstep">
				<div class="grid-2-2-8 clearfix" style="width: 100%">
					<div class="right green_line" style="width: 100%">
						<ul>
							<li class="right_tab_select2" onclick="tabIt2(this)"
								id="user_advance_info">个人详细信息</li>
							<li style="display: none" class="right_tab_unselect2"
								onclick="tabIt2(this)" id="user_company_info">工作认证信息</li>
							<li style="display: none" class="right_tab_unselect2"
								onclick="tabIt2(this)" id="user_asset_info">贷款申请</li>
							<li style="display: none" class="right_tab_unselect2"
								onclick="tabIt2(this)" id="user_financial_info">财务状况</li>
						</ul>
					</div>
				</div>
				<div style="display: block" id="user_advance_info_content">
					<form method="post" id="userDetailInfoFormForUpdate" action="../my/updateDetailInfo.php?">
						<input type="hidden" name="fromType" value="finishAdvanceInfo" />
						
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<div style="text-align: center; padding: 5px 0"></div>
<div class="tips" style="width: auto">
	<span class="f_red b">*</span> 为必填项，所有资料均会严格保密。
</div>
<div style="text-align: center; padding: 5px 0"></div>
<div class="item_group" style="width: auto">个人详细信息</div>
<div class="user_info_box clearfix" style="width: auto">
	
	<div class="user_info_item">
		<span class="user_info_item_left"> <span class="f_red b">*</span>
			真实姓名：
		</span> 
		<span> 
			于立杰
		</span>
	</div>
	<div class="user_info_item">
		<span class="user_info_item_left"><span class="f_red b">*</span>身份证号：</span> 
		<span> 
		13**** **** **** ****
		</span> 
	</div>
	
	
	
	<div class="user_info_item">
		<span class="user_info_item_left"><span class="f_red b">*</span>手机号码：</span> 
		<span> 135 **** 6206</span> 
	</div>
	
	
	
	<div class="user_info_item">
		<span class="user_info_item_left"><span class="f_red b">*&nbsp;</span>性&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;别：</span>
		<span> 男</span>
	</div>
	<div class="user_info_item">
		<span class="user_info_item_left"><span class="f_red b">*</span>出生日期：</span> 
		<span> 1983-09-15</span>
	</div>
	
	<div class="user_info_item">
		<span class="user_info_item_left"><span class="f_red b">*</span>
			最高学历：</span> <span> <select name="graduation" id="graduation"
			>
				<option value="">请选择</option>
				
					<option value="高中或以下"
						>
						高中或以下
					</option>
				
					<option value="大专"
						>
						大专
					</option>
				
					<option value="本科"
						>
						本科
					</option>
				
					<option value="研究生或以上"
						>
						研究生或以上
					</option>
				
		</select>
		</span>
	</div>
	<div class="user_info_item">
		<span class="user_info_item_left"> 入学年份：</span> <span> <select
			name="graduatedYear" id="graduatedYear"
			>
				
					<option value="2012"
						>2012</option>
				
					<option value="2011"
						>2011</option>
				
					<option value="2010"
						>2010</option>
				
					<option value="2009"
						>2009</option>
				
					<option value="2008"
						>2008</option>
				
					<option value="2007"
						>2007</option>
				
					<option value="2006"
						>2006</option>
				
					<option value="2005"
						>2005</option>
				
					<option value="2004"
						>2004</option>
				
					<option value="2003"
						>2003</option>
				
					<option value="2002"
						>2002</option>
				
					<option value="2001"
						>2001</option>
				
					<option value="2000"
						>2000</option>
				
					<option value="1999"
						>1999</option>
				
					<option value="1998"
						>1998</option>
				
					<option value="1997"
						>1997</option>
				
					<option value="1996"
						>1996</option>
				
					<option value="1995"
						>1995</option>
				
					<option value="1994"
						>1994</option>
				
					<option value="1993"
						>1993</option>
				
					<option value="1992"
						>1992</option>
				
					<option value="1991"
						>1991</option>
				
					<option value="1990"
						>1990</option>
				
					<option value="1989"
						>1989</option>
				
					<option value="1988"
						>1988</option>
				
					<option value="1987"
						>1987</option>
				
					<option value="1986"
						>1986</option>
				
					<option value="1985"
						>1985</option>
				
					<option value="1984"
						>1984</option>
				
					<option value="1983"
						>1983</option>
				
					<option value="1982"
						>1982</option>
				
					<option value="1981"
						>1981</option>
				
					<option value="1980"
						>1980</option>
				
					<option value="1979"
						>1979</option>
				
					<option value="1978"
						>1978</option>
				
					<option value="1977"
						>1977</option>
				
					<option value="1976"
						>1976</option>
				
					<option value="1975"
						>1975</option>
				
					<option value="1974"
						>1974</option>
				
					<option value="1973"
						>1973</option>
				
					<option value="1972"
						>1972</option>
				
					<option value="1971"
						>1971</option>
				
					<option value="1970"
						>1970</option>
				
					<option value="1969"
						>1969</option>
				
					<option value="1968"
						>1968</option>
				
					<option value="1967"
						>1967</option>
				
					<option value="1966"
						>1966</option>
				
					<option value="1965"
						>1965</option>
				
					<option value="1964"
						>1964</option>
				
					<option value="1963"
						>1963</option>
				
					<option value="1962"
						>1962</option>
				
					<option value="1961"
						>1961</option>
				
					<option value="1960"
						>1960</option>
				
					<option value="1959"
						>1959</option>
				
					<option value="1958"
						>1958</option>
				
					<option value="1957"
						>1957</option>
				
					<option value="1956"
						>1956</option>
				
					<option value="1955"
						>1955</option>
				
					<option value="1954"
						>1954</option>
				
					<option value="1953"
						>1953</option>
				
					<option value="1952"
						>1952</option>
				
					<option value="1951"
						>1951</option>
				
					<option value="1950"
						>1950</option>
				
					<option value="1949"
						>1949</option>
				
					<option value="1948"
						>1948</option>
				
					<option value="1947"
						>1947</option>
				
					<option value="1946"
						>1946</option>
				
					<option value="1945"
						>1945</option>
				
					<option value="1944"
						>1944</option>
				
					<option value="1943"
						>1943</option>
				
					<option value="1942"
						>1942</option>
				
					<option value="1941"
						>1941</option>
				
					<option value="1940"
						>1940</option>
				
					<option value="1939"
						>1939</option>
				
					<option value="1938"
						>1938</option>
				
					<option value="1937"
						>1937</option>
				
					<option value="1936"
						>1936</option>
				
					<option value="1935"
						>1935</option>
				
					<option value="1934"
						>1934</option>
				
					<option value="1933"
						>1933</option>
				
					<option value="1932"
						>1932</option>
				
					<option value="1931"
						>1931</option>
				
					<option value="1930"
						>1930</option>
				
					<option value="1929"
						>1929</option>
				
					<option value="1928"
						>1928</option>
				
					<option value="1927"
						>1927</option>
				
					<option value="1926"
						>1926</option>
				
					<option value="1925"
						>1925</option>
				
					<option value="1924"
						>1924</option>
				
					<option value="1923"
						>1923</option>
				
					<option value="1922"
						>1922</option>
				
					<option value="1921"
						>1921</option>
				
					<option value="1920"
						>1920</option>
				
					<option value="1919"
						>1919</option>
				
					<option value="1918"
						>1918</option>
				
					<option value="1917"
						>1917</option>
				
					<option value="1916"
						>1916</option>
				
					<option value="1915"
						>1915</option>
				
					<option value="1914"
						>1914</option>
				
					<option value="1913"
						>1913</option>
				
					<option value="1912"
						>1912</option>
				
					<option value="1911"
						>1911</option>
				
					<option value="1910"
						>1910</option>
				
					<option value="1909"
						>1909</option>
				
					<option value="1908"
						>1908</option>
				
					<option value="1907"
						>1907</option>
				
					<option value="1906"
						>1906</option>
				
					<option value="1905"
						>1905</option>
				
					<option value="1904"
						>1904</option>
				
					<option value="1903"
						>1903</option>
				
					<option value="1902"
						>1902</option>
				
					<option value="1901"
						>1901</option>
				
					<option value="1900"
						>1900</option>
				
		</select>
		</span>
	</div>
	<div class="user_info_item">
		<span class="user_info_item_left"> 毕业院校：</span> <span> <input
			value=""
			class="input180 "
			name="university" id="university">
		</span>
	</div>
	<div class="user_info_item">
		<span class="user_info_item_left"> <span class="f_red b">*</span>
			婚姻状况：
		</span> 
		<span> 
			<input type="radio" value="已婚" name="marriage"
			  > 已婚
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
			<input type="radio" value="未婚" name="marriage"
			checked='checked'
			 > 未婚
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
			<input type="radio" value="离异" name="marriage"
			  > 离异
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
			<input type="radio" value="丧偶" name="marriage"
			 > 丧偶
		</span> <label style="display: none" class="error" for="marriage">
			请选择您的婚姻状况 </label>
	</div>

	<div class="user_info_item">
		<span class="user_info_item_left"><span class="f_red b">*</span>
			有无子女：</span> <span> <input type="radio" value="true" name="hasChild"
			>
			有
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="radio" value="false" name="hasChild"
			checked='checked'
			 id="hasNoChild"> 无
		</span> <label style="display: none" class="error" for="hasChild">
			请选择您是否有子女 </label>
	</div>

	<div class="user_info_item">
		<span class="user_info_item_left"><span class="f_red b">*</span>
			是否有房：</span> <span> <input type="radio" value="true" name="hasHouse"
			 onclick="hashouse(this);"
			> 有
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="radio" value="false" name="hasHouse"
			checked='checked'
			 onclick="hashouse(this);"
			> 无
		</span> <label style="display: none" class="error" for="hasHouse">
			请选择您是否有房 </label>
	</div>

	<div class="user_info_item">
		<span class="user_info_item_left"><span class="f_red b">*</span>
			有无房贷：</span> <span> <input type="radio" value="true" name="houseLoan"
			>
			有
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="radio" value="false" name="houseLoan"
			checked='checked'>
			无
		</span> <label style="display: none" class="error" for="hasloan">
			请选择您是否有贷款 </label>
	</div>

	<div class="user_info_item">
		<span class="user_info_item_left"><span class="f_red b">*</span>
			是否有车：</span> <span> <input type="radio" value="true" name="hasCar"
			 onclick="hacar(this);"
			> 有
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="radio" value="false" name="hasCar"
			checked='checked'
			 onclick="hacar(this);"
			> 无
		</span> <label style="display: none" class="error" for="hasCar">
			请选择您是否有车 </label>
	</div>

	<div class="user_info_item">
		<span class="user_info_item_left"><span class="f_red b">*</span>
			有无车贷：</span> <span> <input type="radio" value="true" name="carLoan"
			> 有
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="radio" value="false" name="carLoan"
			checked='checked'> 无
		</span> <label style="display: none" class="error" for="hasloan">
			请选择您是否有贷款 </label>
	</div>
	<div class="user_info_item">
		<span class="user_info_item_left"><span class="f_red b">*</span>
			籍贯：</span> <span> <select name="homeProvince" id="areaProvince_home"
			onchange="PC.initCity('areaProvince_home','areaCity_home','');"
			>
		</select> <select name="homeCity" id="areaCity_home"
			>
		</select> <label for="homeCity" class="error" style="display: none">
				请选择您的籍贯 </label>
		</span>
	</div>
	<div class="user_info_item">
		<span class="user_info_item_left"><span class="f_red b">*</span>
			户口所在地：</span> <span> <select name="liveProvince"
			id="areaProvince_live"
			onchange="PC.initCity('areaProvince_live','areaCity_live','');"
			>
		</select> <select name="liveCity" id="areaCity_live"
			>
		</select> <label for="liveCity" class="error" style="display: none">请选择您的户口所在地
		</label>
		</span>
	</div>
	<div class="user_info_item">
		<span class="user_info_item_left"><span class="f_red b">*</span>
			居住地址：</span> <span> <input value=""
			class="input180 "
			name="address" id="address">
		</span>
	</div>

	<div class="user_info_item">
		<span class="user_info_item_left"> 居住地电话：</span> <span> <input
			type="text" value="" id="frphone" style="width: 40px;"
			onkeyup="setphone(this);" onblur="setphone(this);"
			 />- <input type="text"
			value="" id="numphone"
			onkeyup="setphone(this);" onblur="setphone(this);"
			 /> <input
			style="display: none;" value=""
			name="phone" id="phone" />
		</span>
	</div>
	<div class="user_info_item">
		<span class="user_info_item_left"> 个人头像：</span> <span> <input
			type="button" onclick="uploadImage(96,96,'profile');" value="上传头像"></input>
		</span>
	</div>
	
	
		<div class="user_info_item">

			<span class="user_info_item_left">&nbsp;</span> <span class="f_gray"><img
				id="user_profile" src="" alt="用户头像"
				class="img_b" width="96px" height="96px" /> <input name="avatar"
				id="pictureUrl" type="hidden" value="" /></span>
		</div>
	

	<div class="b" style="padding: 10px 90px">
		请确保您填写的资料真实有效，所有资料将会严格保密。一旦被发现所填资料有虚假，将会影响您在人人贷的信用，对以后借款造成影响。</div>
	<div class="b f_red" style="padding: 5px 0; text-align: center"
		id="user_advace_info_result">&nbsp;</div>
</div>
<script type="text/javascript">
	PC.initProvince("areaProvince", "新疆");
	PC.initCity("areaProvince", "areaCity", "塔城地区");
	$(function() {
		var homeaddr = "";
		var liveaddr = "";
		var homecity = "";
		var homepro = "";
		var livecity = "";
		var livepro = "";
		if (homeaddr != null && homeaddr != "") {
			var homeaddrnew = homeaddr.split(":");
			homecity = homeaddrnew[1];
			homepro = homeaddrnew[0];
		}
		if (liveaddr != null && liveaddr != "") {
			var livenew = liveaddr.split(":");
			livecity = livenew[1];
			livepro = livenew[0];
		}
		/*
		PC.initProvince("areaProvince_home", homepro);
		PC.initCity("areaProvince_home", "areaCity_home", homecity);
		PC.initProvince("areaProvince_live", livepro);
		PC.initCity("areaProvince_live", "areaCity_live", livecity);
		*/
		var homephone = $('#phone').val();
		if (homephone != null && homephone != '') {
			var phone = homephone.split("-");
			$('#frphone').val(phone[0]);
			$('#numphone').val(phone[1]);
		}
		
		
	});
	function setphone(obj){
  		if(obj.id == 'frphone'){
  			var frvalue = obj.value;
  			var numvalue = $('#numphone').val();
  			if(numvalue != null && ""!=numvalue && frvalue != null && frvalue != ""){
  				$('#phone').val(frvalue+"-"+numvalue);
  			}else{
  				$('#phone').val('');
  			}
  		}else if(obj.id == 'numphone'){
  			var numvalue = obj.value;
  			var frvalue = $('#frphone').val();
  			if(numvalue != null && ""!=numvalue && frvalue != null && frvalue != ""){
  				$('#phone').val(frvalue+"-"+numvalue);
  			}else{
  				$('#phone').val('');
  			}
  		}
  		
  	}
	function checkItemA(){
  		var arrItem=["graduation","areaProvince_home","areaCity_home","areaProvince_live","areaCity_live"];
  		for(var i=0,len=arrItem.length;i<len;i++){
  			if(!checki(arrItem[i])) {
  				$('#'+arrItem[i]).focus();
  				return false; 
  				break;
  			}
  		}
  		return true;
  	}
	function checki(o){
		if($("#"+o).val()=="请选择"){
  			$("#"+o).parent().find("label").show();
  			return false;
  		}else{
  			return true;
  		}	
    }
</script>
						<div style="text-align: center; padding: 20px 0; line-height: 40px">
							<input type="submit" onclick="javascript:return checkItemA()" class="saveSettingBnt" value="保存并继续">
						</div>
					</form>
				</div>
				<div style="display: none" id="user_company_info_content">
					<form method="post" id="userWorkInfoFormForUpdate" action="/my/updateWorkInfo.php?">
						<input type="hidden" name="fromType" value="finishAdvanceInfo" />
						
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<div style="text-align: center; padding: 5px 0"></div>
<div style="width: auto" class="tips">
	<span class="f_red b">*</span> 为必填项，所有资料均会严格保密。
</div>
<div style="text-align: center; padding: 5px 0"></div>
<div class="item_group" style="width: auto">工作信息</div>
<div class="user_info_box clearfix" style="width: auto">
	<div class="user_info_item">
		<span class="user_info_item_left">
			<span class="f_red b">*</span> 单位名称：</span> 
			<span> 
			<input name="office" id="office" value="" class="input180 ">
		</span>
	</div>
	<div class="user_info_item">
		<span class="user_info_item_left">
			<span class="f_red b">*</span> 职业状态：
		</span> 
		<span> 
		<select name="jobType" id="jobType" >
				<option value="">请选择</option>
				
					<option value="工薪阶层"
						 >
						工薪阶层
					</option>
				
					<option value="私营企业主"
						 >
						私营企业主
					</option>
				
					<option value="网络商家"
						 >
						网络商家
					</option>
				
					<option value="其他"
						 >
						其他
					</option>
				
		</select>
		</span>
	</div>
	<div class="user_info_item">
		<span class="user_info_item_left"><span class="f_red b">*</span>
			工作城市：</span> <span> <select name="province" id="areaProvince"
			onchange="PC.initCity('areaProvince','areaCity','');"
			>
		</select> <select name="city" id="areaCity"
			>
		</select> <label for="areaCity" generated="true" class="error"
			style="display: none;">请选择工作城市</label>
		</span>
	</div>
	<div class="user_info_item">
		<span class="user_info_item_left"><span class="f_red b">*</span>
			公司类别：</span> <span> <select name="officeType" id="officeType"
			>

				<option value="">请选择</option>
				
					<option value="国家机关"
						>
						国家机关
					</option>
				
					<option value="事业单位"
						>
						事业单位
					</option>
				
					<option value="央企（包括下级单位）"
						>
						央企（包括下级单位）
					</option>
				
					<option value="地方国资委直属企业"
						>
						地方国资委直属企业
					</option>
				
					<option value="世界500强（包括合资企业及下级单位）"
						>
						世界500强（包括合资企业及下级单位）
					</option>
				
					<option value="外资企业（包括合资企业）"
						>
						外资企业（包括合资企业）
					</option>
				
					<option value="一般上市公司（包括国外上市）"
						>
						一般上市公司（包括国外上市）
					</option>
				
					<option value="一般民营企业"
						>
						一般民营企业
					</option>
				
		</select>
		</span>
	</div>

	<div class="user_info_item">
		<span class="user_info_item_left"><span class="f_red b">*</span>
			公司行业：</span> <span> <select name="officeDomain" id="officeDomain"
			>

				<option value="">请选择</option>
				
					<option value="制造业"
						>
						制造业
					</option>
				
					<option value="IT"
						>
						IT
					</option>
				
					<option value="政府机关"
						>
						政府机关
					</option>
				
					<option value="媒体/广告"
						>
						媒体/广告
					</option>
				
					<option value="零售/批发"
						>
						零售/批发
					</option>
				
					<option value="教育/培训"
						>
						教育/培训
					</option>
				
					<option value="公共事业"
						>
						公共事业
					</option>
				
					<option value="交通运输业"
						>
						交通运输业
					</option>
				
					<option value="房地产业"
						>
						房地产业
					</option>
				
					<option value="能源业"
						>
						能源业
					</option>
				
					<option value="金融/法律"
						>
						金融/法律
					</option>
				
					<option value="餐饮/旅馆业"
						>
						餐饮/旅馆业
					</option>
				
					<option value="医疗/卫生/保健"
						>
						医疗/卫生/保健
					</option>
				
					<option value="建筑工程"
						>
						建筑工程
					</option>
				
					<option value="农业"
						>
						农业
					</option>
				
					<option value="娱乐服务业"
						>
						娱乐服务业
					</option>
				
					<option value="体育/艺术"
						>
						体育/艺术
					</option>
				
					<option value="公益组织"
						>
						公益组织
					</option>
				
					<option value="其它"
						>
						其它
					</option>
				
		</select> <label for="officeDomain" class="error" style="display: none">请选择公司行业
		</label>
		</span>
	</div>


	<div class="user_info_item">
		<span class="user_info_item_left"><span class="f_red b">*</span>
			公司规模：</span> <span> <select name="officeScale" id="officeScale"
			>
				<option value="">请选择</option>
				
					<option value="10人以下"
						 >
						10人以下
					</option>
				
					<option value="10-100人"
						 >
						10-100人
					</option>
				
					<option value="100-500人"
						 >
						100-500人
					</option>
				
					<option value="500人以上"
						 >
						500人以上
					</option>
				
		</select> <label for="officeScale" class="error" style="display: none">请选择公司规模
		</label>
		</span>
	</div>

	<div class="user_info_item">
		<span class="user_info_item_left"><span class="f_red b">*&nbsp;</span>职&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;位：</span><span>
			<input value=""
			class="input180 "
			name="position" id="position">
		</span>
	</div>
	<div class="user_info_item">
		<span class="user_info_item_left"><span class="f_red b">*&nbsp;</span>
			月&nbsp;&nbsp;收&nbsp;&nbsp;入：</span> <span> <select name="salary"
			id="salary" >
				<option value="">请选择</option>
				
					<option value="1000元以下"
						>
						1000元以下
					</option>
				
					<option value="1001-2000元"
						>
						1001-2000元
					</option>
				
					<option value="2000-5000元"
						>
						2000-5000元
					</option>
				
					<option value="5000-10000元"
						>
						5000-10000元
					</option>
				
					<option value="10000-20000元"
						>
						10000-20000元
					</option>
				
					<option value="20000-50000元"
						>
						20000-50000元
					</option>
				
					<option value="50000元以上"
						>
						50000元以上
					</option>
				
		</select>
		</span>
	</div>


	<div class="user_info_item">
		<span class="user_info_item_left"><span class="f_red b">*</span>
			在现单位工作年限：</span> <span> <select name="workYears" id="workYears"
			>
				<option value="">请选择</option>
				
					<option value="1年（含）以下"
						>
						1年（含）以下
					</option>
				
					<option value="1-3年（含）"
						>
						1-3年（含）
					</option>
				
					<option value="3-5年（含）"
						>
						3-5年（含）
					</option>
				
					<option value="5年以上"
						>
						5年以上
					</option>
				
		</select>
		</span>
	</div>

	<div class="user_info_item">
		<span class="user_info_item_left"><span class="f_red b">*</span>
			公司电话：</span> <span> <input type="text" value="" id="workquphone"
			style="width: 40px;" onkeyup="setcomphone(this);"
			onblur="setcomphone(this);"
			 />-<input
			type="text" value="" id="worknumphone" onkeyup="setcomphone(this);"
			onblur="setcomphone(this);"
			 /> <input
			value="" name="workPhone"
			id="workPhone" type="text" style="display: none;">
		</span>
	</div>

	<div class="user_info_item">
		<span class="user_info_item_left"><span class="f_red b">*</span>
			工作邮箱：</span> <span> <input value=""
			class="input180 "
			name="workEmail" id="workEmail">
		</span>
	</div>
	<div class="user_info_item">
		<span class="user_info_item_left"><span class="f_red b">*</span>
			公司地址：</span> <span> <input
			value=""
			class="input180 "
			name="officeAddress" id="officeAddress">
		</span>
	</div>
</div>

<div style="text-align: center; padding: 5px 0"></div>
<div class="item_group" style="width: auto">直系亲属联系人（在您贷款成功后，我们会通过电话核实您的紧急联系人信息）</div>
<div class="user_info_box clearfix" style="width: auto">
	<div class="user_info_item">
		<span class="user_info_item_left"><span class="f_red b">*</span>
			姓名：</span> <span> <input
			value="" name="urgentContact"
			id="urgentContact"
			>
		</span>
	</div>
	<div class="user_info_item">
		<span class="user_info_item_left"><span class="f_red b">*</span>
			关系：</span> <span> <input
			value="" name="urgentRelation"
			id="urgentRelation"
			>
		</span>
	</div>
	<div class="user_info_item">
		<span class="user_info_item_left"><span class="f_red b">*</span>
			手机：</span> <span> <input value=""
			name="urgentMobile" id="urgentMobile"
			>
		</span>
	</div>
</div>
<div class="item_group" style="width: auto">其它联系人</div>
<div class="user_info_box clearfix" style="width: auto">
	<div class="user_info_item">
		<span class="user_info_item_left"><span class="f_red b">*</span>
			姓名：</span> <span> <input
			value="" name="urgentContact2"
			id="urgentContact2"
			>
		</span>
	</div>
	<div class="user_info_item">
		<span class="user_info_item_left"><span class="f_red b">*</span>
			关系：</span> <span> <input
			value=""
			name="urgentRelation2" id="urgentRelation2"
			>
		</span>
	</div>
	<div class="user_info_item">
		<span class="user_info_item_left"><span class="f_red b">*</span>
			手机：</span> <span> <input
			value="" name="urgentMobile2"
			id="urgentMobile2"
			>
		</span>
	</div>
</div>
<div class="b" style="padding: 10px 90px">
	请确保您填写的资料真实有效，所有资料将会严格保密。一旦被发现所填资料有虚假，将会影响您在人人贷的信用，对以后借款造成影响。</div>
<div class="b f_red" style="padding: 5px 0; text-align: center" id="user_company_info_result">&nbsp;</div>
<script type="text/javascript">
PC.initProvince("areaProvince", "新疆");
PC.initCity("areaProvince", "areaCity", "塔城地区");
$(function() {
	var homeaddr = "";
	var liveaddr = "";
	var homecity = "";
	var homepro = "";
	var livecity = "";
	var livepro = "";
	if (homeaddr != null && homeaddr != "") {
		var homeaddrnew = homeaddr.split(":");
		homecity = homeaddrnew[1];
		homepro = homeaddrnew[0];
	}
	if (liveaddr != null && liveaddr != "") {
		var livenew = liveaddr.split(":");
		livecity = livenew[1];
		livepro = livenew[0];
	}

	PC.initProvince("areaProvince_home", homepro);
	PC.initCity("areaProvince_home", "areaCity_home", homecity);
	PC.initProvince("areaProvince_live", livepro);
	PC.initCity("areaProvince_live", "areaCity_live", livecity);

	var comphone = $('#workPhone').val();
	if (comphone != null && '' != comphone) {
		var phone = comphone.split("-");
		$('#workquphone').val(phone[0]);
		$('#worknumphone').val(phone[1]);
	}
});
	function setcomphone(obj){
		if(obj.id == 'workquphone'){
			var frvalue = obj.value;
			var numvalue = $('#worknumphone').val();
			if(numvalue != null && ""!=numvalue && frvalue != null && frvalue != ""){
				$('#workPhone').val(frvalue+"-"+numvalue);
			}else{
				$('#workPhone').val('');
			}
		}else if(obj.id == 'worknumphone'){
			var numvalue = obj.value;
			var frvalue = $('#workquphone').val();
			if(numvalue != null && ""!=numvalue && frvalue != null && frvalue != ""){
				$('#workPhone').val(frvalue+"-"+numvalue);
			}else{
				$('#workPhone').val('');
			}
		}
		$('#workPhone').keyup();
	}

	function checkItemB(){
  		var arrItem=["jobType","areaProvince","areaCity","officeType","officeDomain","officeScale","salary"];
  		for(var i=0,len=arrItem.length;i<len;i++){
  			if(!checki(arrItem[i])) {
  				$('#'+arrItem[i]).focus();
  				return false; 
  				break;
  			}
  		}
  		return true;
  	}
	function checki(o){
		if($("#"+o).val()=="请选择"){
  			$("#"+o).parent().find("label").show();
  			return false;
  		}else{
  			return true;
  		}	
    }
</script>
						<div style="text-align: center; padding: 20px 0; line-height: 40px">
							<input type="submit" class="saveSettingBnt" onclick="javascript:return checkItemB()" value="保存并继续">
						</div>
					</form>
				</div>
				<div style="display: none" id="user_asset_info_content">
					
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">


<style>
	#apr,#borrowAmount{ width:110px}
</style>
<script type="text/javascript">
$(function(){
	jQuery.validator.addMethod("apr", function(value, element){
        return this.optional(element) || (/^(([1-9]{1}\d*)|([0]{1}))(\.(\d){1})?$/.test(value));
    }, "利率最大保留小数点后1位");
    jQuery.validator.addMethod("over",function(value,element){
    	var minRate = parseFloat(Number($('#minRate').php().replace("%","")));
    	var maxRate = parseFloat(Number($('#maxRate').php().replace("%","")));
    	value = parseFloat(value);
        return (value>=minRate)&&(value<=maxRate);
    },"您输入的借款年利率超出范围，请重新输入！");
    
    var t = 'from-website';
    if(t==null||(t.indexOf('fxhb')==-1&&t!='debx-zaxy')){
    	jQuery.validator.addMethod("amount", function(value, element){
        	return this.optional(element) || (value >= 3000 && value <=1000000  && value % 50 == 0 && /^(([1-9]{1}\d*)|([0]{1}))?$/.test(value));
    	}, "请正确输入借款金额，3000-1,000,000");
    } else {
    	jQuery.validator.addMethod("amount", function(value, element){
        	return this.optional(element) || (value >= 3000 && value % 500 == 0 && /^(([1-9]{1}\d*)|([0]{1}))?$/.test(value));
    	}, "请正确输入借款金额，需为500的倍数");
    }
    
    jQuery.validator.addMethod("isNumber", function(value, element){
        return this.optional(element) || (value >= 0);
    }, "类型错误");
    
    jQuery.validator.addMethod("lenConfine",function(value,element){
        return value.length>=50 && value.length<=500;
    },"借款描述应限制在50-500字之间");
    jQuery.validator.addMethod("lenTitle",function(value,element){
        return value.length<=20;
    },"借款标题不能超过20字");
    $("#systemImgTab").children("tbody").children("tr").each(function(index){
        $(this).children("td").each(function(i){
            $(this).bind("click", function(){
                                                                                                                                                                                                
                $("#systemImgTab").children("tbody").children("tr").each(function(){
                    $(this).children("td").each(function(){
                        $(this).css("border", "");
                    });
                });
                $(this).css("border", "2px solid red");
                $("#systemImgPath").val($(this).children("div").children("img").attr("src"));
            });
        });
    });
    
    jQuery("#borrowForm").validate({
        submitHandler: function(){
            var treaty1=document.getElementById("treaty1").checked;
            var treaty2=document.getElementById("treaty2").checked;
            if(!treaty1||!treaty2){
                alert("请同意我们的条款");
                return false;
            }
            if(document.forms[2].php?.indexOf('tempLoan.php?')==-1&&document.forms[2].php?.indexOf('previewLoanPage.php?')==-1){
                var b = window.confirm("发布借款列表后，将不能撤销及更改，是否继续发布？");
                if(b){
                    $("#saveBtn").attr("disabled", "true");
                    $("#publishBnt").attr("disabled", "true");
                    $("#previewBtn").attr("disabled", "true");
                    document.forms[2].submit();
                }else{
                    return false;
                }
            }else{
                document.forms[2].submit();
            }
        },
        rules: {
            borrowAmount: {
                required: true,
                amount: true
            },
            apr: {
                required: true,
                apr: true,
                over: true
            },
            repayTime: {
                required: true,
                digits: true
            },
            endDate: {
                required: true
            },
            borrowTitle: {
                required: true,
                lenTitle:true
            },
            borrowDesc: {
                required: true,
                lenConfine: true
            }
        },
        messages: {
            borrowAmount: {
                required: "请输入借款金额",
                amount: "请正确输入借款金额"
            },
            apr: {
                required: "请输入借款利率"
            },
            repayTime: {
                required: "请输入借款期限",
                digits: "请输入正确的借款期限"
            },
            endDate: {
                required: "请输入借款截止日期"
            },
            borrowTitle: {
                required: "请输入借款标题",
                lenTitle:"借款标题不能超过20字"
            },
            borrowDesc: {
                required: "请输入借款描述",
                lenConfine: "借款描述应限制在50-500字之间"
            }
        }
    });
    getRepayDetail();
});
</script>

<script type="text/javascript">
$(function(){
	//处理借款金额小数-假如存在
	var borrowAmount = $("#borrowAmount").val();
	if(borrowAmount != null && "" != borrowAmount){
		$("#borrowAmount").val(borrowAmount.split('.')[0]);
	}
	
	// 选择借款用途
	var str = $('#tempBorrowType').val();
	if (str != null && "" != str) {
		var count=$("#borrowType option").length;
 		for(var i=0;i<count;i++) {
			if($("#borrowType").get(0).options[i].text == str){  
           		$("#borrowType").get(0).options[i].selected = true;  
	            break;  
	        }  
	    } 
	}
});
</script>

<script type="text/javascript">
var products=[], months=[],monthlyMinInterests = [];
$(function(){
	initProducts();
	if(products.length > 1) {
		$("#productDiv").show();
	} else {
		$("#productDiv").hide();
	}
});

function initProducts(){
	var t = '';
	$.ajax({
        url: "../borrow/getProductsByUser.php?",
        type: "GET",
        dataType: "JSON",
        error: function(){
            alert("产品信息加载失败，请刷新后重试");
        },
        success: function(data){
        	$("#productId").empty();
        	var d = $.parseJSON(data);
			if(d.vos.length>1){
				$("#productDiv").show();
			}else{
				$("#productDiv").hide();
			}
        	$.each(d.vos,function(n,v){
        		var product = {};
        		product.id = v.id;
        		product.name = v.productName;
        		product.loanType = v.loanType;
        		var vMonthlyIn = $.parseJSON(v.monthlyMinInterest);
        		product.monthInte = vMonthlyIn;
        		products.push(product);
        		var option = "";
        		if(v.id == t) {
        			option = "<option value='"+v.id+"' selected>"+v.productName+"</option>";
        		} else {
        			option = "<option value='"+v.id+"'>"+v.productName+"</option>";
        		}
        		$("#productId").append(option);
        	});
        	getMonths();
        }
	});
}

function getMonths(){
	var id = $("#productId").val();
	if(id == null || id == ''){
		return;
	}
	if(products == null || products.length == 0){
		initProducts();
	}
	var m = '';
	for(var i=0; i < products.length; i++){
		if(id == products[i].id){
			if(products[i].name=='敦煌E保通'){
				$("#debxDh").show();
			} else {
				$("#debxDh").hide();
			}
			$("#repayTime").empty();
			$("#loanType").php(products[i].loanType);
			var jsonMonth = products[i].monthInte;
			for(var j=0; j < jsonMonth.length; j++){
				var option = "";
				if(jsonMonth[j].month == m){
					option = "<option value='"+jsonMonth[j].month+"' selected>"+jsonMonth[j].month+"个月</option>";
				} else {
					option = "<option value='"+jsonMonth[j].month+"'>"+jsonMonth[j].month+"个月</option>";
				}
	    		$("#repayTime").append(option);
			}
			break;
		}
	}
	getInterest();
}


function getInterest(){
	var id = $("#productId").val();
	var month = $("#repayTime").val();
	for(var i=0; i < products.length; i++){
		if(id == products[i].id){
			var jsonMonth = products[i].monthInte;
			for(var j=0; j < jsonMonth.length; j++){
				if(month == jsonMonth[j].month){
					$("#minRate").php(jsonMonth[j].minInterest+"%");
					$("#maxRate").php(jsonMonth[j].maxInterest+"%");
				}
			}
			break;
		}
	}
	getRepayDetail();
}
</script>
<form enctype="multipart/form-data" class="borrowForm" method="post" id="borrowForm" action="">
	<div style="padding: 5px 0 5px 20px; margin: 10px 0; line-height: 30px; font-size: 12px; background: #FFFBE1; border: 1px solid #CFDDB1;">
		<div>
			<span class="b">我的信用积分：</span>
			<span style="font-size: 14px;" class="f_red">
				20（<span id="creditLevelName">HR</span>）
			</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;通过上传真实信用认证资料，可提高您的信用等级和额度
		</div>
		<div>
			<span class="b">
				我的信用额度：
				<span style="font-size: 14px;" class="f_red">
					0 ( 可用额度：0 )
				</span>
			</span>
		</div>
	</div>
	<div class="item">
		<div class="item_group_green">
			<div class="green_left"></div>
			<div class="green_center" style="width: 564px">借款基本信息</div>
			<div class="green_right"></div>
		</div>
		<div class="user_info_box_green clearfix" style="width: 548px;">
			<div class="user_info_item">
				<span class="borrow_info_item_left">借款标题：</span> 
				<span> 
					<input type="text" value="" style="width: 300px" name="borrowTitle" id="borrowTitle">
				</span>
			</div>
			<div class="user_info_item">
				<span class="borrow_info_item_left">借款图片：</span> 
				<span> 
					<input type="radio" value="upload" onclick="selImgSource(this);" checked="checked" name="imgType">
					&nbsp;上传借款图片&nbsp;&nbsp; 
					<input type="radio" value="userImg" onclick="selImgSource(this);" name="imgType" disabled=disabled>
					&nbsp;使用用户头像&nbsp;&nbsp; 
					<input type="radio" value="systemImg" name="imgType" onclick="selImgSource(this);">
					&nbsp;使用系统头像&nbsp;&nbsp;
				</span>
			</div>
			<div id="upload" class="user_info_item">
				<span class="borrow_info_item_left">&nbsp;</span> 
				<span>
					<input type="button" onclick="uploadImage(96,96,'loan');" value="上传图片"/>
				</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<span id="uploadError" style="color: red; display: none">请上传借款图片</span>
			</div>
			<div id="upload_tip" class="user_info_item">
				<span class="borrow_info_item_left">&nbsp;</span> 
				<span class="f_gray">（推荐使用您的生活近照，或其他与借款用途相关的图片，有助增加借款成功几率。
					<span class="f_blue">严禁使用他人照片</span>）
				</span>
			</div>
			<div id="upload_preview" class="user_info_item">
				<span class="borrow_info_item_left">&nbsp;</span> 
				<span class="f_gray"> 
					<img width="96px" height="96px" alt="" src="" id="user_profile_loan"> 
					<input type="hidden" value="" id="pictureUrlLoan" name="avatar">
				</span>
			</div>
			<div style="display: none;" id="systemImg" class="user_info_item">
				<span class="borrow_info_item_left">系统图片：</span>
				<span id="systemError" style="color: red; display: none">请选择借款图片</span>
				<div>
					<input type="hidden" id="systemImgPath" name="systemImgPath">
					<br> <br>
					<table border="1" align="center" style="background-color: rgb(239, 245, 254); border: 1px solid rgb(204, 204, 204); border-spacing: 1px; text-align: center;" id="systemImgTab">
						<tbody>
							<tr style="height: 30px; background: none repeat scroll 0% 0% rgb(246, 246, 246);">
								<td width="98px" height="98px">
									<div align="center">
										<img width="98px" height="98px" src="../images/loanType/dqzz.png">短期周转
									</div>
								</td>
								<td width="98px" height="98px">
									<div align="center">
										<img width="98px" height="98px" src="../images/loanType/gf.png">购房借款
									</div></td>
								<td width="98px" height="98px">
									<div align="center">
										<img width="98px" height="98px" src="../images/loanType/zx.png">装修借款
									</div></td>
								<td width="98px" height="98px">
									<div align="center">
										<img width="98px" height="98px" src="../images/loanType/grxf.png">个人消费
									</div></td>
								<td width="98px" height="98px">
									<div align="center">
										<img width="98px" height="98px" src="../images/loanType/hlcb.png">婚礼筹备
									</div></td>
							</tr>
							<tr style="height: 30px; background: none repeat scroll 0% 0% rgb(255, 255, 255);">
								<td width="98px" height="98px">
									<div align="center" id="monthRepay">
										<img width="98px" height="98px" src="../images/loanType/jypx.png">教育培训
									</div></td>
								<td width="98px" height="98px">
									<div align="center" id="interestCount">
										<img width="98px" height="98px" src="../images/loanType/qcxf.png">汽车消费
									</div></td>
								<td width="98px" height="98px">
									<div align="center" id="avgInterest">
										<img width="98px" height="98px" src="../images/loanType/tzcy.png">投资创业
									</div></td>
								<td width="98px" height="98px">
									<div align="center" id="interest">
										<img width="98px" height="98px" src="../images/loanType/ylzc.png">医疗支出
									</div></td>
								<td width="98px" height="98px">
									<div align="center" id="interest">
										<img width="98px" height="98px" src="../images/loanType/other.png">其他目的借款
									</div></td>
							</tr>
						</tbody>
					</table>
					<span class="borrow_info_item_left">&nbsp;</span> 
					<span class="f_gray">
						（推荐使用您的生活近照，或其他与借款用途相关的图片，有助增加借款成功几率。
						<span class="f_blue">严禁使用他人照片</span>）
					</span>
				</div>
			</div>
			<div class="user_info_item">
				<span class="borrow_info_item_left">借款用途：</span> 
					<span> <select name="borrowType" id="borrowType">
						
							<option value="短期周转">
								短期周转
							</option>
						
							<option value="购房借款">
								购房借款
							</option>
						
							<option value="购车借款">
								购车借款
							</option>
						
							<option value="装修借款">
								装修借款
							</option>
						
							<option value="婚礼筹备">
								婚礼筹备
							</option>
						
							<option value="教育培训">
								教育培训
							</option>
						
							<option value="投资创业">
								投资创业
							</option>
						
							<option value="医疗支出">
								医疗支出
							</option>
						
							<option value="其他借款">
								其他借款
							</option>
						
							<option value="个人消费">
								个人消费
							</option>
						
				</select>
				</span>
			</div>
			<input type="hidden" value="" id="tempBorrowType" />
			
			<div class="user_info_item">
				<span class="borrow_info_item_left">借款金额：</span> 
				<span> 
					<input type="text" value="" name="borrowAmount" 
						onpropertychange="getRepayDetail();" onchange="getRepayDetail();" id="borrowAmount">
					&nbsp;元
					
					
					
					（借款金额3,000-1,000,000，需为50的倍数） 
					
					<label style="display: none" class="error" for="borrowAmount"> 请正确输入借款金额 </label>
				</span>
			</div>
			<div class="user_info_item" style="display:none" id="productDiv">
				<span class="borrow_info_item_left">产品类型：</span>
				<select id="productId" name="productId" onchange="getMonths()">
					<option value="">--请选择--</option>
				</select>
			</div>
			<div class="user_info_item">
				<span class="borrow_info_item_left">借款期限：</span> 
				<span> 
				<select id="repayTime" name="repayTime" style="height: 22px" onchange="getInterest()">
					<option value="">请选择</option>
				</select>
				</span>
			</div>
			<div class="user_info_item">
				<span class="borrow_info_item_left">年利率：</span> 
				<span> 
					<input type="text" value="" name="apr" onpropertychange="getRepayDetail();" onchange="getRepayDetail();" id="apr">
					&nbsp;%（利率精确到小数点后一位<span id="rateFanwei">，范围<span id="minRate">6.0</span>-<span id="maxRate">24.0</span>之间
				</span>） 
				<label style="display: none" class="error" for="apr"> 请正确输入借款利率 </label>
				</span>
			</div>
			<div class="user_info_item">
				<span class="borrow_info_item_left">&nbsp;</span> <span> <span
					style="color: black;">借款最低利率由您的借款期限确定，一般来说借款利率越高，借款速度越快。</span>
				</span>
			</div>
			
			<div class="user_info_item">
				<span class="borrow_info_item_left">还款周期：</span> <span>按月还款</span>
			</div>
			
			<div class="user_info_item">
				<span class="borrow_info_item_left">还款方式：</span> 
				<span id="loanType"> 等额本息 </span>
			</div>
			
			<div class="user_info_item">
				<span class="borrow_info_item_left">筹标期限：</span> 
				<span> 
					<select name="endDate" style="height: 22px">
					
					
						<option selected value="7">7</option>
					
					</select>天
				</span>
			</div>
			<div class="user_info_item">
				<span class="borrow_info_item_left">每月还本息：</span> 
				<span style="color: red;" id="monthRepayMoney">￥0.00</span>
			</div>
			<div class="user_info_item">
				<span class="borrow_info_item_left">每月交借款管理费：</span> 
				<span style="color: red;" id="managerFee">￥0.00</span>
			</div>
			<div class="user_info_item">
				<span class="borrow_info_item_left">成交服务费：</span> 
				<span style="color: red;width: 412px;float: left;display:inline">
					即风险准备金。借款成功后按照借款成交额一次性从借款中扣除，标准为：AA级 0%；A级1%；B级1.5%；C级2%；D级2.5%；E级3%；HR5%。实际收取比例以最终审核评定级别为准。
				</span>
			</div>
			<div class="user_info_item" style="clear: both;">
				<span class="borrow_info_item_left">借款描述：</span> 
				<span> 
					<textarea tabindex="0" name="borrowDesc" rows="8" style="width: 410px"></textarea>
				</span>
			</div>
		</div>
	</div>
	<div class="item" style="margin-top: 5px">
		<div class="item_group_green">
			<div class="green_left"></div>
			<div class="green_center" style="width: 564px">信息披露</div>
			<div class="green_right"></div>
		</div>
		<div class="user_info_box_green clearfix" style="width: 548px;">
			<div class="user_info_item">
				<span class="borrow_info_item_left">&nbsp;</span> 
				<span style="font-weight: bold;">发布借款后，您的以下信息将会公开给借出者，作为借出者投资的参考依据。</span>
			</div>
			<div class="h10"></div>
			<div style="padding-left: 20px;">
				<div class="user_info_item">
					&nbsp;<span class="w115"> 
						<input type="checkbox" disabled="" checked="" value="年龄"> 
						<label>年龄 </label>
					</span>
					&nbsp;<span class="w115"> 
						<input type="checkbox" disabled="" checked="" value="性别"> 
						<label>性别</label></span>
					&nbsp;<span class="w115"> 
						<input type="checkbox" disabled="" checked="" value="工作城市"> 
						<label>工作城市 </label>
					</span>
					&nbsp;<span class="w115"> 
						<input type="checkbox" disabled="" checked="" value="学历"> 
						<label> 学历</label>
					</span> 
					&nbsp;<span class="w115"> 
						<input type="checkbox" disabled="" checked="" value="毕业学校"> 
						<label>毕业学校 </label>
					</span>
					&nbsp;<span class="w115"> 
						<input type="checkbox" disabled="" checked="" value="入学年份"> 
						<label>入学年份 </label>
					</span>
				</div>
				<div class="user_info_item">
		  			&nbsp;<span class="w115"> 
						<input type="checkbox" disabled="" checked="" value="公司类别"> 
						<label>公司类别 </label></span>
					&nbsp;<span class="w115"> 
						<input type="checkbox" disabled="" checked="" value="公司行业"> 
						<label>公司行业 </label></span>
					&nbsp;<span class="w115"> 
						<input type="checkbox" disabled="" checked="" value="公司规模"> 
						<label>公司规模 </label></span>
					&nbsp;<span class="w115"> 
						<input type="checkbox" disabled="" checked="" value="在现单位工作时间"> 
						<label>现单位工作时间</label></span> 
				</div>
				
				<div class="user_info_item">
					&nbsp;
					<span class="w115"> 
						<input type="checkbox" disabled="" checked="" value="是否结婚"> 
						<label>是否结婚 </label>
					</span> 
					&nbsp;
					<span class="w115"> 
						<input type="checkbox" disabled="" checked="" value="有无购房">
						<label>有无购房 </label>
					</span> 
					&nbsp;
					<span class="w115">
						<input type="checkbox" disabled="" checked="" value="有无购车"> 
						<label>有无购车 </label>
					</span>
					&nbsp;
					<span class="w115"> 
						<input type="checkbox" disabled="" checked="" value="有无车贷"> 
						<label> 有无车贷 </label>
					</span> 
					&nbsp;
					<span style="width: 110px;" class="w115"> 
						<input type="checkbox" disabled="" checked="" value="有无房贷"> 
						<label>有无房贷 </label>
					</span>
				</div>
				
				<div class="user_info_item"></div>
			</div>
			<div class="user_info_item">
				<span class="borrow_info_item_left">&nbsp;</span> 
				<span style="font-weight: bold;">以下信息，您可以选择公开给借出者。</span>
			</div>
			<div class="h10"></div>
			<div style="padding-left: 20px;">
				<div class="user_info_item">
					&nbsp;
					<span class="w115"> 
						<input type="checkbox" value="公司名称" name="privacyTypes"> 
						<label>公司名称 </label>
					</span>
					&nbsp;
					<span class="w115"> 
						<input type="checkbox" checked="" value="职位" name="privacyTypes"> 
						<label>职位 </label>
					</span>
				</div>
				<div class="h20"></div>
				<div class="h20"></div>
				<div class="user_info_item">
					<span> 
					<input type="checkbox" checked="" id="treaty1"> &nbsp;&nbsp;我同意<a href="/guarantee/aboutfee.php" target="_blank">人人贷收费条款</a>
					</span> 
					<span>
						<input type="checkbox" checked="" id="treaty2"> &nbsp;&nbsp;我同意以上信息披露要求
					</span>
				</div>
			</div>
		</div>
	</div>
	
	
	
	

	<div style="text-align: center; margin: 10px 0; color: #4A74CA;">
		<input type="submit" id="saveBtn" class="mbtn save" value=""
			onclick="javascript:return saveAndPreview('save',0,false);">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
		<input type="submit" id="publishBnt" class="mbtn publish" value=""
			onclick="javascript:return saveAndPreview('publish',0,false);">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
		<input type="submit" id="previewBtn" class="mbtn preview" value=""
			onclick="this.form.target='_blank';this.form.php?='../borrow/previewLoanPage.php?';">
	</div>
	<input id="sourceUtmFrom" type="hidden"/>
</form>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="mediaPicker"></div>

    </div>
    <div class="bt">
    </div>
</div>

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
