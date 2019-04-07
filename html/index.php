<?php
	session_start();			//重启session
	$arr=$_SESSION["mycar"];//从session中拿出二维数组
	$count=count($arr);

	header("Content-Type:text/html;charset=utf-8");
	include "page.class.php";
	include "cookie.php";
	$mysqli=new mysqli("localhost", "root", "12345678", "shop");
	$result=$mysqli->query("select * from clothes");
	$page=new Page($result->num_rows,$num=8);
	//执行select语句，返回来的就是结果集（对象）
	$sql="select * from clothes limit 0,5";
	$sql2="select * from clothes limit 5,5";
	$sql3="select * from clothes limit 11,5";
	$sql4="select * from clothes limit 16,5";
	$sql5="select * from clothes limit 21,5";
	$sql6="select * from clothes limit 26,5";
	$sql7="select * from clothes limit 30,2";
	$sql8="select * from clothes limit 32,3";
	?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="../res/static/css/main.css">
  <link rel="stylesheet" type="text/css" href="../res/layui/css/layui.css">
  <script type="text/javascript" src="../res/layui/layui.js"></script>
  <script src="https://cdn.staticfile.org/jquery/1.10.2/jquery.min.js"></script>
  <script src="http://code.jquery.com/jquery-1.6.1.min.js" type="text/javascript"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <style type="text/css">
  .nav-item:hover{
  	background: orange;
  }
  .nav-item:hover .pop{
  	display: block;
  }
  .pop{
	width: 300px;
	height: 400px;
	font-size: 14px;
	color: black;
	background-color: white;
	position: absolute;
	left: 180px;
	top: 0;
	display: none;
}
.pop .left{
	width: 265px;
	height: 460px;
	float: left;
}
.pop .xuangou_left{
	width: 150px;
	height: 50px;
	margin-top: 20px;
	margin-left: 10px;
	float: left;
}
.pop .xuangou_left .fl{
	display:table-cell;
	vertical-align:middle;
	font-size: 14px;
	color: #000000;
	font-family: "微软雅黑";
	font-weight: bold;
}
.pop .xuangou_left .fl:hover{
	color: orange;	
}
.pop .xuangou_right{
	width: 60px;
	height: 25px;
	line-height: 26px;
	border: 1px solid orange;
	background: none;
	margin-top: 35px;
	float: right;
	text-align: center;
}
.pop .xuangou_right a{
	font-size: 14px;
	color: orange;
	display: block;
	height: 25px;
}
.pop .xuangou_right a:hover{
	display: block;
	background: orange;
	color: white;
	}
  </style>
