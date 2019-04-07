<?php
	session_start();			//重启session
	$arr=$_SESSION["mycar"];//从session中拿出二维数组
	$count=count($arr);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="../res/static/css/main.css">
  <link rel="stylesheet" type="text/css" href="../res/layui/css/layui.css">
   <link rel="stylesheet" type="text/css" href="../res/static/css/style.css">
  <script src="https://cdn.staticfile.org/jquery/1.10.2/jquery.min.js"></script>
  <script src="http://code.jquery.com/jquery-1.6.1.min.js" type="text/javascript"></script>
  <script type="text/javascript" src="../res/layui/layui.js"></script>
  <script type="text/javascript" src="../res/layui/ui.js"></script>
  
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
        <div class="sp-cart"><a href="shopcart.php">购物车</a><span><?php echo $count;?></span></div>
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
          <form action="commodity.php" method="post" class="layui-form" novalidate>
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


  <div class="content content-nav-base shopcart-content">
    <div class="main-nav">
      <div class="inner-cont0">
        <div class="inner-cont1 w1200">
          <div class="inner-cont2">
            <a href="commodity.html" class="active">所有商品</a>
            <a href="information.html">母婴资讯</a>
            <a href="about.html">关于我们</a>
          </div>
        </div>
      </div>
    </div>
    <div class="banner-bg w1200">
      <h3>夏季清仓</h3>
      <p>宝宝被子、宝宝衣服3折起</p>
    </div>
    <form action="order.php" method="post">
    <div class="cart w1200">
      <div class="cart-table-th">
        <div class="th th-chk">
          <div class="select-all">
            <div class="cart-checkbox">
              <input class="check-all check" id="allCheckked" type="checkbox" value="true">
            </div>
          <label>&nbsp;&nbsp;全选</label>
          </div>
        </div>
        <div class="th th-item">
          <div class="th-inner">
            商品
          </div>
        </div>
        <div class="th th-price">
          <div class="th-inner">
            单价
          </div>
        </div>
        <div class="th th-amount">
          <div class="th-inner">
            数量
          </div>
        </div>
        <div class="th th-sum">
          <div class="th-inner">
            小计
          </div>
        </div>
        <div class="th th-op">
          <div class="th-inner">
            操作
          </div>
        </div>  
      </div>
      <div class="OrderList">
        <div class="order-content" id="list-cont">
        <?php
			foreach($arr as $i=>$c){	//对购物车里的商品进行遍历
			//将商品的名字输出到页面上，每个商品前面对应一个多选框，其值是商品在购物车中的编号。
			//用d作为购物车管理界面中  购物车所有的商品，用于index.php页面撤销/删除某些商品的业务处理。
			$mysqli=new mysqli("localhost", "root", "12345678", "shop");
			$sql="select * from clothes where id=$i";
			$result = $mysqli->query($sql);
            $row=mysqli_fetch_assoc($result);
         echo '<ul class="item-content layui-clear" id="item">
		 <table id="gwc_tb2">'.'<tr>'.'<td>
            <li class="th th-chk">
              <div class="select-all">
                <div class="cart-check" id="cart-checkbox">'.
                  "<input class='CheckBoxShop check' type='checkbox' num='all' name='newslist' value='true'>".
                '</div>
              </div>
            </li>
            <li class="th th-item">
              <div class="item-cont">'.
                "<a href='details.php?id=".$row["id"]."&pname=".$row["title"]."'><img src=".$row["img"]."></a>".
                '<div class="text">
                  <div class="title">'."<a href='details.php?id=".$row["id"]."&pname=".$row["title"]."'><span>{$row["title"]}</span></a>".'</div>
                  <p><span>粉色</span>  <span>130</span>cm</p>
                </div>
              </div>
            </li>
			
            <li class="th th-price">
              <span class="th-su">'.$row["price"].'</span>
            </li>'
			.'<table id="tab">'.'<tr>'.'<td>'.'
            <li class="th th-amount">
              <div class="box-btn layui-clear">'.
			  '<span class="price" style="display:none;">'.$row["price"].'</span>'.
			  	"<input type='button' class='min' value='-'/>".
				"<input class='text_box' type='text' name='nu' id='num' value='$c[num]' disabled='disabled'>".
			  	"<input type='button' class='add' value='+'/>".
              '</div>
            </li>
            <li class="th th-sum">
              <span class="sum" id="sum"><em>0</em></span>
			  <span class="q" id="q"></span>
            <li class="th th-op">
              <span class="dele-btn"><div class="alert confirm" onclick="_confirm1()">删除</div></span>
            </li>
			</li>'.'</td>'.'</tr>'.'</table>'.'
			</td>'.'</tr>'.'</table>
          </ul>';}?>
        </div>
      </div>


      <div class="FloatBarHolder layui-clear">
        <div class="th th-chk">
          <div class="select-all">
            <div class="cart-checkbox">
            <input type="hidden" name="goods_name" value="<?php echo $row["title"];?>">
              <input class="check-all check" id="" name="select-all" type="checkbox"  value="true">
            </div>
            <label>&nbsp;&nbsp;已选<span class="Selected-pieces" id="shuliang">0</span>件</label>
          </div>
        </div>
        <div class="th batch-deletion">
          <span class="batch-dele-btn"></span>
        </div>
        <div class="th Settlement">
          <button class="layui-btn" type="submit">结算</button>
        </div>
        <div class="th total">
          <p>应付：<span class="pieces-total" id="total">0</span></p>
        </div>
      </div>
    </div>
    </form>
  </div>

<script type="text/javascript">
	function _confirm1() {
			mizhu.confirm('', '你确定要删除吗？', function(flag) {
				if(flag) {
					location.href='delete.php?id=<?php echo $row["id"];?>';
				}
				return false;
			});
		}

	$(function(){
		$(".add").click(function(){
		var t=$(this).parent().find('input[class*=text_box]'); 
		t.val(parseInt(t.val())+1)
		setTotal();
		getTotal();
	})
	 
	$(".min").click(function(){
		var t=$(this).parent().find('input[class*=text_box]');
		t.val(parseInt(t.val())-1) 
		if(parseInt(t.val())<0){ 
		t.val(0); 
	} 
	
		setTotal();
		getTotal();
	}) 

	function setTotal(){
		var s=0;
		var total = 0;
		$("#tab td").each(function(){
			s=parseInt($(this).find('input[class*=text_box]').val())*parseFloat($(this).find('span[class*=price]').text());
			$(".sum", this).html(s.toFixed(2));
		}); 
	
	}

	function getTotal(){
          var seleted = 0,price = 0;
		  var nums=[];
          for(var i = 0; i < uls.length;i++){
        		if(uls[i].getElementsByTagName('input')[0].checked){
                seleted += parseInt(uls[i].getElementsByClassName('text_box')[0].value);
                price += parseFloat(uls[i].getElementsByClassName('sum')[0].innerHTML);
              }
			  nums.push(uls[i].getElementsByClassName('text_box')[0].value);
      		}
          SelectedPieces.innerHTML = seleted;
          piecesTotal.innerHTML = '￥' + price.toFixed(2);
		  var sum=price.toFixed(2);
		  var num=seleted;
		  document.cookie="sum="+sum;
		  document.cookie="num="+num;
		  document.cookie="nums="+nums;
		  
      }
		var checkInputs = document.getElementsByClassName('check'); // 所有勾选框
		var checkAll = document.getElementsByClassName('check-all'); //全选框
		var SelectedPieces = document.getElementsByClassName('Selected-pieces')[0];//总件数
		var piecesTotal = document.getElementsByClassName('pieces-total')[0];//总价
		var uls = document.getElementById('list-cont').getElementsByTagName('ul');//每一行
		for(var i = 0;i < checkInputs.length;i++){
			checkInputs[i].onclick = function(){
			  if(this.className === 'check-all check'){
				for(var j = 0;j < checkInputs.length; j++){
				  checkInputs[j].checked = this.checked;
				}
			  }
			  if(this.checked == false){
				for(var k = 0;k < checkAll.length;k++){
				  checkAll[k].checked = false;
				}
			  }
			  getTotal();
			}
     }

setTotal(); 
})</script>
</body>
</html>