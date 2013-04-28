   $(function() {
    	var path = $("#path").val();
    	var isUploaded = false;
    	/*var time = new Date();
    	var timeStr = time.format("yyyy-MM-dd");   	
    	$("#timeStr").val(timeStr);*/
    	var obj=$("#uploader2");
    	if(obj&&obj!=null){
    		obj=$("#uploader,#uploader2");
    	}else{
    		obj=$("#uploader");
    	}
    	
    	obj.pluploadQueue({
  			// General settings
  			runtimes : 'gears,flash,silverlight,browserplus,html5,html4',
  			url : '/upload/upload.php',
  			max_file_size : '3mb',
  			unique_names : true,
  			mutlipart : true,
  			chunk_size: '1mb',
  			// Specify what files to browse for
  			filters : [
  				{title : "Image files", extensions : "jpg,gif,png"}
  			],
  	
  			// Flash settings
  			flash_swf_url : '/theme/default/plupload/js/plupload.flash.swf',
  			// Silverlight settings
  			silverlight_xap_url : '/theme/default/plupload/js/plupload.silverlight.xap',
  			multipart_params: { 'path' : path},
  			preinit : {
  	            FilesAdded: function(up, files) {
  	            	
  	            	var len = files.length;
  	            	if(files.length>30){
  						alert("最多只能上传30个文件");
  						return false;
  					}
  					
  	            }
  			},
  			init : {
  				UploadComplete: function(up, file, info) {
  					isUploaded = true;
  	            }
  			}
  		});
    	
    	/*
    	//向后台发布
    	var options = { 
    		beforeSubmit:  function(){
    			if(!isUploaded){
    				alert("请完成文件上传后提交审核。");
    				return false;
    			}
    		},

    		//url:       url         // override for form's 'action' attribute 
    		//type:      type        // 'get' or 'post', override for form's 'method' attribute 
    		dataType:  'html'        // 'xml', 'script', or 'json' (expected server response type) 
    		//clearForm: true        // clear all form fields after successful submit 
    		//resetForm: true        // reset the form after successful submit 

    	}; 
        
        $('form').ajaxForm(options); 
        */
    	
    	$(".saveSettingBnt").bind("click",function(){
    		if(!isUploaded){
				alert("请完成文件上传后提交审核。");
				return false;
			}
    	})
  	});
   
    
    Date.prototype.format = function(format){ 
      var o = { 
        "M+" : this.getMonth()+1, //month 
        "d+" : this.getDate(),    //day 
        "h+" : this.getHours(),   //hour 
        "m+" : this.getMinutes(), //minute 
        "s+" : this.getSeconds(), //second 
        "q+" : Math.floor((this.getMonth()+3)/3),  //quarter 
        "S" : this.getMilliseconds() //millisecond 
      }; 
      if(/(y+)/.test(format)) 
    	  format=format.replace(RegExp.$1, (this.getFullYear()+"").substr(4 - RegExp.$1.length)); 
      
      for(var k in o)if(new RegExp("("+ k +")").test(format)) 
        format = format.replace(RegExp.$1, RegExp.$1.length==1 ? o[k] : ("00"+ o[k]).substr((""+ o[k]).length)); 
      return format; 
    }; 