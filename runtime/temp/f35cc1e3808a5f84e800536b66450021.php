<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:81:"C:\phpStudy\PHPTutorial\WWW\test\public/../application/admin\view\test\test2.html";i:1562808339;s:81:"C:\phpStudy\PHPTutorial\WWW\test\public/../application/admin\view\common\top.html";i:1562579651;s:82:"C:\phpStudy\PHPTutorial\WWW\test\public/../application/admin\view\common\left.html";i:1562735944;}*/ ?>
<!DOCTYPE html>
<html>
<head>
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
                    <li class="active">测试2</li>
                </ul>
            </div>
            <div class="page-body">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <div class="widget-body">
                                <div class="flip-scroll">
                                    <table class="table table-bordered table-hover">
                                        <tr>
                                            <th class="text-center" width="4%">ID</th>
                                            <th class="text-center">食物</th>
                                            <th class="text-center">NUM</th>
                                        </tr>
                                        <?php if(is_array($test2) || $test2 instanceof \think\Collection): $i = 0; $__LIST__ = $test2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$te): $mod = ($i % 2 );++$i;?>
                                        <tr>
                                            <td align="center"><?php echo $te['id']; ?></td>
                                            <td align="center"><?php echo $te['title']; ?></td>
                                            <td align="center"><?php echo $te['num']; ?></td>
                                        </tr>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </table>
                                </div>
                                <div style="text-align:right; margin-top:10px;">
                                    <?php echo $test2->render(); ?>
                                </div>
                                <form class="form-horizontal" role="form" enctype="multipart/form-data" action="" method="post">
                                    <table class="table table-bordered table-hover">
                                        <tr>
                                            <th class="text-center">食物</th>
                                            <th class="text-center">NUM</th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div style="text-align: center;width: auto;padding-left: 100px;padding-right: 100px;">
                                                    <input class="form-control" id="title" placeholder="" name="title"  type="text">
                                                </div>
                                            </td>
                                            <td>
                                                <div style="text-align: center;width: auto;padding-left: 100px;padding-right: 100px;">
                                                    <input class="form-control" id="num" placeholder="" name="num"  type="text">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <div class="col-sm-offset-2 col-sm-10" style="text-align: center;padding-right: 230px;">
                                                    <button type="submit" class="btn btn-default">保存信息</button>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </form>
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
</body>
</html>