<?php
$type=$_REQUEST["type"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
<script type="text/javascript" src="../theme/default/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="../theme/default/js/jquery.form.js"></script>
<script type="text/javascript" src="../theme/default/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="../theme/default/js/jquery.pagebar.1.0.0.js"></script>
<script type="text/javascript" src="../theme/default/js/jcrop/js/jquery.Jcrop.min.js"></script>
<script type="text/javascript" src="../theme/default/js/nyroModal-1.6.2/js/jquery.nyroModal-1.6.2.pack.js"></script>
<script type="text/javascript" src="../theme/default/js/main.js"></script>
<script type="text/javascript" src="../theme/default/js/validate.js"></script>
<link rel="stylesheet" href="../theme/default/js/nyroModal-1.6.2/styles/nyroModal.full.css" type="text/css" />
<link rel="stylesheet" href="../theme/default/js/jcrop/css/jquery.Jcrop.min.css" type="text/css" />
<link href="../theme/default/css/style.css?v=20100529" rel="stylesheet" type="text/css" media="screen" />
<style type="text/css">@import url(/theme/default/plupload/js/jquery.plupload.queue/css/jquery.plupload.queue.css);</style>
<script type="text/javascript" src="/theme/default/plupload/js/plupload.full.js"></script>
<script type="text/javascript" src="/theme/default/plupload/js/jquery.plupload.queue/jquery.plupload.queue.js"></script>
<script type="text/javascript" src="/theme/default/plupload/js/i18n/cn.js"></script>
<script type="text/javascript" src="/theme/default/js/credit.js?v=5"></script>
</head>

<body>
    <form action="/upload/save.php" method="post" id="uploadIdForm" name="uploadIdForm">
        
<font face="Arial, sans-serif">
    <input type="hidden" value="" name="security_session">
    <input type="hidden" value="1367115844205" name="timestamp">
</font>

        <input type="hidden" name="li" value="basic">
        <input type="hidden" name="forAccount" value="" />
        <div id="item">
            <div class="h20">
            </div>
            <div style="width:90%;background:#FEFEFC;border:1px solid #CCC;padding:10px;margin:0 auto;">
                <div class="f_16 b" style="color:#003C85;padding:5px 0">
                    身份证认证
                </div>
                <div class="f_dgray" style="text-indent: 2em;">
                    您上传的身份证扫描件需和您绑定的身份证一致，否则将无法通过认证。</br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<!-- (使用邮件方式发送请勾选后提交:&nbsp;<input type="checkbox" name="usemail" id="usemail" value="true"/>) -->
                </div>
            </div>
            <div class="h10">
            </div>
            <div id="explain" style="width:80%;padding-left:40px;margin:0 auto;">
                <p class="f_dgray b">
                    认证说明：
                </p>
                <div id="explain_item">
                    <div style="padding-left:20px">
                        <div class="div22">
                            1、请您上传您<span class="f_red">本人身份证原件</span>的照片。如果您持有第二代身份证，请上传正、反两面照片。
                        </div>
                        <div class="div22">
                            如果您持有第一代身份证，仅需上传正面照片。
                            <a href="/helpData.html?type=idcard" target="_blank">查看示例</a>
                        </div>
                        <div class="div22">
                            2、请确认您上传的资料是清晰的、未经修改的数码照片（不可以是扫描图片）。
                        </div>
                        <div class="div22">
                            每张图片的尺寸<span class="f_red">不大于1.5M</span>。
                        </div>
                    </div>
                </div>
                <p>
                    <span class="f_dgray b">审核时间：</span>
                    <span class="f_red">3个工作日内</span>
                </p>
                <p>
                    <span class="f_dgray b">认证有效期：</span>
                    <span class="f_red">永久</span>
                </p>
                <div class="h5">
                </div>
                <div class="btd">
                </div>
                <div class="h20">
                </div>
            </div>
           	<div>
				<div style="width:83%;padding-left:39px;margin:0 auto;">
					<div id="uploader">
						<h4>您的浏览器需要下载Flash Player插件才能上 传，请点击下面链接下载。</h4>
	    				    <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="获取 Adobe Flash Player" width="112" height="33" /></a></p>
					</div>
				</div>
			</div>
            <div class="h20">
            </div>
            <div class="h20">
            </div>
            <div style="text-align: center">
                <input type="hidden" id="path" value="<?php echo $type; ?>" name="path"/>
                <input type="hidden" id="uploaded" name="uploaded" value="0"/>
                <input type="submit" value="提交审核" class="saveSettingBnt"/>
            </div>
            <div class="h20">
            </div>
<div class="btd">
</div>
<div class="h20">
</div>
<div class="clearfix">
    <div class="l center" style="width:60px">
        <img src="../images/warning.png"/>
    </div>
    <div class="l f_14 b f_dgray" style="width:580px">
        <span class="f_red">警告：</span>人人贷是一个注重诚信的网络平台。如果我们发现您上传的资料系伪造或有人工修改痕迹，人人贷会将你加入系统黑名单，永久取消您在人人贷的借款资格。
    </div>
</div>
<div class="h20">
</div>

        </div>
    </form>
</body>
