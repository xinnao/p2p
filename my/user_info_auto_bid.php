
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<script type="text/javascript" src="../theme/default/js/validate.js">
</script>
<style>
.user_info_box, .item_group, .tips {
width: 620px;
}
.user_info_box{width:620px;}
</style>

<!--我的主页 START-->


<!--我的主页 END-->
<!--借入管理 START-->





<!--借入管理 END-->
<!--借出管理 START-->








	
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
<div class="clearfix">
    <ul>
        <li style="cursor: default" class="right_tab_select">自动投标工具</li>
    </ul>
</div>
<div class="tab_interval_green"></div>
<div class="clearfix">
    <div class="layout-box">
        <div class="cont">
            <div class="h5"></div>
            <div style="border: 1px solid #E1E0D6; padding: 10px">
                <div style="color: #003C85; padding: 5px 0" class="f_16 b">
                    设置我的自动投标工具</div>
                <style>
                    .setTender table {
                        font: 宋体
                    }

                    .setTender table th {
                        font-weight: bold;
                        padding-right: 10px;
                    }

                    .setTender table select,.setTender table input {
                        vertical-align: middle;
                        height: 20px;
                        line-height: 20px;
                        padding-left: 5px;
                    }
                </style>
                <div class="setTender" style="position: relative">
                    <form id="userAutoBidConditionForm" name="userAutoBidConditionForm" action="../my/updateUserAutoBidCondition.action" method="post">
                        
                        
                            <input type="hidden" id="forAutoBidEnable" name="status" value="true"/>
                            <div style="position: absolute; top: 0; left: 600px;"> 
                                
                                
                                    <button class="autoBidDisabled" disabled>开启自动投标</button>
                                
                            </div>
                        
                        <div style="position: absolute; top: 40px; left: 600px;">
                        	
                            <button class="autoBidSave" type="submit" onclick="$('#forAutoBidEnable').remove()">保存设置</button>
                            
                            
                        </div>
                        <table>
                            <tr style="line-height: 2.5">
                                <th>自动投标状态：</th>
                                <td style="color:blue">关闭状态</td>
                                <td style="color: red"></td>
                            </tr>
                            <tr style="line-height: 2.5">
                                <th>您的账户余额：</th>
                                <td style="">0.0 元</td>
                                <td style="color: red">（大于等于1000元才可开启自动投标工具）</td>
                            </tr>
                            <tr style="line-height: 2.5">
                                <th>每次投标金额：</th>
                                <td>
                                    <input style="width: 60px;" type="text" value="500" id="ten_value" name="fixedAmount" />元
                                    <span
                                        style="border: 1px solid #ccc; font-size: 14px; cursor: pointer; padding: 0px 2px; vertical-align: middle; margin-left: 10px; -moz-user-select: none;"
                                        onClick="jiajian('jia')" unselectable="on"
                                        onselectstart="return false;">＋</span><span
                                        style="border: 1px solid #ccc; font-size: 14px; cursor: pointer; padding: 0px 2px; vertical-align: middle; margin-left: 10px; -moz-user-select: none;"
                                        onClick="jiajian('jian')" unselectable="on"
                                        onselectstart="return false;">－</span></td>
                                <td style="color: red">（该数值须不小于200元，且为50的倍数）</td>
                            </tr>
                            <tr style="line-height: 2.5">
                                <th>利息范围：</th>
                                <td><input style="width: 50px" type="text"
                                           value="10"
                                           id="ten_min_lixi" name="loanLowestInterest" />% － <input
                                           style="width: 50px" type="text"
                                           value="16"
                                           id="ten_max_lixi" name="loanHighestInterest" />%</td>
                                <td style="color: red">（10%-24%为有效利率范围）</td>
                            </tr>
                            <tr style="line-height: 2.5">
                                <th>借款期限：</th>
                                <td><select style="width: 52px" id="ten_min_date"
                                            name="lowestLoanPeriod">
                                        <option value="3" >3</option>
                                        <option value="6" >6</option>
                                        <option value="9" >9</option>
                                        <option value="12" >12</option>
                                        <option value="18" >18</option>
                                        <option value="24" >24</option>
                                        <option value="36" >36</option>
                                    </select>月 － <select style="width: 52px" id="ten_max_date"
                                                         name="hightestLoanPeriod">
                                        <option value="36" >36</option>
                                        <option value="24" >24</option>
                                        <option value="18" >18</option>
                                        <option value="12" >12</option>
                                        <option value="9"  >9</option>
                                        <option value="6"  >6</option>
                                        <option value="3"  >3</option>
                                    </select>月</td>
                                <td></td>
                            </tr>
                            <tr style="line-height: 2.5">
                                <th>信用等级范围：</th>
                                <td><select style="width: 52px" id="ten_min_rank"
                                            name="creditLowLevel">
                                        <option value="HR" >HR</option>
                                        <option value="E" >E</option>
                                        <option value="D" >D</option>
                                        <option value="C" >C</option>
                                        <option value="B" >B</option>
                                        <option value="A" >A</option>
                                        <option value="AA" >AA</option>
                                    </select> <span style="margin: 0 6px;">－</span> <select
                                        style="width: 52px" id="ten_max_rank" name="creditHightLevel">
                                        <option value="AA" >AA</option>
                                        <option value="A" >A</option>
                                        <option value="B" >B</option>
                                        <option value="C" >C</option>
                                        <option value="D" >D</option>
                                        <option value="E" >E</option>
                                        <option value="HR" >HR</option>
                                    </select></td>
                                <td></td>
                            </tr>
                            <tr style="line-height: 2.5">
                                <th>账户保留金额：</th>
                                <td><input style="width: 132px;" type="text"
                                           value="200" id="ten_remain"
                                           name="retainAmount" /> 元</td>
                                <td style="color: red">（您可填写一个金额，这部分钱不会加入自动投标）</td>
                            </tr>
                        </table>
                    </form>




                </div>
            </div>
            <div class="h10"></div>


            <div style="border: 1px solid #E1E0D6; padding: 10px">
                <div class="f_16 b" style="color: #003C85; padding: 5px 0">
                    自动投标工具说明
                </div>
                <div style="line-height: 24px">
                    1、贷款进入招标中三十分钟后，才会启动自动投标。<br/>
                    2、投标进度达到95%时停止自动投标。若投标后投标进度超过95%，则按照投标进度达到95%的金额向下取50的倍数投标。<br/>
                    3、单笔投标金额若超过该标贷款总额的20%，则按照20%比例的金额向下取50的倍数投标。<br/>
                    4、满足自动投标规则的金额小于设定的每次投标金额，也会进行自动投标。<br/>
                    5、贷款用户在获得贷款时会自动关闭自动投标，以避免借款被用作自动投标资金。<br/>
                    6、投标排序规则如下：<br/>
                    <div style="padding-left:20px;">
                        a）投标序列按照开启自动投标的时间先后进行排序。<br/>
                        b）每个用户每个标仅自动投标一次，投标后，排到队尾。<br/>
                        c）轮到用户投标时没有符合用户条件的标，也视为投标一次，重新排队。<br/>
                    </div>
                </div>
            </div>

            <div class="h10"></div>
        </div>
        <div class="bt"></div>
    </div>
