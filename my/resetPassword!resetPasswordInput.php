
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
<div class='clearfix'>
    <ul>
        <li class="right_tab_select">
            重置密码
        </li>
    </ul>
</div>
<div class="tab_interval_green">
</div>
<div class="layout-box">
<div class="linner_title">修改人人贷登录密码</div>
    <div class="cont clearfix">
    	<p></p>
    	<p></p>
    	
    	
    	<p></p>
        <div class="layout-box tip">
        	为了您的账户安全，请定期更换登录密码，并确保登录密码设置与提现密码不同。
        
            <div class="top">
                <b class="cor-l"></b>
                <b class="cor-r"></b>
            </div>
           
            <div class="cont clearfix">
                <form action="../my/resetPassword.action" method="get" id="resetPasswordForm">
                    
<font face="Arial, sans-serif">
    <input type="hidden" value="" name="security_session">
    <input type="hidden" value="1367076201678" name="timestamp">
</font>

                    <table width="440" border="0">
                        <tr>
                            <td>
                                &nbsp;
                            </td>
                            <td colspan="2">
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td>
                                &nbsp;
                            </td>
                            <td colspan="2">
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td width="220">
                                <div align="right">
                                    原密码：
                                </div>
                            </td>
                            <td colspan="2">
                                <input type="password" id="oldPassword" name="oldPassword" class="input180" placeholder="请输入原登录密码"/>
                            </td>
                        </tr>
                        <tr>
                            <td height="35">
                                &nbsp;
                            </td>
                            <td height="35" colspan="2" class="f_gray">
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div align="right">
                                    新密码：
                                </div>
                            </td>
                            <td colspan="2">
                                <input type="password" id="newPassword" name="newPassword" class="input180" placeholder="6-12位字母、数字和符号(不包括空格)"/>
                            </td>
                        </tr>
                        <tr>
                            <td height="35">
                                &nbsp;
                            </td>
                            <td height="35" colspan="2" class="f_gray">
                               &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div align="right">
                                    确认新密码：
                                </div>
                            </td>
                            <td colspan="2">
                                <input type="password" id="renewPassword" name="renewPassword" class="input180" placeholder="请再次输入您的新密码"/>
                            </td>
                        </tr>
                        <tr>
                            <td height="35">
                                &nbsp;
                            </td>
                            <td height="35" colspan="2" class="f_gray">
                               &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td>
                                &nbsp;
                            </td>
                            <td width="196">
                                <div align="center">
                                    <input type="submit" name="submit" id="submit" value="提交" class="saveSettingBnt"/>
                                </div>
                            </td>
                            <td width="145">
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td>
                                &nbsp;
                            </td>
                            <td colspan="2">
                                &nbsp;
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="bt">
            </div>
        </div>
    </div>
    <div class="bt">
    </div>
</div>
<script type="text/javascript">
    $(function(){
    	jQuery.validator.addMethod("isPassWord", function(value, element){
            return this.optional(element) || /^[\@A-Za-z0-9\!#$%\^\&\*\.\~]{6,12}$/.test(value);
        }, "密码须为6-12位字母、数字和符号(不包括空格)");
        $("#resetPasswordForm").validate({
            submitHandler: function(){
            	ajaxSub("resetPasswordForm");
            },
            rules: {
                oldPassword: {
                    required: true,
                    minlength: 6,
                    maxlength: 12
                },
                newPassword: {
                    required: true,
                    isPassWord:true,
                    minlength: 6,
                    maxlength: 12
                },
                renewPassword: {
                    required: true,
                    minlength: 6,
                    equalTo: "#newPassword"
                }
            },
            messages: {
                oldPassword: {
                    required: "请输入密码",
                    minlength: "密码长度为6-12个字符",
                    maxlength: "密码长度为6-12个字符"
                },
                newPassword: {
                    required: "请输入新密码",
                    minlength: "密码长度为6-12个字符",
                    maxlength: "密码长度为6-12个字符"
                },
                renewPassword: {
                    required: "请输入确认密码",
                    minlength: "密码长度为6-12个字符",
                    equalTo: "你输入的密码不一致"
                }
            }
        });
    });
    
    function ajaxSub(ajaxFormName){
    	var params = $("#"+ajaxFormName+" input").serialize()+"&"+$("#"+ajaxFormName+" select").serialize()+"&"+$("#"+ajaxFormName+" textarea").serialize();

    	$.ajax({
    		url: $("#"+ajaxFormName).attr("action"),
    		type: "post",
    		cache: false,
    		dataType: "html",
    		data: params,
    		success: function(data){
    			alert(data);
    			$("#"+ajaxFormName+" input").val('');
    			$("#submit").val('提交');
    		},
    		error: function(data){
    			alert("请求失败，请重试！");
    		}
    	});
    }
</script>
