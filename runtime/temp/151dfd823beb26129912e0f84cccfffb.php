<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:83:"C:\phpStudy\PHPTutorial\WWW\test\public/../application/admin\view\product\edit.html";i:1562638591;s:81:"C:\phpStudy\PHPTutorial\WWW\test\public/../application/admin\view\common\top.html";i:1562579651;s:82:"C:\phpStudy\PHPTutorial\WWW\test\public/../application/admin\view\common\left.html";i:1562735944;}*/ ?>
<!DOCTYPE html>
<html><head>
	    <meta charset="utf-8">
    <title>ATI 工业自动化微官网 - Powered By 机器人在线</title>
    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="__PUBLIC__/style/bootstrap.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="__PUBLIC__/style/weather-icons.css" rel="stylesheet">
    <link id="beyond-link" href="__PUBLIC__/style/beyond.css" rel="stylesheet" type="text/css">
    <link href="__PUBLIC__/style/demo.css" rel="stylesheet">
    <link href="__PUBLIC__/style/typicons.css" rel="stylesheet">
    <link href="__PUBLIC__/style/animate.css" rel="stylesheet">
    <script type="text/javascript" src="__PUBLIC__/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" src="__PUBLIC__/ueditor/ueditor.all.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/ueditor/lang/zh-cn/zh-cn.js"></script>
</head>
<body>
	<div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                            <img src="__PUBLIC__/images/89364594414225440logo.png" alt="">
                    </small>
                </a>
            </div>
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="__PUBLIC__/images/adam-jansen.jpg">
                                </div>
                                <section>
                                    <h2><span class="profile"><span><?php echo \think\Request::instance()->session('username'); ?></span></span></h2>
                                </section>
                            </a>
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('admin/logout'); ?>">
                                        退出登录
                                    </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('admin/edit',array('id'=>\think\Request::instance()->session('uid'))); ?>">
                                        修改密码
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
	<div class="main-container container-fluid">
		<div class="page-container">
            <div class="page-sidebar" id="sidebar">
    <ul class="nav sidebar-menu">
        <li>
            <a href="<?php echo url('index/index'); ?>" class="menu-dropdown">
                <i class="menu-icon fa fa-check-square"></i>
                <span class="menu-text">首页 </span>
            </a>
        </li><li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-user"></i>
                <span class="menu-text">管理员 </span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('admin/lst'); ?>">
                        <span class="menu-text">
                            管理列表
                        </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-list"></i>
                <span class="menu-text">企业简介</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('cate/lst'); ?>">
                        <span class="menu-text">
                            公司简介
                        </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('cate/join'); ?>">
                        <span class="menu-text">
                            加入我们
                        </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-file-text"></i>
                <span class="menu-text">产品展示</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('product/lst'); ?>">
                        <span class="menu-text">
                            产品列表
                        </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-link"></i>
                <span class="menu-text">技术支持</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('science/lst'); ?>">
                        <span class="menu-text">
                            技术列表
                        </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('science/lok'); ?>">
                        <span class="menu-text">
                            技术视频
                        </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">展会活动</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('exhibition/lst'); ?>">
                        <span class="menu-text">
                            展会活动日历
                        </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-desktop"></i>
                <span class="menu-text">解决方案</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('cases/lst'); ?>">
                        <span class="menu-text">
                            方案列表
                        </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="<?php echo url('contact/contact'); ?>" class="menu-dropdown">
                <i class="menu-icon fa fa-comment"></i>
                <span class="menu-text">联系我们</span>
            </a>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-archive"></i>
                <span class="menu-text">测试</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('test/test1'); ?>">
                        <span class="menu-text">
                            测试1
                        </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('test/test2'); ?>">
                        <span class="menu-text">
                            测试2
                        </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</div>
            <div class="page-content">
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                        <li>
                            <a href="<?php echo url('index/index'); ?>">系统</a>
                        </li>
                        <li>
                            <a href="<?php echo url('product/lst'); ?>">产品管理</a>
                        </li>
                        <li class="active">修改产品信息</li>
                    </ul>
                </div>
                <div class="page-body">
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">修改产品信息</span>
            </div>
            <div class="widget-body">
                <div id="horizontal-form">
                    <form class="form-horizontal" role="form" enctype="multipart/form-data" action="" method="post">
                        <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
                        <div class="form-group">
                            <label for="title" class="col-sm-2 control-label no-padding-right">产品中文标题</label>
                            <div class="col-sm-6">
                                <input class="form-control" id="title" placeholder="" name="title" type="text" value="<?php echo $product['title']; ?>">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="translate" class="col-sm-2 control-label no-padding-right">产品英文标题</label>
                            <div class="col-sm-6">
                                <input class="form-control" id="translate" placeholder="" name="translate"  type="text" value="<?php echo $product['translate']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="bg_url" class="col-sm-2 control-label no-padding-right">标题背景图</label>
                            <div class="col-sm-6">
                                <input id="bg_url" placeholder="" name="bg_url" style="display:inline;"  type="file">
                                <input type="hidden" name="bg_url" value="<?php echo $product['bg_url']; ?>">
                                <?php if($product['bg_url'] != 'img/'): ?>
                                    <img src="__IMG__/index/<?php echo $product['bg_url']; ?>" height="50" width="100">
                                <?php else: ?>
                                    暂无缩略图，请选择！
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="img_url" class="col-sm-2 control-label no-padding-right">视频展示图</label>
                            <div class="col-sm-6">
                                <input id="img_url" placeholder="" name="img_url" style="display:inline;"  type="file">
                                <input type="hidden" name="img_url" value="<?php echo $product['img_url']; ?>">
                                <?php if($product['img_url'] != 'img/'): ?>
                                    <img src="__IMG__/index/<?php echo $product['img_url']; ?>" height="50" width="100">
                                <?php else: ?>
                                    暂无缩略图，请选择！
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="video" class="col-sm-2 control-label no-padding-right">产品介绍视频</label>
                            <div class="col-sm-6">
                                <input id="video" placeholder="" name="video" style="display:inline;"  type="file">
                                <input type="hidden" name="video" value="<?php echo $product['video']; ?>">
                                <?php if($product['video'] != 'video/'): ?>
                                <video width="100" height="50" controls="controls">
                                    <source src="__IMG__/index/<?php echo $product['video']; ?>" type="video/mp4">
                                </video>
                                <?php else: ?>
                                暂无视频，请选择！
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="content" class="col-sm-2 control-label no-padding-right">产品介绍内容</label>
                            <div class="col-sm-6">
                                <label>
                                    <textarea name="content" id="content"><?php echo $product['content']; ?></textarea>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">保存信息</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
                </div>
            </div>
		</div>
	</div>
    <script src="__PUBLIC__/style/jquery_002.js"></script>
    <script src="__PUBLIC__/style/bootstrap.js"></script>
    <script src="__PUBLIC__/style/jquery.js"></script>
    <script src="__PUBLIC__/style/beyond.js"></script>
    <script type="text/javascript">
        UE.getEditor('content',{initialFrameWidth:633,initialFrameHeight:300,});
    </script>
</body></html>