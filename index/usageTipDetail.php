

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">


<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>
            
            使用技巧 - 人人贷 - 最大、最安全的网络借贷平台
        </title>
        <meta name="google-site-verification" content="oQXrGa_mTgxg7joO0himE0QuFeqOVmm-SDC1H2dzT4c" />
        <script type="text/javascript" src="/theme/default/js/jquery-1.4.2.min.js"></script>
        <script type="text/javascript">
        if(!/msie 6/i.test(navigator.userAgent))document.write('\<script type=\"text/javascript\" src=\"/theme/default/js/jquery.alert.min.js\"\>\<\/script\>');
        </script>
        <script type="text/javascript" src="/theme/default/js/jquery.form.js"></script>
        <script type="text/javascript" src="/theme/default/js/jquery.validate.min.js"></script>
        <script type="text/javascript" src="/theme/default/js/jquery.pagebar.1.0.0.js"></script>
        <script type="text/javascript" src="/theme/default/js/jcrop/js/jquery.Jcrop.min.js"></script>
        <script type="text/javascript" src="/theme/default/js/nyroModal-1.6.2/js/jquery.nyroModal-1.6.2.pack.js"></script>
        <script type="text/javascript" src="/theme/default/js/main.js?v=20130219"></script>
        <script type="text/javascript" src="/theme/default/js/msgpush/init_push.js?v=20130131"></script>
        <link rel="stylesheet" href="/theme/default/js/nyroModal-1.6.2/styles/nyroModal.full.css" type="text/css" />
        <link rel="stylesheet" href="/theme/default/js/jcrop/css/jquery.Jcrop.min.css" type="text/css" />
        <link href="/theme/default/css/style.css?v=20130411" rel="stylesheet" type="text/css" media="screen"/>
</head>
    <body>
        <div id="page" class="session_invalid_tag">
<?php require("../header.php"); ?><div id="content" class="clearfix">
    <div class="grid-2-8-2 clearfix">
        <div class="left">
            <div class="layout-box">
                <div class="gray_title clearfix">
                    <div class="f_c">使用技巧</div>
                </div>
                <div class="cont" style="padding: 0 50px;">
                    <div class="right_title" style="padding-top: 29px">
                        借款失败原因
                    </div>
                    <div class="publish_time">
                        2013-03-11
                        <div class="r"><a href="javascript:window.history.back();">[返回]</a>&nbsp;&nbsp;<a href="../indexRight.action?currentPage=1&type=usageTip">[全部文章]</a></div>
                    </div>
                    <div class="detail_content" style="padding-top: 30px;padding-bottom: 50px;">
                        <p>
	1．信息太少，有的借款者发布的借款列表内容很少，甚至只有一个图标或者一张没有真实头像的图片，没有明确的借款原因。这样的借款列表不能让人产生信任感，借出者会因为真实信息太少又不能保证按时还款而不会投标。</p>
<p>
	2．借款的用途不可靠，有的借款者借款用途风险太大或者不合法，有的甚至带有赌博性质，比如要去股市再赌一把等，这种风险太大的借款项目一般出借人也不会选择。</p>
<p>
	3．借款描述存在明显问题，比如有的借款列表描述中，每月收入除去每月应还款数额后剩余金额不足以抵消每月开支，没有足够的还款能力。</p>
<p>
	4．低级的骗子，有的借入者直接抄袭别人的借款列表信息，但是一些基本信息存在明显的矛盾之处。</p>
<p>
	5．信誉不好者，在人人贷有逾期行为的借款者会被记录到黑名单中，随着逾期时间的增长，我们会逐步公布逾期借款者的信息，有了逾期记录的借款者再次借款会有一定难度。</p>
<p>
	6．发布借款列表后即消失，对于借出者的合理的提问要求不予回应。</p>
<p>
	7．个人基本情况并不优秀，而且通过的附加信用审核很少或是没有通过附加信用审核。</p>

                    </div>
                    <div class="f_c" style="padding: 5px 0;"><a href="javascript:window.history.back();">[返回]</a>&nbsp;&nbsp;<a href="../indexRight.action?currentPage=1&type=usageTip">[全部文章]</a></div>
                </div>
                <div class="bot">
                    <b class="cor-l"></b>
                    <b class="cor-r"></b>
                </div>
            </div>
        </div>
        <div class="right">
            
 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<div class="layout-box">
    <div class="gray_title" style="text-align: center;">
        推荐的标
    </div>
    <div class="cont" id="recommened_loan">

    </div>
    <div class="bt">
    </div>
</div>
<div class="h5">
</div>
<div class="layout-box">
    <div class="gray_title" style="text-align: center;">
        使用技巧
    </div>
    <div class="cont clearfix" id="tip_list">

    </div>
    <div class="bt">
    </div>
</div>
 <script type="text/javascript">
    $(function(){
        $.ajax({
            url:"../lend/recommendedLoan.action",
            dataType:"html",
            timeout:10000,
            error: function(){
                $("#recommened_loan").html($("#loadingFail").html());
            },
            success: function(response){
                $("#recommened_loan").html(response);
            },
            beforeSend: function(){
                $("#recommened_loan").html($("#loading").html());
            }
        });
    });

    $(function(){
        $.ajax({
            url:"../lend/topTips.action",
            dataType:"html",
            timeout:10000,
            error: function(){
                $("#tip_list").html($("#loadingFail").html());
            },
            success: function(response){
                $("#tip_list").html(response);
            },
            beforeSend: function(){
                $("#tip_list").html($("#loading").html());
            }
        });
    });
</script>

        </div>
    </div>
</div>


<?php require("../footer.php"); ?>

        </div>
    </body>
</html>