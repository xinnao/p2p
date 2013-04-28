<div id="header" class="clearfix">
    <div class="logo clearfix">
        <div class="l">
            <a href="/"><img src="/images/logo.png" alt="E贷通" title="E贷通" width="160px" height="84px" class="logo_hack"/></a>
        </div>
        <div class="logo_right">
            <div class="logo_right_link">
             <ul> 
                 <?php if (""==$_COOKIE["suyi_auth"]){ ?>  
                  <li>
                        
                        游客
                    </li>
                    
                    
                        <li><a href="/regPage.php">免费注册</a> </li>
                    
                    <li>
                        
                        <a href="/loginPage.php?error=false">登录</a>
                    </li>
				 <?php }else{  ?>  
                 <li>
                        <a href="/lend/userHomePage.php?userId=269356">&#22823;&#20110;</a>
                        
                    </li>
                    
                        <li id="msglinkli">
                            <a  class='' href='/my/userInfoPage.php?type=user_info_inbox'>
                                <img  id="mailMsgImg" style='vertical-align: middle;' alt='未读消息' src='/images/mail2.gif'> 消息 <!--  (<span id="mailsCount">0</span>)-->
                            </a>
                            <div id="msg_topmenu" class="msg_topmenu" style="display:none">
                            	<div class="closeMS" onclick="delAllMessage();">X</div>
                            	<ul id="parentPushMessage">
                                </ul>
                            </div>
                          <script type="text/javascript">
                                $(function(){
                                    //fnload();
                                    requestListen('269356');
                                });
                            </script>
                        </li>
                    
                    
                    <li>
                         <a href="/loginout.php">登出</a>
                        
                    </li>
                 <?php }?>         
               <li style="background:none;"><a href="/help.php">帮助</a></li>
                </ul>
            </div>
            <div class="logo_right_phone">客服电话：400-027-8080</div>
        </div>
    </div>
    <div class="header_nav">
        <div class="big_nav" id="big_nav">
      		<ul class="big_nav_ul">
            
		       <li<?php if (1==$menuid){ echo ' class="current"'; }else{ echo ' class=""';} ?>><a href="/index.php"><span>首页</span></a> 
		        	 <table style="display:<?php if (1==$menuid){ echo 'block'; }else{ echo 'none';} ?>" id="big2nav0">
		                <tr class="big2nav_ul">
		                  <td> <a href="/guarantee/aboutp2p.php">平台原理</a> </td>
		                  <td> <a href="/guarantee/aboutlaws.php">政策法规</a> </td>
		                  <td> <a href="/guarantee/aboutfee.php">费用</a> </td>
		                  <td> <a href="/guarantee/aboutUs.php#go_expert">专家顾问</a> </td>
		                   <td> <a href="/guarantee/aboutUs.php#go_media">媒体报道</a> </td>
		                  <td> <a href="/guarantee/aboutUs.php">关于我们</a> </td>
		                </tr>
		              </table>
		        </li>
		        <li<?php if (2==$menuid){ echo ' class="current"'; }else{ echo ' class=""';} ?>> <a href="/lend/lendPage.php"><span>我要理财</span></a> 
		        	  <table style="display:<?php if (2==$menuid){ echo 'block'; }else{ echo 'none';} ?>" id="big2nav1">
		                  <tr class="big2nav_ul">
		                    <td> <a href="/lend/lendPage.php">个人贷款</a> </td>
		                    <td> <a href="/financeplan/listPlan!listPlan.php">理财计划</a> </td>
		                    <td> <a href="/lend/farmerloanlistpage.php">爱心助农</a> </td>
		                    <td> <a href="/lend/beLenderPage.php">成为理财人</a> </td>
		                    <td> <a href="/lend/toolsPage.php">工具箱</a> </td>
		                    <td> <a href="/lend/aboutFinancing.php">关于理财</a> </td>
		                  </tr>
		               </table>
		        </li>
		        <li<?php if (3==$menuid){ echo ' class="current"'; }else{ echo ' class=""';} ?>> <a href="/borrow/borrowSwitchPage.php"><span>我要贷款</span></a> 
		        	 <table style="display:<?php if (3==$menuid){ echo 'block'; }else{ echo 'none';} ?>" id="big2nav2">
		                <tr class="big2nav_ul">
		                  <td> <a href="/borrow/aboutBorrowPage.php">贷款说明</a> </td>
		                  <td> <a href="/borrow/creditSwitchPage.php">E贷通认证</a> </td>
		                  <td> <a href="/borrow/borrowSwitchPage.php">申请贷款</a> </td>
		                  <td> <a href="/borrow/toolsPage.php">工具箱</a> </td>
		                </tr>
		              </table>
		        </li>
		        <li<?php if (4==$menuid){ echo ' class="current"'; }else{ echo ' class=""';} ?>> <a href="/my/userInfoPage.php"><span>我的E贷通</span></a>
		        	 <table style="display:<?php if (4==$menuid){ echo 'block'; }else{ echo 'none';} ?>" id="big2nav3">
		                <tr class="big2nav_ul">
		                  <td> <a href="/my/userInfoPage.php?type=user_info_home">我的主页</a> </td>
		                  <td> <a href="/my/userInfoPage.php?type=user_info_refund">贷款管理</a> </td>
		                  <td> <a href="/my/userInfoPage.php?type=user_info_my_invest">投标管理</a> </td>
		                  <td> <a href="/my/userInfoPage.php?type=user_info_finance_plan">理财计划管理</a> </td>
		                  <td> <a href="/my/userInfoPage.php?type=user_info_info">个人设置</a> </td>
		                </tr>
		              </table>
		         </li>
		        <li<?php if (5==$menuid){ echo ' class="current"'; }else{ echo ' class=""';} ?>> <a href="/guarantee/index.php"><span>安全保障</span></a>
		        	  <table style="display:<?php if (5==$menuid){ echo 'block'; }else{ echo 'none';} ?>" id="big2nav4">
		                <tr class="big2nav_ul">
		                  <td> <a href="/guarantee/details.php#go_benjin">本金保障</a> </td>
		                  <td> <a href="/guarantee/details.php#go_zhanghu">交易安全保障</a> </td>
		                  <td> <a href="/guarantee/details.php#go_lichai">贷款审核与保障</a> </td>
		                  <td> <a href="/guarantee/details.php#go_jiaoyi">网上理财安全建议</a> </td>
		                </tr>
		              </table>
		         </li>
		       
            </ul>
    	</div>
    </div>
    <div class="big2nav" class="clearfix">
        
    </div>
</div>
