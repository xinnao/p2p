$(function(){
	var idCardPassed=$("#idCardPassed").val()||"false",mobilePassed=$("#mobilePassed").val()||"false";
	
	if(idCardPassed!="true"){
		// 身份证验证
	    jQuery.validator.addMethod("isIdCardNo", function(value, element){
	        value = $.trim(value);
	        return this.optional(element) || checkCard(value);
	    }, "请正确输入您的身份证号码");
	}else{
		jQuery.validator.addMethod("isIdCardNo", function(value, element){
	        //value = $.trim(value);
	        return true;//身份证已绑定不再验证
	    }, "请正确输入您的身份证号码");
	}
	 
    
  //是否是手机或者电话
    jQuery.validator.addMethod("isPhoneOrMobile", function(value, element){
        value = $.trim(value);
        var tel = /^0\d{2,3}[-]?\d{8}$|^0\d{3}[-]?\d{7}$/;
        var mobile = /^(((13[0-9]{1})|(14[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/;
        return this.optional(element) || tel.test(value)||mobile.test(value);
    }, "请正确填写您的工作电话");

    if(mobilePassed!="true"){
    	 //手机验证
        jQuery.validator.addMethod("isMobile", function(value, element){
            var length = value.length;
            var mobile = /^(((13[0-9]{1})|(14[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/;
            return this.optional(element) || (length == 11&&mobile.test(value));
        }, "请正确填写您的手机号码")
    }else{
        jQuery.validator.addMethod("isMobile", function(value, element){
            //var length = value.length;
            //var mobile = /^(((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/;
            return true;//手机已经绑定不再验证
        }, "请正确填写您的手机号码")
    }
       
        
        jQuery.validator.addMethod("isEmail",function(value,element){
            var myreg = /(\S)+[@]{1}(\S)+[.]{1}(\w)+/;
            return this.optional(element)||myreg.test($.trim(value));
        },"请输入正确的邮箱地址");
   
        
        $("#userDetailInfoFormForUpdate").validate({
            rules: {
            	realName: {
            		required: true,
                    minlength: 2,
                    maxlength: 32
            	},
            	idNo: {
               	    required: true,
                    isIdCardNo: true
                },
            	mobile: {
                    required: true,
                    isMobile: true,
                    minlength: 11,
                    maxlength: 11
                },
                birth: {
                    required: true,
                    minlength: 10,
                    maxlength: 12
                },
                graduation: {
                	required: true
                },
                areaProvince_home: {
                    required: true
                },
                areaCity_home: {
                	required: true
                },
                areaProvince_live: {
                	required: true
                },
                areaCity_live: {
                	required: true
                },
                address: {
                	required: true
                }
            },
            messages: {
            	realName: {
                    required: "请输入姓名",
                    isMobile: "请正确填写您的姓名",
                    minlength: "姓名长度不正确",
                    maxlength: "姓名长度不正确"
                },
                idNo: {
                    required: "请输入身份证号码"
                },
                mobile: {
                    required: "请输入手机",
                    minlength: "请输入正确的手机",
                    maxlength: "请输入正确的手机"
                },
                birth: {
                    required: "请输入出生日期",
                    minlength: "请输入正确的出生日期",
                    maxlength: "请输入正确的出生日期"
                },
                graduation: {
                    required: "请选择最高学历"
                },
                areaProvince_home: {
                    required: "请选择贯籍省份/城市"
  
                },
                areaCity_home: {
                    required: "请选择贯籍省份/城市"
 
                },
                areaProvince_live: {
                    required: "请选择贯户口所在省份/城市"

                },
                areaCity_live: {
                    required: "请选择贯户口所在省份/城市"

                },
                address: {
                    required: "请输入居住地址"
                }
            }
        });
        
        $("#userWorkInfoFormForUpdate").validate({
            rules: {
            	office: {
            		required: true
            	},
            	jobType: {
            		required: true
            	},
            	areaProvince: {
                	required: true
                },
                areaCity: {
                	required: true
                },
                officeType:{
                    required: true
                },
                officeDomain: {
                    required: true
                },
                officeScale: {
                	required: true
                },
                position: {
                	required: true
                },
                salary: {
                	required: true
                },
                workYears: {
                	required: true
                },
                workPhone: {
                	required: true,
                	isPhoneOrMobile:true              
                },
                workEmail: {
                    required: true,
                    isEmail: true
                },
                officeAddress: {
                	required: true
                },
                urgentContact:{
                	required: true
                },
                urgentRelation:{
                	required: true
                },
                urgentMobile:{
                	 required: true,
                     isMobile: true,
                     minlength: 11,
                     maxlength: 11
                },
                urgentContact2:{
                	required: true
                },
                urgentRelation2:{
                	required: true
                },
                urgentMobile2:{
                	 required: true,
                     isMobile: true,
                     minlength: 11,
                     maxlength: 11
                }
            },
            messages: {
            	office: {
                    required: "请输入单位名称"
                },
                jobType: {
                    required: "请选择职业状态"
                },
                areaProvince: {
                    required: "请选择工作省份/城市"
                },
                areaCity: {
                    required: "请选择工作省份/城市"
                },
                officeType: {
                    required: "请选择公司类别"
                },
                officeDomain: {
                    required: "请选择公司行业"
                },
                officeScale: {
                    required: "请选择公司规模"
                },
                position: {
                    required: "请输入职位"
                },
                salary: {
                    required: "请选择收入"
                },
                workYears: {
                    required: "请选择现单位工作年限"
                },
                workPhone: {
                    required: "请输入公司电话",
                    isPhoneOrMobile:"请正确输入电话号码"	
                },
                workEmail: {
                    required: "请输入工作邮箱",
                    isEmail: "请输入正确邮箱"
                },
                officeAddress: {
                	required: "请输入工作地址"
                },
                urgentContact:{
                	required: "第一联系人姓名"
                },
                urgentRelation:{
                	required: "第一联系人关系"
                },
                urgentMobile:{
                	required: "请输入手机",
                    minlength: "请输入正确的手机",
                    maxlength: "请输入正确的手机"
                },
                urgentContact2:{
                	required: "第二联系人姓名"
                },
                urgentRelation2:{
                	required: "第二联系人关系"
                },

                urgentMobile2:{
                	required: "请输入手机",
                    minlength: "请输入正确的手机",
                    maxlength: "请输入正确的手机"
                }
                
                
            }
        });
        
        initElementForInfo();
        
    });

	function initElementForInfo(){
		$("input[name='hasHouse']").each(function(){
			if($(this).attr('checked')){
				hashouse(this);
			}
		});
		$("input[name='hasCar']").each(function(){
			if($(this).attr('checked')){
				hacar(this);
			}
		});
	}

	function hashouse(obj){
		if(obj.value == 'true'){
			//释放有无子选项
			$("input[name='houseLoan']").each(function(){
				$(this).attr('disabled','');
			});
		}else if(obj.value == 'false'){
			$("input[name='houseLoan']").each(function(){
				if($(this).val() == 'false'){
					$(this).attr('checked','checked');
				}
				$(this).attr('disabled','disabled');
			});
		}
	}
	
	function hacar(obj){
		if(obj.value == 'true'){
			//释放有无子选项
			$("input[name='carLoan']").each(function(){
				$(this).attr('disabled','');
			});
			$("input[name='carBrand']").each(function(){
				$(this).attr('disabled','');
			});
			$("input[name='carNumber']").each(function(){
				$(this).attr('disabled','');
			});
			$("select[name='carYear']").each(function(){
				$(this).attr('disabled','');
			});
		}else if(obj.value == 'false'){
			$("input[name='carLoan']").each(function(){
				if($(this).val() == 'false'){
					$(this).attr('checked','checked');
				}
				$(this).attr('disabled','disabled');
			});
			$("input[name='carBrand']").each(function(){
				$(this).attr('disabled','disabled');
			});
			$("input[name='carNumber']").each(function(){
				$(this).attr('disabled','disabled');
			});
			$("select[name='carYear']").each(function(){
				$(this).attr('disabled','disabled');
			});
		}
	}
	
	function idcheck(o){
	       var str=o.value;
		   var birthday=document.getElementById("birth");
			if(str.length==15){
	        	var re=/\d{6}(\d{2})([01]\d)([0123]\d)\d{3}/;
				var id=re.exec(str);
				birthday.value="19"+id[1]+"-"+id[2]+"-"+id[3];
			}else if(str.length==18){
				var re=/\d{6}([12]\d{3})([01]\d)([0123]\d)\d{3}(\d|\w)/;
				var id=re.exec(str);
				birthday.value=id[1]+"-"+id[2]+"-"+id[3];
			}else{
				birthday.value="";
				return false;	
			}

	     }