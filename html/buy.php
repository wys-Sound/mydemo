<?php
session_start();//使用session之前一定要将session开启
ob_start();//要清空缓存就必须ob_start()
$pid=$_GET["id"];//得到购买物品的id
$name=$_GET["pname"];//得到购买物品的名字
$num=$_GET["num"];
$arr=$_SESSION["mycar"];//将session中的变量取出来
//下面先判断这个变量是否是数组,可以得到以前是否买过东西
if(is_array($arr))
{
//如果是数组，说明以前买过东西
//如果买过东西又分两种情况：
     if(array_key_exists($pid,$arr))
     {
     //1、array_key_exists($pid,$arr)判断$arr中是否存在键值为$pid的一个一维数组，如果存在的话，就说明此商品以前购买过，只需要把数量加1
          $uu=$arr[$pid]; //从二维数组里拿出对应的一维数组，该一维数组包括id name num 三个值
          $uu["num"]=$uu["num"]+1;  //改变数量，将数量加1
          $arr[$pid]=$uu; //改完后再将此一维数组放回二维数组中
     }
     else
     {   //2.此商品第一次购买，就将得到的id和name值组成一个一维数组
          $arr[$pid]=array("pid"=>$pid,"name"=>$name,"num"=>$num);
     }
}
else
{
//还没有买过东西
$arr[$pid]=array("pid"=>$pid,"name"=>$name,"num"=>$num);
}
$_SESSION["mycar"]=$arr;//购买完后，将此数组重新放入session中，便可以在各个页面看到此session
$count=count($arr);
ob_clean();//清空缓存
header("location:shopcart.php");//跳转到购物车界面(car.php)
//var_dump($_SESSION);
?>