<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="/db/Public/img/favicon.ico"/>
    <link rel="bookmark" href="/db/Public/img/favicon.ico"/>
    <title>课程信息查询结果</title>
    <link rel="stylesheet" href="/db/Public/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/db/Public/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/db/Public/css/query.css" type="text/css">
    <script src="/db/Public/js/echarts.min.js"></script>
</head>
<body>
<div class="table-responsive container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <center><h3><span class="glyphicon glyphicon-book"><a href="#">《<?php echo ($cname); ?>》</a></h3></center>
            <h4><span class="glyphicon glyphicon-list"> 课程信息</h4>
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-striped">
                <tbody style="text-align: center">
                <tr class="info">
                    <td>课程编号</td>
                    <td>课程名称</td>
                    <td>教 师</td>
                    <td>学 分</td>
                    <td>面向年级</td>
                    <td>取消年份</td>
                    <td>操 作</td>
                </tr>
                <tr>
                    <?php if(is_array($courseInfo)): $i = 0; $__LIST__ = $courseInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><td style="line-height: 35px"><?php echo ($vo["cid"]); ?></td>
                        <td style="line-height: 35px"><?php echo ($vo["cname"]); ?></td>
                        <td style="line-height: 35px"><?php echo ($vo["professor"]); ?></td>
                        <td style="line-height: 35px"><?php echo ($vo["credit"]); ?></td>
                        <td style="line-height: 35px"><?php echo ($vo["tgrade"]); ?></td>
                        <td style="line-height: 35px"><?php echo ($vo["canceledyear"]); ?></td>
                        <td style="line-height: 35px">
                            <a href="http://localhost/db/index.php/Home/Edit/deleteCourse?cid=<?php echo ($vo["cid"]); ?>">
                                <button class="btn btn-danger ">删 除</button>
                            </a>
                            &nbsp;&nbsp;<a
                                href="http://localhost/db/index.php/Home/Edit/editCourseInfo?cid=<?php echo ($vo["cid"]); ?>&&cname=<?php echo ($vo["cname"]); ?>&&professor=<?php echo ($vo["professor"]); ?>&&credit=<?php echo ($vo["credit"]); ?>&&tgrade=<?php echo ($vo["tgrade"]); ?>&&canceledYear=<?php echo ($vo["canceledyear"]); ?>">
                            <button class="btn btn-info">编 辑</button>
                        </a></td><?php endforeach; endif; else: echo "" ;endif; ?>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <br/><br/>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4><span class="glyphicon glyphicon-fire"> 选课情况</h4>
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-striped">
                <tbody style="text-align: center">
                <tr class="info">
                    <td>学 号</td>
                    <td>姓 名</td>
                    <td>性 别</td>
                    <td>班 级</td>
                    <!--<td>操作</td>-->
                </tr>
                <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?><tr>
                        <td style="line-height: 35px"><?php echo ($vo2["sid"]); ?></td>
                        <td style="line-height: 35px"><?php echo ($vo2["sname"]); ?></td>
                        <td style="line-height: 35px"><?php echo ($vo2["sex"]); ?></td>
                        <td style="line-height: 35px"><?php echo ($vo2["class"]); ?></td>
                        <!--<td><a href="#">删除</a> <a href="#">编辑</a></td>-->
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>

        </div>
    </div>

    <br/><br/>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4><span class="glyphicon glyphicon-leaf"> 成绩分布</h4>
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-striped">
                <tbody style="text-align: center">
                <tr class="info">
                    <td>分数区间</td>
                    <td>人 数</td>
                </tr>
                <tr>
                    <td style="line-height: 35px">不及格</td>
                    <td style="line-height: 35px"><?php echo ($count1); ?></td>
                </tr>
                <tr>
                    <td style="line-height: 35px">60~69</td>
                    <td style="line-height: 35px"><?php echo ($count2); ?></td>
                </tr>
                <tr>
                    <td style="line-height: 35px">70~79</td>
                    <td style="line-height: 35px"><?php echo ($count3); ?></td>
                </tr>
                <tr>
                    <td style="line-height: 35px">80~89</td>
                    <td style="line-height: 35px"><?php echo ($count4); ?></td>
                </tr>
                <tr>
                    <td style="line-height: 35px">90~99</td>
                    <td style="line-height: 35px"><?php echo ($count5); ?></td>
                </tr>
                <tr>
                    <td style="line-height: 35px">满 分(100)</td>
                    <td style="line-height: 35px"><?php echo ($count6); ?></td>
                </tr>
                </tbody>
            </table>

        </div>
    </div>
    <br/><br/>
    <div id="main1" style="width: 550px;height: 400px;float: left"></div>
    <div id="main2" style="width: 550px;height: 400px;float: right"></div>
</div>

<script>
    // 基于准备好的dom，初始化echarts实例
    var myChart = echarts.init(document.getElementById('main1'));

    // 指定图表的配置项和数据
    var option = {
        title: {
            text: '成绩分布人数图',
            subtext: '柱形图',
        },
        tooltip: {},
        legend: {
            data: ['人数']
        },
        xAxis: {
            data: ["不及格", "60~69", "70~79", "80~89", "90~99", "满分(100)"]
        },
        yAxis: {},
        series: [{
            name: '人数',
            type: 'bar',
            data: [<?php echo ($count1); ?>, <?php echo ($count2); ?>, <?php echo ($count3); ?>, <?php echo ($count4); ?>, <?php echo ($count5); ?>, <?php echo ($count6); ?>]
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
            text: '成绩分布占比图',
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
            data: ["不及格", "60~69", "70~79", "80~89", "90~99", "满分(100)"]
        },
        series : [
            {
                name: '访问来源',
                type: 'pie',
                radius : '55%',
                center: ['50%', '60%'],
                data:[
                    {value:<?php echo ($count1); ?>, name:'不及格'},
                    {value:<?php echo ($count2); ?>, name:'60~69'},
                    {value:<?php echo ($count3); ?>, name:'70~79'},
                    {value:<?php echo ($count4); ?>, name:'80~89'},
                    {value:<?php echo ($count5); ?>, name:'90~99'},
                    {value:<?php echo ($count6); ?>, name:'满分(100)'}
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