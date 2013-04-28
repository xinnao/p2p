

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
    </head>
    <body>
        <div id="page" class="session_invalid_tag">
<?php require("header.php"); ?>
<link href="../theme/asyncbox/skins/ZCMS/asyncbox.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="../theme/asyncbox/AsyncBox.v1.4.5.js"></script>
<!--[if IE 6]><script type="text/javascript" src="../theme/default/js/ie6fixed.js"></script> <![endif]-->

<script type="text/javascript">
<!--
function openupload(title,content,type,materialType){
	asyncbox.open({
		title:'',
	    url : '../upload/uploadpage.php?type='+type+'&materialType='+materialType,
	    width : 700,
	    height : 500,
	    id : "uploadmaterialbox",
	    callback : function(action,iframe,returnValue){
	    	change2()
		}
	});
}

function change2(){
	var urlparent = document.location.href;
	if(/loan.action/.test(urlparent)){
		document.location.href='../borrow/borrowPage.action';
	}else if(/updateWorkInfo.action/.test(urlparent)){
		document.location.href='../applyAmount!toPageWithChoose.action?fromType=applyamount&type=applyamount';		
	}else{
		document.location.reload();
	}
	
}

//-->
</script>
<div class="clearfix" id="content" style="position:relative">
	 <div class="layout-box">

  <div class="toptitle">上传材料</div>
  <div class="line950"></div>
  <div class="clearfix">
  <div class="leftlendstep">
   <div class="leftlendstepbox vstep2" style="background:url('/theme/default/images/lendvstep2.png') right 0 no-repeat; width:155px">
  	<ul>
    	<li>申请贷款</li>
        <li>上传材料</li>
        <li>筹集借款</li>
        <li>获得贷款</li>
    </ul>
    </div>
  </div>
  <div class="rightlendstep">
      <div class="h20"> </div>
<div class="clearfix" style="padding: 5px 10px 5px 10px; width:560px;line-height: 30px;color:#6682C0;font-size: 13px;background: #FFFBE1;border:1px solid #CFDDB1;">
  温馨提示：人人贷对于用户上传的所有信息，都将进行加密处理。您可以在此放心上传个人材料，您的个人信用将不会被以任何形式外泄。
