<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>个人主页</title>
    <meta name="Keywords" content="大融小贷 个人主页" />
    <meta name="Description" content="大融小贷 个人主页" />
<<<<<<< HEAD
    <link href="/Public/css/UserCSS.css" rel="stylesheet" type="text/css" />
    <script src="/Public/js/jquery.min.js" type="text/javascript"></script>
    <script src="/Public/js/ops.js" type="text/javascript"></script>
    <script src="/Public/js/UserJS.js" type="text/javascript"></script>
=======
    <link href="/RFS/Public/css/UserCSS.css" rel="stylesheet" type="text/css" />
    <script src="/RFS/Public/js/jquery.min.js" type="text/javascript"></script>
    <script src="/RFS/Public/js/ops.js" type="text/javascript"></script>
    <script src="/RFS/Public/js/UserJS.js" type="text/javascript"></script>
>>>>>>> c1af5e7330143bdfa316b9c9eb555bb4c2522e25
</head>
<body>
    <div class="row" style="margin-top: 10px;">
    </div>
    <div class="row">
        <div class="u-menu">
            <ul class="u-nav" id="user_menu">
                <li class="item" id="user_menu_my" name="user_menu_my">
                    <h3 class="t1">
                        我的大融小贷<span title="折叠"></span></h3>
                    <ul class="sub">
<<<<<<< HEAD
                        <li><a class="current" href="/index.php/Admin/Admin/index">个人主页</a></li>
                        <li><a href="/index.php/Admin/Admin/personal">个人资料</a></li>
                        <li><a href="/index.php/Admin/Admin/information">认证管理</a></li>
=======
                        <li><a class="current" href="/RFS/index.php/Admin/Admin/index">个人主页</a></li>
                        <li><a href="/RFS/index.php/Admin/Admin/personal">个人资料</a></li>
                        <li><a href="/RFS/index.php/Admin/Admin/information">认证管理</a></li>
>>>>>>> c1af5e7330143bdfa316b9c9eb555bb4c2522e25
                    </ul>
                </li>
                <li class="item" id="user_menu_funds" name="user_menu_funds">
                    <h3 class="t2">
                        资源管理<span title="折叠"></span></h3>
                    <ul class="sub">
<<<<<<< HEAD
                         <li><a href="/index.php/Admin/Admin/capital">资源分类</a></li>
=======
                         <li><a href="/RFS/index.php/Admin/Admin/capital">资源分类</a></li>
>>>>>>> c1af5e7330143bdfa316b9c9eb555bb4c2522e25
                    </ul>
                </li>
                <li class="item" id="user_menu_invest" name="user_menu_invest">
                    <h3 class="t4">
                        理财管理<span title="折叠"></span></h3>
                    <ul class="sub">
<<<<<<< HEAD
                       <li><a href="/index.php/Admin/Admin/investment">我的投资</a></li>
=======
                       <li><a href="/RFS/index.php/Admin/Admin/investment">我的投资</a></li>
>>>>>>> c1af5e7330143bdfa316b9c9eb555bb4c2522e25
                    </ul>
                </li>
                <li class="item" id="user_menu_loan" name="user_menu_loan">
                    <h3 class="t3">
                        贷款管理<a name="user_login"></a><span title="折叠"></span></h3>
                    <ul class="sub">
<<<<<<< HEAD
                        <li><a  href="/index.php/Admin/Admin/loan">我的贷款</a></li>
=======
                        <li><a  href="/RFS/index.php/Admin/Admin/loan">我的贷款</a></li>
