<?php

    session_start();
    $valn=$_GET['valn'];
    if($valn<1){
        header ( "location:../MethodOfStraightness/index.php" );
    }
    $_SESSION['svaln']=$valn;
    echo '<head>
    <meta charset="utf-8">
    <meta name="author" content="123">
    <meta name="keywords" content="水平仪,计算">
    <meta name ="viewport" content ="width=device-width, initial-scale=1, maximum-scale=2, minimum-scale=1, user-scalable=no">
    <title>水平仪测量结果计算器</title>
    <link rel="stylesheet" href=".\addsty.css" />
</head>
<body class="uk-block-primary">
    <nav class="uk-navbar uk-navbar-attached">
        <div class="uk-text-center">
            <a class="uk-navbar-center uk-button-large sel-cofont" href=".\">返回</a>            
        </div>
    </nav>

        <div class="divno"/>
    <div class="uk-block-primary uk-text-center"> 
        <form name="form1"method="get" action=".\result.php">';
    for($i=1;$i<=$valn;$i++){
        echo '<lable class="uk-text-sel">读数'.$i."</lable>";
        echo '<div class="divno"><input type="number" step="0.01" name="vala'.$i.'" placeholder="" class="inputext0"></input></div>';
    }
    echo '<input type="submit" class="uk-button  uk-button-large uk-margin-top" value="计算"/>
        </form>
    </div>
</body>';
?>