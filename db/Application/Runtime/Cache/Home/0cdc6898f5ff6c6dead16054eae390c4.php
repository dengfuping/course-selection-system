<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>查询</title>
    <link rel="stylesheet" href="/db/Public/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/db/Public/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/db/Public/css/query.css" type="text/css">
</head>
<body>
<!--<div class="panel panel-default">
    <div class="panel-heading">
        <span class="glyphicon glyphicon-user"> 欢迎您 {<?php echo ($password); ?>}(<?php echo ($sid); ?>) &nbsp;&nbsp;&nbsp;&nbsp; 选课完毕请不要忘记 <a href="#">退出登录</a></span>
    </div>
</div>-->
<div id="slide">
    <div id="filter">
        <div class="row">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <h1>欢迎您，<?php echo (session('username')); ?></h1>
                    <p>
                        请在搜索框内输入查询关键字
                    </p>
                </div>
                <div class="col-md-1"></div>
            </div>
            <!--<div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <form >
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="查询关键字">
                            <button type="submit" class="btn-primary">查询</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-2"></div>
            </div>-->
            <div class="col-md-6 col-md-offset-3">
                <div class="input-group btn-group" style="margin-top: 0px; auto;padding-top:50px;">
                    <input type="text" class="form-control" id="sn" style="height:42px;" placeholder="输入关键字">
				    <span class="input-group-btn">
					    <button type="submit" class="btn btn-danger" id="searchbutton" style="height:42px;"
                                onclick="javascript:search()">查询</button>
				    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="/db/Public/js/jquery.min.js"></script>
<script src="/db/Public/js/bootstrap.min.js"></script>
</body>
</html>