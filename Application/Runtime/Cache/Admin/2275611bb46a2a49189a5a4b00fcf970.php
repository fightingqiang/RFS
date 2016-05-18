<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en" class="no-js">

<head>

<meta charset="utf-8">
<title>html5响应式后台登录界面模板</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- CSS -->

<link rel="stylesheet" href="/Public/css/supersized.css">
<link rel="stylesheet" href="/Public/css/login.css">
<link href="/Public/css/bootstrap.min.css" rel="stylesheet">
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
	<script src="js/html5.js"></script>
<![endif]-->
<script src="/Public/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="/Public/js/jquery.form.js"></script>
<script type="text/javascript" src="/Public/js/tooltips.js"></script>
<script type="text/javascript" src="/Public/js/login.js"></script>
</head>

<body>

<div class="page-container">
	<div class="main_box">
		<div class="login_box">
			<div class="login_logo">
				<img src="/Public/images/logo.png" >
			</div>
			<div class="login_form">
				<form action="/index.php/Admin/Admin/login" id="login_form" method="post">
					<div class="form-group">
						<label for="j_username" class="t">用户名：</label> 
						<input id="email" value="" name="email" type="text" class="form-control x319 in" 
						autocomplete="off">
					</div>
					<div class="form-group">
						<label for="j_password" class="t">密　码：</label> 
						<input id="password" value="" name="password" type="password" 
						class="password form-control x319 in">
					</div>
					<div class="form-group">
						<label for="j_password" class="t">验证码：</label> 
						<input id="codes" value="" name="code" type="text" 
						class="form-control x319 in">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<img src="/index.php/Admin/Admin/code" onclick="this.src='/index.php/Admin/Admin/code/'+Math.random()" id="code" alt="" >
						<a href="javascript:void(0)" onclick="changeCode()">换一个</a>
					</div>
					<div class="form-group">
						<label class="t"></label>
						<label for="j_remember" class="m">
						<input id="j_remember" type="checkbox" value="true">&nbsp;记住登陆账号!</label>
					</div>
					<div class="form-group space">
						<label class="t"></label>　　　
						<button type="button"  id="submit_btn" 
						class="btn btn-primary btn-lg">&nbsp;登&nbsp;录&nbsp </button>
						<input type="reset" value="&nbsp;重&nbsp;置&nbsp;" class="btn btn-default btn-lg">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- Javascript -->

<script src="/Public/js/supersized.3.2.7.min.js"></script>
<script src="/Public/js/supersized-init.js"></script>
<script src="/Public/js/scripts.js"></script>
</body>
</html>
<script>
  //点击时更换验证码图片，实际上就是更改图片的src属性
 function changeCode(){
  //获取对象
  var code=document.getElementById('code');
  code.src='/index.php/Admin/Admin/code/'+new Date().getTime();
 }
</script>