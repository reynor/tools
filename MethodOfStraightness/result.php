<?php
 echo '<html><head>
    <meta charset="utf-8">
    <meta name="author" content="123">
    <meta name="keywords" content="水平仪,计算">
    <meta name ="viewport" content ="width=device-width, initial-scale=1, maximum-scale=2, minimum-scale=1, user-scalable=no">
    <title>水平仪测量结果计算器</title>
    <link rel="stylesheet" href=".\addsty.css" />    
    <script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="./highcharts.js"></script>
</head>
<body class="uk-block-primary">
    <nav class="uk-navbar uk-navbar-attached">
        <div class="uk-text-center">
            <a class="uk-navbar-center uk-button-large sel-cofont" href=".\">返回</a>            
        </div>
    </nav>';
    session_start();
    //设定基础数据
    $n=$_SESSION['svaln'];//取点数量
    $sum=0;//a读数总值
    $l=200;//水平仪长度
    include_once(dirname( __FILE__ ) . '/calculate.php');
    echo file_get_contents('chart1.html');
    //echo json_encode($cx);
    //echo 'json.xAxis = {categories:'.json_encode($cx).'};';
    //echo "json.series ={[{name: '数据1',data:".json_encode($c)."}];";
    echo "json.series = [{name: '数据1',data: ".json_encode($c)."}];";
    echo "json.xAxis ={categories: ".json_encode($cx)."};";
   echo "$('#container').highcharts(json);});</script>";
   $resul=round(max($d)*100)/100;
   echo'<div class="divno uk-text-center"/><lable class="uk-text-sel">结果为：'.$resul.'</lable></div>
</body>
</html>';
?>