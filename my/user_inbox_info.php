




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
<div class="h10" id="blank" style="display: none"></div>
<div class="tips f_red" id="del_tip" style="display: none">
</div>




    <div id="user_inbox_info_content">
        <div id="notif">
        <ul>
        
        </ul>
		</div>
	</div>
    
        <div align="center">暂无记录</div>
        <div class="h10"></div>
    
    <!-- 发私信内容begin --> 
	<div class="sendDigSX" id="sendDigSX" style="display:none">
    	<div style=" position:absolute; right:5px; top:5px; padding:0 5px; cursor:pointer; color:#1076D5;" onclick="document.getElementById('sendDigSX').style.display='none'">X</div>
        <form action=""  id="sendBoxForm" method="post">
        	<div class="clearfix" style="margin: 0pt auto;">
            	<div style="float:left;width:50px; text-align:right;">发送给：</div>
                <div style="line-height: 22px;position:relative;padding:0;display:inline;">
                	<input id="favourateReceiver" value="" type="text" name="receiver"  onblur="editOption();" style="width:180px;position:absolute;left:0;top:0;height:19px;_height:17px;z-index:9999;" />  
                    <select id="favourateReceiverSelect" style="width: 200px;height: 22px;vertical-align: top;position:absolute;left:0;top:0;z-index:98;clip:rect(auto auto auto 182px); height:21px;"   onchange="changeOption();">
                    	<option value="" id="otherRec"></option>
                        
                            
                                <option value="maihesuti">maihesuti</option>
                            
                        
                   	</select>
                </div>
                <span style="float:right;color:#808080;margin-right:18px">提示：可以在下拉框中直接输入发送人昵称</span>
			</div>
            <div class="h10">
            </div>
            <div style="margin: 0pt auto;" class="clearfix">
                <div style="float:left;width:50px; text-align:right;">内容：</div>
                <div class="comment_edit">
                    <textarea name="comment" style="width:430px;height:150px" id="sendMail"></textarea>
                </div>
                <div class="h5">
                </div>
                <div style="margin-left:50px">
                    <input type="button" onclick="sendZnxSubmit(this,'users')" value="发送站内信" class="saveSettingBnt"><span id="send_tip" style="color:red; padding-left:10px"></span>
                </div>
            </div>
	     </form>
	</div> 
    <!-- 发私信内容end --> 
    <div id="loadDataSXconDetail"></div>
  	<script>
    $(function(){
 	   $("#searchDetailContent").keydown(function(e){
 		   if(e.keyCode==13){
 			   $("#sxSearchBt").click();
 		   }
 		   
 	   })
       $.fn.jpagebar({ //content holder(Object || css Selector)
            renderTo: $("#inboxPageList"),
            //总数
            totalNum: 0,
            //总页码
            totalpage: 0,
            //当前页码
            currentPage: 1,
            //分页条样式
            pagebarCssName: 'pagelist',
            //首页、上一页、下一页、尾页样式
            pageNameCssName: 'disabled',
            //当前选中页码样式
            currentPageNumberCssName: 'current',
            //点击页码action
            onClickPage: function(inboxPageIndex){
                $.fn.setCurrentPage(this, inboxPageIndex);
                getInboxInnerMails(inboxPageIndex);
            }
        });
    });
    
    function delPrivateUserMail(obj,id,pid){
 		var self=$(obj);
 		var r = window.confirm("此操作将删除本次对话，确认要提交吗?");
 		if(r){
 			 $.ajax({
 		         url:"../my/delInnerMailForUser!delInnerMail.action?innerMail.innerMailId="+id,
 		         error: function(){
 		        	 alert('删除失败，请重试');
 		         },
 		         success: function(data){
 		        	 //getSenderMail(pid,1);//注：不要用这个再到服务器取数据据了
 		        	 if(data.result=="success"){
 		        		 self.parents(".leftList").remove();
 		        		 self.parents(".rightList").remove();
     	        	 }else{
     	        		 alert("删除失败！");
     	        	 }
 		         }
 		     });
 		}
 	}
    function getInboxInnerMails(p){
    	var queryContent = $('#searchDetailContent').val();
    	
        $.ajax({
            url:"../my/getInnerMails.action?type=user_inbox_info&queryContent="+queryContent+"&inboxPageIndex="+p,
            type:"POST",
            dataType: "html",
            timeout: 100000,
            error: function(){
                $("#inbox_content").html($("#loadingFail").html());
            },
            success: function(data){
                $("#inbox_content").html(data);
            },
            beforeSend: function(){
                $("#inbox_content").html($("#loading").html());
            }
        });
    }
    $(function(){
    	$("#notif ul>li").hover(function(){
    		$(this).find("a.delCurSx").show();
    	},function(){
    		$(this).find("a.delCurSx").hide();
    	})
    	$("#sendNewSx").click(function(){
    		$("#sendDigSX").show();
    	})
    })
    txtAmount("sendMail","send_tip",300);
    
    var selectObj = document.getElementById("favourateReceiverSelect");  
	// 切换下拉框选项时的操作  
	function changeOption() {  
	    document.getElementById("favourateReceiver").value = selectObj.options[selectObj.selectedIndex].innerHTML;  
	}  
  
	function editOption() {  
	    var txtObj = document.getElementById("favourateReceiver");  
	    if (txtObj.value != "") {  
	        //selectObj.options[hiddenObj.value].innerHTML = txtObj.value; 
	        $("#otherRec").val(txtObj.value).html(txtObj.value);
	    } else {  
	      $("#send_tip").html("请输入发信人昵称!");  
	    }  
	}    
    </script>


                
