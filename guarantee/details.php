<?php require("../loading.php");
$menuid=5; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
 <html>
    <head>
        <title>
            
            信用审核 - 提供小额贷款、信用贷款、无抵押贷款、购车贷款，更低的贷款利率 - 人人贷
        </title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="google-site-verification" content="oQXrGa_mTgxg7joO0himE0QuFeqOVmm-SDC1H2dzT4c" />
        <script type="text/javascript" src="../theme/default/js/jquery-1.4.2.min.js">
        </script>

        <script type="text/javascript" src="../theme/default/js/jquery.form.js">
        </script>
        <script type="text/javascript" src="../theme/default/js/jquery.validate.min.js">
        </script>
        <script type="text/javascript" src="../theme/default/js/jquery.pagebar.1.0.0.js">
        </script>
        <script type="text/javascript" src="../theme/default/js/jcrop/js/jquery.Jcrop.min.js">
        </script>
        <script type="text/javascript" src="../theme/default/js/nyroModal-1.6.2/js/jquery.nyroModal-1.6.2.pack.js">
        </script>
        <script type="text/javascript" src="../theme/default/js/main.js">
        </script>

        <link rel="stylesheet" href="../theme/default/js/nyroModal-1.6.2/styles/nyroModal.full.css" type="text/css" />
        <link rel="stylesheet" href="../theme/default/js/jcrop/css/jquery.Jcrop.min.css" type="text/css" />
        <link href="../theme/default/css/style.css?v=20100529" rel="stylesheet" type="text/css" media="screen"/>
        <link rel="shortcut icon" href="../favicon.ico">
        
        
            <meta name="description" content="人人贷-提供小额贷款、短期贷款、无抵押贷款、信用贷款、购车贷款，淘宝卖家贷款，网商贷款、享受更低的贷款利率，更便捷的借款流程" />
        
        <meta name="keywords" content="网络借贷，网络贷款，借贷 网络平台，民间借贷，小额贷款，无抵押贷款，信用贷款，投资理财，人人贷"/>
    </head>
    <body>
        <div id="loading" style="display:none">

            <br/>
            <br/>
            <div align='center' class="clearfix">
                <img src='../images/loading.gif' style="vertical-align:middle;"/>正在加载数据中...
            </div>
            <br/>
            <br/>
        </div>
        <div id="loadingFail" style="display:none">

            <br/>
            <br/>
            <div align='center' class="clearfix">
                <img src='../images/answer_error.jpg' style="vertical-align:middle;"/>数据加载失败，请稍后重试。
            </div>
            <br/>
            <br/>
        </div>
        <div id="page" class="session_invalid_tag">

            


<style type="text/css">
    .logo_hack{
        behavior: url(../images/iepngfix.htc);
    }
</style>
<?php require("../header.php"); ?>

<div class="clearfix" id="content">

    <div class="grid-2-2-8 clearfix">

        <div class="left">
            

<div class="left_item">
    <div class="left_body">
        <dl id="anquan">
           <dl>
            <dt class="cur" onClick="showli(this.id)" id="benjin">
                <span>本金保障</span>

            </dt>

            <dd onClick="showli(this.id)" id="bja">
                <span>本金保障计划</span>
            </dd>			
           </dl>
           <dl>
            <dt onClick="showli(this.id)" id="zhanghu">

                <span>交易安全保障</span>

            </dt>
            <dd onClick="showli(this.id)" id="zha">
                <span>账户安全</span>
            </dd>			
            <dd onClick="showli(this.id)" id="zhb">
                <span>隐私保护</span>

            </dd>
           </dl>
           <dl> 
          	<dt onClick="showli(this.id)" id="lichai">
                <span>贷款审核与保障</span>
            </dt>
            <dd onClick="showli(this.id)" id="lca">

                <span>严格的贷前审核</span>
            </dd>			
            <dd  onClick="showli(this.id)" id="lcb">

                <span>完善的贷中贷后管理</span>
            </dd>
           </dl>
           <dl> 
            <dt  onClick="showli(this.id)" id="jiaoyi">

                <span>网上理财安全建议</span>
            </dt>
            <dd onClick="showli(this.id)" id="jya">

                <span>五大重要守则</span>
            </dd>
            <dd onClick="showli(this.id)" id="jyb">
                <span>避免私下交易</span>

            </dd>				
          </dl> 
        </dl>
    </div>

    <div class="left_bottom">

    </div>
