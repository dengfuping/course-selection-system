<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="/db/Public/img/favicon.ico" />
    <link rel="bookmark" href="/db/Public/img/favicon.ico" />
    <title>登录</title>
    <link rel="stylesheet" href="/db/Public/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/db/Public/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/db/Public/css/login.css" type="text/css">
</head>
<body>
<div class="box">
    <div class="login-box">
        <div class="login-title text-center">
            <h1><small>选课系统登录</small></h1>
        </div>
        <div class="login-content ">
            <div class="form">
                <form action="Home/Login/login" method="get">
                    <div class="form-group">
                        <div class="col-xs-12  ">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                <input type="text" id="username" name="username" class="form-control" placeholder="用 户">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12  ">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                <input type="password" id="password" name="password" class="form-control" placeholder="密 码">
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-xs-4 col-xs-offset-4 ">
                            <button type="submit" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-off"></span> 登 录</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-6 link">
                            <p class="text-center remove-margin"><small></small> <a href="javascript:void(0)" ><small></small></a>
                            </p>
                        </div>
                        <div class="col-xs-6 link">
                            <p class="text-center remove-margin"><small>还没注册?</small> <a href="javascript:void(0)" ><small>注册</small></a>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="/db/Public/js/jquery.min.js"></script>
<script src="/db/Public/js/bootstrap.min.js"></script>
</body>
</html>