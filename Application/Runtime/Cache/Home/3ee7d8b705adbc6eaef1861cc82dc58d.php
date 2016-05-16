<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Examples</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="/wenjiangongxiang/Public/index/css/main.css" rel="stylesheet">
<script src="/wenjiangongxiang/Public/index/js/jquery-1.7.1.min.js"></script>
<script>
	$(function(){
		$(".nav li").hover(function() {
			$(".second-nav",this).slideDown(100);
			/* Stuff to do when the mouse enters the element */
		}, function() {
			$(".second-nav",this).slideUp(100);
			// $(".second-nav").hide();
			/* Stuff to do when the mouse leaves the element */
		});
	})
</script>
</head>
<body>
    <div class="head">
    	<div class="content">
    		<div class="logo"><img src="images/logo3.png" height="101" width="172" alt=""></div>
    		<div class="login-box">
    			<a href="login.html" class="n2">登录</a>
    			<a href="register.html" class="n1">注册</a>
    		</div>
    		<div class="nav">
	    		<ul>
	    			<li>
	    				<a href="index.html">首页</a>
	    			</li>
	    			<li  style="position:relative;">
	    				<a href="javascript:;" class="h-nav">平台特色</a>
	    				<ul class="second-nav">
	    					<li>
	    						<a href="platform.html">平台介绍</a>
	    					</li>
	    					<li>
	    						<a href="tools.html">开发工具</a>
	    					</li>
	    				</ul>
	    			</li>
	    			<li>
	    				<a href="document.html">文档</a>
	    			</li>
	    			<li>
	    				<a href=""  class="current-nav">开发支持</a>
	    			</li>
	    			<li>
	    				<a href="aboutus.html">关于我们</a>
	    			</li>
	    		</ul>
    		</div>
    	</div>
    </div>
    <div class="banner">
    	<img src="images/support-ban.jpg" height="343" width="1920" alt="">
    </div>
    <div class="p-box grey" style="height:auto">
    	<div class="content">
    		<h3>
    			We can help you accelerate your project. Our team has accumulated over 
10 years of development experience in WebRTC technologies. It also has a strong knowledge 
on HTML5, CSS, mobile developments. We can share this expertise to help you accelerate your projects.
    		</h3>
    	</div>
    </div>
    <div style="clear:both;"></div>
    <div class="p-box" style="padding-bottom:0">
    	<div class="content">
    		<h1>Support to your developments</h1>
    		<h3>
    			You have an application or you want to develop one. You want to integrate our communications
 services into your application but you have no internal knowledge or simply don’t have the ressources to do it. Our team can do it for you.
    		</h3>
    		<img src="images/support1.png" height="274" width="626" alt="">
    	</div>
    </div>
    <div class="p-box bg-grey" style="padding-bottom:0">
    	<div class="content">
    		<h1>WebRTC Advice</h1>
    		<h3>
    			You’re working on a project where you’re exploring the possibility of integrating WebRTC communications services, but you lack 
experience or expertise in this area. Before you start, get some advice, validation, and support from a WebRTC expert. Our team can assist you.
    		</h3>
    		<img src="images/support2.png" height="232" width="508" alt="">
    	</div>
    </div>
    <div class="p-box contact">
    		<a href="aboutus.html">联系我们</a>
    	</div>
    <div class="p-box footer">
    	<div class="content">
    		<div class="f1">
    			<h3>关于</h3>
    			<ul>
    				<li>
    					<a href="">关于我们</a>
    				</li>
    				<li>
    					<a href="">平台特性</a>
    				</li>
    			</ul>
    		</div>
    		<div class="f1">
    			<h3>资源</h3>
    			<ul>
    				<li>
    					<a href="">文档中心</a>
    				</li>
    				<li>
    					<a href="">平台特性</a>
    				</li>
    			</ul>
    		</div>
    		<div class="f1">
    			<h3>联系我们</h3>
    			<ul>
    				<li>
    					500-640-5555
    				</li>
    				<li>
    					地址：广州市海珠区昌岗中路
    				</li>
    			</ul>
    		</div>
    		<div class="f1">
    			<!-- <img src="images/wechat.png" height="105" width="105" alt=""> -->
    			<!-- <h5>关注我们</h5>
    			<ul>
    				<li>
    					<img src="images/wechat.png" height="105" width="105" alt="">
    				</li>
    			</ul> -->
    		</div>
    	</div>
    </div>
</body>
</html>