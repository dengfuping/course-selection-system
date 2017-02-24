<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="/db/Public/img/favicon.ico" />
    <link rel="bookmark" href="/db/Public/img/favicon.ico" />
    <title>学生信息查询结果</title>
    <link rel="stylesheet" href="/db/Public/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/db/Public/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/db/Public/css/query.css" type="text/css">
</head>
<body>
<div class="table-responsive container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <center><h3><span class="glyphicon glyphicon-user"></span> <a href="#"><?php echo ($sname); ?><!--(<?php echo ($sid); ?>)--></a> ，欢迎你</h3></center>
            <h4><span class="glyphicon glyphicon-education"> 个人信息</h4>
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-striped">
                <tbody style="text-align: center">
                <tr class="info">
                    <td>学 号</td>
                    <td>姓 名</td>
                    <td>性 别</td>
                    <td>入学年龄</td>
                    <td>入学年份</td>
                    <td>班 级</td>
                    <td>操 作</td>
                </tr>
                <?php if(is_array($studentInfo)): $i = 0; $__LIST__ = $studentInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                        <td style="line-height: 35px"><?php echo ($vo["sid"]); ?></td>
                        <td style="line-height: 35px"><?php echo ($vo["sname"]); ?></td>
                        <td style="line-height: 35px"><?php echo ($vo["sex"]); ?></td>
                        <td style="line-height: 35px"><?php echo ($vo["schoolage"]); ?></td>
                        <td style="line-height: 35px"><?php echo ($vo["schoolyear"]); ?></td>
                        <td style="line-height: 35px"><?php echo ($vo["class"]); ?></td>
                        <td style="line-height: 35px">
                            <a href="http://localhost/db/index.php/Home/Edit/deleteStudentInfo?sid=<?php echo ($vo["sid"]); ?>"><button class="btn btn-danger">删 除</button></a>
                            &nbsp;&nbsp;<a href="http://localhost/db/index.php/Home/Edit/editStudentInfo?sid=<?php echo ($vo["sid"]); ?>&&sname=<?php echo ($vo["sname"]); ?>&&sex=<?php echo ($vo["sex"]); ?>&&schoolAge=<?php echo ($vo["schoolage"]); ?>&&schoolYear=<?php echo ($vo["schoolyear"]); ?>&&class=<?php echo ($vo["class"]); ?>"><button class="btn btn-success">修 改</button></a>
                        </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
        </div>
    </div>

    <br/><br/>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4><span class="glyphicon glyphicon-th-list"> 选课情况</h4>
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-striped">
                <tbody style="text-align: center">
                <tr class="info">
                    <td>课程编号</td>
                    <td>课程名称</td>
                    <td>老 师</td>
                    <td>学 分</td>
                    <td>面向年级</td>
                    <td>取消年份</td>
                    <td>操 作</td>
                </tr>
                <?php if(is_array($selectedCourse)): $i = 0; $__LIST__ = $selectedCourse;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?><tr>
                        <td style="line-height: 35px"><?php echo ($vo2["cid"]); ?></td>
                        <td style="line-height: 35px"><?php echo ($vo2["cname"]); ?></td>
                        <td style="line-height: 35px"><?php echo ($vo2["professor"]); ?></td>
                        <td style="line-height: 35px"><?php echo ($vo2["credit"]); ?></td>
                        <td style="line-height: 35px"><?php echo ($vo2["tgrade"]); ?></td>
                        <td style="line-height: 35px"><?php echo ($vo2["canceledyear"]); ?></td>
                        <td style="line-height: 35px"><a href="http://localhost/db/index.php/Home/Edit/deleteSelectedCourse?cid=<?php echo ($vo2["cid"]); ?>&&sid=<?php echo ($vo["sid"]); ?>"><button class="btn btn-danger">删 除</button></a></td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
            <br/><br/>
            <a href="http://localhost/db/index.php/Home/Add/addSelectedCourse?sid=<?php echo ($vo["sid"]); ?>"><button class="btn btn-primary" style="width: 200px;font-size: 15px;float: right;margin-right: 50px">添加课程</button> </a>
        </div>
    </div>
</div>

<script src="/db/Public/js/jquery.min.js"></script>
<script src="/db/Public/js/bootstrap.min.js"></script>
<script>

</script>
</body>
</html>