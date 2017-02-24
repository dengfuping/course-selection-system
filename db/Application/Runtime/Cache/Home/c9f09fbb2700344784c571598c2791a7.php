<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="/db/Public/img/favicon.ico" />
    <link rel="bookmark" href="/db/Public/img/favicon.ico" />
    <title>学生加权平均</title>
    <link rel="stylesheet" href="/db/Public/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/db/Public/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/db/Public/css/query.css" type="text/css">
</head>
<body>

<div class="table-responsive container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <center><h3><span class="glyphicon glyphicon-user"></span> 学生加权平均成绩</h3></center>
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-striped">
                <tbody style="text-align: center">
                <tr class="info">
                    <td>学 号</td>
                    <td>姓 名</td>
                    <td>性 别</td>
                    <td>入学年份</td>
                    <td>班 级</td>
                    <td>加权平均</td>
                </tr>
                <?php if(is_array($studentsAverage)): $i = 0; $__LIST__ = $studentsAverage;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                        <td style="line-height: 35px"><?php echo ($vo["sid"]); ?></td>
                        <td style="line-height: 35px"><?php echo ($vo["sname"]); ?></td>
                        <td style="line-height: 35px"><?php echo ($vo["sex"]); ?></td>
                        <td style="line-height: 35px"><?php echo ($vo["schoolyear"]); ?></td>
                        <td style="line-height: 35px"><?php echo ($vo["class"]); ?></td>
                        <td style="line-height: 35px"><?php echo ($vo["average"]); ?></td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="/db/Public/js/jquery.min.js"></script>
<script src="/db/Public/js/bootstrap.min.js"></script>
<script>

</script>
</body>
</html>