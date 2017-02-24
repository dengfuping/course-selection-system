<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>课程成绩分布</title>
    <link rel="stylesheet" href="/db/Public/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/db/Public/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/db/Public/css/query.css" type="text/css">
</head>
<body>
<div class="table-responsive container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3>课程成绩分布</h3>
        </div>
        <div class="panel-body">
            <h3><a href="#"><?php echo ($vo["cname"]); ?>(<?php echo ($vo["cid"]); ?>)</a>的成绩分布</h3>
            <table class="table table-bordered table-striped">
                <tbody style="text-align: center">
                <tr class="info">
                    <td>成绩分布区间</td>
                    <td>区间人数</td>
                </tr>
                <tr>
                <td>
                    <tr><td>不及格</td></tr>
                    <tr><td>60~69</td></tr>
                    <tr><td>70~79</td></tr>
                    <tr><td>80~89</td></tr>
                    <tr><td>90~99</td></tr>
                    <tr><td>满分(100)</td></tr>
                </td>


                <td>
                    <tr><td>不及格</td></tr>
                    <tr><td>60~69</td></tr>
                    <tr><td>70~79</td></tr>
                    <tr><td>80~89</td></tr>
                    <tr><td>90~99</td></tr>
                    <tr><td>满分(100)</td></tr>

                    <!--<?php if(is_array($range1)): $i = 0; $__LIST__ = $range1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?><td><?php echo ($vo2["totalpersons"]); ?></td><?php endforeach; endif; else: echo "" ;endif; ?>-->
                </td>
                </tr>

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