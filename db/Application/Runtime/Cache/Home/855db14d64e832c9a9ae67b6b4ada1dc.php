<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="/db/Public/img/favicon.ico" />
    <link rel="bookmark" href="/db/Public/img/favicon.ico" />
    <title>查询</title>
    <link rel="stylesheet" href="/db/Public/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/db/Public/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/db/Public/css/query.css" type="text/css">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://localhost/db/index.php/Home/Query/index.html"><sapn class="glyphicon glyphicon-home"></sapn> 网站首页</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="http://localhost/db/index.php/Home/Add/editStudentInfo" target="_blank"><span class="glyphicon glyphicon-pencil"></span> 添加学生</a></li>
                <li><a href="http://localhost/db/index.php/Home/Add/editCourseInfo" target="_blank"><span class="glyphicon glyphicon-eye-open"></span> 添加课程</a></li>
                <li><a href="http://localhost/db/index.php/Home/Grade/studentsAverage" target="_blank"><span class="glyphicon glyphicon-briefcase"></span> 学生加权平均</a></li>
                <li><a href="http://localhost/db/index.php/Home/Grade/classesAverage" target="_blank"><span class="glyphicon glyphicon-send"></span> 班级加权平均</a></li>
                <li><a href="http://localhost/db/index.php/Home/Grade/coursesAverage" target="_blank"><span class="glyphicon glyphicon-download-alt"></span> 课程平均成绩</a></li>
                <li><a href="#" target="_blank"><span class="glyphicon glyphicon-question-sign"></span> 关于</a></li>
                <li><a href="http://localhost/db/index.php"><span class="glyphicon glyphicon-user"></span> 退出</a></li>
            </ul>
        </div>
    </div>
</nav>

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
            <form action="http://localhost/db/index.php/Home/Query/query" method="get">
                <div class="col-md-6 col-md-offset-3">
                    <div class="input-group btn-group" style="margin-top: 0px; padding-top:50px;">
                        <input type="text" class="form-control" id="keyword" name="keyword" style="height:42px;" placeholder="输入关键字">
				    <span class="input-group-btn">
					    <button type="submit" class="btn btn-danger" id="searchbutton" style="height:42px;">搜 索</button>
				    </span>
                    </div>
                </div>
            </form>
        </div>

        <div class="container" id="block1">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-2">
                    <a href="http://localhost/db/index.php/Home/Grade/studentsAverage" target="_blank"><button type="submit" class="btn btn-primary" name="studentAverage" id="studentAverage">学生加权平均</button></a>
                </div>
                <div class="col-md-2">
                    <a href="http://localhost/db/index.php/Home/Grade/classesAverage" target="_blank"><button type="submit" class="btn btn-primary" name="classesAverage" id="classAverage">班级加权平均</button></a>
                </div>
                <div class="col-md-2">
                    <a href="http://localhost/db/index.php/Home/Grade/coursesAverage" target="_blank"><button type="submit" class="btn btn-primary" name="coursesGrade" id="courseAverage">课程平均成绩</button></a>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>

        <div class="container" id="block2">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-2">
                    <a href="http://localhost/db/index.php/Home/Add/editStudentInfo" target="_blank"><button type="submit" class="btn btn-primary" name="studentAverage" id="addStudent" >添加学生</button></a>
                </div>
                <div class="col-md-2">
                    <a href="http://localhost/db/index.php/Home/Add/editCourseInfo" target="_blank"><button type="submit" class="btn btn-primary" name="classesAverage" id="addCourse">添加课程</button></a>
                </div>
                <div class="col-md-2">
                    <a href="http://localhost/db/index.php/Home/Login/logout"><button type="submit" class="btn btn-primary" name="coursesGrade" id="quit">退出系统</button></a>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
</div>
<script src="/db/Public/js/jquery.min.js"></script>
<script src="/db/Public/js/bootstrap.min.js"></script>
<script>

</script>
</body>
</html>