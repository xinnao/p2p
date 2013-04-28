<?php require("../ckeckonline.php"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<script type="text/javascript" src="../theme/default/js/validate.js">
</script>
<style>
.user_info_box, .item_group, .tips {
width: 620px;
}
.user_info_box{width:620px;}
</style>
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
<script type="text/javascript" src="../theme/default/js/city.js"></script>
<script type="text/javascript" src="../theme/default/js/info.js"></script>
<script type="text/javascript">
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
});
</script>
<script type="text/javascript">
$(function() {
	var options={
			url:"../my/updateDetailInfo.php",
			beforeSubmit:function(){
				if(!checkItemA()){
					return false;
				}
			},
			resetForm:false,
			error:function(){
		         alert('提交失败，请重试!');	
			},
			success:function(data){
				//动态转向
				if(data == "next"){
					$("#user_company_info").click();
				} else {
					alert(data);
					$("#user_advace_info").click();
				}
			}
		};
	$('#userDetailInfoFormForUpdate').ajaxForm(options);
	
	var optionswork={
			url:"../my/updateWorkInfo.php",
			beforeSubmit:function(){	
				if(!checkItemB()){
					return false;
				}
			},
			resetForm:false,
			error:function(){
				 alert('提交失败，请重试!');	
			},
			success:function(data){
				alert(data);
			}
		};
	$('#userWorkInfoFormForUpdate').ajaxForm(optionswork);
});
</script>

<div class='clearfix'>
	
		<ul>
			<li id="user_advace_info" onclick="tabIt(this)" class="right_tab_select">个人详细信息</li>
			<li id="user_company_info" onclick="tabIt(this)" class="right_tab_unselect">工作认证信息</li>
		</ul>
	
	
</div>
<div class="tab_interval_green"></div>
<div class="layout-box">
	<div class="cont">
		<div id="user_advace_info_content">
			<form method="post" id="userDetailInfoFormForUpdate" action="" onsubmit="return false">
				<input type="hidden" value="userInfo" name="fromType" />
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
						selected='selected'>
						大专
					</option>
				
					<option value="本科"
						>
						本科
					</option>
				
					<option value="研究生或以上">研究生或以上</option>
				
		</select>
		</span>
	</div>
	<div class="user_info_item">
		<span class="user_info_item_left"> 入学年份：</span> <span> 
        <select name="graduatedYear" id="graduatedYear">
					<option value="2012" selected='selected'>2012</option>
					<option value="2011">2011</option>				
		</select>
		</span>
	</div>
	<div class="user_info_item">
		<span class="user_info_item_left"> 毕业院校：</span> <span> <input
			value=""
			class="input180"
			name="university" id="university">
		</span>
	</div>
	<div class="user_info_item">
		<span class="user_info_item_left"> <span class="f_red b">*</span>婚姻状况：</span>
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
			居住地址：</span> <span> <input value="友谊大街38号"
			class="input180 "
			name="address" id="address">
		</span>
	</div>

	<!--<div class="user_info_item">
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
	</div>-->
	<div class="user_info_item">
		<span class="user_info_item_left"> 个人头像：</span> <span> <input
			type="button" onclick="uploadImage(96,96,'profile');" value="上传头像"></input>
		</span>
	</div>
	
		<div class="user_info_item">
			<span class="user_info_item_left">&nbsp;</span> <span><img
				id="user_profile" src="../images/user_96.png" alt="用户头像"
				class="img_b" width="96px" height="96px" /> <input name="avatar"
				id="pictureUrl" type="hidden" value="" /></span>
		</div>
	
	

	<div class="b" style="padding: 10px 90px">
		请确保您填写的资料真实有效，所有资料将会严格保密。一旦被发现所填资料有虚假，将会影响您在人人贷的信用，对以后借款造成影响。</div>
	<div class="b f_red" style="padding: 5px 0; text-align: center"
		id="user_advace_info_result">&nbsp;</div>
</div>
<script type="text/javascript">
	PC.initProvince("areaProvince", "河北");
	PC.initCity("areaProvince", "areaCity", "石家庄");
	$(function() {
		var homeaddr = "河北:石家庄";
		var liveaddr = "河北:石家庄";
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
				<div style="text-align: center; padding: 20px 0">
					<input type="submit" class="saveSettingBnt" value="保存并继续">
				</div>
			</form>
		</div>
		<div id="user_company_info_content" style="display: none">
			<form method="post" id="userWorkInfoFormForUpdate" action="" onsubmit="return false">
				<input type="hidden" value="userInfo" name="fromType" />
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
			<input name="office" id="office" value="中国移动" class="input180 ">
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
						selected='selected' >
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
						selected='selected'>
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
						selected='selected'>
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
						selected='selected' >
						500人以上
					</option>
				
		</select> <label for="officeScale" class="error" style="display: none">请选择公司规模
		</label>
		</span>
	</div>

	<div class="user_info_item">
		<span class="user_info_item_left"><span class="f_red b">*&nbsp;</span>职&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;位：</span><span>
			<input value="技术总监"
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
						selected='selected'>
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
						selected='selected'>
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
			value="0311-87364523" name="workPhone"
			id="workPhone" type="text" style="display: none;">
		</span>
	</div>

	<div class="user_info_item">
		<span class="user_info_item_left"><span class="f_red b">*</span>
			工作邮箱：</span> <span> <input value="yu@10086.cn"
			class="input180 "
			name="workEmail" id="workEmail">
		</span>
	</div>
	<div class="user_info_item">
		<span class="user_info_item_left"><span class="f_red b">*</span>
			公司地址：</span> <span> <input
			value="友谊大街38浩2"
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
			value="康德" name="urgentContact"
			id="urgentContact"
			>
		</span>
	</div>
	<div class="user_info_item">
		<span class="user_info_item_left"><span class="f_red b">*</span>
			关系：</span> <span> <input
			value="朋友" name="urgentRelation"
			id="urgentRelation"
			>
		</span>
	</div>
	<div class="user_info_item">
		<span class="user_info_item_left"><span class="f_red b">*</span>
			手机：</span> <span> <input value="13503232323"
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
			value="康名" name="urgentContact2"
			id="urgentContact2"
			>
		</span>
	</div>
	<div class="user_info_item">
		<span class="user_info_item_left"><span class="f_red b">*</span>
			关系：</span> <span> <input
			value="朋友"
			name="urgentRelation2" id="urgentRelation2"
			>
		</span>
	</div>
	<div class="user_info_item">
		<span class="user_info_item_left"><span class="f_red b">*</span>
			手机：</span> <span> <input
			value="13503232326" name="urgentMobile2"

			id="urgentMobile2"
			>
		</span>
	</div>
</div>
<div class="b" style="padding: 10px 90px">
	请确保您填写的资料真实有效，所有资料将会严格保密。一旦被发现所填资料有虚假，将会影响您在人人贷的信用，对以后借款造成影响。</div>
<div class="b f_red" style="padding: 5px 0; text-align: center" id="user_company_info_result">&nbsp;</div>
<script type="text/javascript">
PC.initProvince("areaProvince", "河北");
PC.initCity("areaProvince", "areaCity", "石家庄");
$(function() {
	var homeaddr = "河北:石家庄";
	var liveaddr = "河北:石家庄";
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
				<div style="text-align: center; padding: 20px 0">
					<input type="submit" class="saveSettingBnt" value="保存">
				</div>
			</form>
		</div>
	</div>
</div>
<div class="bt"></div>
<div class="mediaPicker"></div>









<!--个人设置 END-->
<script type="text/javascript">
$(function(){
	var type='user_info_info';
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
