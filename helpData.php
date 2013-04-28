
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>最大、最安全的网络借贷平台，专注于小额贷款、网络贷款、个人理财，为您提供最安全专业的借款、理财服务-人人贷 </title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <script type="text/javascript" src="../theme/default/js/jquery-1.4.2.min.js">
        </script>
        <script type="text/javascript" src="../theme/default/js/jquery.form.js">
        </script>
        <script type="text/javascript" src="../theme/default/js/jquery.validate.min.js">
        </script>
        <script type="text/javascript" src="../theme/default/js/jquery.pagebar.1.0.0.js">
        </script>
        <script type="text/javascript" src="../theme/default/js/jcrop/js/jquery.Jcrop.js">
        </script>
        <script type="text/javascript" src="../theme/default/js/nyroModal-1.6.2/js/jquery.nyroModal-1.6.2.pack.js">
        </script>
        <script type="text/javascript" src="../theme/default/js/main.js">
        </script>
        <link rel="stylesheet" href="../theme/default/js/nyroModal-1.6.2/styles/nyroModal.full.css" type="text/css" />
        <link rel="stylesheet" href="../theme/default/js/jcrop/css/jquery.Jcrop.css" type="text/css" />
        <link href="../theme/default/css/style.css?v=20100529" rel="stylesheet" type="text/css" media="screen"/>
        <link rel="shortcut icon" href="../favicon.ico"/>
        <meta name="description" content="人人贷-最大、最安全的网络借款、理财平台。提供便捷、安全、低门槛的个人信用贷款和个人理财服务。" />
        <meta name="keywords" content="网络借贷，网络贷款，借贷 网络平台，民间借贷，小额贷款，无抵押贷款，信用贷款，投资理财，人人贷"/>
        <script type="text/javascript">
			$(function() {
				 var url = location.href;
			   	 var type = url.substring(url.indexOf('type')+5);
			   	 changeImg(type);
			});

		</script>
    </head>
    <body>
        <div id="loading" style="display:none">
            <br/>
            <br/>
            <div align='center' class="clearfix">
                <img src='../images/loading.gif' style="vertical-align:middle;" alt=""/>正在加载数据中...
            </div>
            <br/>
            <br/>
        </div>
        <div id="loadingFail" style="display:none">
            <br/>
            <br/>
            <div align='center' class="clearfix">
                <img src='../images/answer_error.jpg' style="vertical-align:middle;" alt=""/>数据加载失败，请稍后重试。
            </div>
            <br/>
            <br/>
        </div>
        <div id="page" class="session_invalid_tag">
            <div id="header" class="clearfix">
                <div class="logo clearfix">
                    <div class="l">
                        <img src="../images/logo.png" alt="" width="160px" height="84px" class="logo_hack" style="_behavior: url(../images/iepngfix.htc);"/>
                    </div>
                    <div class="logo_right">
                        <div class="logo_right_link" style="display:none;">
                            <ul>
                                <li>游客</li>
                                <li><a href="../regPage.php?">免费注册</a></li>
                                <li><a href="../loginPage.php?error=false">登录</a></li>
                                <li><a href="../help.php">帮助</a></li>
                            </ul>
                        </div>
                        <div class="logo_right_phone">客服电话：400-027-8080</div>
                    </div>
                </div>
                <div class="header_nav">
                    <div class="big_nav">
                        <ul class="big_nav_ul">
                            <li>
                                <a href="../index.php"><span>首页</span></a>
                            </li>
                            <li>
                                <a href="/lend/lendPage.php?"><span>我要理财</span></a>
                            </li>
                            <li>
                                <a href="/borrow/aboutBorrowPage.php?"><span>我要贷款</span></a>
                            </li>
                            <li>
                                <a href="/my/userInfoPage.php?"><span>我的人人贷</span></a>
                            </li>
                            <li>
                                <a href="../bbs"><span>论坛</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="big2nav" class="clearfix">
                    <div id="big2nav4">
                        <ul class="big2nav_ul">
                            <li >
                                <a href="help.php" ><span>用户手册</span></a>
                            </li>
                            <li class="b">
                                <a href="helpData.php"><span>认证材料示例</span></a>
                            </li>
                            <li>
                                <a href="onlineHelp.php"><span>联系客服</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="content" class="clearfix">
                <div class="grid-2-2-8 clearfix">
                    <div class="left">
                    
                        <div class="layout-box clearfix">
                            <div class="left_title"><span class="b">身份证认证</span></div>
                            <div class="cont">
                                <ul class="list" style="padding-left:12px;">
                                    <li> <span class="changImgForIe" onclick="changeImg('idcard');"><a>身份证</a></span></li>
                                </ul>
                            </div>
                            <div class="top"> </div>
                        </div>
                        
                        <div class="layout-box clearfix">
                            <div class="left_title"> <span class="b">工作认证</span></div>
                            <div class="cont">
                                <ul class="list" style="padding-left:12px;">
                                    <li><span class="changImgForIe" onclick="changeImg('business_license');"><a >营业执照</a> </span></li>
                                    <li><span class="changImgForIe" onclick="changeImg('tax_registration');"><a >税务登记证</a></span></li>
                                    <li> <span class="changImgForIe" onclick="changeImg('org_code');"><a >组织机构代码证</a></span></li>
                                    <li> <span class="changImgForIe" onclick="changeImg('store_photo');"><a >店面照片</a></span></li>
                                    <li><span class="changImgForIe" onclick="changeImg('aplipay_photo');"><a >支付宝截图</a></span></li>
                                </ul>
                            </div>
                            <div class="top"> </div>
                        </div>
                        
                        <div class="layout-box clearfix">
                            <div class="left_title"><span class="b">收入认证</span> </div>
                            <div class="cont">
                                <ul class="list" style="padding-left:12px;">
                                    <li><span class="changImgForIe" onclick="changeImg('bank_card_turnover');"><a >银行卡流水</a></span></li>
                                    <li><span class="changImgForIe" onclick="changeImg('internet_bank_photo');"><a >网银截图</a></span> </li>
                                </ul>
                            </div>
                            <div class="top"></div>
                        </div>
                        
                        <div class="layout-box clearfix">
                            <div class="left_title"><span class="b">信用报告</span></div>
                            <div class="cont">
                                <ul class="list" style="padding-left:12px;">
                                    <li><span class="changImgForIe" onclick="changeImg('credit_report');"><a >信用报告</a></span></li>
                                </ul>
                            </div>
                            <div class="top"></div>
                        </div>
                       
                        <div class="layout-box clearfix">
                            <div class="left_title"><span class="b">房产认证</span> </div>
                            <div class="cont">
                                <ul class="list" style="padding-left:12px;">
                                    <li>
                                    
                                    <span onclick="changeImg('premises_permit');"><a>房产证</a></span>
                                    </li>
                                    <li>
                                    <span onclick="changeImg('house_contract');"> <a>购房合同</a></span>
                                   
                                    </li>
                                </ul>
                            </div>
                            <div class="top"></div>
                        </div>
                        
                        <div class="layout-box clearfix">
                            <div class="left_title"><span class="b">购车认证</span></div>
                            <div class="cont">
                                <ul class="list" style="padding-left:12px;">
                                    <li><span onclick="changeImg('driving_license');"><a >车辆行驶证</a></span></li>
                                    <li><span onclick="changeImg('photo_and_car');"> <a >与车辆合影</a></span></li>
                                </ul>
                            </div>
                            <div class="top"></div>
                        </div>
                        
                       <div class="layout-box clearfix">
                            <div class="left_title"> <span class="b">结婚认证</span></div>
                            <div class="cont">
                                <ul class="list" style="padding-left:12px;">
                                    <li><span onclick="changeImg('marriage_certificate');"><a >结婚证</a></span></li>
                                </ul>
                            </div>
                            <div class="top"> </div>
                        </div>
                    </div>
                    
                    
                    
                    <div class="right">
                        <div class="layout-box clearfix">
                            <div class="gray_title f_14"  id="typeName">
                                	身份证
                            </div>
                            <div class="cont f_dgray">
                               <div id="typeSrc" align="center" style="min-height: 566px;"><img src="images/help/idcard.jpg" alt="" /></div>
                            </div>
                            <div class="top"></div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <style type="text/css">
                .logob_hack{
                    behavior: url(../images/iepngfix.htc);
                }
            </style>
            <div id="footer">
  <div class="footer_blue"></div>
  
  <div class="clearfix">
     <div id="footernav">
       	<ul>
           <li class="p"><img src="/images/footer_k_03.gif"/><ul><li><a href="/bbs/posts/list/1809.page">常见问题</a></li><li> <a href="/guarantee/aboutp2p.php?v=20130225"> 平台原理</a></li><li> <a href="/borrow/aboutBorrowPage.php?"> 如何借款</a></li><li><a href="/lend/aboutFinancing.php?">如何理财</a></li></ul></li>
           <li class="p"><img src="/images/footer_k_05.gif"/><ul><li><a href="/guarantee/aboutUs.php#go_media">媒体报道</a></li><li><a href="/guarantee/aboutUs.php#go_contact">联系我们</a></li><li><a href="/guarantee/aboutUs.php#go_join_us">加入我们</a></li><li><a href="/guarantee/aboutUs.php#go_expert">专家顾问</a></li></ul></li>
           <li class="p"><img src="/images/footer_k_07.gif"/><ul><li><a href="/guarantee/index.php">本金保障计划</a></li><li><a href="/guarantee/aboutlaws.php?v=20130225">政策法规</a></li><li><a href="/guarantee/details.php#go_zhb">隐私保护</a></li></ul></li>
           <li class="p" style="background:none"><img src="/images/footer_k_09.gif"/><ul><li><a href="http://blog.sina.com.cn/u/1784647287">新浪博客</a></li><li><a href="http://t.sina.com.cn/edaitong365">新浪微博</a></li><li>手机客户端</li><li><a href="/guarantee/sitemap.php">网站地图</a></li></ul></li>
       	</ul>
   	</div>
  </div>
  <div class="h10"></div>
    <div id="copy">
    	<p><span style="color:#e39538">联系我们：service@edaitong365.com</span><span style="color:#7D7E74; margin-left:20px;">人人融信商务顾问(北京)有限公司 </span><a href="http://www.miibeian.gov.cn/" style="margin-left:20px">京ICP证 100953号</a></p>
        <p style="color:#7D7E74;">&copy; 2010 人人贷 All rights reserved</p>
    </div>
  </div>
