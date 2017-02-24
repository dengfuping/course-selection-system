<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="/db/Public/img/favicon.ico" />
    <link rel="bookmark" href="/db/Public/img/favicon.ico" />
    <title>课程平均成绩</title>
    <link rel="stylesheet" href="/db/Public/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/db/Public/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/db/Public/css/query.css" type="text/css">
    <script src="/db/Public/js/echarts.min.js"></script>
</head>
<body>

<div class="table-responsive container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <center><h3><span class="glyphicon glyphicon-user"></span> 课程平均成绩</h3></center>
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-striped">
                <tbody style="text-align: center">
                <tr class="info">
                    <td>课程编号</td>
                    <td>课程名称</td>
                    <td>教 师</td>
                    <td>学 分</td>
                    <td>选课人数</td>
                    <td>平均成绩</td>
                </tr>
                <?php if(is_array($coursesAverage)): $i = 0; $__LIST__ = $coursesAverage;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                        <td style="line-height: 35px"><?php echo ($vo["cid"]); ?></td>
                        <td style="line-height: 35px"><?php echo ($vo["cname"]); ?></td>
                        <td style="line-height: 35px"><?php echo ($vo["professor"]); ?></td>
                        <td style="line-height: 35px"><?php echo ($vo["credit"]); ?></td>
                        <td style="line-height: 35px"><?php echo ($vo["totalpersons"]); ?></td>
                        <td style="line-height: 35px"><?php echo ($vo["average"]); ?></td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
        </div>
    </div>
    <center><div id="main1" style="width: 1100px;height: 500px;"></div></center>
    <br/><br/>
    <center><div id="main2" style="width: 800px;height: 400px;"></div></center>
</div>

<script>
    // 基于准备好的dom，初始化echarts实例
    var myChart = echarts.init(document.getElementById('main1'));

    // 指定图表的配置项和数据
    var option = {
        title: {
            text: '课程平均成绩',
            subtext: '柱形图',
        },
        tooltip: {},
        legend: {
            data: ['平均成绩']
        },
        xAxis: {
            data: ["数据库原理", "概率论与数理统计", "计算机网络", "汇编语言", "算法分析", "C#程序设计","移动平台应用开发", "软件人员英语沟通方法", "英语读写译", "西方文化", "英语口语", "大学英语翻译","C++程序设计","操作系统"]
        },
        yAxis: {},
        series: [{
            name: '平均成绩',
            type: 'bar',
            data: [<?php echo ($average1); ?>, <?php echo ($average2); ?>, <?php echo ($average3); ?>, <?php echo ($average4); ?>, <?php echo ($average5); ?>, <?php echo ($average6); ?>,<?php echo ($average7); ?>,<?php echo ($average8); ?>,<?php echo ($average9); ?>,<?php echo ($average10); ?>,<?php echo ($average11); ?>,<?php echo ($average12); ?>,<?php echo ($average13); ?>,<?php echo ($average14); ?>]
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
            text: '课程平均成绩',
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
            data: ["数据库原理", "概率论与数理统计", "计算机网络", "汇编语言", "算法分析", "C#程序设计","移动平台应用开发", "软件人员英语沟通方法", "英语读写译", "西方文化", "英语口语", "大学英语翻译","C++程序设计","操作系统"]
        },
        series : [
            {
                name: '访问来源',
                type: 'pie',
                radius : '55%',
                center: ['50%', '60%'],
                data:[
                    {value:<?php echo ($average1); ?>, name:'数据库原理'},
                    {value:<?php echo ($average2); ?>, name:'概率论与数理统计'},
                    {value:<?php echo ($average3); ?>, name:'计算机网络'},
                    {value:<?php echo ($average4); ?>, name:'汇编语言'},
                    {value:<?php echo ($average5); ?>, name:'算法分析'},
                    {value:<?php echo ($average6); ?>, name:'C#程序设计'},
                    {value:<?php echo ($average7); ?>, name:'移动平台应用开发'},
                    {value:<?php echo ($average8); ?>, name:'软件人员英语沟通方法'},
                    {value:<?php echo ($average9); ?>, name:'英语读写译'},
                    {value:<?php echo ($average10); ?>, name:'西方文化'},
                    {value:<?php echo ($average11); ?>, name:'英语口语'},
                    {value:<?php echo ($average12); ?>, name:'大学英语翻译'},
                    {value:<?php echo ($average13); ?>, name:'C++程序设计'},
                    {value:<?php echo ($average14); ?>, name:'操作系统"'},
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