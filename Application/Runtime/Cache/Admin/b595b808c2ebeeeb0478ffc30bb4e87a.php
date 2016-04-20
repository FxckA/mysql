<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>后台主页</title>

    <!-- Bootstrap core CSS -->
    <link href="/bishe/Application/Admin/View//Public/static/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="/bishe/Application/Admin/View//Public/static/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="/bishe/Application/Admin/View//Public/static/font-awesome/css/font-awesome.min.css">
</head>

<body>

<div id="wrapper">

    <!-- Sidebar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo U('index/index');?>">管理后台</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">

            <ul class="nav navbar-nav side-nav">
    <li><a href="<?php echo U('index/index');?>"><i class="fa fa-dashboard"></i> 仪表盘</a></li>
    <li class="dropdown">
        <a href="<?php echo U('category/index');?>"><i class="fa fa-reorder"></i> 分类管理</a>
    </li>
    <li class="dropdown">
        <a href="<?php echo U('articlescrap/index');?>"><i class="fa fa-edit"></i> 静态文章管理</a>
    </li>
    <li class="dropdown">
        <a href="<?php echo U('news/index');?>"><i class="fa fa-edit"></i> 新闻公告管理</a>
    </li>
    <li class="dropdown">
        <a href="<?php echo U('page/index');?>"><i class="fa fa-file-text-o"></i> 单页管理 </a>
    </li>
    <li class="dropdown">
        <a href="<?php echo U('member/index');?>"><i class="fa fa-users"></i> 用户管理</a>  
    </li>
     <li class="dropdown">
        <a href="<?php echo U('links/index');?>"><i class="fa fa-link"></i> 链接管理</a>
    </li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog"></i> 系统设置 <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a href="<?php echo U('setting/index');?>">自定义字段</a></li>
            <li><a href="#">系统优化</a></li>
            <li><a href="#">缓存管理</a></li>
        </ul>
    </li>
</ul>

            <ul class="nav navbar-nav navbar-right navbar-user">

                <li class="dropdown user-dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> 你好,<?php echo session('username');?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo U('member/index');?>"><i class="fa fa-gear"></i> 设置</a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo U('login/logout');?>"><i class="fa fa-power-off"></i> 退出</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
<div id="page-wrapper">

	<div class="row">
		<div class="col-lg-3">
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-6">
							<i class="fa  fa-comment fa-5x"></i>
						</div>
						<div class="col-xs-6 text-right">
							<p class="announcement-heading"><?php echo ($data["news"]); ?></p>
							<p class="announcement-text">新闻公告</p>
						</div>
					</div>
				</div>
				<a href="<?php echo U("news/index");?>">
					<div class="panel-footer announcement-bottom">
						<div class="row">
							<div class="col-xs-6">
								查看动态新闻和公告
							</div>
							<div class="col-xs-6 text-right">
								<i class="fa fa-arrow-circle-right"></i>
							</div>
						</div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="panel panel-warning">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-6">
							<i class="fa fa-users fa-5x"></i>
						</div>
						<div class="col-xs-6 text-right">
							<p class="announcement-heading"><?php echo ($data["member"]); ?></p>
							<p class="announcement-text">用户</p>
						</div>
					</div>
				</div>
				<a href="<?php echo U("member/index");?>">
					<div class="panel-footer announcement-bottom">
						<div class="row">
							<div class="col-xs-6">
								管理用户
							</div>
							<div class="col-xs-6 text-right">
								<i class="fa fa-arrow-circle-right"></i>
							</div>
						</div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="panel panel-danger">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-6">
							<i class="fa fa-edit fa-5x"></i>
						</div>
						<div class="col-xs-6 text-right">
							<p class="announcement-heading"><?php echo ($data["articlescrap"]); ?></p>
							<p class="announcement-text">静态文章介绍</p>
						</div>
					</div>
				</div>
				<a href="<?php echo U("articlescrap/index");?>">
					<div class="panel-footer announcement-bottom">
						<div class="row">
							<div class="col-xs-6">
								管理静态介绍文章
							</div>
							<div class="col-xs-6 text-right">
								<i class="fa fa-arrow-circle-right"></i>
							</div>
						</div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-6">
							<i class="fa fa-link fa-5x"></i>
						</div>
						<div class="col-xs-6 text-right">
							<p class="announcement-heading"><?php echo ($data["links"]); ?></p>
							<p class="announcement-text">链接</p>
						</div>
					</div>
				</div>
				<a href="<?php echo U("links/index");?>">
					<div class="panel-footer announcement-bottom">
						<div class="row">
							<div class="col-xs-6">
								管理链接
							</div>
							<div class="col-xs-6 text-right">
								<i class="fa fa-arrow-circle-right"></i>
							</div>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
	<!-- /.row -->

	<!-- /.row -->

	<!-- /.row -->

</div>

<!-- JavaScript -->
<script src="/bishe/Application/Admin/View//Public/static/js/jquery-1.10.2.js"></script>
<script src="/bishe/Application/Admin/View//Public/static/js/bootstrap.js"></script>
<script src="/bishe/Application/Admin/View//Public/static/js/app.js"></script>

</body>
</html>