</div>
</div>
<script type="text/javascript">
function showli(o){
	var obj=$("#"+o+"");
	//$("#anquan dd").hide();
	obj.parent().find("dd").show();
	$("#anquan dl dt,#anquan dl dd").removeClass("cur");
	$(".info_content").hide();
	if(obj[0].tagName=="DT"){
		obj.addClass("cur");
		document.getElementById(o+"_con").style.display="block";
	}else{
		obj.parent().find("dt").addClass("cur");
		obj.addClass("cur");
		document.getElementById(obj.parent().find("dt")[0].id+"_con").style.display="block";
		
		location.href="details.php#go_"+o;	
	}
	
	
}
$(function(){
	var hash=location.hash;
	
	if(hash.indexOf("go_")!=-1){
		var id=hash.substr(hash.indexOf("go_")+3,20)
		showli(id)
	}

})
</script>
<div id="right" class="right">

<div class="info_content" style="display: block;" id="benjin_con">
    <div class="layout-box">
        <div class="top">
            <b class="cor-l"></b>

            <b class="cor-r"></b>
        </div>

        <div class="cont">
            <div class="anquanbz_box">

                <div class="wewfimg"><img src="../images/u57_original.jpg?v=20120917" /></div>
 			  <div class="bztitle" id="go_bja">本金保障计划</div>	
              <h3 style="border:none">什么是本金保障计划？</h3>

              <p>本金保障指当理财人（借出者）投资的借款出现严重逾期时（即逾期超过30天），人人贷将向理财人垫付此笔借款未归还的剩余出借本金或本息（具体情况视投资标的类型的具体垫付规则为准），从而为理财人营造一个安全的投资环境，保证投资人的本金安全。</p>
              
              <h3  style="border:none">理财人（出借者）需要向人人贷支付本金保障计划服务的费用吗？</h3>
              <p>当前理财人无需支付任何费用，通过身份认证成为借出者即可享受此服务。</p>

              
              <h3  style="border:none">如果我投资的借款发生逾期了，人人贷如何赔付？</h3>
              <p>当您投资的借款发生逾期30天后，人人贷风险备用金账户会在一个工作日内将此笔借款的应赔付金额自动充入您的人人贷账户中（具体情况视投资标的类型的具体垫付规则为准）。</p>  
            
            <h3  style="border:none">我在人人贷上的所有理财投资是否都适用人人贷本金保障计划？</h3>
              <p>是的，每项投资的具体垫付规则视投资标的具体类型而定。</p>  
            
               <div class="bztitle">风险备用金账户规则</div>

               <p>“风险备用金账户”是指为人人贷所服务的所有理财人的共同利益考虑、以人人贷名义单独开设并由其管理的一个专款专用账户。</p>
               
               <h3  style="border:none">“风险备用金账户”资金来源：</h3>
				<p>
				“风险备用金账户”资金当前全部来源于人人贷根据其与借款人签署的协议向其所服务的借款人所收取的服务费（以下简称“服务费”），人人贷在依协议向借款人收取服务费的同时，将在收取的服务费中按照贷款产品类型及借款人的信用等级等信息计提风险备用金（详见《人人贷风险备用金账户—产品垫付规则明细表》）。计提的风险备用金将存放入“风险备用金账户”进行专户管理。各产品类型及信用等级等所对应的风险备用金的计提标准和方式由人人贷制定并解释，人人贷有权根据实际业务需要对相关内容进行调整，如作修改，人人贷将及时进行披露。
				</p>
               
              <h3 style="border:none">“风险备用金账户”资金用途：</h3>  
              <p>
              “风险备用金账户”资金将专门用于在一定限额内弥补人人贷所服务的理财人（债权人）由于借款人（债务人）的违约所遭受的本金或本息的损失（具体赔付金额以所投资的产品类型的垫付规则为准），即当借款人（债务人）逾期还款超过30日时，人人贷将按照“风险备用金账户”资金使用规则从该账户中提取相应资金用于偿付理财人（债权人）应收取的本金或本息金额（不同产品的垫付范围请参考《人人贷风险备用金账户—产品垫付规则明细表》）（以下统一简称“逾期应收赔付金额”）。
              </p>
         		
         	
         	<h3 style="border:none">“风险备用金账户”资金使用规则：</h3> 
         	<p>“风险备用金账户”资金使用遵循以下规则：</br>
         	1、违约偿付规则，即当借款人（债务人）逾期还款超过30 日时，方才从“风险备用金账户”资金中抽取相应资金偿付理财人（债权人）逾期应收赔付金额。</br>
