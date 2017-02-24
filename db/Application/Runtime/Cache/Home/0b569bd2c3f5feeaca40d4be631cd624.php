<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="/db/Public/img/favicon.ico" />
    <link rel="bookmark" href="/db/Public/img/favicon.ico" />
    <title>班级加权平均</title>
    <link rel="stylesheet" href="/db/Public/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/db/Public/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/db/Public/css/query.css" type="text/css">
    <script src="/db/Public/js/echarts.min.js"></script>
</head>
<body>

<div class="table-responsive container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <center><h3><span class="glyphicon glyphicon-user"></span> 班级加权平均成绩</h3></center>
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-striped">
                <tbody style="text-align: center">
                <tr class="info">
                    <td>年 级</td>
                    <td>班 级</td>
                    <td>加权平均</td>
                </tr>
                <?php if(is_array($classesAverage)): $i = 0; $__LIST__ = $classesAverage;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                        <td style="line-height: 35px"><?php echo ($vo["schoolyear"]); ?></td>
                        <td style="line-height: 35px"><?php echo ($vo["class"]); ?></td>
                        <td style="line-height: 35px"><?php echo ($vo["average"]); ?></td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div id="main1" style="width: 550px;height: 400px;float: left;"></div>
    <div id="main2" style="width: 550px;height: 400px;float: right;"></div>
</div>

<script>
    // 基于准备好的dom，初始化echarts实例
    var myChart = echarts.init(document.getElementById('main1'));

    // 指定图表的配置项和数据
    var option = {
        title: {
            text: '班级平均成绩',
            subtext:'柱形图'
        },
        tooltip: {},
        legend: {
            data: ['分 数']
        },
        xAxis: {
            data: ["1 班", "2 班", "3 班", "4 班"]
        },
        yAxis: {},
        series: [{
            name: '分 数',
            type: 'bar',
            data: [<?php echo ($average1); ?>, <?php echo ($average2); ?>, <?php echo ($average3); ?>, <?php echo ($average4); ?>]
        }]
    };

    // 使用刚指定的配置项和数据显示图表。
    myChart.setOption(option);
</script>

<script>
    // 基于准备好的dom，初始化echarts实例
    var myChart = echarts.init(document.getElementById('main2'));

    // 指定图表的配置项和数据
    var option = {
        title : {
            text: '班级平均成绩',
            subtext: '饼状图',
            x:'center'
        },
        tooltip : {
            trigger: 'item',
            formatter: "{a} <br/>{b} : {c} ({d}%)"
        },
        legend: {
            orient: 'vertical',
            left: 'left',
            data: ["1 班", "2 班", "3 班", "4 班"]
        },
        series : [
            {
                name: '访问来源',
                type: 'pie',
                radius : '55%',
                center: ['50%', '60%'],
                data:[
                    {value:<?php echo ($average1); ?>, name:'1 班'},
                    {value:<?php echo ($average2); ?>, name:'2 班'},
                    {value:<?php echo ($average3); ?>, name:'3 班'},
                    {value:<?php echo ($average4); ?>, name:'4 班'},
                ],
                itemStyle: {
                    emphasis: {
                        shadowBlur: 10,
                        shadowOffsetX: 0,
                        shadowColor: 'rgba(0, 0, 0, 0.5)'
                    }
                }
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