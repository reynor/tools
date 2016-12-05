<?php
    //echo $n."</br>";
    for($i=1;$i<=$n;$i++){
        $a[$i]=$_GET['vala'.$i];
        //echo "$a[$i]</br>";
    }
    //寻找a中值
    $mi1=floor($n/2);//总数的一半，中值位置
    foreach($a as $value1){        
        $mi2=0;//相同数值的数量
        $n1=0;//记录比此数值小的数值的数量
        foreach($a as $value2){
            if($value1>$value2){
                $n1++;
            }elseif($value1==$value2){
                $mi2++;
            }
        }
        //echo $n1.'  '.$mi2."</br>";
        if($n1==$mi1){
            $am=$value1;//中值数据
            //echo 'dif';
            break;
        }elseif(($n1<$mi1)&&(($n1+$mi2-1)>=$mi1)){
            $am=$value1;
            //echo 'sam';
            break;
        }
    }
    //echo"</br>$am</br>";
    $c[0]=0;
     //$a[0]=$sum/$n; //$a[0]存储均值
    //计算b、c值
    for($i=1;$i<=$n;$i++){
        $b[$i]=$a[$i]-$am;
        $c[$i]=$b[$i]+$c[$i-1];
        //if($b[$i]>0)echo'+';
        //elseif($b[$i]==0)echo'±';
        //echo "$b[$i]".'   ';
    }
    echo"</br>";
    foreach($c as $value){
        //if($value>0)echo'+';
        //elseif($value==0)echo'±';
        //echo "$value".'   ';
    }
    //计算直线方程
    $la=$c[$n];
    $lb=-$l*$n;
    $lc=0;
    //计算最大距离
    for($i=1;$i<=$n;$i++){
        $d[$i]=abs($la*$i*$l+$lb*$c[$i]+$lc)/sqrt($la*$la+$lb*$lb);
    }
    //echo"</br>".max($d);

    //计算X坐标轴
    for($i=0;$i<=$n;$i++){
        $cx[$i]=$i*$l;
    }
?>