2、时间顺序规则，即“风险备用金账户”资金对理财人（债权人）逾期应收赔付金额的偿付按照该债权发生的时间顺序进行偿付分配，先偿付时间发生在前的债权，后偿付时间发生在后的债权。</br>
3、债权比例规则， “风险备用金账户”资金对同一借款协议下的不同理财人（债权人）逾期应收赔付金额的偿付按照各债权金额占同协议内发生的债权总额的比例进行偿付分配；或，当“风险备用金账户”资金当期余额不足以支付当期（每月为一期）所有应享受该账户的理财人所对应的逾期赔付金额时，则当期应享受该账户的理财人按照各自对应的逾期应收赔付金额占当期所有理财人对应的逾期应收赔付总额的比例进行偿付分配。</br>
4、有限偿付规则，即“风险备用金账户”资金对理财人（债权人）逾期应收赔付的偿付以该账户的资金总额为限，当该账户余额为零时，自动停止对理财人逾期应收赔付金额的偿付，直到该账户获得新的风险备用金。</br>
5、收益转移规则，即当理财人享有了“风险备用金帐户”对某笔逾期债权赔付金额的足额偿付后，该债权对应的借款人其后为该笔债权所偿还的本金、利息及罚息归属“风险备用金账户”；如债权有抵押、质押及其他担保的，则平台代借款人处置抵押质押物的所得等也归属“风险备用金账户”。</br>
6、金额上限规则，即当“风险备用金帐户”内金额超过当时平台上所有债权本金金额的10%时，人人贷有权将超出部分转出该账户，转出部分归人人贷所有。</br>

         	
         	</p>	
      
         		<h3 style="border:none">“风险备用金账户”资金管理原则：</h3> 
         		<p>人人贷将审慎管理“风险备用金账户”资金，并就账户及资金使用情况对理财人进行定期（按季度/月）披露。具体披露方式及解释权归人人贷所有。</p>
         		
         		<h3 style="border:none">附表：《人人贷风险备用金账户—产品垫付规则明细表》</h3> 
         		<p style="position:relative; text-align:center;"><img src="/images/benjinhelp.jpg" /><a href="/help.php#zhi" target="_blank" style="background: url(about:blank); width: 105px; height: 19px; display: block; position: absolute; left: 327px; top: 263px;"></a></p>
               <p class="b">注：信用认证标中与部分渠道合作的产品风险金计提标准不适用上表规则，将根据合作渠道的具体情形单独设定。</p>
         		
         		<div class="clearfix gozcbox" id="go_bjb">
            	   <div class="gozhuche"><span>立刻注册人人贷</span> </div><a class="zhuchea" target="_blank" href="/regPage.php?">注 册</a>

               </div>
            
            </div>   
        </div>
        <div class="bot">

            <b class="cor-l"></b>
            <b class="cor-r"></b>
        </div>
    </div>