</div>
    </body>
    <script type="text/javascript">
  
    
    function changeImg(typeName){
    	
    	if(typeName == '' || typeName == null ){
    		return ;
    	}
    	
    	html = "";
    	var name = "";
    	if(typeName == 'idcard'){//身份证
    		html += '<img src="images/help/idcard.jpg" alt="" />';
    		name = "身份证";
    	} else if(typeName == 'business_license'){ //营业执照
    		html += '<img src="images/help/business_license.jpg" alt="" />'
    				+'<img src="images/help/business_license_2.jpg" alt="" />';
    		name = "营业执照";
    	} else if(typeName == 'tax_registration'){//税务登记证
    		html += '<img src="images/help/tax_registration.jpg" alt="" />'
				+'<img src="images/help/tax_registration_2.jpg" alt="" />';
    		name = "税务登记证";
    	} else if(typeName == 'org_code'){//组织机构代码
    		html += '<img src="images/help/org_code.jpg" alt="" />'
				+'<img src="images/help/org_code_2.jpg" alt="" />';
    		name = "组织机构代码证";
    	} else if(typeName == 'store_photo'){//店面照片
    		html += '<img src="images/help/store_photo.jpg" alt="" />';
    		name = "店面照片";
    	} else if(typeName == 'bank_card_turnover'){//银行流水
    		html += '<img src="images/help/bank_card_turnover.jpg" alt="" />';
    		name = "银行流水";
    	} else if(typeName == 'internet_bank_photo'){//网银截图
    		html += '<img src="images/help/internet_bank_photo.jpg" alt="" />';
    		name = "网银截图";
    	} else if(typeName == 'aplipay_photo'){//支付宝截图
    		html += '<img src="images/help/aplipay_photo.jpg" alt="" />';
    		name = "支付宝截图";
    	} else if(typeName == 'credit_report'){ //信用报告
    		html += '<img src="images/help/credit_report.jpg" alt="" />';
    		name = "信用报告";
    	} else if(typeName == 'premises_permit'){//房产证
    		html += '<img src="images/help/premises_permit.jpg" alt="" />';
    		name = "房产证";
    	} else if(typeName == 'house_contract'){//购房合同
    		html += '<img src="images/help/house_contract.jpg" alt="" />';
    		name = "购房合同";
    	} else if(typeName == 'driving_license'){//车辆行驶证
    		html += '<img src="images/help/driving_license.jpg" alt="" />';
    		name = "车辆行驶证";
    	} else if(typeName == 'photo_and_car'){//与车辆合影
    		html += '<img src="images/help/photo_and_car.jpg" alt="" />';
    		name = "与车辆合影";
    	} else if(typeName == 'marriage_certificate'){//结婚证
    		html += '<img src="images/help/marriage_certificate.jpg" alt="" />';
    		name = "结婚证";
    	} 
    	
    	if(html != '' && name != ''){
    		$("#typeSrc").php(html);
    		$("#typeName").php(name);
    	}
    }
    
    </script>
</html>