>>>>>>> c1af5e7330143bdfa316b9c9eb555bb4c2522e25
                    </ul>
                </li>
            </ul>
            <script type="text/javascript">
                var menuClosed = Ops.getCookie('menuClosed');

                $(".item h3 span").click(function () {

                    menuClosed = Ops.getCookie('menuClosed');
                    if (menuClosed == undefined || menuClosed == null) {
                        menuClosed = '';
                        Ops.setCookie('menuClosed', menuClosed);
                    }
                    //console.log(menuClosed+',click;;;');	
                    $(this).parent().parent().toggleClass('bg-slide');
                    $(this).parent().parent().find(".sub").slideToggle('fast');

                    if ($(this).attr('title') == '折叠') {
                        $(this).attr('title', '展开');
                    } else {
                        $(this).attr('title', '折叠');
                    }

                    var pid = $(this).parent().parent().attr('id');

                    if ($(this).parent().parent().hasClass('bg-slide') && menuClosed.indexOf("#" + pid + "#") == -1) {
                        var cookies = menuClosed + '#' + pid + '#';
                    } else {
                        var cookies = menuClosed.replace("#" + pid + "#", '');
                    }
                    Ops.setCookie('menuClosed', cookies);
                });

                if (menuClosed != null) {
                    var closedMatch = menuClosed.match(/([a-z_]+)/g);
                    for (var i in closedMatch) {
                        var idObj = $('#' + closedMatch[i]);
                        idObj.toggleClass('bg-slide');
                        idObj.find(".sub").hide();
                        idObj.find('h3 span').attr('title', '展开');
                    }
                } else {
                    $("#user_menu_loan h3 span").click();
                }
            </script>
        </div>
        <!-- /.u-menu -->
        <div class="u-main">
            <div class="ucenter">
                <div class="ucenter-info mt10">
                    <div class="info-title">
                        <h5>
                            我的个人主页</h5>
                    </div>
                    <div class="info">
                        <ul class="info-img">
                            <li>
<<<<<<< HEAD
                                <img src="/Public/images/tx_img.gif" class="avatar" /></li></ul>
=======
                                <img src="/RFS/Public/images/tx_img.gif" class="avatar" /></li></ul>
>>>>>>> c1af5e7330143bdfa316b9c9eb555bb4c2522e25
                        <div class="info-main">
                            <div class="row">
                                <label>
                                    用户名：</label>张三</div>
                            <div class="row">
                                <label>
                                    注册时间：</label>2013-07-13</div>
                            <div class="row">
                                <label>
                                    所在地：</label>重庆</div>
                            <div class="row">
                                <label>
                                    角色：</label><span class="orange">普通会员 &nbsp;&nbsp; 借入者</span></div>
                            <div class="row">
                                <label>
                                    个人统计：</label><span class="orange">0</span>&nbsp;条贷款记录 ， 共计&nbsp;<span class="orange">0</span>&nbsp;元
                                ； <span class="orange">0</span>&nbsp;条投标记录 ， 共计&nbsp;<span class="orange">0.00</span>&nbsp;元
                                。
                            </div>
                        </div>
                        <div class="clear">
                        </div>
                    </div>
                </div> 
                <div class="ucenter-info mt10">
                <div class="ucenter-tab-box">
                        <ul class="u-tab clearfix">
                            <li class="current"><a>我关注的用户</a></li>
                            <li><a>关注我的用户</a></li>
                            <li><a>投标记录</a></li>
                            <li><a>贷款记录</a></li>
                        </ul>
                </div>
                <div id="tab_box">
                    <div class="u-form-wrap">
                        <div>
                            这是我关注的用户</div>
                    </div>
                    <div class="u-form-wrap" style="display: none;">
                        <div>
                            这是关注我的用户</div>
                    </div>
                    <div class="u-form-wrap" style="display: none;">
                        <div>
                            这是我的投标记录</div>
                    </div>
                    <div class="u-form-wrap" style="display: none;">
                        <div>
                            这是我的贷款记录</div>
                    </div>
                </div>                
            </div>
            <script type="text/javascript">

                var $div_li = $(".ucenter-tab-box ul li");

                $div_li.click(function () {

                    $(this).addClass("current").siblings().removeClass("current");

                    var div_index = $div_li.index(this);

                    $("#tab_box>div").eq(div_index).show().siblings().hide();

                }).hover(function () {

                    $(this).addClass("hover");

                }, function () {

                    $(this).removeClass("hover");

                });

        </script>
        </div>
        <!-- /.u-main -->
    </div>
	<div style="text-align:center;">
<p>来源：<a href="http://www.mycodes.net/" target="_blank">源码之家</a></p>
</div>
</body>
</html>