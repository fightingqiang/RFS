<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>我的贷款 用户中心 - 一起好</title>
    <meta name="Keywords" content="一起好 用户中心" />
    <meta name="Description" content="一起好 用户中心" />
    <script src="/php10/wenjiangongxiang/Public//js/ops.js" type="text/javascript"></script>
    <link href="/php10/wenjiangongxiang/Public//css/UserCSS.css" rel="stylesheet" type="text/css" />
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
                        <li><a class="current" href="/php10/wenjiangongxiang/index.php/Admin/Admin/index">个人主页</a></li>
                        <li><a href="/php10/wenjiangongxiang/index.php/Admin/Admin/personal">个人资料</a></li>
                        <li><a href="/php10/wenjiangongxiang/index.php/Admin/Admin/information">认证管理</a></li>
                    </ul>
                </li>
                <li class="item" id="user_menu_funds" name="user_menu_funds">
                    <h3 class="t2">
                        资金管理<span title="折叠"></span></h3>
                    <ul class="sub">
                         <li><a href="/php10/wenjiangongxiang/index.php/Admin/Admin/capital">资金记录</a></li>
                    </ul>
                </li>
                <li class="item" id="user_menu_invest" name="user_menu_invest">
                    <h3 class="t4">
                        理财管理<span title="折叠"></span></h3>
                    <ul class="sub">
                       <li><a href="/php10/wenjiangongxiang/index.php/Admin/Admin/investment">我的投资</a></li>
                    </ul>
                </li>
                <li class="item" id="user_menu_loan" name="user_menu_loan">
                    <h3 class="t3">
                        贷款管理<a name="user_login"></a><span title="折叠"></span></h3>
                    <ul class="sub">
                        <li><a  href="/php10/wenjiangongxiang/index.php/Admin/Admin/loan">我的贷款</a></li>
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
            <script src="/public/hao/js/user/loan.js"></script>
            <div class="u-tab-wrap">
                <ul class="u-tab clearfix">
                    <li class="current"><a>我的贷款</a></li><!--
                <li class="current"><a href="#">全部贷款</a></li><li><a href="#">招标中的贷款</a></li><li><a href="#">还款中的贷款</a></li><li><a href="#">已完成的贷款</a></li>
                --></ul>
            </div>
            <div class="u-form-wrap" style="padding: 20px;">
                <div class="page-wrap">
                    这里是贷款列表
                </div>
                <div class="i-item-btn" style="height: 28px;">
                    <a href="#"  class="i-btn-txt1 repay-back">还 款</a></div>
            </div>
            <!-- /.u-form-wrap -->
        </div>
        <!-- /.u-main -->
    </div>
</body>
</html>