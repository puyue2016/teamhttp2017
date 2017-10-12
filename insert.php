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
<div id="register" class="wrap">
	<div class="shadow">
		<em class="corner lb"></em>
		<em class="corner rt"></em>
		<div class="box">
			<h1>WELCOME TO IROZA</h1>
			<ul class="steps clearfix">
				<li class="finished"><em></em>Fill In The Information</li>
				<li class="last-current"><em></em>Registration Success</li>
			</ul>
			<div class="msg">
				<p>Congratulations: successful registration！</p>
				<p>Loding...</p>
				<script type="text/javascript">
					setTimeout("location.href='index.html'", 3000);
				</script>
			</div>
		</div>
	</div>
</div>
        <?php
        $servername = getenv('IP');
            $username = getenv('C9_USER');
            $password = "";
            $database = "c9";
            $dbport = 3306;
        
            // Create connection
            $db = new mysqli($servername, $username, $password, $database, $dbport);
        
            // Check connection
            if ($db->connect_error) {
                die("Connection failed: " . $db->connect_error);
            }else{ 
                	$userna=$_POST['username'];
        			$userpw=$_POST['confirmPassword'];
        			$mail=$_POST['email'];
        			$sex=$_POST['sex'];
        			if($userna==""||$userpw=="")//Not empty
                        {
                          echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."Please fill in the completed！"."\"".")".";"."</script>";
                          echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."iroza1/register.html"."\""."</script>";    
                          exit;
                        }

        			$sql="insert into user_register(user_name,user_password,user_mail,user_sex) values('$userna','$userpw','$mail','$sex')";
        		
        		$res=mysqli_query($db,$sql);
        		if($res==true){
        			echo "<<script type='text/javascript'>alert('success');</script>>";
        		}else{
        			echo "<script type='text/javascript'>alert('failed');</script>".$sql;
        		}
        		
        	}
            mysqli_close($db);
        ?>

<div id="footer">
    Copyright &copy; 2017 筑波大学　Team HTTP All Rights Reserved. 
</div>
</body>
</html>