</div>

<input type="hidden" id="type" value="" />

<script type="text/javascript">
	$(function(){
		$('.nyroModal').nyroModal({
			  hideContent:function(elts, settings, callback){
				  elts.contentWrapper.animate({height: '50px',width: '50px',marginTop: (-(25 + settings.borderH) / 2 + settings.marginScrollTop) + 'px',marginLeft: (-(25 + settings.borderW) / 2 + settings.marginScrollLeft) + 'px'}, {duration: 350,complete: function() {
		                elts.contentWrapper.hide();
		               callback();
				  location = '/my/userInfoPage.action?type=user_info_auto_bid';
		          }});
			  }
		    });
	}); 
    function jiajian(type) {
        var initV = Number($("#ten_value").val()) || 0;
        if (type == "jia") {
            initV += 50;

        } else if (type == "jian") {
            initV -= 50;
            if (initV <= 200) {
                initV = 200;
            }
        }
        $("#ten_value").val(initV)
    }
    
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
    	
        var ten_value=$("#ten_value").val();
        var ten_min_lixi=parseFloat($("#ten_min_lixi").val());
        var ten_max_lixi=parseFloat($("#ten_max_lixi").val());	
        var ten_min_date=$("#ten_min_date").val();
        var ten_max_date=$("#ten_max_date").val();
        var ten_min_rank=$("#ten_min_rank").val();
        var ten_max_rank=$("#ten_max_rank").val();
        var ten_remain=$("#ten_remain").val();
        var conHtml="<p>每次投标金额："+ten_value+"元</p><p>利息范围：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"+ten_min_lixi+"% - "+ten_max_lixi+"%</p><p>借款期限：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"+ten_min_date+"月 - "+ten_max_date+"月</p><p>信用等级范围："+ten_min_rank.toUpperCase()+" - "+ten_max_rank.toUpperCase()+"</p><p>账户保留金额："+ten_remain+"元</p><div class='clearfix' style='margin:10px 0;'><div  style=\"float:left; margin-right:10px; font-size:12px; display:inline; width:88px; height:30px; line-height:30px; text-align:center; color:#fff; background:url('../theme/default/images/tenderBg.jpg') 0 0 no-repeat; cursor:pointer; font-weight:bold\" onclick=\"confirmBox('yes')\"> 确认开启 </div><div style=\"width:88px; height:30px; line-height:30px; text-align:center; color:#fff; background:url('../theme/default/images/tenderBg.jpg') 0 bottom no-repeat; font-size:12px; cursor:pointer; font-weight:bold;float:left;\" onclick=\"confirmBox('no')\"> 重新设置 </div></div>"
        $("#page").append("<div class='confirmBox'><div class=\"tit\" style=\"font-weight:bold\">请确认您的投标设置</div><div style='padding-left:50px; padding-top:20px;'>"+conHtml+"</div></div>");
    }

    function confirmBox(type){
        if(type=="yes"){
            $('#forAutoBidSave').remove();
            $("#userAutoBidConditionForm").submit();
            $(".confirmBox").remove();
            $("#mask").remove();
        }else{
            $(".confirmBox").remove();
            $("#mask").remove();
        }
    }

    function checkSet() {
        var ten_value = $("#ten_value").val();
        var ten_remain = $("#ten_remain").val();
        if (ten_remain == "" || ten_remain < 0) {
            $("#ten_remain").val(0);
        }
        if (ten_value == "" || ten_value < 200) {
            alert("请正确填写每次投标金额");
            $("#ten_value").focus();
            return false;
        }
        return true;
    }

    function saveSet() {
        if (checkSet()) {
            document.userAutoBidConditionForm.submit();
        }else{
            alert("123")
        }
    }
