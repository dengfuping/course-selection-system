<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>选课结果</title>
    <link rel="stylesheet" href="/db/Public/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/db/Public/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/db/Public/css/course.css" type="text/css">
</head>
<body>
<div class="container">
    <div id="top">
        <div class="panel panel-default">
            <div class="panel-heading">
                <span class="glyphicon glyphicon-user"> 欢迎您 <a href="#"><?php echo (session('sname')); ?>(<?php echo (session('sid')); ?>)</a> &nbsp;&nbsp;&nbsp;&nbsp; 选课完毕请不要忘记 <a href="#">退出登录</a></span>
            </div>
            <div class="panel-body">
                <a class="active btn btn-success">选课结果</a>
<!--            <a href="#" class="btn btn-success">必修课</a>
                <a href="#" class="btn btn-success">选修课</a>
                <a href="#" class="btn btn-success">体育课</a>&ndash;&gt;
                <a href="#" class="btn btn-success">重修课</a>-->
                <hr/>
                <hr/>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <tbody style="text-align: center">
                        <tr class="info">
                            <td>课程编号</td>
                            <td>课程名称</td>
                            <td>学分</td>
                            <td>教师</td>
                            <td>适合年级</td>
                            <td>取消年份</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="/db/Public/js/jquery.min.js"></script>
<script src="/db/Public/js/bootstrap.min.js"></script>
</body>
</html>