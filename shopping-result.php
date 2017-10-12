<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IROZA</title>
<link type="text/css" rel="stylesheet" href="css/style.css" />
<script type="text/javascript" src="scripts/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="scripts/function.js"></script>
</head>
<body>
<div id="header" class="wrap">
    <div id="logo"><img width="100%" height="100%" src="images/logo.png" /></div>
    <div class="help"><a href="shopping.html" id="shoppingBag" class="shopping">Shopping Cart</a><a href="login.html">LogIn</a><a class="button" id="logout" href="javascript:void(0);">LogOut</a><a href="register.html">Register</a><a href="guestbook.html">Message</a><a href="manage/index.html">Management</a></div>
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
<div id="position" class="wrap">
    Now Position：<a href="index.html">IROZA</a> &gt; Shopping Cart   
</div>

<div class="wrap">
	<div id="shopping">
		<div class="shadow">
			<em class="corner lb"></em>
			<em class="corner rt"></em>
			<div class="box">
				<div class="msg">
					<p>Congratulations:purchase success！</p>
					<p>Loading...</p>
					<script type="text/javascript">
						setTimeout("location.href='index.html'", 3000);
					</script>
				</div>
			</div>
		</div>
	</div>
</div>


<?php
    require(mysqlconnect.php);
    session_start();
    $name = $_GET['name'];
    $price = $_GET['price'];




?>
<div id="footer">
    Copyright &copy; 2017 筑波大学　Team HTTP All Rights Reserved. 
</div>
</body>
</html>
