
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">


    



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<script type="text/javascript">
    window.onload = function(){
        if(document.getElementById("page")==null){
            document.body.style.display = "none";
            var url = location.href;
            var i = url.split("//")[1].indexOf("/");
            document.write("<div style=\"position: absolute;top: 50%;left: 50%;font-size: 12px;\"><img src='../images/loading.gif' style=\"vertical-align:middle;\"/>正在加载数据中...</div>");
            window.top.location.href = url.substring(0, i+7);
        }
    }
</script>

<style>
<!--
.f_gray {padding-left:10px;}
.recharge_tips {position:absolute; z-index:99999; }
.recharge_tips .recharge_tip_header { background: url("/theme/default/images/reg_tip_header_t.gif") no-repeat scroll 0 17px transparent; float: left; height: 47px; position: relative; width: 6px; z-index: 1000; }
.recharge_tips .recharge_tip_body_container { background: url("/theme/default/images/reg_tip_bg_bottom.gif") repeat-x scroll center bottom transparent; float: left; margin-left: -1px; padding-bottom: 2px; position: relative; }
.recharge_tips .recharge_tip_body { background: none repeat scroll 0 0 #FFFFFF; border: 1px solid #BBBBBB; float: left; }
.recharge_tips .recharge_tip_body .recharge_tip_content { color: #666666; display: block; padding: 5px 9px 4px; width:253px; line-height:20px;}
-->
</style>
<script type="text/javascript" src="../theme/default/js/validate.js"></script>
<script type="text/javascript">
<!--
	function toBe(){
		$('.nyroModal').nyroModal({
			  hideContent:function(elts, settings, callback){
				  elts.contentWrapper.animate({height: '50px',width: '50px',marginTop: (-(25 + settings.borderH) / 2 + settings.marginScrollTop) + 'px',marginLeft: (-(25 + settings.borderW) / 2 + settings.marginScrollLeft) + 'px'}, {duration: 350,complete: function() {
		                elts.contentWrapper.hide();
		                callback();
		                getAccount('checkin_loan');
		          }});
				 
			  }
		    });
	}
	$(function(){
		
		var isPassed = 'true';
		if(true){
			$("#checkInDiv").css('display','block');
		} else {
			$("#checkInDiv").remove();
			$("#tips").css('display','block');
		}
		toBe();
	});
//-->
</script>
<div id="checkInDiv" style="display:none">
<div id="payDiv" style="display: none">
	<div class="pay_title">请您在新打开的网上银行页面上完成付款。</div>
	<div class="pay_content">
		付款完成前请不要关闭此窗口。<br> 完成付款后请根据您的情况点击下面的按钮：
	</div>
	<div class="pay_bnt">
		<input type="button" value="已完成付款" class="nyroModalClose"
			id="closeBut" onclick="getAccount('fundsLog_loan')">&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="button" value="付款遇到问题" class="nyroModalClose"
			id="closeBut"
			onclick="getInfo(document.getElementById('user_info_account'))">
	</div>
</div>
<div id="item">
	<div class="h20"></div>
	<div style="width:640px;margin:0 auto"><a href="/financeplan/listPlan!listPlan.php?"><img src="/event/yxjh/yxjh_ad_lag2.jpg" /></a></div>
	<div class="h20"></div>
	
	<div
		style="background: #F2F2F2; width: 600px; border: 1px solid #D4D4D4; padding: 10px 0 10px 40px; margin: 0 auto;">
		1、所有投标保证金将由第三方平台托管。 <br> 2、即时充值所产生的转账费用，以100元为上限，按转账金额0.0%，由第三方平台收取。 <br>
		3、请注意您的银行卡充值限制，以免造成不便。 <br> 4、如果充值金额没有及时到账，请和客服联系。
	</div>
</div>
<div class="h20"></div>
<div class="clearfix" style="width:640px;border:1px solid #ccc;margin:0 auto;line-height:30px;"> 
      <div class="l" style="line-height:30px;background:#F2F2F2;padding:0 20px;border-right:1px solid #ccc">累计充值金额：</div>
      <div class="l" style="padding-left:10px;">  0.00 元（备注：不含手续费，为实际到帐金额。）</div>
</div>
<div class="h20"></div>
<div class="item_group">请选择下面您最便捷的方式进行帐户充值：</div>
<form name="checkinForm" method="post" id="checkinForm" action="../my/userCheckin.php?" target="_blank" onsubmit="return payAmount();">
	<div class="user_info_box clearfix">
		<dl>
			<dt>
				<input type="radio" name="paytype" value="quickPay" id="kuaiqian"
				    checked onclick="changeType('kuaiqian');">
			</dt>
			<dd>
				<img class="img_b logo_hack" alt="快钱" src="../images/checkin_kq.png">
				<div class="f_gray center">(转账费用：0.0%)</div>
			</dd>
			<dt></dt>
			<dt>
				<input type="radio" name="paytype" value="wangyin" id="wangyin"
					onclick="changeType('wangyin');">
			</dt>
			<dd>
				<img class="img_b logo_hack" alt="网上银行" src="../images/wangyin.png">
				<div class="f_gray center">(转账费用：0.0%)</div>
			</dd>
		</dl>
	</div>
	<div id="bankDiv" style="display: none;">
		<h2
			style="height: auto; margin: 0 auto; width: 600px; border-bottom: 1px solid #CCCCCC; font-size: 16px; margin-bottom: 10px; padding-bottom: 10px;">
		</h2>
		<div></div>
		<div class="bank_info_box clearfix">
			<dl>
				<dt>
					<input type="radio" name="bank" id="cmb" checked value="CMB"
						onclick="getBankCode();" />
				</dt>
				<dd>
					<img class="img_b" alt="招商银行" src="../images/bank/bank_cmb.gif">
				</dd>
				<dt></dt>
				<dt>
					<input type="radio" name="bank" value="ICBC"
						onclick="getBankCode();" />
				</dt>
				<dd>
					<img class="img_b" alt="工商银行" src="../images/bank/bank_icbc.gif">
				</dd>
				<dt></dt>
				<dt>
					<input type="radio" name="bank" value="CCB"
						onclick="getBankCode();" />
				</dt>
				<dd>
					<img class="img_b" alt="建设银行" src="../images/bank/bank_ccb.gif">
				</dd>
				<dt></dt>
				<dt>
					<input type="radio" name="bank" value="BCOM"
						onclick="getBankCode();" />
				</dt>
				<dd>
					<img class="img_b" alt="交通银行" src="../images/bank/bank_bcom.gif">
				</dd>
			</dl>
		</div>
		<div class="bank_info_box clearfix">
			<dl>
				<dt>
					<input type="radio" name="bank" value="BOC"
						onclick="getBankCode();" />
				</dt>
				<dd>
					<img class="img_b" alt="中国银行" src="../images/bank/bank_boc.gif">
				</dd>
				<dt></dt>
				<dt>
					<input type="radio" name="bank" value="SPDB"
						onclick="getBankCode();" />
				</dt>
				<dd>
					<img class="img_b" alt="上海浦东发展银行"
						src="../images/bank/bank_spdb.gif">
				</dd>
				<dt></dt>
				<dt>
					<input type="radio" name="bank" value="PAB"
						onclick="getBankCode();" />
				</dt>
				<dd>
					<img class="img_b" alt="平安银行" src="../images/bank/bank_pab.gif">
				</dd>
				<dt></dt>
				<dt>
					<input type="radio" name="bank" value="CMBC"
						onclick="getBankCode();" />
				</dt>
				<dd>
					<img class="img_b" alt="中国民生银行" src="../images/bank/bank_cmbc.gif">
				</dd>
			</dl>
		</div>
		<div class="bank_info_box clearfix">
			<dl>
				<dt>
					<input type="radio" name="bank" value="CEB"
						onclick="getBankCode();" />
				</dt>
				<dd>
					<img class="img_b" alt="中国光大银行" src="../images/bank/bank_ceb.gif">
				</dd>
				<dt></dt>
				<dt>
					<input type="radio" name="bank" value="CIB"
						onclick="getBankCode();" />
				</dt>
				<dd>
					<img class="img_b" alt="兴业银行" src="../images/bank/bank_cib.gif">
				</dd>
				<dt></dt>
				<dt>
					<input type="radio" name="bank" value="CITIC"
						onclick="getBankCode();" />
				</dt>
				<dd>
					<img class="img_b" alt="中信银行" src="../images/bank/bank_citic.gif">
				</dd>
				<dt></dt>
				<dt>
					<input type="radio" name="bank" value="ABC"
						onclick="getBankCode();" />
				</dt>
				<dd>
					<img class="img_b" alt="中国农业银行" src="../images/bank/bank_abc.gif">
				</dd>
				<dt></dt>
			</dl>
		</div>
	</div>
	<div class="h20"></div>
	<div class="item_group">请输入你的充值金额：</div>
	<div class="user_info_box clearfix" style="position:relative">
		<div class="user_info_item">
			<span class="user_info_item_left"><span class="f_red b">*</span>充值金额：</span> 
			<span> <a href="#payDiv" id="recharge"></a> 
				   <input type="text" name="amount" class="input70" id="amount" onkeyup="calRecharge('checkin')" onfocus="hideErrorTip()" onblur="calRecharge('checkin')" onpropertychange="calRecharge('checkin')"> 
			           <label class="f_gray" id="msgAmount">&nbsp;&nbsp;单笔充值金额应大于1元且小于30万元</label>
                        </span>
		</div>
		<div class="user_info_item">
			<span class="user_info_item_left">充值费用：</span> <span id="fee">0.00元</span><img src="../images/tips_wh.jpg" id="imgtips" style="position:absolute;top:52px; left:236px;z-index:999;" onmouseover="hovertips(this,'第三方支付平台将在充值时收取0.0%转账费用,此费用上限为100元,超过的部分由人人贷承担。',41,255)">
		</div>
		<div class="user_info_item">
			
				<span class="f_gray" style="padding-left:145px">
				<input type="checkbox" id="free" style="margin:0 5px 1px 20px" name="free"   onclick="calRecharge('checkin')" >
	            使用最近到期的一张充值免费券（您当前拥有<span class="f_red" style="margin:0 5px;cursor:pointer;" id="couponCount" onmouseover="tips2(this)" onmouseout="tipshide(this)"> 1 </span>张充值免费券）</span>
            
		</div>
		<div class="user_info_item">
			<span class="user_info_item_left">实际支付金额：</span> <span
				id="realAmount">0.00 元</span>
		</div>
		<div class="user_info_item">
			<span class="user_info_item_left">目前账户可用余额：</span> <input
				type="hidden" id="currentBanlance" value="0.0">
			0.00
			元<br>
		</div>
		<div class="user_info_item">
			<span class="user_info_item_left">充值后账户可用余额：</span> <span
				id="afterBanlance">0.00
				元</span><br>
		</div>
		<div class="h20"></div>
		<div class="coupon_tips" style="top:91px; left:221px;*left:221px; display: none;" id="couponCountTip">
			<div class="coupon_tips_header" style="height:20px;width:315px">&nbsp;</div>
			<div class="coupon_tips_bg f_gray" style="width:271px;padding:2px 22px;">
				<div>您共有1张可以使用的充值免费券，到期日分别为：</div>
				<div style="padding:0 10px;width:250px;">
					<ul class="clearfix">
						
						<li class="l" style="margin:0 5px; width:65px;">2013.07.11 </li>
						
					</ul>
				</div>
				<div>系统将为您默认使用最近到期的一张免费充值券</div>
			</div>
			<div class="coupon_tips_bottom">&nbsp;</div>
		</div>
	</div>
	<div class="b" style="padding: 10px 90px;">
		提醒： <span class="f_red">
			<p>1、在支付页面完成充值后，请点击“返回商户”链接，返回人人贷网站，而不要直接关闭支付页面窗口，否则会造成充值金额延后到账。
			</p>
			<p>2、快钱充值通道不支持快钱账户余额充值，即不支持先充值到您的快钱账户，再将资金转入您的人人贷账户。</p>
		</span>
	</div>
	<div class="h20"></div>
	<div style="text-align: center">
		
		
			<input type="hidden" name="bankId" value="CMB" id="bankId">
			<input type="hidden" value="" id="payFeeType" />
			<input type="submit" value="充值" id="kuaiqianBtn"
				class="saveSettingBnt" />
		
	</div>
</form>
<div class="h20"></div>
</div>
<div class="layout-box" id="tips" style="display:none">
    <div class="cont errorBg">
        <div class="layout-box error_msg_tip">
            <div class="top">
                <b class="cor-l"></b>
                <b class="cor-r"></b>
            </div>
            <div class="cont error-h">
            	<div style="text-align:center">您好，您尚未成为理财人或借款人，暂时不能使用提现功能。</div>
                            <div class="h20"> </div><br>
                    <div style="text-align:center"><a href="../lend/beLender.php?" class="nyroModal" >&nbsp;&nbsp;成为理财人>></a></div><br>
                    <div style="text-align:center"><a href="/borrow/beBorrowerPage.php?" class="nyroModal" >&nbsp;&nbsp;成为借款人>></a></div>
            </div>
            <div class="bot">
                <b class="cor-l"></b>
                <b class="cor-r"></b>
            </div>
            <div class="shade">
                <div class="shade-l">
                </div>
                <div class="shade-c">
                </div>
                <div class="shade-r">
                </div>
            </div>
        </div>
    </div>
    <div class="bt">
    </div>
</div>
<script type="text/javascript">
$(function(){
	//fixed ie6
	$('.nyroModal').nyroModal({width:620,height:480});
}); 
	//充值
	function payAmount() {
		var s = $("#amount").val();
		var amount = 0;
		if (s != "" && s != null) {
			amount = parseFloat(s);
		}
		var v = parseFloat(amount) > 1
				&& parseFloat(amount) < 300000
				&& /^(([1-9]{1}\d*)|([0]{1}))(\.(\d){1,2})?$/
						.test(parseFloat(amount));
		if (!v) {
			$("#forAmount").show();
			return false;
		}
		$('#recharge').nyroModal({
			width : 400,
			height : 240,
			minWidth : 400, // Minimum width
			minHeight : 240
		// Minimum height
		});
		$("#recharge").click();
		return true;
	}
	
	
	function tips2(o){
		var couponCountTip=$("#couponCountTip").show();
	}
	function tipshide(o){
		setTimeout(function(){$("#couponCountTip").hide()},1000)
	}
	function hovertips(input,msg,top,left){
		var tip='<div class="recharge_tips" style="top: '+top+'px; left:'+left+'px; display: block;"><div class="recharge_tip_header"></div><div class="recharge_tip_body_container"><div class="recharge_tip_body"><div class="recharge_tip_content">'+msg+'</div></div></div></div>';
		$("#imgtips").after(tip);
		input.onmouseout=function(){
			setTimeout(function(){$(".recharge_tips").remove()},500);	
		}
	}
</script>



