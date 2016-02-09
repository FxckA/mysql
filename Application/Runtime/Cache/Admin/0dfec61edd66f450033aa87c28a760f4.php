<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <title>Admin Login</title>
    <!-- Bootstrap -->
    <link href="/Public/login/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="/Public/login/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="/Public/login/assets/styles.css" rel="stylesheet" media="screen">
     <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="/Public/login/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  </head>
  <body id="login">
    <div class="container">

      <form class="form-signin" action="<?php echo U('Admin/isadmin','','');?>" method="post">
        <h2 class="form-signin-heading">请登录</h2>
        <input type="text" class="input-block-level" placeholder="Username"  name="username">
        <input type="password" class="input-block-level" placeholder="Password"  name="password">
        <label class="checkbox">
          <input type="checkbox" value="remember-me" name ="remenber"> 记住我
        </label>
        <button class="btn btn-large btn-primary" type="submit">登陆</button>
      </form>

    </div> <!-- /container -->
<!--    <script src="/Public/vendors/jquery-1.9.1.min.js"></script>
-->    <script src="/Public/login/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>