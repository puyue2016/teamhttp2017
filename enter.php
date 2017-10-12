<!doctype html> 
<html> 
<head> 
  <meta charset="UTF-8"> 
  <title>登录系统的后台执行过程</title> 
</head> 
<body> 
  <?php 
    session_start();//登录系统开启一个session内容 
    $userna=$_REQUEST["username"];
    $pass=$_REQUEST["Password"]; 
  
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
    } 
    
    $sql="select * from user_register where user_name ='$userna'";
    $result=mysqli_query($db,$sql);
   
    while ($row=mysqli_fetch_array($result)) { 
      $dbusername=$row["user_name"]; 
      $dbpassword=$row["user_password"]; 
    } 
    if (is_null($dbusername)) {
  ?> 
  <script type="text/javascript"> 
    alert("用户名不存在"); 
   window.location.href="iroza1/index.html"; 
  </script> 
  <?php 
    } 
    else { 
      if ($dbpassword!=$pass){//当对应密码不对时跳回index.html界面 
  ?> 
  <script type="text/javascript"> 
    alert("密码错误"); 
    window.location.href="iroza1/index.html"; 
  </script> 
  <?php 
      } 
      else { 
        $_SESSION["user_name"]=$userna; 
        $_SESSION["code"]=mt_rand(0, 100000);//给session附一个随机值，防止用户直接通过调用界面访问welcome.php 
  ?> 
  <script type="text/javascript"> 
    window.location.href="iroza1/index.html"; 
  </script> 
  <?php 
      } 
    } 
  mysqli_close($db);
  ?> 
</body> 
</html> 