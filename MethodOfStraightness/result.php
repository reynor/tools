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
<body class="uk-block-primary">';
    include(dirname( __FILE__ ) . '/config.php');
    session_start();
    //设定基础数据
    $n=$_SESSION['svaln'];//取点数量
    $sum=0;//a读数总值
    $l=200;//水平仪长度
    include_once(dirname( __FILE__ ) . '/calculate.php');
    echo file_get_contents('chart1.html');
    $resul=round(max($d)*100)/100;
    
    //echo json_encode($cx);
    //echo 'json.xAxis = {categories:'.json_encode($cx).'};';
    //echo "json.series ={[{name: '数据1',data:".json_encode($c)."}];";
    echo "json.series = [{name: '数据1',data: ".json_encode($c)."}];";
    echo "json.xAxis ={categories: ".json_encode($cx)."};";
   echo "$('#container').highcharts(json);});</script>";
   echo'<div class="divno uk-text-center"/><lable class="uk-text-sel">结果为：'.$resul.'</lable></div>
   <form name="form1"method="get" action=".\record.php">      
    <nav class="sel-nav-bottom uk-navbar uk-navbar-attached">
        <div class="uk-text-center">
            <div class="divno">
                <textarea name="note" min="1" placeholder="请在此处输入备注信息" class="sel-note"></textarea>
            </div>
            <input type="submit" class="uk-button-large sel-cofont" value="提交备注"/>            
        </div>
    </nav>
    </form>
</body>
</html>';

//数据库操作
    //$conn = new mysqli($servername,$username,$password,$dbname);
    /*foreach($a as $value){
        $an=$an.$value.'t';
        echo $an.'</br>';
    }*/
    /*function getIP() { 
if (getenv('HTTP_CLIENT_IP')) { 
$ip = getenv('HTTP_CLIENT_IP'); 
} 
elseif (getenv('HTTP_X_FORWARDED_FOR')) { 
$ip = getenv('HTTP_X_FORWARDED_FOR'); 
} 
elseif (getenv('HTTP_X_FORWARDED')) { 
$ip = getenv('HTTP_X_FORWARDED'); 
} 
elseif (getenv('HTTP_FORWARDED_FOR')) { 
$ip = getenv('HTTP_FORWARDED_FOR'); 

} 
elseif (getenv('HTTP_FORWARDED')) { 
$ip = getenv('HTTP_FORWARDED'); 
} 
else { 
$ip = $_SERVER['REMOTE_ADDR']; 
} 
return $ip; 
} 
    $an=json_encode($a);
    $time = date('Y-m-d H:i:s');
    echo $time;
    $ip = getIP();
    //$sql = "INSERT INTO MethodOfStraightness (ip, time, quantity, data, result)VALUES ('$ip', '$time', $n, '$an', $resul)";

if ($conn->query($sql) === TRUE) {
    echo "新记录插入成功";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}*/
?>