</head>
<body id="list-cont">
  <div class="site-nav-bg">
    <div class="site-nav w1200">
      <p class="sn-back-home">
        <i class="layui-icon layui-icon-home"></i>
        <a href="index.php">首页</a>
      </p>
      <div class="sn-quick-menu">
        <div class="login"><a href="login.html" id="login">登录</a>&nbsp&nbsp<a href="login.html" id="login">注册</a><a href="" id="logined">欢迎您：<?php echo $_COOKIE["username"]; ?></a></div>
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


  <div class="content">
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
    <div class="category-con">
      <div class="category-inner-con w1200">
        <div class="category-type">
          <h3>全部分类</h3>
        </div>
        <div class="category-tab-content">
          <div class="nav-con">
            <ul class="normal-nav layui-clear">
              <li class="nav-item">
                <div class="title">奶粉辅食</div>
                <p><a href="#">奶粉</a><a href="#">捕食</a><a href="#">营养品</a></p>
                <i class="layui-icon layui-icon-right"></i>
                <div class="pop">
                    <div class="left">
                        <?php
					$result1=$mysqli->query($sql2);
                               while($row=mysqli_fetch_assoc($result1)){
                      echo  '<div>
                            <div class="xuangou_left">
                                <a href="">
                                    <div class="img_fl"><img src="./img/xm6_80.png" alt=""></div>'.
                                    '<span class="fl">'.$row["title"].'</span>'.
                                    
                                '</a>
                            </div>'.'
							<div class="xuangou_right">'."<a href='details.php?id=".$row["id"]."&pname=".$row["title"]."'>选购</a>".'</div>
                            <div class="clear"></div>
                        </div>';
                         }
                            ?>
                    </div>
            </div>
        </li>
        <li class="nav-item">
        <div class="title">纸尿裤</div>
        <p><a href="#">纸尿裤</a><a href="#">婴儿湿巾</a></p>
        <i class="layui-icon layui-icon-right"></i>
            <div class="pop">
                    <div class="left">
                <?php
					$result1=$mysqli->query($sql3);
                               while($row=mysqli_fetch_assoc($result1)){
                      echo  '<div>
                            <div class="xuangou_left">
                                <a href="">
                                    <div class="img_fl"><img src="./img/xm6_80.png" alt=""></div>'.
                                    '<span class="fl">'.$row["title"].'</span>'.
                                    
                                '</a>
                            </div>'.'
                           <div class="xuangou_right">'."<a href='details.php?id=".$row["id"]."&pname=".$row["title"]."'>选购</a>".'</div>
                            <div class="clear"></div>
                        </div>';
                         }
				?>
            </div>
    	</div>
              </li>
              <li class="nav-item">
                <div class="title">洗护用品</div>
                <p><a href="#">母婴洗护用品</a><a href="#">孕婴童用品</a></p>
                <i class="layui-icon layui-icon-right"></i>
                <div class="pop">
                    <div class="left">
                        <?php
					$result1=$mysqli->query($sql4);
                               while($row=mysqli_fetch_assoc($result1)){
                      echo  '<div>
                            <div class="xuangou_left">
                                <a href="">
                                    <div class="img_fl"><img src="./img/xm6_80.png" alt=""></div>'.
                                    '<span class="fl">'.$row["title"].'</span>'.
                                    
                                '</a>
                            </div>'.'
                            <div class="xuangou_right">'."<a href='details.php?id=".$row["id"]."&pname=".$row["title"]."'>选购</a>".'</div>
                            <div class="clear"></div>
                        </div>';
                         }
                            ?>
                    </div>
				</div>
              </li>
              <li class="nav-item">
                <div class="title">儿童玩具</div>
                <p><a href="#">婴幼玩具</a><a href="#">遥控玩具</a><a href="#">积木拼插</a></p>
                <i class="layui-icon layui-icon-right"></i>
                <div class="pop">
                    <div class="left">
                       <?php
					$result1=$mysqli->query($sql5);
                               while($row=mysqli_fetch_assoc($result1)){
                      echo  '<div>
                            <div class="xuangou_left">
                                <a href="">
                                    <div class="img_fl"><img src="./img/xm6_80.png" alt=""></div>'.
                                    '<span class="fl">'.$row["title"].'</span>'.
                                    
                                '</a>
                            </div>'.'
                            <div class="xuangou_right">'."<a href='details.php?id=".$row["id"]."&pname=".$row["title"]."'>选购</a>".'</div>
                            <div class="clear"></div>
                        </div>';
                         }
                            ?>
                    </div>
				</div>
              </li>
              <li class="nav-item">
                <div class="title">车窗座椅</div>
                <p><a href="#">婴儿推车</a><a href="#">儿童安全座骑</a></p>
                <i class="layui-icon layui-icon-right"></i>
                <div class="pop">
                    <div class="left">
                        <?php
					$result1=$mysqli->query($sql6);
                               while($row=mysqli_fetch_assoc($result1)){
                      echo  '<div>
                            <div class="xuangou_left">
                                <a href="">
                                    <div class="img_fl"><img src="./img/xm6_80.png" alt=""></div>'.
                                    '<span class="fl">'.$row["title"].'</span>'.
                                    
                                '</a>
                            </div>'.'
                            <div class="xuangou_right">'."<a href='details.php?id=".$row["id"]."&pname=".$row["title"]."'>选购</a>".'</div>
                            <div class="clear"></div>
                        </div>';
                         }
                            ?>
                    </div>
				</div>
              </li>
              <li class="nav-item">
                <div class="title">儿童童鞋</div>
                <p><a href="#">童装</a><a href="#">童鞋</a><a href="#">婴童内衣及配饰</a></p>
                <i class="layui-icon layui-icon-right"></i>
                <div class="pop">
                
                	<div class="left">
                    
                    <?php
								$result=$mysqli->query($sql);
                               while($row=mysqli_fetch_assoc($result)){
                      echo  '<div>
                            <div class="xuangou_left">
                                <a href="">
                                    <div class="img_fl"><img src="./img/xm6_80.png" alt=""></div>'.
                                    '<span class="fl">'.$row["title"].'</span>'.
                                    
                                '</a>
                            </div>'.'
                            <div class="xuangou_right">'."<a href='details.php?id=".$row["id"]."&pname=".$row["title"]."'>选购</a>".'</div>
                            <div class="clear"></div>
                        </div>';
                         }
                            ?>
                         
                    </div>
                </div>
              </li>
              <li class="nav-item">
                <div class="title">儿童图片</div>
                <p><a href="#">0-2岁</a><a href="#">早教启蒙</a><a href="#">孕产育儿</a></p>
                <i class="layui-icon layui-icon-right"></i>
                <div class="pop">
                    <div class="left">
                        <?php
					$result1=$mysqli->query($sql7);
                               while($row=mysqli_fetch_assoc($result1)){
                      echo  '<div>
                            <div class="xuangou_left">
                                <a href="">
                                    <div class="img_fl"><img src="./img/xm6_80.png" alt=""></div>'.
                                    '<span class="fl">'.$row["title"].'</span>'.
                                    
                                '</a>
                            </div>'.'
                            <div class="xuangou_right">'."<a href='details.php?id=".$row["id"]."&pname=".$row["title"]."'>选购</a>".'</div>
                            <div class="clear"></div>
                        </div>';
                         }
                            ?>
                    </div>
            </div>
              </li>
              <li class="nav-item nobor">
                <div class="title">孕妈专区</div>
                <p><a href="#">孕妇装</a><a href="#">背婴带</a><a href="#">母婴服务</a></p>
                <i class="layui-icon layui-icon-right"></i>
                <div class="pop">
                    <div class="left">
                        <?php
					$result1=$mysqli->query($sql8);
                               while($row=mysqli_fetch_assoc($result1)){
                      echo  '<div>
                            <div class="xuangou_left">
                                <a href="">
                                    <div class="img_fl"><img src="./img/xm6_80.png" alt=""></div>'.
                                    '<span class="fl">'.$row["title"].'</span>'.
                                    
                                '</a>
                            </div>'.'
                            <div class="xuangou_right">'."<a href='details.php?id=".$row["id"]."&pname=".$row["title"]."'>选购</a>".'</div>
                            <div class="clear"></div>
                        </div>';
                         }
                            ?>
                    </div>
            </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="category-banner">
        <div class="w1200">
          <img src="../res/static/img/banner1.jpg">
        </div>
      </div>
    </div>
    






    <div class="hot-recommend-con">
      <div class="tlinks">Collect from <a href="http://www.cssmoban.com/" >网页模板</a></div>
       <div class="hot-con1 w1200 layui-clear">
          <div class="item">
            <h4>热销推荐</h4>
            <div class="big-img">
              <a href="javascript:;"><img src="../res/static/img/hot1.png"></a>
            </div>
            <div class="small-img">
              <a href="javascript:;"><img src="../res/static/img/hot2.png" alt=""></a>
            </div>
          </div>
          <div class="item">
            <div class="top-img">
              <a href="javascript:;"><img src="../res/static/img/hot5.jpg"></a>
            </div>
            <div class="bottom-img">
              <a href="javascript:;"><img src="../res/static/img/hot6.jpg"></a>
              <a class="baby-cream" href="javascript:;"><img src="../res/static/img/hot7.jpg"></a>
            </div>
          </div>
          <div class="item item1 margin0 padding0">
            <a href="javascript:;"><img src="../res/static/img/hot8.jpg"></a>
            <a href="javascript:;"><img class="btm-img" src="../res/static/img/hot9.jpg"></a>
          </div>
      </div>
    </div>
    



    <div class="product-list-box" id="product-list-box">
      <div class="product-list-cont w1200">
        <h4>更多推荐</h4>
        <div class="product-item-box layui-clear">
        <?php
				$result=$mysqli->query($sql);
                   while($row=mysqli_fetch_assoc($result)){
					 echo '<div class="list-item">'.
						"<a href='details.php?id=".$row["id"]."&pname=".$row["title"]."'>.<img src=".$row["img_info"]."></a>".
						'<p>'.$row["title"].'</p>'.
						'<span>'.'￥'.$row["price"].'</span>'.
					  '</div>';
					  }
		  ?>
        </div>
      </div>
    </div>
  </div>

  <div class="footer">
    <div class="ng-promise-box">
      <div class="ng-promise w1200">
        <p class="text">
          <a class="icon1" href="javascript:;">7天无理由退换货</a>
          <a class="icon2" href="javascript:;">满99元全场免邮</a>
          <a class="icon3" style="margin-right: 0" href="javascript:;">100%品质保证</a>
        </p>
      </div>
    </div>
    <div class="mod_help w1200">                                     
      <p>
        <a href="javascript:;">关于我们</a>
        <span>|</span>
        <a href="javascript:;">帮助中心</a>
        <span>|</span>
        <a href="javascript:;">售后服务</a>
        <span>|</span>
        <a href="javascript:;">母婴资讯</a>
        <span>|</span>
        <a href="javascript:;">关于货源</a>
      </p>
      <p class="coty">母婴商城版权所有 &copy; 2012-2020 More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>
    </div>
  </div>
  <script type="text/javascript">
  $(document).ready(function(){
  		var aa='<?php echo $_COOKIE["username"]?>';
		
  		if(aa==""){
			
			document.getElementById("logined").style.display='none';
		}else{
			document.getElementById("login").style.display='none';
		}
  });

layui.config({
    base: '../res/static/js/util/' //你存放新模块的目录，注意，不是layui的模块目录
  }).use(['mm','carousel'],function(){
      var carousel = layui.carousel,
     mm = layui.mm;
     var option = {
        elem: '#test1'
        ,width: '100%' //设置容器宽度
        ,arrow: 'always'
        ,height:'298' 
        ,indicator:'none'
      }
      carousel.render(option);
});
  </script>
</body>
</html>