</div>

          <div class="h20"> </div>
      <div class="item border_2434">

          <div id="baseR">
		  	<div class="tit">必要信用认证</div>
            <p>以下四项为必要信用认证，上传齐全后将开始审核。四项必要认证缺失的用户，无法得到贷款。</p>
            <div class="clearfix">
            	<ul>
                	<li class="cleaarfix" id="base_card">
                	
            		
	            		
	            		
            		
            			<div class="icon card_no" ></div><div class="con"><h3>身份认证</h3><a href="javascript:openupload('身份证认证','','credit_identificationScanning','IDCARD_AUTH');"><div class="red bt">立即上传</div></a></div></li>
            		
            		
            		
            		
                    <li class="cleaarfix" id="base_work">
                    
            		
	            		
	            		
            		
            			<div class="icon work_no" ></div><div class="con"><h3>工作认证</h3><a href="javascript:openupload('工作认证','','credit_contact','JOB_AUTH');"><div class="red bt">立即上传</div></a></div></li>
            		
                    <li class="cleaarfix" id="base_credit">
                    
            			
	            		
	            		
            		
            			<div class="icon credit_no" ></div><div class="con"><h3>信用报告</h3><a href="javascript:openupload('信用报告','','credit_credit','BANK_AUTH');"><div class="red bt">立即上传</div></a></div></li>
            		
                    <li class="cleaarfix" id="base_income">
                    
            		
	            		
	            		
            		
            			<div class="icon income_no" ></div><div class="con"><h3>收入认证</h3><a href="javascript:openupload('收入认证','','credit_incomeDuty','INCOME_AUTH');"><div class="red bt">立即上传</div></a></div></li>
            		
                </ul>
            </div>
		  </div>
          <div class="line"></div>
          <div id="otherR">
		  	<div class="tit">可选信用认证</div>
            <p>您可以选择上传的认证项目，只要通过了这些可选信用认证，将会提高您的“信用等级”和“信用额度” 。</p>
            <div class="clearfix" id="other">
            	<ul>
                	<li id="other_house">
	                	
	            		
	            		
	            		
	            		
	            			<a href="javascript:openupload('房产认证','','credit_house','ESTATE_AUTH');"><div class="icon house_no" ></div>房产认证</a>
	            		
                	</li>
                    <li id="other_car">
                    
	                    
	            		
	            		
	            		
	            		
	            			<a href="javascript:openupload('购车认证','','credit_car','CAR_AUTH');"><div class="icon car_no" ></div>购车认证</a>
	            		
                                             </li>
                    
                    <li id="other_marry">
                    
            		
	            		
	            		
            		
            			<a href="javascript:openupload('结婚证明','','credit_marriage','MARRIED_AUTH');"><div class="icon marry_no" ></div>结婚认证</a>
            		
            		
                     </li>
                                              
                    <li id="other_edu">
                    
            		
	            		
	            		
            		
            			<a href="javascript:openupload('学历认证','','credit_graducation','EDUCATION_AUTH');"><div class="icon edu_no" ></div>学历认证</a>
            		
                                              </li>
                    
                    <li id="other_skill">
                    
            		
	            		
	            		
            		
            			<a href="javascript:openupload('技术职称认证','','credit_titles','TITLES-_AUTH');"><div class="icon skill_no" ></div>技术职称认证</a>
            		
                                              </li>
                    
                    <li id="other_video">
                    
            		
	            		
	            		
            		
            			<a href="javascript:openupload('视频认证','','credit_videoauth','VIDEO_AUTH');"><div class="icon video_no" ></div>视频认证</a>
            		
                                              </li>
                    
                    <li id="other_tel">
                    
            		
	            		
	            		
            		
            			<a href="javascript:openupload('手机实名认证','','credit_mobileReceipt','PHONE_AUTH');"><div class="icon tel_no" ></div>手机实名认证</a>
            		
                                              </li>
                    
                    <li id="other_weibo">
                    
            		
	            		
	            		
            		
            			<a href="javascript:openupload('微博认证','','credit_weibo','WEIBO_AUTH');"><div class="icon weibo_no" ></div>微博认证</a>
            		
                                              </li>
                    
                    <li id="other_home">
                    
            		
	            		
	            		
            		
            			<a href="javascript:openupload('居住地证明','','credit_residence','RESIDENCE_AUTH');"><div class="icon home_no" ></div>居住地证明</a>
            		
                                              </li>
                    
                    <!-- <li id="other_shidi">
                    
            		
	            		
	            		
            		
            			<a href="javascript:openupload('实地考察','','credit_field','FIELD_AUTH');"><div class="icon shidi_no" ></div>实地认证</a>
            		
                   </li> -->
                    <!-- 
                    <li id="other_qita">
                    
            		
	            		
	            		
            		
            			<a href="javascript:openupload('其他材料认证','','credit_other','OTHERMATERIALS_AUTH');"><div class="icon qita_no" ></div>其它认证</a>
            		
                  </li>
                   -->
                </ul>
            </div>
            
		  </div>	          
      </div>
     <div class="msg">注意：如果上传中遇到问题，请联系客服。</div>
     <div class="mediaPicker"></div>
  </div>
  </div>
  <style type="text/css">
  .user_info_item_left{ width:100px}
  #footer{position:relative}
  </style>

  <div class="bt"> </div>
</div>
  </div>
  <div id="reportGuy"></div>
  <script>
$(function(){
	$("#other ul> li").hover(function(){
		$(this).find('div').css("margin-top","-5px");	
	},function(){
		$(this).find('div').css("margin-top","0px");		
	})
})
</script>
<?php require("footer.php"); ?>

        </div>
    </body>
</html>