<?php if (!defined('THINK_PATH')) exit();?>
	<!DOCTYPE html>
<html class="no-js">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Admin Home Page</title>
		<!-- Bootstrap -->
		<link href="/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="/Public/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
		<link href="/Public/vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
		<link href="/Public/assets/styles.css" rel="stylesheet" media="screen">
		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
		<script src="/Public/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	</head>




		<body>
	<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container-fluid">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<a class="brand" >Admin Page</a>
			<div class="nav-collapse collapse">
				<ul class="nav pull-right">
					<li class="dropdown">
						<a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> ADMIN <i class="caret"></i>

						</a>
						<ul class="dropdown-menu">
							<li>
								<a tabindex="-1" href="<?php echo U('changepassword','','');?>">修改密码</a>
							</li>
							<li class="divider">
								<li>
									<a tabindex="-1" href="<?php echo U('logout','','');?>">登出系统</a>
								</li>
						</ul>
						</li>
				</ul>
				<ul class="nav">
					<li class="active">
						<a href="<?php echo U('index','','');?>">首页</a>
					</li>
					<li class="dropdown">
						<a href="#" data-toggle="dropdown" class="dropdown-toggle">设置 <b class="caret"></b>

                                </a>
						<ul class="dropdown-menu" id="menu1">
							<li>
								<a href="#">Tools <i class="icon-arrow-right"></i>

                                        </a>
								<ul class="dropdown-menu sub-menu">
									<li>
										<a href="#">Reports</a>
									</li>
									<li>
										<a href="#">Logs</a>
									</li>
									<li>
										<a href="#">Errors</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="#">SEO Settings</a>
							</li>
							<li>
								<a href="#">Other Link</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">Other Link</a>
							</li>
							<li>
								<a href="#">Other Link</a>
							</li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">目录 <i class="caret"></i>

                                </a>
						<ul class="dropdown-menu">
							<li>
								<a tabindex="-1" href="#">Blog</a>
							</li>
							<li>
								<a tabindex="-1" href="#">News</a>
							</li>
							<li>
								<a tabindex="-1" href="#">Custom Pages</a>
							</li>
							<li>
								<a tabindex="-1" href="#">Calendar</a>
							</li>
							<li class="divider"></li>
							<li>
								<a tabindex="-1" href="#">FAQ</a>
							</li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">用户 <i class="caret"></i>

                                </a>
						<ul class="dropdown-menu">
							<li>
								<a tabindex="-1" href="<?php echo U('userlist','','');?>">用户列表</a>
							</li>
							<li>
								<a tabindex="-1" href="#">查找用户</a>
							</li>
						
						</ul>
					</li>
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
</div>


	<div class="container-fluid">
	<div class="row-fluid">
		<div class="span3" id="sidebar">
			<ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
				<li class="active">
					<a href="index.html"><i class="icon-chevron-right"></i> 首页</a>
				</li>
				<li>
					<a href="calendar.html"><i class="icon-chevron-right"></i> Calendar</a>
				</li>
				<li>
					<a href="stats.html"><i class="icon-chevron-right"></i> Statistics (Charts)</a>
				</li>
				<li>
					<a href="<?php echo U('changepassword','','');?>"><i class="icon-chevron-right"></i> 修改密码</a>
				</li>
				<li>
					<a href="<?php echo U('userlist','','');?>"><i class="icon-chevron-right"></i> 用户列表</a>
				</li>
				<li>
					<a href="buttons.html"><i class="icon-chevron-right"></i> Buttons & Icons</a>
				</li>
				<li>
					<a href="editors.html"><i class="icon-chevron-right"></i> WYSIWYG Editors</a>
				</li>
				<li>
					<a href="interface.html"><i class="icon-chevron-right"></i> UI & Interface</a>
				</li>
				<li>
					<a href="#"><span class="badge badge-success pull-right">731</span> Orders</a>
				</li>
				<li>
					<a href="#"><span class="badge badge-success pull-right">812</span> Invoices</a>
				</li>
				<li>
					<a href="#"><span class="badge badge-info pull-right">27</span> Clients</a>
				</li>
				<li>
					<a href="#"><span class="badge badge-info pull-right">1,234</span> Users</a>
				</li>
				<li>
					<a href="#"><span class="badge badge-info pull-right">2,221</span> Messages</a>
				</li>
				<li>
					<a href="#"><span class="badge badge-info pull-right">11</span> Reports</a>
				</li>
				<li>
					<a href="#"><span class="badge badge-important pull-right">83</span> Errors</a>
				</li>
				<li>
					<a href="#"><span class="badge badge-warning pull-right">4,231</span> Logs</a>
				</li>
			</ul>
		</div>

</block name="userlist">
<div class="span9" id="content">
	<div class="row-fluid">
		<!-- block -->
		<div class="block">
			<div class="navbar navbar-inner block-header">
				<div class="muted pull-left">Basic Table</div>
			</div>
			<div class="block-content collapse in">
				<div class="span12">
					<table class="table">
						<thead>
							<tr>
								<th>#</th>
								<th>用户名</th>
								<th>角色</th>
							</tr>
						</thead>
						<tbody>
							<?php if(is_array($user)): $i = 0; $__LIST__ = $user;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
									<td><?php echo ($vo["id"]); ?></td>
									<td><?php echo ($vo["username"]); ?></td>
									<td><?php echo ($vo["whoami"]); ?></td>
								</tr><?php endforeach; endif; else: echo "" ;endif; ?>
							<!--<tr>
								<td>2</td>
								<td>Jacob</td>
								<td>Thornton</td>
							</tr>
							<tr>
								<td>3</td>
								<td>Larry</td>
								<td>the Bird</td>
							</tr>-->
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- /block -->
	</div>
</div>

</block>

<script src="/Public/vendors/jquery-1.9.1.js"></script>
<script src="/Public/bootstrap/js/bootstrap.min.js"></script>
<script src="/Public/vendors/datatables/js/jquery.dataTables.min.js"></script>

<script src="/Public/assets/scripts.js"></script>
<script src="/Public/assets/DT_bootstrap.js"></script>
<script>
	$(function() {});
</script>
</body>

</html>