</div>

         
<div class="info_content" style="display: none;" id="zhanghu_con">
    <div class="layout-box">
        <div class="top">
            <b class="cor-l"></b>

            <b class="cor-r"></b>
        </div>
        <div class="cont">
            <div class="anquanbz_box">

            	
                <div class="wewfimg"><img src="../images/u39_original.jpg?v=20120917" /></div>
                
            </div> 
          <div class="anquanbz_box">
            <div class="bztitle" id="go_zha">账户安全</div>

            <h3>第三方资金托管</h3>
            <p>人人贷公司目前对客户交易资金的保管完全按照"专户专款专用"的标准模式进行运作，客户在人人贷公司的交易资金是可以完全放心的。</p>
            <ul id="anquan_step" class="clearfix">

            	<li><a href="#zha_stpe1">第 1 步：牢记人人贷官方网址，警惕欺诈网站</a></li>
                <li><a href="#zha_stpe2">第 2 步：用邮箱注册一个人人贷账号</a></li>

                <li><a href="#zha_stpe3">第 3 步：设置高强度的"登录密码"</a></li>

                <li><a href="#zha_stpe4">第 4 步：多给电脑杀毒</a></li>
            </ul>   
            <h3 id="zha_stpe1">第 1 步：牢记人人贷官方网址，警惕欺诈网站</h3>

            <p>请牢记人人贷的官方网址是http://www.edaitong365.com，不要点击来历不明的链接访问人人贷。您可将人人贷的官网链接添加到浏览器的收藏夹中，以便您的下次登录。</p>
     
            <h3 id="zha_stpe2">第 2 步：用邮箱注册一个人人贷账号</h3>
            <p>您可以用一个常用的电子邮箱注册一个人人贷账号，您将用该邮箱接收来自人人贷的验证、提醒等重要通知邮件。</p>

             <img src="../images/u232_original.jpg" width="730px" />
             
            <h3 id="zha_stpe3">第 3 步：设置高强度的"登录密码"</h3>
            <p>什么是高强度的登录密码，怎么设置会更安全？您在密码设置时，最好使用数字和字母混合，不要使用纯数字或纯字母。强烈建议不要把"登录密码"设置成生日、姓名拼音或是邮箱名，这些都是容易被他人猜到的形式。</p> 
            
            <h3 id="zha_stpe4">第 4 步：多给电脑杀毒</h3>

            <p>及时更新操作系统补丁，升级新版浏览器，安装反病毒软件和防火墙并保持更新；避免在网吧等公共场所使用网上银行，不要打开来历不明的电子邮件等。</p>
            <p>电脑中毒会怎么样？ 如果电脑一直中毒，病毒会容易获取您的账户信息。</p>
            <p>电脑怎么杀毒？ 我们推荐支付宝安全联盟，联盟提供了很多免费的杀毒软件下载。</p>

            
            
        </div> 
        <div class="anquanbz_box">
               <div class="bztitle" id="go_zhb">隐私保护</div>
               <h3>我们有哪些措施保障您的隐私安全</h3>

               <ul id="anquanli">
                   <li>人人贷严格遵守国家相关法律法规，对用户的隐私信息进行严格的保护。 </li>
                   <li>我们采用业界最先进的加密技术，用户的注册信息、账户收支信息都已进行高强度的加密处理，不会被不法分子窃取到。 </li>

    
                   <li>人人贷设有严格的安全系统，未经允许的员工不可获取您的相关信息。</li>
                   <li>人人贷绝不会将您的账户信息、银行信息以任何形式透露给第三方。 </li>
               </ul>

               <h3>个人信息安全：</h3>
               <p>人人贷是一个实名认证平台，人人贷会保证用户信息隐私的安全，用户在平台上交流的过程中，也要时刻注意保护个人隐私，截图注意覆盖个人信息，不要透露真实姓名与住址等，以防个人信息被盗取造成损失。 </p>
               <div class="clearfix gozcbox">
            	   <div class="gozhuche"><span>立刻注册人人贷</span> </div><a class="zhuchea" target="_blank" href="/regPage.php?">注 册</a>

               </div>
            </div>

         
        </div>
        <div class="bot">
            <b class="cor-l"></b>
            <b class="cor-r"></b>
        </div>

    </div>

</div>
<div class="info_content" style="display: none;" id="lichai_con">
    <div class="layout-box">

        <div class="top">
            <b class="cor-l"></b>
            <b class="cor-r"></b>
        </div>
        <div class="cont">
            <div class="anquanbz_box">

                <div class="wewfimg"><img src="../images/u21_original.jpg?20110907" /></div>

               <p style="margin-top:10px;">人人贷拥有一套科学有效的信用审核标准和方法，对借款用户进行信用风险分析及信用等级分级。同时人人贷建立了完整严谨的风险管理体系包括贷前审核、贷中审查和贷后管理以控制借款逾期违约的风险。从创立开始，人人贷借款逾期率一直保持在0.9%以内，为业内最优水平。</p> 
            </div> 
            
            <div class="anquanbz_box">

            <div class="bztitle" id="go_lca">严格的贷前审核</div>
            <div class="lca_coninfo">贷前审核：<br/>
在客户提出借款申请后，人人贷会对客户的基本资料进行分析。通过网络、电话及其他可以掌握的有效渠道进行详实、仔细的调查。避免不良客户的欺诈风险。在资料信息核实完成后，根据个人信用风险分析系统进行评估，由经验丰富的贷款审核人员进行双重审核确认后最终决定批核结果。</div>

          
           </div> 
            <div class="anquanbz_box">


            <div class="bztitle" id="go_lcb">完善的贷中贷后管理</div>

        
            <div class="lca_coninfo">贷中审查：<br/>
