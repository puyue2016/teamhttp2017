<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IROZA</title>
<link type="text/css" rel="stylesheet" href="css/style.css" />
<script type="text/javascript" src="scripts/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="scripts/function.js"></script>
<script type="text/javascript" src="scripts/cookie.js"></script> 
</head>
<style type="text/css">
	*{margin: 0; padding: 0;}
	h2{float: left; margin-left: 350px; margin-bottom:50px;}
	#home{ display: none; }
	.top-nav{ float:right; margin-right:350px;}
</style>
<body>
<!--
<div id="welcomeImage">
    <img width="100%" height="150" src="images/banner.jpg" alt="welcome">

</div>
-->
<div id="header" class="wrap">
	<div id="logo"><img width="100%" height="100%" src="images/logo.png" /></div>
	<div class="help">
	  <a href="shopping.php" id="shoppingBag" class="shopping">Shopping Cart</a>
   	  	<div id="text-login">
   	  	<?php
	   	  	session_start();
	   	  	if(is_null($_SESSION["user_name"])){
   	  	?>
		   	  	<a href="login.html" id="login">Login</a><span id="username"></span>
		 	  	<a href="register.html">Register</a>
	 	<?php
	 	  	}else{
 	  	?>
	   	  		<a href="">welcome,<?php session_start();echo $_SESSION["user_name"];?></a>
   	  	<?php
   	  		}
   	  	?>
<!--   	  	<a href="login.html" id="login">登陆</a><span id="username"></span>
   	 	<a class="button" id="logout" href="javascript:void(0);">LogOut</a>
 	  	<a href="register.html">Register</a>
--> 	  	
 	  	
 	  	
 	  	
 	  	
<!-- 	  <a href="guestbook.html">Message</a><a href="manage/index.html">Management</a>-->
  	 	</div>
  	 	<!--       登陆后的显示内容-->
   		<div id="home"><a href="" id="login-name"></a>的个人主页  <a href="javascript:;" id="outlogin">退出登陆</a></div>
  	</div>

   	
  <div class="navbar">
		<ul class="clearfix">
			<li class="current"><a href="#">HOME</a></li>
			<li><a href="#">CATEGORY</a></li>
			<li><a href="#">BRAND</a></li>
			<li><a href="#">WOMEN</a></li>
			<li><a href="#">MEN</a></li>
		</ul>
	</div>
</div>
<div id="childNav">
	<div class="wrap">
		<ul class="clearfix">
			<li class="first"><a href="#">SPECIAL</a></li>
			<li><a href="#">MAGAZINE</a></li>
			<li><a href="#">SNAP</a></li>
			<li><a href="#">SHOP</a></li>
			<li><a href="#">HELP</a></li>

		</ul>
	</div>
