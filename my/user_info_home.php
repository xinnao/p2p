
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


	

<div class="layout-box">
    <div class="cont homeBg">
        <div class="h5">
        </div>
        <div class="clearfix bb1" style="display: block;height: 20px;">
            <div class="l f_blue f_14 b" style="width:560px;">
                <span style="padding-left:330px">我的个人信息</span>
            </div>
            <div class="r" style="width:150px">
                <input type="button" value="修改我的个人信息" onclick="toHere()" style="height:27px;width:120px"/>
            </div>
        </div>
        <div class="clearfix" style="margin:15px 0 15px 20px">

            <div class="l" style="width:128px; height:128px; margin-right:40px">
                
                    <img class="img_b" src="../images/icon_196.png" width="128px" height="128px" alt="大于" title="大于"/>
                
                
            </div>
            <div class="l f_dgray" style="width:250px">
                <div style="height:24px; line-height:24px">
                    <div class="l" style="width:80px;">
                        用户名：
                    </div>
                    <div class="l">
                        大于 (用户ID：269356)
                    </div>
                </div>
                <div style="height:24px; line-height:24px">
                    <div class="l" style="width:80px;">
                        注册时间：
                    </div>
                    <div class="l">
                        2013-04-11
                    </div>
                </div>
                <div style="height:24px; line-height:24px">
                    <div class="l" style="width:80px;">
                        所在地：
                    </div>
                    <div class="l">
                        
                        
                            河北 石家庄
                        
                    </div>
                </div>
                <div style="height:24px; line-height:24px">
                    <div class="l" style="width:80px;">
                        角色：
                    </div>
                    <div class="l">
                        
                        
                            
                                普通用户
                            
                                借出者
                            
                        
                    </div>
                </div>
                <div style="height:24px; line-height:24px">
                    <div class="l" style="width:80px;">
                        个人统计： 
                    </div>
                    <div class="l">
                        0 条借款记录， 0条投标记录
                    </div>
                </div>
                <div style="height:24px; line-height:24px">
                    
                    
                </div>
            </div>
            <div class="r" style="display:none;width:260px;">
                <div class="layout-box">
                    <div class="top">

                        <b class="cor-l"></b>
                        <b class="cor-r"></b>
                    </div>
                    <div class="cont" style="height:145px; ">
                        <h3>个人描述</h3>
                        <p>
                            
                        </p>
                    </div>
                    <div class="bt">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="top">
    </div>
</div>
<div class='clearfix'>
    <ul>
        <li class="right_tab_select" id="my_recent_trend" onclick="tabFavUser(this,'269356')">
            我的最近动态
        </li>
        <li class="right_tab_unselect" id="my_attention_user" onclick="tabFavUser(this,'269356')">
            关注用户
        </li>
        <li class="right_tab_unselect" id="my_attention_user_trend" onclick="tabFavUser(this,'269356')">
            关注用户动态
        </li>
        <li class="right_tab_unselect" id="my_borrow_list" onclick="tabFavUser(this,'269356')">
            借款记录
        </li>
        <li class="right_tab_unselect" id="my_lend_list" onclick="tabFavUser(this,'269356')">
            投标记录
        </li>
    </ul>
</div>
<div class="tab_interval_green">
</div>
<div class="layout-box">
    <div class="cont">
        <div style="margin:10px 0;" id="cont">
        </div>
    </div>
    <div class="top">
    </div>
</div>
<div class="layout-box">
    <div class="gray_title">
        留言板
    </div>
    <div class="cont">
        <div style="margin:10px">
            <!--<div class="clearfix">
                <div class="r">
                    <button class="saveSettingBnt" type="button" onclick="displayCommentBox(this)">
                    我要留言
                    </button>
                </div>
            </div>
            <div id="comment_box" class="clearfix" style="margin: 0 auto;width:600px;display:none">
                <div class="comment_edit">
                    <textarea name="comment" id="comment"></textarea>
                </div>
                <div class="h5">
                </div>
                <p>
                    <input type="button" value="留言" onclick="replyCommentUserSubmit('269356','0','comment')"/><span id="commentError" class="f_red" style="padding-left:10px"></span>
                </p>
            </div>
            <div class="h20">
            </div>-->
            <div id="comments">              
            </div>
        </div>
    </div>
    <div class="bt">
    </div>
</div>
<script type="text/javascript">
function SlyarErrors() { 
	return true;
} 
window.onerror = SlyarErrors;
      $(function(){
        $.ajax({
            url: "../my/userCommentList.php?id="+269356+"&commentPageIndex=1",
            dataType: 'html',
            timeout: 10000,
            error: function(){
                $("#comments").html($("#loadingFail").html());
            },
            success: function(response){
                $("#comments").html(response);
            },
            beforeSend: function(){
                $("#comments").html($("#loading").html());
            }
        });
    });

    $(function(){
        $.ajax({
            url: "../my/getFavoriteUser.php?userId="+269356+"&id=my_recent_trend&myActPageIndex=1",
            dataType: 'html',
            timeout: 10000,
            error:function(){
                $("#cont").html($("#loadingFail").html());
            },
            success: function(response){
                $("#cont").html(response);
            },
            beforeSend: function(){
                $("#cont").html($("#loading").html());
            }
        });
    });
    function toHere(){
        getInfo($("#user_info_info")[0]);
    }
    function toBorrowed(){
        getInfo($("#user_info_borrowed")[0]);
    }
    
    $(function(){
        $.fn.jpagebar({ //content holder(Object || css Selector)
            renderTo: $("#nullPagelist"),
            //总数
            totalNum: 1,
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
            onClickPage: function(pageIndex){
                $.fn.setCurrentPage(this, pageIndex);
                getComment(pageIndex);
            }
        });
    });
</script>



<!--我的主页 END-->
<!--借入管理 START-->





<!--借入管理 END-->
<!--借出管理 START-->








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
	var type='user_info_home';
	var li = '';
	if(type=="my_finance_detail"&&li!=null&&li!=""){
		$.ajax({
			url:"../my/myFinance_goToFinanceDetail.php?financeSubPointId="+li,
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
			url:"/my/cashPwd_goToFindCashPassword.php",
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