贷中审核人员会对借款中客户资料的有效期、资料属性及客户的还款状态进行实时监控，对客户信息变动进行更新。保持与客户的畅通联系，避免失去联系导致借款产生风险。对异常客户转入贷后管理系统。</div>
            <div class="lca_coninfo">贷后管理：<br/>
如果用户逾期未归还贷款，贷后管理部门将第一时间通过短信、电话等方式提醒用户进行还款，如果用户在5天内还未归还当期借款，人人贷将会联系该用户的紧急联系人、直系亲属、单位等督促用户尽快还款。如果用户仍未还款，交由专业的高级催收团队与第三方专业机构合作进行包括上门等一系列的催收工作，直至采取法律手段。</div>

             <div class="clearfix gozcbox">
            	   <div class="gozhuche"><span>信赖人人贷</span> 立刻注册</div><a class="zhuchea" target="_blank" href="/regPage.php?">注 册</a>

            </div>
           </div>    
        </div>

        <div class="bot">
            <b class="cor-l"></b>
            <b class="cor-r"></b>
        </div>
    </div>

</div>

<div class="info_content" style="display: none;" id="jiaoyi_con">
    <div class="layout-box">
        <div class="top">
            <b class="cor-l"></b>
            <b class="cor-r"></b>

        </div>
        <div class="cont">
            <div class="anquanbz_box">

                <div class="wewfimg"><img src="../images/u3_original.jpg?v=20120917" /></div>
                
            </div>
            <div class="anquanbz_box">
             <div class="bztitle" id="go_jya">五大重要守则</div>
                <h3>安全补丁更新：</h3>
            	<p>些常用的计算机软件的保安漏洞可被病毒作者和黑客利用，来进入那些未安装安全补丁程序的计算机，盗取资料。一旦发现这种情况，软件出版商便会推出安全补丁程序来堵塞这些漏洞。您可定期浏览软件出版商的网站，对操作系统和应用软件进行安全补丁更新。 </p>
                <h3>防病毒软件：</h3>

            	<p>安装防病毒软件，定期更新软件及安装最新的病毒定义文件，有效保障计算机免受病毒侵袭。 </p>
                <h3>个人防火墙：</h3>

            	<p>安装防火墙，帮助保护您的计算机系统不会在连接互联网时受到侵袭，可阻止资料在未经您授权下传入或传出您的计算机。 </p>
                <h3>反间谍程序：</h3>
            	<p>间谍软件可运行在用户计算机上用以监测及收集用户上网信息的程序，能够监测和搜集用户的上网信息，比如获取您输入的个人信息，包括密码、电话号码、信用卡帐号及身份证号码。间谍软件往往作为某些服务的「免费」下载程序的一部分下载到个人计算机中，或在未经您同意或知晓的情况下被下载到您的计算机中。我们强烈建议您安装并使用较有信誉的反间谍软件产品以保护您的计算机免受间谍软件的侵害。 </p>

                <h3>密码设置注意事项：</h3>

            	<p>密码是取得您的网上户口数据的钥匙，因此您必须紧记将密码妥为保密。密码可以是任何字符，包括数字、字母、特殊字符等。长度在6～16位之间，区分英文字母大小写。密码最好是包含字母、数字、特殊字符的组合，不要设置成常用数字，如：生日、电话号码等，也不要设为一个单词。密码的位数应该超过六位，经常修改密码，并为重要服务例如网上理财服务设置独立的密码。 </p>
             	
            </div> 
            <div class="anquanbz_box">

            	<div class="bztitle" id="go_jyb">避免私下交易</div>
            	<p>人人贷建议用户避免尝试私下交易。私下交易的约束力极低，不受《合同法》的保护，造成逾期的风险非常高，同时您的个人信息将有可能被泄漏，存在遭遇诈骗甚至受到严重犯罪侵害的隐患。 </p>

                <div class="clearfix gozcbox">
            	   <div class="gozhuche"><span>立刻注册人人贷</span> </div><a class="zhuchea" target="_blank" href="/regPage.php?">注 册</a>

               </div>
            </div>       
        </div>
        <div class="bot">
            <b class="cor-l"></b>

            <b class="cor-r"></b>
        </div>

    </div>
</div>

            
</div>
</div>
<?php require("../footer.php"); ?>
        </div>
    </body>
  
</html>     
        
