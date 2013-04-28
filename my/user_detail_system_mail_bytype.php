




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


    <div id="system_info_type_content">
        <div class="h10"></div>
        <div id="notif">
        	<ul>
	        
	            
	              <li id="1707135" >
	          		<div class="clearfix">
	                     <div class="photo"><img src="../images/notifi/MATERIAL_SUC.png" /></div>
	                     <div class="title"><h3>材料通过</h3><p>2013-04-26 11:51:54</p></div>
	                     <div class="detail"><html><div><p>尊敬的用户大于：</p><p>您好，您于2013年04月26日在人人贷提交的完善个人资料信息已经成功通过审核。</p><p>您目前的信用分数为20分(HR级),信用额度为0</p><p>请登录人人贷“我的账户”—“信用管理”查看相关信息。</p><p>点击 <a href='../my/userInfoPage.action?type=user_info_credit'>这里</a> 查看您的信用状况。</p><p>感谢您对我们的支持和关注！</p></div></html></div>
	                </div>
	              </li>  
	            
	              <li id="1697080" >
	          		<div class="clearfix">
	                     <div class="photo"><img src="../images/notifi/MATERIAL_SUC.png" /></div>
	                     <div class="title"><h3>材料通过</h3><p>2013-04-24 11:53:20</p></div>
	                     <div class="detail"><html><div><p>尊敬的用户大于：</p><p>您好，您于2013年04月24日在人人贷提交的身份证绑定信息已经成功通过审核。</p><p>您目前的信用分数为0分(HR级),信用额度为0</p><p>请登录人人贷“我的账户”—“信用管理”查看相关信息。</p><p>点击 <a href='../my/userInfoPage.action?type=user_info_credit'>这里</a> 查看您的信用状况。</p><p>感谢您对我们的支持和关注！</p></div></html></div>
	                </div>
	              </li>  
	            
	              <li id="1697079" >
	          		<div class="clearfix">
	                     <div class="photo"><img src="../images/notifi/MATERIAL_SUC.png" /></div>
	                     <div class="title"><h3>材料通过</h3><p>2013-04-24 11:53:18</p></div>
	                     <div class="detail"><html><div><p>尊敬的用户大于：</p><p>您好，您于2013年04月24日在人人贷提交的手机绑定信息已经成功通过审核。</p><p>您目前的信用分数为0分(HR级),信用额度为0</p><p>请登录人人贷“我的账户”—“信用管理”查看相关信息。</p><p>点击 <a href='../my/userInfoPage.action?type=user_info_credit'>这里</a> 查看您的信用状况。</p><p>感谢您对我们的支持和关注！</p></div></html></div>
	                </div>
	              </li>  
	            
	            <div class="pagelist" id="systemTypePageList">
	            </div>
	        
        	</ul>
        </div>
        
    </div>
    <script>
    $(function(){
        $.fn.jpagebar({ //content holder(Object || css Selector)
            renderTo: $("#systemTypePageList"),
            //总数
            totalNum: 3,
            //总页码
            totalpage: 1,
            //当前页码
            currentPage: 1,
            //分页条样式
            pagebarCssName: 'pagelist',
            //首页、上一页、下一页、尾页样式
            pageNameCssName: 'disabled',
            //当前选中页码样式
            currentPageNumberCssName: 'current',
            //点击页码action
            onClickPage: function(systemTypePageIndex){
                $.fn.setCurrentPage(this, systemTypePageIndex);
                showInnerMailsByType('MATERIAL_SUC',systemTypePageIndex);
            }
        });
    });
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