




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

    <div id="system_info_content">
        <div class="h10"></div>
        <div id="notif">
	        <ul>
		        
		            
		            <li onclick="getSystemMailByType('APPLYAMOUNT_FAILED',1)" id="1712158"   style="cursor:pointer;">
		          		<div class="clearfix">
		                     <div class="photo"><img src="../images/notifi/APPLYAMOUNT_FAILED.png" width="60" height="60"/></div>
		                     <div class="title"><h3>申请额度驳回</h3><p>2013-04-27 10:45:09</p></div>
		                     <div class="colorgray detail" style='color:#000;font-weight:bold'>尊敬的用户大于：        感谢您使用人人贷贷款融资，但有一些遗憾的通知您，您于2013年04月24日的申请额度需求被驳回。      ...<img src="../images/openmore.jpg" /></div>
		                </div>
		              </li>  
		            
		            <li onclick="getSystemMailByType('MATERIAL_SUC',1)" id="1707135"   style="cursor:pointer;">
		          		<div class="clearfix">
		                     <div class="photo"><img src="../images/notifi/MATERIAL_SUC.png" width="60" height="60"/></div>
		                     <div class="title"><h3>材料通过</h3><p>2013-04-26 11:51:54</p></div>
		                     <div class="colorgray detail" >尊敬的用户大于： 您好，您于2013年04月26日在人人贷提交的完善个人资料信息已经成功通过审核。 您目前的信用分数为20分(HR级),信用...<img src="../images/openmore.jpg" /></div>
		                </div>
		              </li>  
		            
		            <div class="pagelist" id="systemPageList">
		            </div>
		        
	        </ul>
	        <!-- 意见反馈begin --> 
	        <div class="sendDigSX" id="sendDigSX" style="display:none">
	       		<div style=" position:absolute; right:5px; top:5px; padding:0 5px; cursor:pointer; color:#1076D5;" onclick="document.getElementById('sendDigSX').style.display='none'">X</div>
	         	<form action=""  id="sendBoxForm" method="post">
		            <div class="clearfix" style="margin: 0pt auto;">
		                <div style="float:left;width:50px; text-align:right;">发送给：</div>
		                <div style="line-height: 22px;">
		                    <select id="favourateReceiver" style="width: 200px;height: 22px;vertical-align: top" onclick="getOther(this)" name="receiver">
		                        <option id="otherOption" value="人人贷客服">人人贷客服</option>
		                    </select>
		                    <input id="otherReceiver" style="width: 200px;height: 20px;vertical-align: top; display:none;" value="人人贷客服" disabled="disabled">
		                </div>
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
		                    <input type="button" onclick="sendZnxSubmit(this,'system')" value="发送站内信" class="saveSettingBnt"><span id="send_tip" style="color:red; padding-left:10px"></span>
		                </div>
		            </div>
	        	</form>
			</div> 
        	<!-- 意见反馈end --> 
        </div>
        
    </div>
    <script>
    function getSysInnerMails(p){
        $.ajax({
            url:"../my/getInnerMails.php?type=system_info&sysPageIndex="+p,
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
        $.fn.jpagebar({ //content holder(Object || css Selector)
            renderTo: $("#systemPageList"),
            //总数
            totalNum: 2,
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
            onClickPage: function(sysPageIndex){
                $.fn.setCurrentPage(this, sysPageIndex);
                getSysInnerMails(sysPageIndex);
            }
        });
    });
    txtAmount("sendMail","send_tip",300);
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
	        url: "../my/getInnerMails.php?type=user_detail_system_mail_bytype&systemTypePageIndex="+p+"&innerMailType="+innerMailType,
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
            url:"../my/getInnerMails.php?",
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
            url: "../my/getInnerMails.php?privateSender.userId="+senderId+"&type=user_detail_private_mail&userDetailMessagePageIndex="+p,
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
    	         url:"../my/delInnerMailForUser!delInnerMailForUser.php?senderId="+senderId+"&type="+type,
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