<?php
$url=$_REQUEST["url"];
?>
<div class="pageContent">
	<form method="post" action="<?php echo $url; ?>" class="pageForm" onsubmit="return navTabSearch(this);">
		<div class="pageFormContent" layoutH="58">		
         <div class="unit">
		   <label>搜索条件：</label>
				<select name="key" id="key">
		<option value="%" selected="SELECTED">选择</option>
		<option value="name">姓名</option>
		<option value="sex">性别</option>
		<option value="phone">电话</option>
		<option value="minzu">民族</option>
		<option value="zhiwei">职位</option>
		<option value="bumen">部门</option>
		<option value="zhengjian">证件</option>
		<option value="xueli">学历</option>
		<option value="zhuanye">专业</option>
		<option value="zhuzhi">住址</option>
		<option value="huji">户籍</option>
           </select>
           <span class="inputInfo"></span>
			</div>
          <div class="unit">
			<label>关键字：</label>
			  <input type="text" size="25" name="word" class="lettersonly" id="word"/>
           <span class="inputInfo"></span>
			</div>
		</div>
		<div class="formBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><input name="action" type="hidden" id="action" value="search" /><button type="submit">开始检索</button></div></div></li>
				<!--<li><div class="button"><div class="buttonContent"><button type="reset">清空重输</button></div></div></li>-->
			</ul>
		</div>
	</form>
</div>
