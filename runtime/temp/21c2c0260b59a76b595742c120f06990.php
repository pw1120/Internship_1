<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:90:"C:\phpStudy\PHPTutorial\WWW\test\public/../application/index\view\index\science_video.html";i:1562550492;s:82:"C:\phpStudy\PHPTutorial\WWW\test\public/../application/index\view\comment\nav.html";i:1562053856;s:85:"C:\phpStudy\PHPTutorial\WWW\test\public/../application/index\view\comment\footer.html";i:1562118186;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>ATI 工业自动化微官网 - Powered By 机器人在线</title>
    <meta charset="utf-8">
    <meta name="keywords" content="ATI 工业自动化">
    <meta name="description" content="ATI 工业自动化">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0,minimum-scale=1,user-scalable=0">
    <link href="__PUBLIC__/css/style.css" rel="stylesheet" type="text/css">
    <link href="__PUBLIC__/css/iconfont.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="__PUBLIC__/js/jquery.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/global.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/wxshares.js"></script>
</head>

<body>
    <header class="header">
    <div id="logo"> <a href="/"><img src="__PUBLIC__/img/logo.png" title="ATI 工业自动化微官网" alt="ATI 工业自动化微官网"></a> </div>
    <div id="goback"> <a href="javascript:history.go(-1);"><i class="iconfont icon-left"></i></a> </div>
    <div id="menu-icon"><i class="iconfont icon-caidan"></i></div>
</header>
<div class="menu animated">
    <div class="menu-logo"> <img src="__PUBLIC__/img/index_logo.png"> </div>
    <nav>
        <ul>
            <li class="cur"> <a href="../index/about.html">企业简介</a> </li>
            <li> <a href="../index/product.html">产品中心</a> </li>
            <li> <a href="../index/science.html">技术支持</a> </li>
            <li> <a href="../index/exhibition.html">展会活动</a> </li>
            <li> <a href="../index/case.html">解决方案</a> </li>
            <li> <a href="../index/contact.html">联系我们</a> </li>
        </ul>
    </nav>
    <div class="menu-close"> <i class="iconfont icon-2901cuowu"></i> </div>
</div>
    <section class="main">
        <div class="padding">
            <div class="subnavigation flex">
                <a href="science.html">专业术语</a>
                <a href="science_video.html" class="cur">技术视频</a>
            </div>
            <?php if(is_array($data) || $data instanceof \think\Collection): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$da): $mod = ($i % 2 );++$i;?>
            <div class="video">
                <video poster="__PUBLIC__/<?php echo $da['poster']; ?>" controls="">
                    <source src="__PUBLIC__/<?php echo $da['video']; ?>" type="video/mp4">
                </video>
            </div>
            <div class="editor-box">
                <?php echo $da['content']; ?>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </section>
    <footer class="clearfix">
    <p>
        <span>Powered By：<img src="__PUBLIC__/img/footer_logo.png" alt=""></span>
    </p>
</footer>
</body>

</html>