</div>
<div id="main" class="wrap">
	<div class="lefter">
		<div class="box">
			<h2>色分類</h2>
			<dl>

				<dd><a href="product-list.html">RED</a></dd>
				<dd><a href="product-list.html">ORANGE</a></dd>
				<dd><a href="product-list.html">YELLOW</a></dd>
				<dd><a href="product-list.html">GREEN</a></dd>
				<dd><a href="product-list.html">BLUE</a></dd>
				<dd><a href="product-list.html">NAVY</a></dd>
				<dd><a href="product-list.html">PURPLE</a></dd>
				<dd><a href="product-list.html">PINK</a></dd>
				<dd><a href="product-list.html">BEIGE</a></dd>
				<dd><a href="product-list.html">BROWN</a></dd>
				<dd><a href="product-list.html">KHAKI</a></dd>
				<dd><a href="product-list.html">BLACK</a></dd>
				<dd><a href="product-list.html">GRAY</a></dd>
				<dd><a href="product-list.html">WHITE</a></dd>
                <dd><a href="product-list.html">GALA</a></dd>
                <dd><a href="product-list.html">KIRAKIRA</a></dd>
			</dl>
		</div>
		<div class="spacer"></div>
		<div class="last-view">
			<h2>Recently</h2>
			<dl class="clearfix">
				<dt><img src="images/product/9_small.jpeg" /></dt>
				<dd><a href="product-view.html"  target="_self">FORREST （フォレスト）Cream wood</a><a href="product-view.html"></a></dd>
				<dt>&nbsp;</dt>
				<dd>&nbsp;</dd>
		  </dl>
	  </div>
	</div>
	<div class="main">
		<div class="price-off">
            <div class="slideBox">
                <ul id="slideBox">
                    <li><img src="images/product/banner_1.jpeg"/></li>
                    <li><img src="images/product/banner_2.jpeg"/></li>
                    <li><img src="images/product/banner_3.jpeg"/></li>
                    <li><img src="images/product/banner_4.jpeg"/></li>
                </ul>
            </div>
			<h2>Recommend List</h2>
			<ul class="product clearfix">
				<li>
					<dl>
						<dt><a href="product-view.html"  target="_self"><img src="images/product/1.jpeg" /></a></dt>
						<dd class="title"><a href="product-view.html" target="_self">BURNNING GRAPHIC PRINT SWEAT SHIRT / RED / GV1733011</a></dd>
						<dd class="price">￥108.0</dd>
					</dl>
				</li>
				<li>
					<dl>
						<dt><a href="product-view.html"  target="_self"><img src="images/product/2.jpeg" /></a></dt>
						<dd class="title"><a href="product-view.html"  target="_self">MONK&ANNA （モンク＆アンナ）ANNA SHOPPER - MONO/LIGHT / </a></dd>
						<dd class="price">￥69.90</dd>
					</dl>
				</li>
				<li>
					<dl>
						<dt><a href="product-view.html"  target="_self"><img src="images/product/3.jpeg" /></a></dt>
						<dd class="title"><a href="product-view.html"  target="_self">BABY-G （ベイビージー）Clean Style / イエロー / BGD-</a></dd>
						<dd class="price">￥279.0</dd>
					</dl>
				</li>
				<li>
					<dl>
						<dt><a href="product-view.html"  target="_self"><img src="images/product/4.jpeg" /></a></dt>
						<dd class="title"><a href="product-view.html"  target="_self">Keecie CAT CHASE SMALL / Fresh Green / </a></dd>
						<dd class="price">￥4199</dd>
					</dl>
				</li>
				<li>
					<dl>
						<dt><a href="product-view.html"  target="_self"><img src="images/product/5.jpeg" /></a></dt>
						<dd class="title"><a href="product-view.html"  target="_self">Scolar （スカラー）襟ぐり・袖口プリントチュニック / </a></dd>
						<dd class="price">￥49.00</dd>
					</dl>
				</li>
				<li>
					<dl>
						<dt><a href="product-view.html"  target="_self"><img src="images/product/6.jpeg" /></a></dt>
						<dd class="title"><a href="product-view.html"  target="_self">Scolar （スカラー）チュニックCD / NAVY /</a></dd>
						<dd class="price">￥69.90</dd>
					</dl>
				</li>
				<li>
					<dl>
						<dt><a href="product-view.html"  target="_self"><img src="images/product/7.jpeg" /></a></dt>
						<dd class="title"><a href="product-view.html"  target="_self">FESSURA （フェスーラ）AIRSOCK COOLBAND WHITE / PU WHITE SOCK GRAY ELASTIC </a></dd>
						<dd class="price">￥268.0</dd>
					</dl>
				</li>
				<li>
					<dl>
						<dt><a href="product-view.html"  target="_self"><img src="images/product/8.jpeg" /></a></dt>
						<dd class="title"><a href="product-view.html"  target="_self">FJALLRAVEN （フェールラーベン）KANKEN MINI / 312 PINK /</a></dd>
						<dd class="price">￥198.0</dd>
					</dl>
				</li>
			</ul>
		</div>
		<div class="side">			
			<div class="spacer"></div>
<!--
			<div class="news-list">
				<h4>NEWS</h4>
				<ul>
					<li><a href="news-view.html"  target="_self">111111111111</a></li>

				</ul>
			</div>
-->
		</div>
		<div class="spacer clear"></div>
    </div>
</div>
<div id="footer">
	Copyright &copy; 2017 筑波大学　Team HTTP All Rights Reserved. 
</div>
</body>
</html>
<script type="text/javascript">
var oTL = document.getElementById("text-login");
var oHome = document.getElementById("home");
var oOut = document.getElementById("outlogin");
var oLoginName = document.getElementById("login-name");
	if(getCookie("user_name")){  
 	   oTL.style.display = "none";
 	   oHome.style.display = "block";
      var obj = convertCartStrToObj(getCookie("user_name")); //*重点：将字符串转化成对象的形式（2）
       oLoginName.innerHTML = obj.name; //通过对象.属性的方式去获取用户名（3）
 }
 oOut.onclick = function() {
 	  removeCookie("user_name");
 	  window.location.href = "index.html";
 }
//*******重点：封装一个将字符串转化成对象的函数（1）
function convertCartStrToObj(cartStr){        
         var obj ={};
        //将字符串name:17dian,key:123456,tel:18810701077 按“,”拆分成数组["name:17dian", "key:123456", "tel:18810701077"]
         var arrVal = cartStr.split(",");  
         for ( var i = 0; i < arrVal.length ;i++){
                  data = arrVal[i].split(":"); // 在将每一项拆分 例如arrVal[0]时 data =["name", "17dian"]
                  console.log(data)
                  obj[data[0]] = data[1]; //给对象添加属性
         }
        return obj;
}
</script>