<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="/db/Public/img/favicon.ico" />
    <link rel="bookmark" href="/db/Public/img/favicon.ico" />
    <title>学生课程成绩查询结果</title>
    <link rel="stylesheet" href="/db/Public/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/db/Public/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/db/Public/css/query.css" type="text/css">
    <script src="/db/Public/js/echarts.min.js"></script>
</head>
<body>
<div class="table-responsive container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3><span class="glyphicon glyphicon-user"><a href="#"> <?php echo ($sname); ?></a> ,您的 <a href="#"><?php echo ($cname); ?></a> 的成绩为</h3>
        </div>
        <div class="panel-body" style="font-size: 15px">
            <?php echo ($score); ?>
            <center><div id="main" style="width: 800px;height: 500px"></div></center>
        </div>
    </div>
</div>

<script>
    // 基于准备好的dom，初始化echarts实例
    var myChart = echarts.init(document.getElementById('main'));

    // 指定图表的配置项和数据
    var option = {
        tooltip : {
            formatter: "{a} <br/>{b} : {c}%"
        },
        toolbox: {
            feature: {
                //restore: {},
                //saveAsImage: {}
            }
        },
        series: [
            {
                name: '课程成绩',
                type: 'gauge',
                detail: {formatter:'{value}'},
                data: [{value: <?php echo ($score); ?>, name: '课程成绩'}]
            }
        ]
    };

    // 使用刚指定的配置项和数据显示图表。
    myChart.setOption(option);
</script>

<script src="/db/Public/js/jquery.min.js"></script>
<script src="/db/Public/js/bootstrap.min.js"></script>
<script>

</script>
</body>
</html>