</script>



<!--借出管理 END-->
<!--信用管理 START-->


<!--信用管理 END-->
<!--资金管理 START-->


<!--资金管理 END-->

<!--理财计划管理 START-->



<!--理财计划管理 END-->

<!--个人设置 START-->








<!--个人设置 END-->
<script type="text/javascript">
$(function(){
	var type='user_info_auto_bid';
	var li = '';
	if(type=="my_finance_detail"&&li!=null&&li!=""){
		$.ajax({
			url:"../my/myFinance_goToFinanceDetail.action?financeSubPointId="+li,
	        type:"POST",
	        dataType: "html",
	        error: function(){
	            $("#b_content").html($("#loadingFail").html());
	        },
	        success: function(data){
	           $(".right").html(data)
	        },
	        beforeSend: function(){
	            $("#b_content").html($("#loading").html());
	        }
		});
	} 
	if(type=="findCashPassword"){
		
		$.ajax({
			url:"/my/cashPwd_goToFindCashPassword.action",
	        type:"POST",
	        dataType: "html",
	        error: function(){
	            $("#b_content").html($("#loadingFail").html());
	        },
	        success: function(data){
	           $(".right").html(data);
	        },
	        beforeSend: function(){
	            $("#b_content").html($("#loading").html());
	        }
		});
	} 
	
});
</script>