<script type="text/javascript">
	function getSystemMailByType(innerMailType,p){
		 $("#user_inbox_info").after("<li id='user_inbox_type_info' class='right_tab_unselect'>详细</li>");
		 clearTab('user_inbox_type_info');
		 $("#user_inbox_type_info").removeClass();
		 $("#user_inbox_type_info").addClass("right_tab_select");
		 showInnerMailsByType(innerMailType,p);
	}
	
	function showInnerMailsByType(innerMailType,p){
		$.ajax({
	        url: "../my/getInnerMails.action?type=user_detail_system_mail_bytype&systemTypePageIndex="+p+"&innerMailType="+innerMailType,
	        type: "POST",
	        dataType: 'html',
	        timeout: 100000,
	        error: function(){
	            $("#inbox_content").html($("#loadingFail").html());
	        },
	        success: function(response){
	            if (hrefHack(response)) return;
	            $("#inbox_content").html(response);
	        },
	        beforeSend: function(){
	            $("#inbox_content").html($("#loading").html());
	        }
	    });
	}

    function getInboxInnerMails(p){
    	var queryContent = $('#searchDetailContent').val();
        $.ajax({
            url:"../my/getInnerMails.action?",
            type:"POST",
            data:"type=user_inbox_info&queryContent="+queryContent+"&inboxPageIndex="+p,
            timeout: 100000,
            error: function(){
                $("#inbox_content").html($("#loadingFail").html());
            },
            success: function(data){
                $("#inbox_content").html(data);
            },
            beforeSend: function(){
                $("#inbox_content").html($("#loading").html());
            }
        });
    }


    function getSenderMail(senderId,p,obj){
    	
        $.ajax({
            url: "../my/getInnerMails.action?privateSender.userId="+senderId+"&type=user_detail_private_mail&userDetailMessagePageIndex="+p,
            type: "POST",
            dataType: 'html',
            timeout: 100000,
            error: function(){
               // $("#inbox_content").html($("#loadingFail").html());
            },
            success: function(response){
                if (hrefHack(response)) return;
               // $("#sxconDetail").html(response).show();
               // $("#inbox_content").html(response);
               if(obj!=undefined&&obj!=null){
            	   obj.innerHTML="未读0条";
               }
               $("#notif").hide();
               $("#loadDataSXconDetail").html(response);
            },
            beforeSend: function(){
               // $("#inbox_content").html($("#loading").html());
            }
        });
    }

    function delPrivateMailBySender(obj,senderId,type){
    	var self=$(obj);
    	var r = window.confirm("此操作将删除本次对话，确认要提交吗?");
    	if(r){
    		 $.ajax({
    	         url:"../my/delInnerMailForUser!delInnerMailForUser.action?senderId="+senderId+"&type="+type,
    	         timeout: 100000,
    	         error: function(){
    	        	 alert('删除失败，请重试');
    	         },
    	         success: function(data){
    	        	 if(data.result=="success"){
    	        		 self.parent("li").remove();
    	        	 }else{
    	        		 alert("删除失败！");
    	        	 }
    	        	 //getInboxInnerMails(1);//不用再去服务器取数据
    	        	
    	         }
    	     });
    	}
    }

</script>