<?php
	session_start();			//重启session
	$arr=$_SESSION["mycar"];//从session中拿出二维数组
	$count=count($arr);

	header("Content-Type:text/html;charset=utf-8");
	include "page.class.php";
	$mysqli=new mysqli("localhost", "root", "12345678", "shop");
	
	
	//执行select语句，返回来的就是结果集（对象）title like '%{$_POST['title']}%'
	switch($_GET["type"]){
	case 0:
	$sql1="select * from clothes limit 5,5";
	$result=$mysqli->query($sql1);
	$page=new Page($result->num_rows,$num=6);
	break;
	case 1:
	$sql2="select * from clothes limit 10,20";
	$result=$mysqli->query($sql2);
	$page=new Page($result->num_rows,$num=6);
	break;
	case 2:
	$sql3="select * from clothes limit 0,5";
	$result=$mysqli->query($sql3);
	$page=new Page($result->num_rows,$num=6);
	break;
	case 3:
	$sql4="select * from clothes limit 30,2";
	$result=$mysqli->query($sql4);
	$page=new Page($result->num_rows,$num=6);
	break;
	case 4:
	$sql5="select * from clothes limit 32,3";
	$result=$mysqli->query($sql5);
	$page=new Page($result->num_rows,$num=6);
	break;
	case 5:
	$sql="select * from clothes where title like '%{$_POST["title"]}%' {$page->limit}";
	$result=$mysqli->query($sql);
	$page=new Page($result->num_rows,$num=6);
	break;
	case 6:
	$result=$mysqli->query("select * from clothes");
	$page=new Page($result->num_rows,$num=6);
	break;
	}
	?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="../res/static/css/main.css">
  <link rel="stylesheet" type="text/css" href="../res/layui/css/layui.css">
  <script type="text/javascript" src="../res/layui/layui.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
</head>
<body>

  <div class="site-nav-bg">
    <div class="site-nav w1200">
      <p class="sn-back-home">
        <i class="layui-icon layui-icon-home"></i>
        <a href="index.php">首页</a>
      </p>
      <div class="sn-quick-menu">
        <div class="login"><a href="login.php">登录</a></div>
        <div class="sp-cart"><a href="shopcart.php">购物车</a><span><?=$count;?></span></div>
      </div>
    </div>
  </div>



  <div class="header">
    <div class="headerLayout w1200">
      <div class="headerCon">
        <h1 class="mallLogo">
          <a href="index.php" title="母婴商城">
            <img src="../res/static/img/logo.png">
          </a>
        </h1>
        <div class="mallSearch">
          <form action="commodity.php?type=5" method="post" class="layui-form" novalidate>
            <input type="text" name="title" required  lay-verify="required" autocomplete="off" class="layui-input" placeholder="请输入需要的商品">
            <button class="layui-btn" lay-submit lay-filter="formDemo">
                <i class="layui-icon layui-icon-search"></i>
            </button>
            <input type="hidden" name="" value="">
          </form>
        </div>
      </div>
    </div>
  </div>


  <div class="content content-nav-base commodity-content">
    <div class="main-nav">
      <div class="inner-cont0">
        <div class="inner-cont1 w1200">
          <div class="inner-cont2">
            <a href="commodity.php?type=6" class="active">所有商品</a>
            <a href="information.html">母婴资讯</a>
            <a href="about.html">关于我们</a>
          </div>
        </div>
      </div>
    </div>
    <div class="commod-cont-wrap">
      <div class="commod-cont w1200 layui-clear">
        <div class="left-nav">
          <div class="title">所有分类</div>
          <div class="list-box">
            <dl>
             <dt>奶粉辅食</dt>
             <dd><a href="commodity.php?type=0">进口奶粉</a></dd>
             <dd><a href="commodity.php?type=0">宝宝辅食</a></dd>
             <dd><a href="commodity.php?type=0">营养品</a></dd>
            </dl>
            <dl>
             <dt>儿童用品</dt>
             <dd><a href="commodity.php?type=1">纸尿裤</a></dd>
             <dd><a href="commodity.php?type=1">婴儿沐浴</a></dd>
             <dd><a href="commodity.php?type=1">儿童玩具</a></dd>
             <dd><a href="commodity.php?type=1;">婴儿车</a></dd>
             <dd><a href="commodity.php?type=1">儿童安全座椅</a></dd>
            </dl>
            <dl>
             <dt>儿童服饰</dt>
             <dd><a href="commodity.php?type=2">童装</a></dd>
             <dd><a href="commodity.php?type=2">童鞋</a></dd>
             <dd><a href="commodity.php?type=2">宝宝配饰</a></dd>
            </dl>
            <dl>
             <dt>儿童早教</dt>
             <dd><a href="commodity.php?type=3">儿童书籍</a></dd>
             <dd><a href="commodity.php?type=3">早教书籍</a></dd>
             <dd><a href="commodity.php?type=3">孕产育儿书</a></dd>
            </dl>
            <dl>
             <dt>孕妈专区</dt>
             <dd><a href="commodity.php?type=4">孕妇装</a></dd>
             <dd><a href="commodity.php?type=4">孕妇护肤</a></dd>
             <dd><a href="commodity.php?type=4">孕妇用品</a></dd>
            </dl>
          </div>
        </div>
        <div class="right-cont-wrap">
          <div class="right-cont">
            <div class="sort layui-clear">
              <a class="active" href="javascript:;" event = 'volume'>销量</a>
              <a href="javascript:;" event = 'price'>价格</a>
              <a href="javascript:;" event = 'newprod'>新品</a>
            </div>
            <div class="prod-number">
            </div>
            <div class="cont-list layui-clear" id="list-cont">
            <?php
                   while($row=mysqli_fetch_assoc($result)){
             echo '<div class="item">
                <div class="img">'.
                  "<a href='javascript:;'><img src=".$row["img"]."></a>".
                '</div>'.
                '<div class="text">'.
                  '<p class="title">'.$row["title"].'</p>'.
                  '<p class="price">'.
                    '<span class="pri">'.'￥'.$row["price"].'</span>'.
                  '</p>'.
                '</div>'.
             '</div>';
            }
            ?>
            </div>
            <?php echo $page->fpage();?>
          </div>
        </div>
      </div>
    </div>
  </div>
<script>

  layui.config({
    base: '../res/static/js/util/' 
  }).use(['mm','laypage','jquery'],function(){
      var laypage = layui.laypage,$ = layui.$,
     mm = layui.mm;
       laypage.render({
        elem: 'demo0'
        ,count: 100 //数据总数
      });



    $('.sort a').on('click',function(){
      $(this).addClass('active').siblings().removeClass('active');
    })
    $('.list-box dt').on('click',function(){
      if($(this).attr('off')){
        $(this).removeClass('active').siblings('dd').show()
        $(this).attr('off','')
      }else{
        $(this).addClass('active').siblings('dd').hide()
        $(this).attr('off',true)
      }
    })

});
</script>

</body>
</html>