<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="/db/Public/img/favicon.ico" />
    <link rel="bookmark" href="/db/Public/img/favicon.ico" />
    <title>修改学生信息</title>
    <link rel="stylesheet" href="/db/Public/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/db/Public/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/db/Public/css/query.css" type="text/css">
</head>
<body>
<div class="table-responsive container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <center><h3><span class="glyphicon glyphicon-pencil"> 修改学生信息</h3></center>
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-striped">
                <tbody style="text-align: center">
                <form method="get" action="http://localhost/db/index.php/Home/Edit/changeStudentInfo">
                    <tr>
                        <td style="font-size: 15px;line-height: 30px;"><label class="control-label">学 号</label></td>
                        <td><input type="text" value="<?php echo ($sid); ?>" name="sid" class="form-control" /> </td>
                    </tr>

                    <tr>
                        <td style="font-size: 15px;line-height: 30px;"><label class="control-label">姓 名</label></td>
                        <td><input type="text" value="<?php echo ($sname); ?>" name="sname" class="form-control" /> </td>
                    </tr>

                    <tr>
                        <td style="font-size: 15px;line-height: 30px;"><label class="control-label">性 别</label></td>
                        <td><input type="text" value="<?php echo ($sex); ?>" name="sex" class="form-control" /> </td>
                    </tr>

                    <tr>
                        <td style="font-size: 15px;line-height: 30px;"><label class="control-label">入学年龄</label></td>
                        <td><input type="text" value="<?php echo ($schoolAge); ?>" name="schoolAge" class="form-control" /> </td>
                    </tr>

                    <tr>
                        <td style="font-size: 15px;line-height: 30px;"><label class="control-label">入学年份</label></td>
                        <td><input type="text" value="<?php echo ($schoolYear); ?>" name="schoolYear" class="form-control" /> </td>
                    </tr>

                    <tr>
                        <td style="font-size: 15px;line-height: 30px;"><label class="control-label">班 级</label></td>
                        <td><input type="text" value="<?php echo ($class); ?>" name="class" class="form-control" /> </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <button type="submit" class="btn btn-primary" style="width: 1100px;font-size: 15px">提交修改</button>
                        </td>
                    </tr>
                </form>
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