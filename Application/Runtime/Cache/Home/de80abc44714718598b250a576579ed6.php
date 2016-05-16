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
	    						<a href="aboutus.html">开发工具</a>
	    					</li>
	    				</ul>
	    			</li>
	    			<li>
	    				<a href="document.html">文档</a>
	    			</li>
	    			<li>
	    				<a href="support.html">开发支持</a>
	    			</li>
	    			<li>
	    				<a href="" class="current-nav">关于我们</a>
	    			</li>
	    		</ul>
    		</div>
    	</div>
    </div>
    <div class="p-box" style="min-height:auto;">
    	<div class="content">
    		<h1>联系我们</h1>
    		<ul style="display:inline-block">
    			<li class="trangle scen aboutus">
    				<img src="images/icon-tel.png" height="30" width="30" alt="">
    				<span>
						<h2>020-55555555</h2>
    				</span>
    			</li>
    			<li class="trangle scen aboutus">
    				<img src="images/icon-email.png" height="30" width="30" alt="">
					<span>
						<h2>marketing12334@163.cn</h2>
					</span>
    			</li>
    			<li class="trangle scen aboutus">
    				<img src="images/icon-add.png" height="30" width="30" alt="">
					<span>
						<h2>广州市海珠区昌岗中路166号富盈国际大厦</h2>
						
					</span>
    			</li>
    		</ul>
    		<div style="clear:both;"></div>
    	</div>
    </div>
    <div class="p-box bg-grey" style="padding-bottom:0">
    	<div class="content">
    		<img src="images/ban1.png" height="271" width="410" alt="" style="width:64px;height:64px;">
    		<h1>关于我们</h1>
    		<h3>
    			有视是基于下一代的WebRTC技术，面对各行业领域，我们的产品人员和工程师凭借丰富的经验，能够提供不同层次的解决方案，帮助企业和开发者以合理成本解决具体问题。
    		</h3>
    	</div>
    </div>
    <div class="p-box">
    	<div class="content">
    		<h1>我们的团队</h1>
    		<h3 style="margin-bottom:32px;">
    			Our team has accumulated over 10 years of development experience in WebRTC technologies. It also has a strong 
knowledge on HTML5, CSS, mobile developments. We can share this expertise to help you accelerate your projects.
    		</h3>
    		<img src="images/team.jpg" height="315" width="430" alt="">
    	</div>
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
    					500-640-6411222
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